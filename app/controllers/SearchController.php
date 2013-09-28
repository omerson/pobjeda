<?php

class SearchController extends ControllerBase
{
	public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Search');
        parent::initialize();
    }

    public function indexAction()    
    {
    	return $this->forward('index/');
    }

}

