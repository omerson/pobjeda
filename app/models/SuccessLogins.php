<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class SuccessLogins extends Model
{

    /**
     *
     * @var integer
     */
    public $idLogins;
     
    /**
     *
     * @var integer
     */
    public $User;
     
    /**
     *
     * @var string
     */
    public $ipAddress;
     
    /**
     *
     * @var integer
     */
    public $occurred;
     
    /**
     *
     * @var string
     */
    public $userAgent;


    public function beforeValidationOnCreate()
    {
        //Timestamp the confirmaton
        $this->occurred = time();
    }
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("User", "Pobjeda\Models\Users", "idUsers", array(
            'alias' => 'user'
        ));


    }

}
