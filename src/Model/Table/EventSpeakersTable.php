<?php
namespace App\Model\Table;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class EventSpeakersTable extends Table
{
	
    public function initialize(array $config)
    {
      $this->table('event_speakers');
	  $this->belongsTo('Users', [
            'className' => 'Users',
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }
}
?>