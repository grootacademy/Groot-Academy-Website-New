<?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Auth\DefaultPasswordHasher;
    class UsersController extends AppController
    {
        public function beforeFilter(\Cake\Event\EventInterface $event)
        {
           
            $this->viewBuilder()->disableAutoLayout();
            $this->Auth->allow(['logout']);
           
        }
        public function index()
        {
           
            if($this->request->is('post')){
                 
                   $user = $this->Auth->identify();
                //    pr($user); die;
                   if ($user) {
                    if($user['role']=="admin"){
                        $this->Auth->setUser($user);
                        return $this->redirect($this->Auth->redirectUrl());
                    }
                   }
                   $this->Flash->error('Your username or password is incorrect.',['key'=>'error']);
              }
        }
        public function logout()
        {
            $this->Flash->success('You are now logged out.');
            return $this->redirect($this->Auth->logout());
        }

    
    
   
    }
