<?php


class RememberTokens extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idTokens;
     
    /**
     *
     * @var integer
     */
    public $User;
     
    /**
     *
     * @var string
     */
    public $token;
     
    /**
     *
     * @var string
     */
    public $userAgent;
     
    /**
     *
     * @var integer
     */
    public $createdAt;
     
}
