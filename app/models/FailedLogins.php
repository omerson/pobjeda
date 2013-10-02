<?php


class FailedLogins extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idFailed;
     
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
    public $attempted;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("User", "Users", "idUsers");

    }

}
