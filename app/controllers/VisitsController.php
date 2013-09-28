<?php

class VisitsController extends ControllerBase
{
	public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Visits');
        parent::initialize();
    }

    public function indexAction()    
    {
    }

}

