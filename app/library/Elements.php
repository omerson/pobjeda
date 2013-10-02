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
            'xml' => array(
                'caption' => 'XML Upload',
                'action' => ''
            ),
            'pretraga' => array(
                'caption' => 'Search',
                'action' => ''
            ),  
            'index' => array(
                'caption' => 'Sign Up',
                'action' => 'signup'
            )
        ),
        'pull-right' => array(
            'index' => array(
                'caption' => '',
                'action' => ''
            ),
            'users' => array(
                'caption' => 'Log In',
                'action' => 'login'
            )
        )
    );

    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu()
    {
        $username = $this->session->get('auth')['name'];
        $id = $this->session->get('auth')['idUsers'];
        $auth = $this->session->get('auth');
        if ($auth) {
            $this->_headerMenu['pull-right']['users'] = array(
                'caption' => 'Log Out',
                'action' => 'logout'
            );

            $this->_headerMenu['pull-right']['index'] = array(
                'caption' =>  $username,
                'action' => 'edit/'.$id
            );
            
        } else {
            unset($this->_headerMenu['pull-left']['users']);
            unset($this->_headerMenu['pull-left']['xml']);
            unset($this->_headerMenu['pull-left']['index']);
            unset($this->_headerMenu['pull-right']['index']);
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