<?php
// app/Controller/AppController.php
class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'member_pages', 'action' => 'display', 'home'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
        ),
        'RequestHandler'
    );
    
    public function isAuthorized($user) {
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true; //Admin can access every action
    }
    	return true; // The rest don't
	}

    function beforeFilter() {
    }

}

