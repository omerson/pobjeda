<?php


class SearchParams extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idParams;
     
    /**
     *
     * @var integer
     */
    public $Search;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $value;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("Search", "SuccessSearch", "idSearch", array(
            'alias' => 'search'
        ));
    }

}
