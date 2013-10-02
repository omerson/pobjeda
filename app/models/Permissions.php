<?php


class Permissions extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idPermissions;
     
    /**
     *
     * @var integer
     */
    public $Profiles;
     
    /**
     *
     * @var string
     */
    public $resource;
     
    /**
     *
     * @var string
     */
    public $action;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("Profiles", "Profiles", "idProfiles");

    }

}
