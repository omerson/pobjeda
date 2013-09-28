<?php


class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idUsers;
     
    /**
     *
     * @var string
     */
    public $username;
     
    /**
     *
     * @var string
     */
    public $password;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idUsers", "Order", "User");

    }

}
