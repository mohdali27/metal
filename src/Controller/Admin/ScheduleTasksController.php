<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;

class ScheduleTasksController extends AppController{
    public function initialize(){
		parent::initialize();
		$this->loadComponent('Paginator');
        $this->Auth->allow('addtask');
	}
    
    public function index($id=null) {
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
            }
			
        if(!empty($cond)){
            $cond=array_merge($cond,array('ScheduleTasks.schedule_id'=>"$id"));
			$this->paginate=array('conditions'=>$cond,'contain'=>array('Schedules'=>array('Events')),'limit'=>$limit,'order'=>array('ScheduleTasks.id desc'));
        }else{
            $cond=array('ScheduleTasks.schedule_id'=>"$id");
			$this->paginate=array('conditions'=>$cond,'limit'=>$limit,'contain'=>array('Schedules'=>array('Events')),'order'=>array('ScheduleTasks.id desc'));
		}
        //$this->paginate = array('contain'=>array('Schedules'=>array('Events')));
        $this->set(compact('action','limit','search','searchby','getString'));
        //echo "<pre>";print_r($this->paginate);die;
		$this->loadModel('Schedules');
		$schedule=$this->Schedules->findById($id)->toArray();
		$this->set('schedule',$schedule);
        $this->set('tasks',$this->paginate('ScheduleTasks')->toArray());
        $this->set('schedule_id',$id);
		$this->loadModel('Users');
		$speakers=$this->Users->find()->where(['Users.group_id'=>5])->select(['Users.id','Users.first_name','Users.last_name'])->hydrate(false)->toArray();
		$this->set('speakers',$speakers);
    }
    
    public function addtask(){
		// pr($this->request->data);die;
        $this->viewBuilder()->layout('admin');
        $schedule_task = $this->ScheduleTasks->newEntity();
        if($this->request->is('post')){
            $schedule_task = $this->ScheduleTasks->patchEntity($schedule_task,$this->request->data);
                if($this->ScheduleTasks->save($schedule_task)){
                    $this->Flash->success(__('Schedule task has been saved.'));
                   // return $this->redirect(['action' => 'index']);
				   return $this->redirect(['controller'=>'schedule-tasks','action'=>'index',$this->request->data['schedule_id']]);
                }
                $this->Flash->error(__('Unable to add your Schedule task.'));
        }
        $this->loadModel('Events');
       // $this->loadModel('Schedules');
        $events = $this->Events->find('all')->toArray();
       // $schedules = $this->Schedules->find('all')->toArray();
        //$this->set(compact('events','schedules'));
        $this->set(compact('events'));
		
    }
    
    public function edittask($id=null){
		
        $this->viewBuilder()->layout('admin');
        $this->loadModel('Events');
        if($this->request->is('post')){
            $sch_task = $this->ScheduleTasks->newEntity();
			$sch_task->id=$this->request->data['id'];
            $schedule_task = $this->ScheduleTasks->patchEntity($sch_task,$this->request->data);
			//pr($schedule_task);die;
            if($this->ScheduleTasks->save($schedule_task)){
                $this->Flash->success(__('Schedule has been updated.'));
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('Unable to update your Schedule.'));
        }
        $sch_task = $this->ScheduleTasks->findById(base64_decode($id))->first();
        if(empty($sch_task)){
			return $this->redirect($this->referer());
		}
        $this->loadModel('Schedules');
        $events = $this->Events->find('all')->toArray();
        $schedules = $this->Schedules->find('all')->toArray();
        $this->set(compact('sch_task','events','schedules'));
    }
    
    public function delete($id=null){
		if($this->request->is('post')){
			$ids=$this->request->data['list'];
            $this->ScheduleTasks->deleteAll(['ScheduleTasks.id IN' => $ids]);
			return $this->redirect($this->referer());
		}else if($id){
			$id=base64_decode($id);
			$entity = $this->ScheduleTasks->get($id);
			$this->ScheduleTasks->delete($entity);
			return $this->redirect($this->referer());
		}else{
			return $this->redirect($this->referer());
		}
	}
    
    public function getScheduleList(){
        $this->autoRender = false;
        $this->loadModel('Schedules');  
        $schedules = $this->Schedules->find('all',array('conditions'=>array('Schedules.event_id =' =>$_POST['event_id']),'fields'=>array('Schedules.id','Schedules.sch_name')))->toArray();
        echo json_encode($schedules);die;
    }
	
	public function getTask($id){
        $this->autoRender = false;
        $tasks = $this->ScheduleTasks->findById($id)->toArray();
		$speakerid=$tasks[0]->speaker_id;
		$this->loadModel('Users');
		$speakers=$this->Users->find()->where(['Users.group_id'=>5])->select(['Users.id','Users.first_name','Users.last_name'])->hydrate(false)->toArray();
		$html="<option value=''>Select Speaker</option>";
		foreach($speakers as $k=>$v){
			$html.='<option value='."'".$v['id']."'".'>'.$v['first_name'].' '.$v['last_name'].'</option>';
		}
		$tasks[1]=$html;
        echo json_encode($tasks);die;
    }
}