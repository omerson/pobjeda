<?php

class UsersController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Users');
        parent::initialize();
    }

	public function indexAction()
	{
        if (!$this->request->isPost()) {
            Phalcon\Tag::setDefault('username', 'admin');
            Phalcon\Tag::setDefault('password', 'admin');
        }
	}

	public function loginAction()
	{
		if ($this->request->isPost()) {

			$user = Users::findFirst(array(
				'username = :username: and password = :password:',
				'bind' => array(
					'username' => $this->request->getPost("username"),
					'password' => sha1($this->request->getPost("password"))
				)
			));

			if ($user === false){
				$this->flash->error("Incorrect credentials");
				return $this->forward('users/');
			}

			$this->session->set('auth', $user->idUsers);

			$this->flash->success("You've been successfully logged in");
		}

		return $this->forward('xml/');		
	}

	public function logoutAction()
	{
		$this->session->remove('auth');
        $this->flash->success('Goodbye!');
		return $this->forward('users/');
	}
}