<?php
namespace App\Model\Table;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ScheduleTasksTable extends Table{
    public function initialize(array $config){
        $this->table('schedule_tasks');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Schedules', [
            'className' => 'Schedules',
            'foreignKey' => 'schedule_id',
            'joinType' => 'INNER',
        ]);
		$this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'speaker_id',
            'joinType' => 'INNER',
        ]);
    }
    
    public function validationDefault(Validator $validator) {
        $validator
            ->requirePresence('schedule_id','Please Select schedule')
            ->requirePresence('task_description','Please enter the description');

        return $validator;
    }
    
}