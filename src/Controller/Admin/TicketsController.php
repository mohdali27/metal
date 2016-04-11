<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

class TicketsController extends AppController{
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
			$this->paginate=array('conditions'=>$cond,'contain'=>'Events','limit'=>$limit,'order'=>array('Tickets.id desc'));
		}else{
			$this->paginate=array('limit'=>$limit,'contain'=>'Events','order'=>array('Tickets.id desc'));
		}
		
		// echo "<pre>";pr($action);die;
		$this->set('getString',$getString);
		$this->set('limit',$limit);
		$this->set('search',$search);
		$this->set('searchby',$searchby);
		$this->set('action',$action);
		$this->set('tickets',$this->paginate('Tickets')->toArray());
	}
	
    public function addtickets(){
        $this->viewBuilder()->layout('admin');
        $ticket = $this->Tickets->newEntity();
        $this->loadModel('Events');
        if($this->request->is('post')){
                $tickets = $this->Tickets->patchEntity($ticket,$this->request->data);
                if($result=$this->Tickets->save($tickets)){
                    $id=$result->id;
                    $this->Flash->success(__('Event Ticket has been saved.'));
                    return $this->redirect(['controller'=>'tickets','action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your Ticket.'));
            
        }
        $events = $this->Events->find('all')->toArray();
        $this->set(compact('events'));
    }
	
	public function delete($id=null){
		if($this->request->is('post')){
			$ids=$this->request->data['list'];
			$this->Tickets->deleteAll(['Tickets.id IN' => $ids]);
			return $this->redirect($this->referer());
		}else if($id){
			$id=base64_decode($id);
			$entity = $this->Tickets->get($id);
			$this->Tickets->delete($entity);
			return $this->redirect($this->referer());
		}else{
			return $this->redirect($this->referer());
		}
	}
	
	public function edittickets($id=null){
		$this->viewBuilder()->layout('admin');
        $this->loadModel('Events');
        if($this->request->is('post')){
            $ticket = $this->Tickets->newEntity();
			$ticket->id=$this->request->data['id'];
			
            $tickets = $this->Tickets->patchEntity($ticket,$this->request->data);
			//pr($facilities);die;
            if($this->Tickets->save($tickets)){
                    $this->Flash->success(__('Event Ticket has been updated.'));
                    return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update Event Ticket.'));
           
        }
        $ticket = $this->Tickets->findById($id)->first();
        if(empty($ticket)){
			return $this->redirect($this->referer());
		}
        $events = $this->Events->find('all')->toArray();
        $this->set(compact('ticket','events'));
	}
	
}
