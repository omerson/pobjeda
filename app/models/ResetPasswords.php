<?php


class ResetPasswords extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idReset;
     
    /**
     *
     * @var integer
     */
    public $User;
     
    /**
     *
     * @var string
     */
    public $code;
     
    /**
     *
     * @var integer
     */
    public $createdAt;
     
    /**
     *
     * @var integer
     */
    public $modifiedAt;
     
    /**
     *
     * @var string
     */
    public $reset;


    public function beforeValidationOnCreate()
    {
        //Timestamp the confirmaton
        $this->createdAt = time();
    }
     
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("User", "Users", "idUsers", array(
            'alias' => 'user'
        ));

    }

}
