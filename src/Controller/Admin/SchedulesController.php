<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;

class SchedulesController extends AppController{
    public function initialize(){
		parent::initialize();
		$this->loadComponent('Paginator');
	}

    public function index(){
        $this->viewBuilder()->layout('admin');
        $limit=5;$getString="";$searchby="";$search="";$cond=array();
		$action=array();
        if($this->request->is('post')){
            if(isset($this->request->data['limit']) && $this->request->data['limit']){
				$limit=$this->request->data['limit'];
			}
            if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="event_name" && isset($this->request->data['search']) && $this->request->data['search'] ){
				$search=trim($this->request->data['search']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Events.event_name LIKE'=>"%$search%"));
				$action[0]='searchby='.$searchby;
				$action[1]='search='.$search;
			}
            if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="sch_name" && isset($this->request->data['search']) && $this->request->data['search'] ){
				$search=trim($this->request->data['search']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Schedules.sch_name LIKE'=>"%$search%"));
				$action[0]='searchby='.$searchby;
				$action[1]='search='.$search;
			}
        }
            $getString=$_GET;
           
            if(isset($getString['limit'])){
                $limit=$getString['limit'];
            }
            if($limit){
            	$getString['limit']=$limit;
            	$action[1]='search='.$search;
            }
            if(isset($getString['searchby'])){
    			$searchby=$getString['searchby'];
            }
            if(isset($getString['search'])){
                $search=$getString['search'];
            }
            if($searchby){
                $getString['searchby']=$searchby;
                $action[0]='searchby='.$searchby;
            }
            if($search){
                $getString['search']=$search;
                $action[1]='search='.$search;
               // $cond=array_merge($cond,array('Schedules.sch_name LIKE'=>"%$search%"));
            }
        if(!empty($cond)){
			$this->paginate=array('conditions'=>$cond,'contain'=>'Events','limit'=>$limit,'order'=>array('Schedules.id desc'));
        }else{
			$this->paginate=array('limit'=>$limit,'contain'=>'Events','order'=>array('Schedules.id desc'));
		}
        $this->set(compact('action','limit','search','searchby','getString'));
        $this->set('schedules',$this->paginate('Schedules')->toArray());
    }
    
    public function addschedule(){
        $this->viewBuilder()->layout('admin');
        $schedule = $this->Schedules->newEntity();
        $this->loadModel('Events');
        if($this->request->is('post')){
            $time =date("H:i:s", strtotime($this->request->data['sch_timing']));
            $schedule->sch_date = $this->request->data['date'].' '.$time;
            // $dateBtw = $this->Events->find('all')->where(['Events.start_date_time <= ' => $schedule->sch_date,'Events.end_date_time >= ' => $schedule->sch_date,'Events.id = ' =>$this->request->data['event_id']])->toArray();
           
                $schedule = $this->Schedules->patchEntity($schedule,$this->request->data);
                if($result=$this->Schedules->save($schedule)){
                    $id=$result->id;
                    $this->Flash->success(__('Schedule has been saved.'));
                    return $this->redirect(['controller'=>'ScheduleTasks','action' => 'index',$id]);
                }
                $this->Flash->error(__('Unable to add your Schedule.'));
            
        }
        $events = $this->Events->find('all')->toArray();
        $this->set(compact('events'));
    }
    
    public function editschedule($id=null){
        $this->viewBuilder()->layout('admin');
        $this->loadModel('Events');
        if($this->request->is('post')){
            $schedule = $this->Schedules->newEntity();
            $time =date("H:i:s", strtotime($this->request->data['sch_timing']));
            $schedule->sch_date = $this->request->data['date'].' '.$time;
            $dateBtw = $this->Events->find('all')->where(['Events.start_date_time <= ' => $schedule->sch_date,'Events.end_date_time >= ' => $schedule->sch_date,'Events.id = ' =>$this->request->data['event_id']])->toArray();
            
                $schedule = $this->Schedules->patchEntity($schedule,$this->request->data);
                if($this->Schedules->save($schedule)){
                    $this->Flash->success(__('Schedule has been updated.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to update your Schedule.'));
           
        }
        $schedule = $this->Schedules->findById($id)->first();
        if(empty($schedule)){
			return $this->redirect($this->referer());
		}
        $events = $this->Events->find('all')->toArray();
        $this->set(compact('schedule','events'));
    }
    
    public function delete($id=null){
		if($this->request->is('post')){
			$ids=$this->request->data['list'];
			$this->Schedules->deleteAll(['Schedules.id IN' => $ids]);
			return $this->redirect($this->referer());
		}else if($id){
			$id=base64_decode($id);
			$entity = $this->Schedules->get($id);
			$this->Schedules->delete($entity);
			return $this->redirect($this->referer());
		}else{
			return $this->redirect($this->referer());
		}
	}
}
