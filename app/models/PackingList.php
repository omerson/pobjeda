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
     * @var integer
     */
    public $Order;
     
}
