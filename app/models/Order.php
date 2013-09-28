<?php


class Order extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idOrder;
     
    /**
     *
     * @var integer
     */
    public $User;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idOrder", "PackingList", "Order");
		$this->hasMany("idOrder", "Palete", "Order");
		$this->belongsTo("User", "Users", "idUsers");

    }

}
