<?php
namespace App\Controller;
use Cake\Network\Email\Email;
use App\Controller\AppController;


/**
* User controller for front end
*/
class UsersController extends AppController {
    public function initialize() {
        parent::initialize();
        $this->Auth->allow('register');
    }
    
    public function index(){
		if($this->Auth->user()){
            return $this->redirect($this->Auth->redirectUrl());
        }
	}
    
    public function register(){
        $this->viewBuilder()->layout('login');
        if ($this->request->is('post')) {
            $user = $this->Users->newEntity();
            $user = $this->Users->patchEntity($user, $this->request->data);
            //echo "<pre>";print_r($user);die;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Admin will activate your profile soon.'));
                return $this->redirect('/');
            }else{
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
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
                return $this->redirect('/profile');
			}
			$this->Flash->error(__('Your email or password was incorrect.'));
		}
    }
    
    public function profile(){
        $this->viewBuilder()->layout('profile');
        $user = $this->Users->find()->where(['Users.id'=>$this->Auth->user('id')])->first()->toArray();
        $this->set(compact('user'));
        //echo "<pre>";print_r($user);die;
    }
    
    public function editprofile(){
        $this->viewBuilder()->layout('profile');
        $user = $this->Users->find()->where(['Users.id'=>$this->Auth->user('id')])->first()->toArray();
        $this->set(compact('user'));
    }
}