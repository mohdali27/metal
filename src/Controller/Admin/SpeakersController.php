<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;

class SpeakersController extends AppController{
    var $helpers = array("Mystring");
    public function initialize(){
		parent::initialize();
		$this->loadComponent('Paginator');
	}
    
    public function index(){
        $this->viewBuilder()->layout('admin');
        $limit=10;$getString="";$searchby="";$search="";$cond=array();$start_date="";$end_date="";
		$action=array();
        if($this->request->is('post')){
            if(isset($this->request->data['limit']) && $this->request->data['limit']){
				$limit=$this->request->data['limit'];
			}
            if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="first_name" && isset($this->request->data['search']) && $this->request->data['search'] ){
				$search=trim($this->request->data['search']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Users.first_name LIKE'=>"%$search%" ,'Users.group_id'=>5));
				$action[0]='searchby='.$searchby;
				$action[1]='search='.$search;
			}
            if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="last_name" && isset($this->request->data['search']) && $this->request->data['search'] ){
				$search=trim($this->request->data['search']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Users.last_name LIKE'=>"%$search%" , 'Users.group_id'=>5));
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
			$this->paginate=array('conditions'=>$cond,'limit'=>$limit,'order'=>array('Users.id desc'));
        }else{
            $cond = array('Users.group_id'=>5);
			$this->paginate=array('conditions'=>$cond,'limit'=>$limit,'order'=>array('Users.id desc'));
		}
        $this->set(compact('action','limit','search','searchby','getString'));
        $this->set('speakers',$this->paginate('Users')->toArray());
    }
    
    public function addspeaker(){
        $this->viewBuilder()->layout('admin');
        $speaker = $this->Speakers->newEntity();
        if($this->request->is('post')){
			$this->request->data['group_id']=5;
            $speaker = $this->Speakers->patchEntity($speaker, $this->request->data);
	   // echo "<pre>";print_r($speaker);die;
            if ($this->Speakers->save($speaker)) {
                $this->Flash->success(__('Speaker has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }
    
    public function editspeaker($id=null){
        $this->viewBuilder()->layout('admin');
        $speaker = $this->Speakers->get(base64_decode($id));
        if($this->request->is('post')){
            //echo "<pre>";print_r($this->request->data);die;
            if(!$this->request->data['image']['name']){
				$speaker->image=$this->request->data['old_image'];
				$this->request->data['image']=$this->request->data['old_image'];
			}
            $speaker = $this->Speakers->patchEntity($speaker,$this->request->data);
            if ($this->Speakers->save($speaker)) {
                $this->Flash->success(__('Speaker has been updated.'));
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Unable to add your event.'));
            }
        }
        $this->set(compact('speaker'));
    }
    
    public function delete($id=null){
		if($this->request->is('post')){
			$ids=$this->request->data['list'];
			$this->Speakers->deleteAll(['Speakers.id IN' => $ids]);
			return $this->redirect($this->referer());
		}else if($id){
			$id=base64_decode($id);
			$entity = $this->Speakers->get($id);
			$this->Speakers->delete($entity);
			return $this->redirect($this->referer());
		}else{
			return $this->redirect($this->referer());
		}
	}
}

