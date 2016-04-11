<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class EventsController extends AppController{
    var $helpers = array("Mystring");
    public function index(){
    	if($this->request->is('Ajax')){
    		$this->autoRender = false;
    		$page=$_POST['id'];
    		$events=$this->Events->find('all')->order(['Events.id DESC'])->limit(6)->page($page)->toArray();
    	    $this->set('events',$events);
            $this->viewBuilder()->templatePath('Element/front');
            $this->render('loadmore');
    	}else{
    		$events=$this->Events->find('all')->order(['Events.id DESC'])->limit(6)->page(1)->toArray();
    	    $this->set('events',$events);
    	}
    }

    public function detail($id=null){
		if($id){
			$event=$this->Events->findById($id)->contain(['Schedules','Schedules.ScheduleTasks','Schedules.ScheduleTasks.Users','EventSpeakers','EventSpeakers.Users','Facilities','Tickets'])->hydrate(false)->toArray();
			if(!empty($event)){
				$this->set('event',$event[0]);
				// pr($event);die;
			}else{
			$this->redirect($this->referer());
		   }
		}else{
			$this->redirect($this->referer());
		}
        
    }
}
