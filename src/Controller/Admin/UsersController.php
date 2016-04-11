<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	public function initialize()
	{
		parent::initialize();
        //$this->loadComponent('Cookie');
		$this->Auth->allow('logout');
		$this->Auth->allow('checkEmailExist');
	}

    /**
     * Index method
     *
     * @return void
     */
    public function index(){
        $this->viewBuilder()->layout('admin');
        $limit=5;$getString="";$searchby="";$search="";$cond=array();
		$action=array();
        if($this->request->is('post')){
            if(isset($this->request->data['limit']) && $this->request->data['limit']){
				$limit=$this->request->data['limit'];
			}
            if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="first_name" && isset($this->request->data['search']) && $this->request->data['search'] ){
				$search=trim($this->request->data['search']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Users.first_name LIKE'=>"%$search%",'Users.group_id <>'=>1));
				$action[0]='searchby='.$searchby;
				$action[1]='search='.$search;
			}
            if(isset($this->request->data['searchby']) && $this->request->data['searchby']=="last_name" && isset($this->request->data['search']) && $this->request->data['search'] ){
				$search=trim($this->request->data['search']);
				$searchby=$this->request->data['searchby'];
				$cond=array_merge($cond,array('Users.last_name LIKE'=>"%$search%",'Users.group_id <>'=>1));
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
            $cond = array('Users.group_id <>'=>1);
			$this->paginate=array('conditions'=>$cond,'limit'=>$limit,'order'=>array('Users.id desc'));
		}
        $this->set(compact('action','limit','search','searchby','getString'));
        $this->set('users',$this->paginate('Users')->toArray());
    }
	
	public function login(){
        $this->viewBuilder()->layout('login');
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
                if(!empty($this->request->data['remember']) && $this->request->data['remember'] == 1){
                    $email = $this->request->data['email'];
                    $password = $this->request->data['password'];
                    setcookie("email", $email, time()+10*24*60*60);
                    setcookie("password", $password, time()+10*24*60*60);
                }else{
                    setcookie('email', '', time()-300);
                    setcookie('password', '', time()-300);
                }
                return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Your username or password was incorrect.'));
		}
    }
	public function logout() {
		$this->Flash->success(__('Good-Bye'));
		$this->redirect($this->Auth->logout());
	}
    public function checkEmailExist(){
        $Checkdata = $this->Users->find('all')->where(['Users.email'=>$_REQUEST['email']]);
        $countEmail = $Checkdata->count();
        if($countEmail){
            echo "true";die;
        }else{
            echo "false"; die;            
        }
    }
    
    public function adduser(){
        $this->viewBuilder()->layout('admin');
        $user = $this->Users->newEntity();
        $this->loadModel('Groups');
        if($this->request->is('post')){
            
            $user = $this->Users->patchEntity($user,$this->request->data);
            //echo "<pre>";print_r($user);die;
            if($result=$this->Users->save($user)){
                $this->Flash->success(__('User has been saved.'));
                return $this->redirect(['controller'=>'users','action' => 'index']);
            }
            $this->Flash->error(__('Unable to add user.'));
            
        }
        $groups = $this->Groups->find('all',array('conditions'=>array('Groups.id <>'=>1)))->toArray();
        $this->set(compact('groups'));
    }
    
    public function edituser($id=null){
        $this->viewBuilder()->layout('admin');
        $this->loadModel('Groups');
        $user = $this->Users->findById($id)->first();
        if($this->request->is('post')){
            if(!$this->request->data['image']['name']){
				$user->image=$this->request->data['old_image'];
				$this->request->data['image']=$this->request->data['old_image'];
			}
            
            $user = $this->Users->patchEntity($user,$this->request->data);
            //echo "<pre>";print_r($user);die;
            if($this->Users->save($user)){
                $this->Flash->success(__('User has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update User.'));
        }
        
        if(empty($user)){
			return $this->redirect($this->referer());
		}
        $groups = $this->Groups->find('all',array('conditions'=>array('Groups.id <>'=>1)))->toArray();
        $this->set(compact('groups','user'));
    }
    
    public function delete($id=null){
		if($this->request->is('post')){
			$ids=$this->request->data['list'];
			$this->Users->deleteAll(['Users.id IN' => $ids]);
			return $this->redirect($this->referer());
		}else if($id){
			$id=base64_decode($id);
			$entity = $this->Users->get($id);
			$this->Users->delete($entity);
			return $this->redirect($this->referer());
		}else{
			return $this->redirect($this->referer());
		}
	}
    
    public function checkEmailForSignUp(){
        $total = $this->Users->find('all',array('conditions'=>array('Users.email' => $_REQUEST['email'])))->toArray();
        if(count($total) > 0){
            echo "false";die;
        }else{
            echo "true";die;    
        }
    }

    
    

}
