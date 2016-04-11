<?php
namespace App\Controller\Admin;
class MessagesController extends AppController
{
  public function initialize(){
        parent::initialize();
        $this->loadComponent('Paginator');
  }

  public function index(){
    $this->layout='admin';
    $search="";$cond=array();
    if($this->request->is('post')){
        //echo "<pre>";pr($this->request->data);die;
        $data=$this->request->data;
        if(isset($data['search'])){
           $search=$data['searchVal'];
           $cond = array('Messages.content LIKE'=>"%$search%");
            
        }
    }
    $getData=$_GET;
    if(isset($getData['search'])){
         $search=$getData['search'];
         $cond = array("Messages.content LIKE"=>"%$search%");
    }
    if(!empty($cond)){
        $this->paginate=array('conditions'=>$cond,'limit'=>10);
    }else{
        $this->paginate=array('limit'=>10);    
    }
    $this->set('msgs',$this->paginate('Messages')->toArray());
    $this->set('search',$search);
    // echo "<pre>";print_r($this->paginate('Messages')->toArray());die;
  }   
}

    