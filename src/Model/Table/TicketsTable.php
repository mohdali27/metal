<?php
namespace App\Model\Table;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TicketsTable extends Table{
    public function initialize(array $config){
        $this->table('tickets');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Events', [
            'className' => 'Events',
            'foreignKey' => 'event_id',
            'joinType' => 'INNER',
        ]);
    }
}