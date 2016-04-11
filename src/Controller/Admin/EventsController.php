<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class EventsController extends AppController{
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
			if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="date" && isset($this->request->data['start_date']) && $this->request->data['start_date'] ){
				$start_date=trim($this->request->data['start_date']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Events.start_date_time >='=>$start_date));
				$action[0]='searchby='.$searchby;
				$action[2]='start_date='.$start_date;
			}
			if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="date" && isset($this->request->data['end_date']) && $this->request->data['end_date'] ){
				$end_date=trim($this->request->data['end_date']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Events.end_date_time <='=>$end_date));
				$action[0]='searchby='.$searchby;
				$action[3]='end_date='.$end_date;
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
		if(isset($getString['start_date'])){
			$start_date=$getString['start_date'];
			
		}
		if(isset($getString['end_date'])){
			$end_date=$getString['end_date'];
			
		}
		if($searchby){
			$getString['searchby']=$searchby;
			$action[0]='searchby='.$searchby;
		}
		if($search){
			$getString['search']=$search;
			$action[1]='search='.$search;
			$cond=array_merge($cond,array('Events.event_name LIKE'=>"%$search%"));
		}
		if($start_date){
			$getString['start_date']=$start_date;
			$action[2]='start_date='.$start_date;
			$cond=array_merge($cond,array('Events.start_date_time >='=>$start_date));
		}
		if($end_date){
			$getString['end_date']=$end_date;
			$action[3]='end_date='.$end_date;
			$cond=array_merge($cond,array('Events.end_date_time <='=>$end_date));
		}
		$this->viewBuilder()->layout('admin');
		if(!empty($cond)){
			$this->paginate=array('conditions'=>$cond,'limit'=>$limit,'order'=>array('Events.id desc'));
		}else{
			$this->paginate=array('limit'=>$limit,'order'=>array('Events.id desc'));
		}
		
		// echo "<pre>";pr($action);die;
		$this->set('getString',$getString);
		$this->set('limit',$limit);
		$this->set('start_date',$start_date);
		$this->set('end_date',$end_date);
		$this->set('search',$search);
		$this->set('searchby',$searchby);
		$this->set('action',$action);
		$this->set('events',$this->paginate('Events')->toArray());
	}
	
    public function addevent(){
        $this->viewBuilder()->layout('admin');
		$this->loadModel('Users');
		$speakers=$this->Users->find()->where(['Users.group_id'=>5])->select(['Users.id','Users.first_name','Users.last_name'])->hydrate(false)->toArray();
		$this->set('speakers',$speakers);
		
		if($this->request->is('post')){
			
			$spkrs=array();
			foreach($this->request->data['speakers'] as $k=>$v){
				$spkrs[$k]=array('user_id'=>$v);
			}
			$this->request->data['event_speakers']=$spkrs;
		    $event = $this->Events->newEntity($this->request->data,[
                            'associated' => ['EventSpeakers']
                    ]);
			$event->event_timing=$this->request->data['start_time'].' - '.$this->request->data['end_time'];
			$this->request->data['start_time']=date("H:i:s", strtotime($this->request->data['start_time']));
			$this->request->data['end_time']=date("H:i:s", strtotime($this->request->data['end_time']));
			$event->start_date_time=$this->request->data['start_date'].' '.$this->request->data['start_time'];
			$event->end_date_time=$this->request->data['end_date'].' '.$this->request->data['end_time'];
			
			$event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event,['associated' => ['EventSpeakers']])) {
                $this->Flash->success(__('Event has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your event.'));
		}
    }
	
	public function delete($id=null){
		if($this->request->is('post')){
			$ids=$this->request->data['list'];
			$this->Events->deleteAll(['Events.id IN' => $ids]);
			return $this->redirect($this->referer());
		}else if($id){
			$id=base64_decode($id);
			$entity = $this->Events->get($id);
			$this->Events->delete($entity);
			return $this->redirect($this->referer());
		}else{
			return $this->redirect($this->referer());
		}
	}
	
	public function editevent($id=null){
		$this->viewBuilder()->layout('admin');
		$this->loadModel('Users');
		$speakers=$this->Users->find()->where(['Users.group_id'=>5])->select(['Users.id','Users.first_name','Users.last_name'])->hydrate(false)->toArray();
		$this->set('speakers',$speakers);
		if($this->request->is('post')){
			$spkrs=array();
			foreach($this->request->data['speakers'] as $k=>$v){
				$spkrs[$k]=array('user_id'=>$v);
			}
			$this->request->data['event_speakers']=$spkrs;
		    $event = $this->Events->newEntity($this->request->data,[
                            'associated' => ['EventSpeakers']
                    ]);
			$event->event_timing=$this->request->data['start_time'].' - '.$this->request->data['end_time'];
			$event->event_banner=$this->request->data['event_banner'];
			$this->request->data['start_time']=date("H:i:s", strtotime($this->request->data['start_time']));
			$this->request->data['end_time']=date("H:i:s", strtotime($this->request->data['end_time']));
			$event->start_date_time=$this->request->data['start_date'].' '.$this->request->data['start_time'];
			$event->end_date_time=$this->request->data['end_date'].' '.$this->request->data['end_time'];
			$event->id=$this->request->data['id'];
			if(!$this->request->data['event_banner']['name']){
				$event->event_banner=$this->request->data['old_image'];
				$this->request->data['event_banner']=$this->request->data['old_image'];
			}
			// pr($this->request->data);die;
			$event = $this->Events->patchEntity($event, $this->request->data);
			$this->loadModel('EventSpeakers');
			$this->EventSpeakers->deleteAll(['EventSpeakers.event_id' => $this->request->data['id']]);
			 // pr($event);die;
            if ($this->Events->save($event)) {
                $this->Flash->success(__('Event has been updated Successfully.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your event.'));
		}else if($id){
			$id=base64_decode($id);
			$entity = $this->Events->findById($id)->contain(['EventSpeakers'])->first();
			
			$selected=array();
			foreach($entity->event_speakers as $k=>$v){
				$selected[]=$v->user_id;
			}
			$selectedSpkrs=json_encode($selected);
			$this->set('selectedSpkrs',$selectedSpkrs);
			// pr($selectedSpkrs);die;
			if(empty($entity)){
				return $this->redirect($this->referer());
			}
			$this->set('event',$entity);
		}else{
			return $this->redirect($this->referer());
		}
	}
	
}
