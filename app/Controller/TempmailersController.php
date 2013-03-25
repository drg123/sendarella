<?php
App::uses('AppController', 'Controller');
/**
 * Mailers Controller
 *
 * @property Mailer $Mailer
 */
class TempmailersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index($id = 0) {
	$this->layout = 'admin';
		$this->Tempmailer->recursive = 0;
		$this->paginate = array(
      		'limit' => 10
  		);
  		
  		$pending = $this->Tempmailer->find('all', array(
        	'conditions' => array('Tempmailer.sent =' => 0),
        	'order' => array('id' => 'asc')
    	));
    	  
    	$this->set('pending', $pending);
		$this->set('sent', $this->paginate('Tempmailer', array('Tempmailer.sent =' => 1)));

	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	
	$this->layout = null;
		$this->Tempmailer->id = $id;
		if (!$this->Tempmailer->exists()) {
			throw new NotFoundException(__('Invalid Mailer'));
		}
		$this->set('Tempmailer', $this->Tempmailer->read(null, $id));
		

				$temp = $this->Tempmailer->read(null, $id);
				$view_output = $temp['Tempmailer']['content'];
				
								
				$text = '%%CLINICNAME%% %%ADDRESS%% Phone: %%PHONE%%';
			
file_put_contents('/home/drgranat/public_html/app/webroot/htmls/newsletter.html', $view_output);

//exec('/home/drgranat/wkhtmltopdf --header-spacing 0 --margin-top 10 --header-html /home/drgranat/public_html/app/webroot/htmls/header.html  /home/drgranat/public_html/app/webroot/htmls/test.html /home/drgranat/public_html/app/webroot/pdfs/test.pdf');
exec("/home/drgranat/wkhtmltopdf --header-font-size 8 --header-spacing 2 --header-center '$text' /home/drgranat/public_html/app/webroot/htmls/newsletter.html /home/drgranat/public_html/app/webroot/pdfs/newsletter.pdf");
header("Location: /pdfs/newsletter.pdf");
exit;

		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$this->layout = 'admin';
		if ($this->request->is('post')) {

			$this->Tempmailer->create();
			if ($this->Tempmailer->save($this->request->data)) {
			
						if ($this->request->data['Tempmailer']['insert']['tmp_name'] != "") {
		
			$file = new File($this->request->data['Tempmailer']['insert']['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$id = $this->Tempmailer->id;
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/inserts/$id.docx", true);
	        $file->write($data);
    	    $file->close();
    	   
    	}

			if ($this->request->data['Tempmailer']['worddoc']['tmp_name'] != "") {
		
			$file = new File($this->request->data['Tempmailer']['worddoc']['tmp_name']);
			$data = $file->read();
        	$file->close();
        	
        	$id = $this->Tempmailer->id;
        	
        	$file = new File("/home/drgranat/public_html/app/webroot/mailers/$id.docx", true);
	        $file->write($data);
    	    $file->close();
    	   
    	}

			
				$this->Session->setFlash(__('The Mailer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Mailer could not be saved. Please, try again.'));
			}
		}
	}
	
/**
 * send method
 *
 * @param string $id
 * @return void
 */
	public function send($id = null) {
	$this->layout = 'admin';
		$this->Tempmailer->id = $id;
		if (!$this->Tempmailer->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$text = $this->Tempmailer->findById($id);
			

    		$this->loadModel('Mailer');
    		$this->loadModel('User');
    		
    		$users = $this->User->find('all');
    		foreach ($users as $user) {
    			$this->Mailer->create();
    			$this->Mailer->set('admin', 1);
    			$this->Mailer->set('originator', $id);
    			$this->Mailer->set('user_id', $user['User']['id']);
    			$this->Mailer->set('name', $text['Tempmailer']['name']);
    			$this->Mailer->set('content', $text['Tempmailer']['content']);
    			$this->Mailer->set('scheduledon', $text['Tempmailer']['scheduledon']);
    			$this->Mailer->save();
    		}
    		
    		$this->Tempmailer->set('sent', 1);
    		$this->Tempmailer->save();

			$this->Session->setFlash(__('The Mailer will now be sent to all users.'));
			$this->redirect(array('action' => 'index'));
		} else {
			throw new NotFoundException(__('Invalid action'));
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	$this->layout = 'admin';
		$this->Tempmailer->id = $id;
		if (!$this->Tempmailer->exists()) {
			throw new NotFoundException(__('Invalid Mailer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tempmailer->save($this->request->data)) {
				$this->Session->setFlash(__('The Mailer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Mailer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tempmailer->read(null, $id);
		}
		$this->set('mailer', $this->Tempmailer->read(null, $id));

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
		$this->Tempmailer->id = $id;
		if (!$this->Tempmailer->exists()) {
			throw new NotFoundException(__('Invalid Mailer'));
		}
		if ($this->Tempmailer->delete()) {
		
			$this->loadModel('Mailer');
			$this->Mailer->deleteAll(array('Mailer.originator' => $id));		
		
			$this->Session->setFlash(__('Mailer deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mailer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
		public function deleteall() {
	$this->layout = 'admin';
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
			$this->loadModel('Tempmailer');
			$this->Tempmailer->deleteAll('1 = 1');		
		
			$this->Session->setFlash(__('Texts deleted'));
			$this->redirect(array('action'=>'index'));
	}

}
