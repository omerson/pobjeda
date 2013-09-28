<?php


class Mikro extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idMikro;
     
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
     * @var string
     */
    public $Quantity;
     
    /**
     *
     * @var string
     */
    public $Unit_Of_Measure;
     
    /**
     *
     * @var string
     */
    public $Count_Of_Units;
     
    /**
     *
     * @var integer
     */
    public $Number_Of_Items;
     
    /**
     *
     * @var integer
     */
    public $Paketi;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idMikro", "Jedinicno", "Mikro");
		$this->belongsTo("Paketi", "Paketi", "idPaketi");

    }

}
