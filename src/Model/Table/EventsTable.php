<?php
namespace App\Model\Table;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class EventsTable extends Table
{
	
    public function initialize(array $config)
    {

        $this->hasMany('Schedules', [
            'foreignKey' => 'event_id',
            'dependent' => true,
        ]);
		$this->hasMany('EventSpeakers', [
            'foreignKey' => 'event_id',
            'dependent' => true,
        ]);
		$this->hasMany('Facilities', [
            'foreignKey' => 'event_id',
            'dependent' => true,
        ]);
		$this->hasMany('Tickets', [
            'foreignKey' => 'event_id',
            'dependent' => true,
        ]);
   
        $this->addBehavior('Timestamp');
		$this->addBehavior('Proffer.Proffer', [
			'event_banner' => [	// The name of your upload field
				'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
				'dir' => 'image_dir',	// The name of the field to store the folder
				 'thumbnailSizes' => [ // Declare your thumbnails
					'square' => [	// Define the prefix of your thumbnail
						'w' => 200,	// Width
						'h' => 200,	// Height
						'crop' => true,	// Crop will crop the image as well as resize it
						'jpeg_quality'	=> 100,
						'png_compression_level' => 9
					],
					'portrait' => [		// Define a second thumbnail
						'w' => 100,
						'h' => 300
					],
				], 
				'thumbnailMethod' => 'Gd'	// Options are Imagick, Gd or Gmagick
			]
		]);
    }

    /* public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('title')
            ->requirePresence('title')
            ->notEmpty('body')
            ->requirePresence('body');

        return $validator;
    } */
	 /* public function beforeSave($data){
		
		pr($data);die;
	} */
	/*public function beforeMarshal(Event $event,$data,$options)
	{
		$data['event_timing']=$data['start_time'].' - '.$data['end_time'];
		$data['start_time']=date("H:i:s", strtotime($data['start_time']));
		$data['end_time']=date("H:i:s", strtotime($data['end_time']));
		$data['start_date_time']=$data['start_date'].' '.$data['start_time'];
		$data['end_date_time']=$data['end_date'].' '.$data['end_time'];
	   //pr($data);die;
	} */
}
?>