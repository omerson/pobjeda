<?php


class Palete extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idPalete;
     
    /**
     *
     * @var string
     */
    public $GS1_Code;
     
    /**
     *
     * @var string
     */
    public $Item_Type;
     
    /**
     *
     * @var integer
     */
    public $Order;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idPalete", "Artupal", "Palete");
		$this->belongsTo("Order", "Order", "idOrder");

    }

}
