<?php

/**
 * Elements
 *
 * Helps to build UI elements for the application
 */
class Elements extends Phalcon\Mvc\User\Component
{

    private $_headerMenu = array(
        'pull-left' => array(
            'users' => array(
                'caption' => 'Users',
                'action' => ''
            ),
            'visits' => array(
                'caption' => 'Visits',
                'action' => ''
            ),
            'xml' => array(
                'caption' => 'XML Upload',
                'action' => ''
            ),
            'search' => array(
                'caption' => 'Search',
                'action' => ''
            ),
        ),
        'pull-right' => array(
            'users' => array(
                'caption' => 'Log In',
                'action' => ''
            ),
        )
    );

    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu()
    {

        $auth = $this->session->get('auth');
        if ($auth) {
            $this->_headerMenu['pull-right']['users'] = array(
                'caption' => 'Log Out',
                'action' => 'logout'
            );
        } else {
            unset($this->_headerMenu['pull-left']['users']);
            unset($this->_headerMenu['pull-left']['visits']);
            unset($this->_headerMenu['pull-left']['xml']);
        }

        echo '<div class="nav-collapse">';
        $controllerName = $this->view->getControllerName();
        foreach ($this->_headerMenu as $position => $menu) {
            echo '<ul class="nav ', $position, '">';
            foreach ($menu as $controller => $option) {
                if ($controllerName == $controller) {
                    echo '<li class="active">';
                } else {
                    echo '<li>';
                }
                echo Phalcon\Tag::linkTo($controller.'/'.$option['action'], $option['caption']);
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '</div>';
    }
}