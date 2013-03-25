<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class MemberPagesController extends AppController {

function beforeFilter() {
	parent::beforeFilter();
}

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Member Pages';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$path = func_get_args();
		
		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		
		if ($path[$count - 1] == "form") {$this->layout = 'iframe';}
		if ($path[$count - 1] == "form2") {$this->layout = 'iframe';}
		if ($path[$count - 1] == "formstep1") {$this->layout = 'iframe';}
		if ($path[$count - 1] == "formstep2") {$this->layout = 'iframe';}
		
		$this->loadModel('User');
		$this->User->id = $this->Auth->user('id');
		$this->request->data = $this->User->read(null, $this->Auth->user('id'));
		$this->set("user", $this->User->read(null, $this->Auth->user('id')));
		
		$this->set("id", $this->Auth->user('id'));
		
		$this->loadModel('Email');
		
		$lastEmail = $this->Email->find('first', array('order' => array('Email.created DESC'),'conditions' => array('Email.admin =' => '1', 'Email.user_id =' => $this->Auth->user('id'))));
		$this->set("lastemail", $lastEmail);

		$this->loadModel('Textreferrals');
		$texts = $this->Textreferrals->find('all');

		$this->set("textreferrals", $texts);


		$this->loadModel('Text');
		$texts = $this->Text->find('all', array('order' => array('Text.created DESC'),'conditions' => array('Text.admin =' => '1', 'Text.user_id =' => $this->Auth->user('id'))));

		$this->set("texts", $texts);

		$this->loadModel('Mailer');
		$print = $this->Mailer->find('first', array('order' => array('Mailer.created DESC'),'conditions' => array('Mailer.admin =' => '1', 'Mailer.user_id =' => $this->Auth->user('id'))));

		$this->set("lastprint", $print);


		$this->loadModel('Group');		
		$groups = $this->Group->find('list');
		$this->set(compact('groups'));
		
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
}
