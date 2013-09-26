<?php

use Phalcon\Events\Event,
	Phalcon\Mvc\User\Plugin,
	Phalcon\Mvc\Dispatcher,
	Phalcon\Acl,
	Phalcon\Acl\Adapter as Adapter,
	Phalcon\Acl\Resource as Resource,
	Phalcon\Acl\Role as Role;

/**
 * Security
 *
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class Security extends Plugin
{

	public function __construct($dependencyInjector)
	{
		$this->_dependencyInjector = $dependencyInjector;
	}

	public function getAcl()
	{
		if (!isset($this->persistent->acl)) {

			$acl = new Adapter\Memory();

			$acl->setDefaultAction(Acl::DENY);

			//Register roles
			$roles = array(
				'users' => new Role('Users'),
				'guests' => new Role('Guests')
			);
			foreach ($roles as $role) {
				$acl->addRole($role);
			}

			//Private area resources
			$privateResources = array(
				//'visits' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
				//'users' =>array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
				//'xml' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete')
			);
			foreach ($privateResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}

			//Public area resources
			$publicResources = array(
				//'search' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
				//'session' => array('index', 'register', 'start', 'end')
				
			);

			foreach ($publicResources as $resource => $actions) {
				$acl->addResource(new Resource($resource), $actions);
			}

			//Grant access to public areas to both users and guests
			foreach ($roles as $role) {
				foreach ($publicResources as $resource => $actions) {
					$acl->allow($role->getName(), $resource, '*');
				}
			}

			//Grant acess to private area to role Users
			foreach ($privateResources as $resource => $actions) {
				foreach ($actions as $action){
					$acl->allow('Users', $resource, $action);
				}
			}

			//The acl is stored in session, APC would be useful here too
			$this->persistent->acl = $acl;
		}

		return $this->persistent->acl;
	}

	/**
	 * This action is executed before execute any action in the application
	 */
	public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
	{

		$auth = $this->session->get('auth');
		if (!$auth){
			$role = 'Guests';
		} else {
			$role = 'Users';
		}

		$controller = $dispatcher->getControllerName();
		$action = $dispatcher->getActionName();

		$acl = $this->getAcl();

		$allowed = $acl->isAllowed($role, $controller, $action);
		if ($allowed != Acl::ALLOW) {
			$this->flash->error("You don't have access to this module");
			$this->flash->error($role);
			$this->flash->error($allowed);
			$this->flash->error($controller);
			$this->flash->error($allowed != Acl::ALLOW);

			$dispatcher->forward(
				array(
					'controller' => 'index',
					'action' => ''
				)
			);
			return false;
		}

		$this->flash->success("You have access to this module");
		$this->flash->success($role);
		$this->flash->success($allowed);
		$this->flash->success($controller);
		$this->flash->success($allowed != Acl::ALLOW);
	}
}
