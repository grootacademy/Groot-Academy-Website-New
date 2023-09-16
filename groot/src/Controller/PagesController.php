<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Cache\Cache;
/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
        {
           
        $this->viewBuilder()->setLayout('header_profile');
            $this->Auth->allow(['cc']);
            $login_status=false;
            if($this->Auth->user('id')){
                $login_status=true;
                $user_name= $this->Auth->user('name');
            }  
            $this->set(compact('login_status','user_name'));
        }
        
    public function index()
    {
        
        // $Admission = $this->fetchTable('Admission')->find('all',[
        //     'conditions' => ['Admission.due_date'=>date('Y-m-d')],[
        //         'order' => ['id'=>'DESC'],
        //      ]
        //  ])->toArray();
        // $this->set(compact('Admission'));
    }
   
    // view-software-enquiry
    // view-academy-enquiry
    // view-dmart

    public function viewDmart()
    {
        
        $ViewDmart = $this->fetchTable('ViewDmart')->find('all')
        ->order(['ViewDmart.id DESC']);
        $this->set('ViewDmart',$this->paginate($ViewDmart,['limit'=>'10']));
    }
   

   
    public function viewAcademyEnquiry()
    {
        $ViewAcademyEnquiry = $this->fetchTable('ViewAcademyEnquiry')->find('all')
        ->order(['ViewAcademyEnquiry.id DESC']);
        $this->set('ViewAcademyEnquiry',$this->paginate($ViewAcademyEnquiry,['limit'=>'10']));
    }
    public function viewSoftwareEnquiry()
    {
        $ViewSoftwareEnquiry = $this->fetchTable('ViewSoftwareEnquiry')->find('all')
        ->order(['ViewSoftwareEnquiry.id DESC']);
        $this->set('ViewSoftwareEnquiry',$this->paginate($ViewSoftwareEnquiry,['limit'=>'10']));
        
    }
   
   
    public function cc()
    {
        $this->autoRender = false;
        $this->layout = false;
        Cache::clearAll();
        exit ('clearAll');
    }

    public function profile()
    {
        $Users = $this->fetchTable('Users')->find('all',[
            'conditions' => ['Users.id'=>$this->Auth->user('id')],
         ])->first();
         $this->set(compact('Users'));
    }
    
}
