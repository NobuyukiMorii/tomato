<?php
App::uses('AppController', 'Controller');
/**
 * LogUserLogins Controller
 *
 * @property LogUserLogin $LogUserLogin
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class LogUserLoginsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LogUserLogin->recursive = 0;
		$this->set('logUserLogins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LogUserLogin->exists($id)) {
			throw new NotFoundException(__('Invalid log user login'));
		}
		$options = array('conditions' => array('LogUserLogin.' . $this->LogUserLogin->primaryKey => $id));
		$this->set('logUserLogin', $this->LogUserLogin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LogUserLogin->create();
			if ($this->LogUserLogin->save($this->request->data)) {
				$this->Flash->success(__('The log user login has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log user login could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LogUserLogin->exists($id)) {
			throw new NotFoundException(__('Invalid log user login'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LogUserLogin->save($this->request->data)) {
				$this->Flash->success(__('The log user login has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log user login could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LogUserLogin.' . $this->LogUserLogin->primaryKey => $id));
			$this->request->data = $this->LogUserLogin->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LogUserLogin->id = $id;
		if (!$this->LogUserLogin->exists()) {
			throw new NotFoundException(__('Invalid log user login'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LogUserLogin->delete()) {
			$this->Flash->success(__('The log user login has been deleted.'));
		} else {
			$this->Flash->error(__('The log user login could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LogUserLogin->recursive = 0;
		$this->set('logUserLogins', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LogUserLogin->exists($id)) {
			throw new NotFoundException(__('Invalid log user login'));
		}
		$options = array('conditions' => array('LogUserLogin.' . $this->LogUserLogin->primaryKey => $id));
		$this->set('logUserLogin', $this->LogUserLogin->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LogUserLogin->create();
			if ($this->LogUserLogin->save($this->request->data)) {
				$this->Flash->success(__('The log user login has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log user login could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LogUserLogin->exists($id)) {
			throw new NotFoundException(__('Invalid log user login'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LogUserLogin->save($this->request->data)) {
				$this->Flash->success(__('The log user login has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log user login could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LogUserLogin.' . $this->LogUserLogin->primaryKey => $id));
			$this->request->data = $this->LogUserLogin->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LogUserLogin->id = $id;
		if (!$this->LogUserLogin->exists()) {
			throw new NotFoundException(__('Invalid log user login'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LogUserLogin->delete()) {
			$this->Flash->success(__('The log user login has been deleted.'));
		} else {
			$this->Flash->error(__('The log user login could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
