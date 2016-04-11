<?php
namespace App\Model\Table;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SchedulesTable extends Table{
    public function initialize(array $config){
        $this->table('schedules');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Events', [
            'className' => 'Events',
            'foreignKey' => 'event_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ScheduleTasks', [
            'foreignKey' => 'schedule_id',
            'dependent' => true,
        ]);
    }
    
    public function validationDefault(Validator $validator) {
        $validator
            ->requirePresence('sch_name','Please Enter name')
            ->requirePresence('sch_description','Please enter the description')
            ->notEmpty('date')
            ->requirePresence('sch_timing');

        return $validator;
    }
    
}