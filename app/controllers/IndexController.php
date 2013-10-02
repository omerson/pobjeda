<?php
use Phalcon\Tag,
	Phalcon\Mvc\Model\Criteria,
	Phalcon\Paginator\Adapter\Model as Paginator;

class IndexController extends ControllerBase
{
	public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }

    public function indexAction()
    {

    }

	/**
	 * Saves the user from the 'edit' action
	 *
	 */
	public function editAction($id)
	{
		$user = Users::findFirstByIdUsers($id);
		if (!$user) {
			$this->flash->error("User was not found");
			return $this->dispatcher->forward(array('action' => 'index'));
		}

		if ($this->request->isPost()) {

			$user->assign(array(
				'username' => $this->request->getPost('username', 'striptags'),
				'Profiles' => $this->request->getPost('Profiles', 'int'),
				'email' => $this->request->getPost('email', 'email'),
				'banned' => $this->request->getPost('banned'),
				'name' => $this->request->getPost('name'),
				'surname' => $this->request->getPost('surname'),
				'suspended' => $this->request->getPost('suspended'),
				'active' => $this->request->getPost('active')
			));

			if (!$user->save()) {
				$this->flash->error($user->getMessages());
			} else {
				$this->flash->success("User was updated successfully");
				Tag::resetInput();
			}
		}

		$this->session->set('auth', array(
			'idUsers' => $user->idUsers,
			'name' => $user->username,
			'profile' => $user->profile->name
		));

		$this->view->user = $user;
		$this->view->form = new UsersForm($user, array('edit' => true));
	}

	public function signupAction()
	{	
		if ($this->request->isPost()) {
			
			$user = new Users();

			$user->assign(array(
				'name' => $this->request->getPost('name', 'striptags'),
				'email' => $this->request->getPost('email'),
				'password' => $this->security->hash($this->request->getPost('password')),
				'username' => $this->request->getPost('username'),
				'surname' => $this->request->getPost('surname'),
				'Profiles' => $this->request->getPost('Profiles', 'int'),
				'mobile' => $this->request->getPost('mobile'),
				'banned' => $this->request->getPost('banned'),
				'suspended' => $this->request->getPost('suspended'),
				'active' => $this->request->getPost('active')
			));

			if (!$user->save()) {
				$this->flash->error($user->getMessages());					
			}else{
				$this->flash->success("User was created successfully");

				Tag::resetInput();
			}			
		}

		$this->view->form = new SignUpForm();
	}

}

