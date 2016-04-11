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

		$this->Auth->allow('logout');
		//$this->Auth->allow();
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
			//pr($this->request->data);die;
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Your username or password was incorrect.'));
		}
    }
	public function logout() {
		$this->Flash->success(__('Good-Bye'));
		$this->redirect($this->Auth->logout());
	}

}
