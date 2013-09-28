<?php


class Artupal extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idArtupal;
     
    /**
     *
     * @var string
     */
    public $Product_Code;
     
    /**
     *
     * @var string
     */
    public $Description;
     
    /**
     *
     * @var string
     */
    public $Lot_Number;
     
    /**
     *
     * @var double
     */
    public $Quantity;
     
    /**
     *
     * @var string
     */
    public $Unit_Of_Measure;
     
    /**
     *
     * @var integer
     */
    public $Count_Of_Units;
     
    /**
     *
     * @var string
     */
    public $Item_Type;
     
    /**
     *
     * @var integer
     */
    public $Palete;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idArtupal", "Paketi", "Artupal");
		$this->belongsTo("Palete", "Palete", "idPalete");

    }

}
