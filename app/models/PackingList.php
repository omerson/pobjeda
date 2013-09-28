<?php


class PackingList extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idPacking_List;
     
    /**
     *
     * @var string
     */
    public $Shipment_Number;
     
    /**
     *
     * @var string
     */
    public $Shipment_Date;
     
    /**
     *
     * @var string
     */
    public $Delivery_Note;
     
    /**
     *
     * @var string
     */
    public $Sender_Name;
     
    /**
     *
     * @var string
     */
    public $Sender_Code;
     
    /**
     *
     * @var string
     */
    public $Receiver_Name;
     
    /**
     *
     * @var string
     */
    public $Receiver_Code;
     
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
		$this->belongsTo("Order", "Order", "idOrder");

    }

}
