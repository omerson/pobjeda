<?php


class Paketi extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idPaketi;
     
    /**
     *
     * @var string
     */
    public $Item_Number;
     
    /**
     *
     * @var string
     */
    public $Item_Type;
     
    /**
     *
     * @var string
     */
    public $Unique_Number;
     
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
    public $Production_Date;
     
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
     * @var double
     */
    public $Count_Of_Units;
     
    /**
     *
     * @var integer
     */
    public $Number_Of_Items;
     
    /**
     *
     * @var string
     */
    public $GS1_Code;
     
    /**
     *
     * @var string
     */
    public $Country_Code;
     
    /**
     *
     * @var string
     */
    public $Site_Code;
     
    /**
     *
     * @var integer
     */
    public $Artupal;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idPaketi", "Mikro", "Paketi");
		$this->belongsTo("Artupal", "Artupal", "idArtupal");

    }

}
