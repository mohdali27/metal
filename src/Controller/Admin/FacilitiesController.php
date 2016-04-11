<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class FacilitiesController extends AppController{
	var $helpers = array("Mystring");
	public function initialize(){
		parent::initialize();
		$this->loadComponent('Paginator');
	}
	
	public function index(){
		$limit=10;$getString="";$searchby="";$search="";$cond=array();$start_date="";$end_date="";
		$action=array();
		if($this->request->is('post')){
			//pr($this->request->data);die;
			if(isset($this->request->data['limit']) && $this->request->data['limit']){
				$limit=$this->request->data['limit'];
				
			}
			if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="name" && isset($this->request->data['search']) && $this->request->data['search'] ){
				$search=trim($this->request->data['search']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Events.event_name LIKE'=>"%$search%"));
				$action[0]='searchby='.$searchby;
				$action[1]='search='.$search;
				//pr($cond);die;
			}
			if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="fc_name" && isset($this->request->data['search']) && $this->request->data['search'] ){
				$search=trim($this->request->data['search']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Facilities.fc_name LIKE'=>"%$search%"));
				$action[0]='searchby='.$searchby;
				$action[2]='search='.$search;
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
		$this->viewBuilder()->layout('admin');
		if(!empty($cond)){
			$this->paginate=array('conditions'=>$cond,'contain'=>'Events','limit'=>$limit,'order'=>array('Facilities.id desc'));
		}else{
			$this->paginate=array('limit'=>$limit,'contain'=>'Events','order'=>array('Facilities.id desc'));
		}
		
		// echo "<pre>";pr($action);die;
		$this->set('getString',$getString);
		$this->set('limit',$limit);
		$this->set('search',$search);
		$this->set('searchby',$searchby);
		$this->set('action',$action);
		$this->set('facilities',$this->paginate('Facilities')->toArray());
	}
	
    public function addfacilities(){
        $this->viewBuilder()->layout('admin');
        $facility = $this->Facilities->newEntity();
        $this->loadModel('Events');
        if($this->request->is('post')){
                $facilities = $this->Facilities->patchEntity($facility,$this->request->data);
                if($result=$this->Facilities->save($facilities)){
                    $id=$result->id;
                    $this->Flash->success(__('Event Facility has been saved.'));
                    return $this->redirect(['controller'=>'facilities','action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your Facility.'));
            
        }
        $events = $this->Events->find('all')->toArray();
        $this->set(compact('events'));
    }
	
	public function delete($id=null){
		if($this->request->is('post')){
			$ids=$this->request->data['list'];
			$this->Facilities->deleteAll(['Facilities.id IN' => $ids]);
			return $this->redirect($this->referer());
		}else if($id){
			$id=base64_decode($id);
			$entity = $this->Facilities->get($id);
			$this->Facilities->delete($entity);
			return $this->redirect($this->referer());
		}else{
			return $this->redirect($this->referer());
		}
	}
	
	public function editfacilities($id=null){
		$this->viewBuilder()->layout('admin');
        $this->loadModel('Events');
        if($this->request->is('post')){
            $facility = $this->Facilities->newEntity();
			$facility->id=$this->request->data['id'];
			if(!$this->request->data['fc_image']['name']){
				$facility->fc_image=$this->request->data['old_image'];
				$this->request->data['fc_image']=$this->request->data['old_image'];
			}
			
            $facilities = $this->Facilities->patchEntity($facility,$this->request->data);
			//pr($facilities);die;
            if($this->Facilities->save($facilities)){
                    $this->Flash->success(__('Facility has been updated.'));
                    return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update Event Facility.'));
           
        }
        $facility = $this->Facilities->findById($id)->first();
        if(empty($facility)){
			return $this->redirect($this->referer());
		}
        $events = $this->Events->find('all')->toArray();
        $this->set(compact('facility','events'));
	}
	
}
