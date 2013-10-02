<?php


class EmailConfirmations extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idConfirmations;
     
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
    public $confirmed;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("User", "Users", "idUsers");

    }

}
