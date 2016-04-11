<?php
namespace App\Model\Table;
use Cake\Event\Speaker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SpeakersTable extends Table{
    public function initialize(array $config){
        $this->table('users');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
			'image' => [	// The name of your upload field
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
    
}