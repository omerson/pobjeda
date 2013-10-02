<?php


use Phalcon\Forms\Form,
	Phalcon\Forms\Element\Text,
	Phalcon\Forms\Element\Hidden,
	Phalcon\Forms\Element\Password,
	Phalcon\Forms\Element\Submit,
	Phalcon\Forms\Element\Select,
	Phalcon\Forms\Element\Check,
	Phalcon\Validation\Validator\PresenceOf,
	Phalcon\Validation\Validator\Email;


class UsersForm extends Form
{

	public function initialize($entity=null, $options=null)
	{

		//In edition the id is hidden
		if (isset($options['edit']) && $options['edit']) {
			$id = new Hidden('idUsers');
		} else {
			$id = new Text('idUsers');
		}

		$this->add($id);

		$this->add(new Text('username'));

		$this->add(new Text('email'));

		$this->add(new Text('name'));

		$this->add(new Text('surname'));

		$this->add(new Text('mobile'));

		$this->add(new Select('Profiles', Profiles::find('active = "Y"'), array(
			'using' => array('idProfiles', 'name'),
			'useEmpty' => true,
			'emptyText' => '...',
			'emptyValue' => ''
		)));

		
		$this->add(new Select('banned', array(
			'Y' => 'Yes',
			'N' => 'No'
		)));

		$this->add(new Select('suspended', array(
			'Y' => 'Yes',
			'N' => 'No'
		)));

		$this->add(new Select('active', array(
			'Y' => 'Yes',
			'N' => 'No'
		)));

	}

}