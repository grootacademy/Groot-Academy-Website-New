<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Cache\Cache;

class AttendanceController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
        {
           
            $this->Auth->allow(['cc','attendsuccessful','attend']);
            $login_status=false;
        }
        
    
    public function attend($id)
    {
        if ($this->request->is('post')) {

            if(empty($this->request->getData('adkey'))){
                $this->Flash->error('Please Enter Security Key.',['key'=>'adkey']);
                return;
            }
            $alrady = $this->fetchTable('StudentAttendance')->find('all',[
                'conditions' => ['student_id'=>$id , 'date'=>date('Y-m-d')],
             ])->first();
            if(!empty($alrady)){
                $this->Flash->success('Attendance Alrady Done.',['key'=>'alrady']);
                return;
            }
            if($this->request->getData('adkey')=="1234"){
        $StudentAttendance = $this->getTableLocator()->get('StudentAttendance');
        $studentAttendance = $StudentAttendance->newEmptyEntity();
        $data['student_id']=$id;
        $data['date']=date('Y-m-d');
        $data['time']=date("h:ia");
        $patch=$this->fetchTable('StudentAttendance')->patchEntity($studentAttendance,$data); 
        $this->fetchTable('StudentAttendance')->save($patch);
      
                $this->redirect('/Attendance/attendsuccessful');
            }else{
                $this->Flash->error('Wrong Security Key.',['key'=>'adkey']);
                return;
            }
    }

    }
    public function attendsuccessful()
    {

    }
   

}
