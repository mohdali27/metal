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
    public function index()
    {
        $this->viewBuilder()->layout('admin');
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

}
