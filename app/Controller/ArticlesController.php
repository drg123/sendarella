<?php
App::uses('AppController', 'Controller', 'File');
App::uses('File', 'Utility'); 
/**
 * Emails Controller
 *
 * @property Email $Email
 */
class ArticlesController extends AppController {
var $uses = array('Article', 'Newsletter', 'User', 'File');

public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('view'); // Letting users register themselves
    $this->Auth->allow('view2'); // Letting users register themselves
   }

/**
 * index method
 *
 * @return void
 */

	public function index($user_id = 1, $id = null) {
	$this->layout = 'admin';
		$this->Article->recursive = 0;
		$this->paginate = array(
      		'conditions' => array('Article.newsletter_id' => $id),
			'limit' => 10
  		);
  		$this->set('newsletter', $this->Newsletter->find('first', array('conditions' => array('Newsletter.id' => $id))));	
		$this->set('pending', $this->paginate('Article'));

	}

/**
 * view2 method
 *
 * @param string $id
 * @return void
 */
	public function view2($user_id = 1, $id = null) {
	$this->layout = null;
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
  		$this->set('user', $this->User->find('first', array('conditions' => array('User.id' => $user_id))));			
		$this->set('email', $this->Article->read(null, $id));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	$this->layout = 'admin';
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->set('email', $this->Article->read(null, $id));
	}

/**
 * send method
 *
 * @param string $id
 * @return void
 */
	public function send($id = null) {
	$this->layout = 'admin';
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$email = $this->Article->findById($id);
			
//			include('../Vendor/cakemail.php');			
//			$mailingid = $email['Email']['mailingid'];
//			$group_id = $email['Email']['group_id'];
//			
//			$data = array(
//    			'user_key' => $this->Auth->user('cakekey'),
//    			'mailing_id' => $mailingid,
//    			'date' => $email['Email']['scheduledon']
//    		);
//    		$reply = cakeMail('Mailing','schedule', $data);		
//			if (!$reply) {echo "Error: Cannot send out Email. Please contact support."; exit;}    		
    		
    		$this->loadModel('Email');
    		$this->loadModel('User');
    		
    		$users = $this->User->find('all');
    		foreach ($users as $user) {
    			$this->Email->create();
    			$this->Email->set('user_id', $user['User']['id']);
    			$this->Email->set('subject', $email['Article']['subject']);
    			$this->Email->set('text_content', $email['Article']['text_content']);
    			$this->Email->set('html_content', $email['Article']['html_content']);
    			$this->Email->set('scheduledon', $email['Article']['scheduledon']);
    			$this->Email->save();
    		}
    		
    		$this->Article->set('sent', 1);
    		$this->Article->save();

			$this->Session->setFlash(__('The email will now be sent to all the users.'));
			$this->redirect(array('action' => 'index'));
		} else {
			throw new NotFoundException(__('Invalid action'));
		}
	}


/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
	$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Article->create();
			
		if ((isset($this->request->data['Article']['image']['tmp_name'])) && ($this->request->data['Article']['image']['tmp_name'] != "")) {

			$image = $this->request->data['Article']['image'];
}			
			
			unset($this->request->data['Article']['image']);
			
			if ($this->Article->save($this->request->data)) {

		if ($image) {
		
			$file = new File($image['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/img/public/articles/".$this->Article->id.".jpg", true);
			$file->delete();
	        $file->write($data);
    	    $file->close();
    	   
    	}


			
				$this->Session->setFlash(__('The article has been saved'));
				$this->redirect('/admin/articles/'.$this->Auth->user('cakekey').'/'.$this->request->data['Article']['newsletter_id']);
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'));
			}
		}
	$this->set('id', $id);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	$this->layout = 'admin';
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		if ((isset($this->request->data['Article']['image']['tmp_name'])) && ($this->request->data['Article']['image']['tmp_name'] != "")) {

			$image = $this->request->data['Article']['image'];
}			
			
			unset($this->request->data['Article']['image']);
			
			if ($this->Article->save($this->request->data)) {

		if (isset($image)) {
		
			$file = new File($image['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/img/public/articles/".$this->Article->id.".jpg", true);
			$file->delete();
	        $file->write($data);
    	    $file->close();
    	   
    	}

		
		
				$this->Session->setFlash(__('The article has been saved'));
				$this->redirect('/admin/articles/'.$this->Auth->user('cakekey').'/'.$this->request->data['Article']['newsletter_id']);
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Article->read(null, $id);
			$this->set('email', $this->Article->read(null, $id));
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
	$this->layout = 'admin';
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('Article deleted'));
			$this->redirect('/admin/newsletters/');
		}
		$this->Session->setFlash(__('Article was not deleted'));
		$this->redirect('/admin/newsletters/');
	}
}
