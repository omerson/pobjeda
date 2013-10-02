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


class SearchForm extends Form
{

	public function initialize()
	{

		$this->add(new Text('Shipment_Number'));

		$this->add(new Text('Palete_Number'));

		$this->add(new Text('Artupal_Number'));

		$this->add(new Text('Paketi_Number'));

		$this->add(new Text('Mikro_Number'));

		$this->add(new Text('Jedinicno_Number'));		

	}

}