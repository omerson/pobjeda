<?php


class Profiles extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idProfiles;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $active;
     
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany("idProfiles", "Permissions", "Profiles", array(
            'alias' => 'permissions'
        ));
        
        $this->hasMany("idProfiles", "Users", "Profiles", array(
            'alias' => 'users',
            'foreignKey' => array(
                'message' => 'Profile cannot be deleted because it\'s used on Users'
            )
        ));

    }

}