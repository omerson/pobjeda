<?php
use Phalcon\Tag,
	Phalcon\Mvc\Model\Criteria,
	Phalcon\Paginator\Adapter\Model as Paginator;


class UsersController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Tag::setTitle('Users');
        parent::initialize();
    }

	public function indexAction()
	{
		$this->persistent->conditions = null;
		$this->view->form = new UsersForm();
	}	

	public function signupAction()
	{
		$form = new SignUpForm();

		if ($this->request->isPost()) {

			if ($form->isValid($this->request->getPost()) != false) {

				$user = new Users();

				$user->assign(array(
					'name' => $this->request->getPost('name', 'striptags'),
					'email' => $this->request->getPost('email'),
					'password' => $this->security->hash($this->request->getPost('password')),
					'profilesId' => 2
				));

				if ($user->save()) {
					return $this->forward('index/');
				}

				$this->flash->error($user->getMessages());
			}
		}

		$this->view->form = $form;
	}

	public function loginAction()
	{
		$form = new LoginForm();

		try {

			if (!$this->request->isPost()) {

				if ($this->auth->hasRememberMe()) {
					return $this->auth->loginWithRememberMe();
				}

			} else {

				if ($form->isValid($this->request->getPost()) == false) {
					foreach ($form->getMessages() as $message) {
						$this->flash->error($message);
					}
				} else {

					$this->auth->check(array(
						'email' => $this->request->getPost('email'),
						'password' => $this->request->getPost('password'),
						'remember' => $this->request->getPost('remember')
					));

					return $this->forward('xml/');		
				}
			}

		} catch (Exception $e) {
			$this->flash->error($e->getMessage());
		}

		$this->view->form = $form;
	}

	public function logoutAction()
	{
		$user = $this->auth->getUser();

		$successLogouts = new SuccessLogouts();
		$successLogouts->User = $user->idUsers;;
		$successLogouts->ipAddress = $this->request->getClientAddress();
		$successLogouts->userAgent = $this->request->getUserAgent();

		if (!$successLogouts->save()) {
			$this->flash->error($successLogouts->getMessages());
		} 

		$this->session->remove('auth');
        $this->flash->success('Goodbye!');
		return $this->forward('users/');
	}


	/**
	 * Searches for users
	 */
	public function searchAction()
	{
		$numberPage = 1;
		if ($this->request->isPost()) {
			$query = Criteria::fromInput($this->di, 'Users', $this->request->getPost());			
			$this->persistent->searchParams = $query->getParams();
		} else {
			$numberPage = $this->request->getQuery("page", "int");
		}
		
		$parameters = array();
		if ($this->persistent->searchParams) {
			$parameters = $this->persistent->searchParams;
		}

		$users = Users::find($parameters);
		if (count($users) == 0) {
			$this->flash->notice("The search did not find any users");
			return $this->forward('index/');
			
		}

		$paginator = new Paginator(array(
			"data" => $users,
			"limit" => 10,
			"page" => $numberPage
		));

		$this->view->page = $paginator->getPaginate();
	}

	/**
	 * Creates a User
	 *
	 */
	public function createAction()
	{
		if ($this->request->isPost()) {

			$user = new Users();

			$user->assign(array(				
				'Profiles' => $this->request->getPost('Profiles', 'int'),
				'email' => $this->request->getPost('email', 'email'),
				'mobile' => $this->request->getPost('mobile'),

				// Generated constant values
				'name' => "tempname",
				'surname' => "tempsurname",
				'username' => "tempusername",
				'password' => 'admin',
				'mustChangePassword' => 'Y'				
			));

			if (!$user->save()) {
				$this->flash->error($user->getMessages());
			} else {

				$this->flash->success("User was created successfully");

				Tag::resetInput();
			}
		}

		$this->view->form = new UsersForm(null);
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

		$this->view->user = $user;
		$this->view->form = new UsersForm($user, array('edit' => true));
	}

	/**
	 * Deletes a User
	 *
	 * @param int $id
	 */
	public function deleteAction($id)
	{

		$user = Users::findFirstByIdUsers($id);
		if (!$user) {
			$this->flash->error("User was not found");
			return $this->dispatcher->forward(array('action' => 'index'));
		}

		if (!$user->delete()) {
			$this->flash->error($user->getMessages());
		} else {
			$this->flash->success("User was deleted");
		}

		return $this->forward('index/');
	}

	/**
	 * Users must use this action to change its password
	 *
	 */
	public function changePasswordAction()
	{
		$form = new ChangePasswordForm();

		if ($this->request->isPost()) {

			if (!$form->isValid($this->request->getPost())) {

				foreach ($form->getMessages() as $message) {
					$this->flash->error($message);
				}

			} else {

				$user = $this->auth->getUser();

				//$user->password = $this->security->hash($this->request->getPost('password'));
				$user->password = $this->request->getPost('password');
				$user->mustChangePassword = 'N';

				$user->save();

				$passwordChange = new PasswordChanges();
				$passwordChange->User = $user->idUsers;
				$passwordChange->ipAddress = $this->request->getClientAddress();
				$passwordChange->userAgent = $this->request->getUserAgent();

				if (!$passwordChange->save()) {
					$this->flash->error($passwordChange->getMessages());
				} else {
					$this->flash->success('Your password was successfully changed');
					Tag::resetInput();
				}
			}
		}

		$this->view->form = $form;
	}

	/**
	 * Shows the forgot password form
	 */
	public function forgotPasswordAction()
	{
		$form = new ForgotPasswordForm();

		if ($this->request->isPost()) {

			if ($form->isValid($this->request->getPost()) == false) {
				foreach ($form->getMessages() as $message) {
					$this->flash->error($message);
				}
			} else {

				$user = Users::findFirstByEmail($this->request->getPost('email'));
				if (!$user) {
					$this->flash->success('There is no account associated to this email');
				} else {

					$resetPassword = new ResetPasswords();
					$resetPassword->usersId = $user->id;
					if ($resetPassword->save()) {
						$this->flash->success('Success! Please check your messages for an email reset password');
					} else {
						foreach ($resetPassword->getMessages() as $message) {
							$this->flash->error($message);
						}
					}
				}
			}
		}

		$this->view->form = $form;
	}

}
