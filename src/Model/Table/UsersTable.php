<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
* Users Model
*/
class UsersTable extends Table {
	
	public function initialize(array $config){
		parent::initialize($config);
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

	public function validationDefault(Validator $validator) {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('first_name')
            ->notEmpty('first_name');
        
        $validator
            ->requirePresence('last_name')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('username')
            ->notEmpty('username');
            
        $validator
            ->email('email')
            ->requirePresence('email')
            ->notEmpty('email');

        $validator
            ->add('password', [
                'compare' => [
                    'rule' => ['compareWith', 'cpassword']
                ]
            ])
            ->notEmpty('password');

        return $validator;
    }

    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['username']));
        return $rules;
    }
}