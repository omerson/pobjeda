<?php

use Phalcon\Mvc\Model,
    Phalcon\Mvc\Model\Validator\Uniqueness;


class Users extends Model
{

    /**
     *
     * @var integer
     */
    public $idUsers;
     
    /**
     *
     * @var string
     */
    public $username;
     
    /**
     *
     * @var string
     */
    public $password;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $surname;
     
    /**
     *
     * @var string
     */
    public $email;
     
    /**
     *
     * @var string
     */
    public $mustChangePassword;
     
    /**
     *
     * @var integer
     */
    public $Profiles;
     
    /**
     *
     * @var string
     */
    public $banned;
     
    /**
     *
     * @var string
     */
    public $mobile;
     
    /**
     *
     * @var string
     */
    public $suspended;
     
    /**
     *
     * @var string
     */
    public $active;
     
    /**
     * Before create the user assign a password
     */
    public function beforeValidationOnCreate()
    {
        if (empty($this->password)) {

            //Generate a plain temporary password
            //$tempPassword = preg_replace('/[^a-zA-Z0-9]/', '', base64_encode(openssl_random_pseudo_bytes(12)));

            //The user must change its password in first login
            //$this->mustChangePassword = 'Y';

            //Use this password as default
            //$this->password = $this->getDI()->getSecurity()->hash($tempPassword);
            //$this->password = 'admin';

        } else {
            //The user must not change its password in first login
            $this->mustChangePassword = 'N';
        }

        //The account must be confirmed via e-mail
        $this->active = 'A';

        //The account is not suspended by default
        $this->suspended = 'N';

        //The account is not banned by default
        $this->banned = 'N';
    }
     
    /**
     * Validations and business logic
     */
    public function validation()
    {
        $this->validate(new Uniqueness(
            array(
                "field"   => "email",
                "message" => "The email is already registered"
            )
        ));

        return $this->validationHasFailed() != true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany("idUsers", "EmailConfirmations", "User", array(
            'alias' => 'emailConfirmations',
            'foreignKey' => array(
                'message' => 'User cannot be deleted because he/she has activity in the system'
            )
        ));

        $this->hasMany("idUsers", "FailedLogins", "User", array(
            'alias' => 'failedLogins',
            'foreignKey' => array(
                'message' => 'User cannot be deleted because he/she has activity in the system'
            )
        ));

        $this->hasMany("idUsers", "Order", "User", array(
            'alias' => 'order',
            'foreignKey' => array(
                'message' => 'User cannot be deleted because he/she has activity in the system'
            )
        ));

        $this->hasMany("idUsers", "PasswordChanges", "User", array(
            'alias' => 'passwordChanges',
            'foreignKey' => array(
                'message' => 'User cannot be deleted because he/she has activity in the system'
            )
        ));

        $this->hasMany("idUsers", "ResetPasswords", "User", array(
            'alias' => 'resetPasswords',
            'foreignKey' => array(
                'message' => 'User cannot be deleted because he/she has activity in the system'
            )
        ));

        $this->hasMany("idUsers", "SuccessLogins", "User", array(
            'alias' => 'successLogins',
            'foreignKey' => array(
                'message' => 'User cannot be deleted because he/she has activity in the system'
            )
        ));

        $this->hasMany("idUsers", "SuccessLogouts", "User", array(
            'alias' => 'successLogouts',
            'foreignKey' => array(
                'message' => 'User cannot be deleted because he/she has activity in the system'
            )
        ));


        $this->hasMany("idUsers", "SuccessSearch", "User", array(
            'alias' => 'successSearch',
            'foreignKey' => array(
                'message' => 'User cannot be deleted because he/she has activity in the system'
            )
        ));


        $this->belongsTo("Profiles", "Profiles", "idProfiles", array(
            'alias' => 'profile',
            'reusable' => true
        ));

    }

}
