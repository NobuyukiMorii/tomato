<?php
App::uses('AppController', 'Controller');
/**
 * UserFacebookLoginInfos Controller
 *
 * @property UserFacebookLoginInfo $UserFacebookLoginInfo
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserFacebookLoginInfosController extends AppController {

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
		$this->UserFacebookLoginInfo->recursive = 0;
		$this->set('userFacebookLoginInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserFacebookLoginInfo->exists($id)) {
			throw new NotFoundException(__('Invalid user facebook login info'));
		}
		$options = array('conditions' => array('UserFacebookLoginInfo.' . $this->UserFacebookLoginInfo->primaryKey => $id));
		$this->set('userFacebookLoginInfo', $this->UserFacebookLoginInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserFacebookLoginInfo->create();
			if ($this->UserFacebookLoginInfo->save($this->request->data)) {
				$this->Flash->success(__('The user facebook login info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user facebook login info could not be saved. Please, try again.'));
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
		if (!$this->UserFacebookLoginInfo->exists($id)) {
			throw new NotFoundException(__('Invalid user facebook login info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserFacebookLoginInfo->save($this->request->data)) {
				$this->Flash->success(__('The user facebook login info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user facebook login info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserFacebookLoginInfo.' . $this->UserFacebookLoginInfo->primaryKey => $id));
			$this->request->data = $this->UserFacebookLoginInfo->find('first', $options);
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
		$this->UserFacebookLoginInfo->id = $id;
		if (!$this->UserFacebookLoginInfo->exists()) {
			throw new NotFoundException(__('Invalid user facebook login info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserFacebookLoginInfo->delete()) {
			$this->Flash->success(__('The user facebook login info has been deleted.'));
		} else {
			$this->Flash->error(__('The user facebook login info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserFacebookLoginInfo->recursive = 0;
		$this->set('userFacebookLoginInfos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserFacebookLoginInfo->exists($id)) {
			throw new NotFoundException(__('Invalid user facebook login info'));
		}
		$options = array('conditions' => array('UserFacebookLoginInfo.' . $this->UserFacebookLoginInfo->primaryKey => $id));
		$this->set('userFacebookLoginInfo', $this->UserFacebookLoginInfo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserFacebookLoginInfo->create();
			if ($this->UserFacebookLoginInfo->save($this->request->data)) {
				$this->Flash->success(__('The user facebook login info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user facebook login info could not be saved. Please, try again.'));
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
		if (!$this->UserFacebookLoginInfo->exists($id)) {
			throw new NotFoundException(__('Invalid user facebook login info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserFacebookLoginInfo->save($this->request->data)) {
				$this->Flash->success(__('The user facebook login info has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user facebook login info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserFacebookLoginInfo.' . $this->UserFacebookLoginInfo->primaryKey => $id));
			$this->request->data = $this->UserFacebookLoginInfo->find('first', $options);
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
		$this->UserFacebookLoginInfo->id = $id;
		if (!$this->UserFacebookLoginInfo->exists()) {
			throw new NotFoundException(__('Invalid user facebook login info'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserFacebookLoginInfo->delete()) {
			$this->Flash->success(__('The user facebook login info has been deleted.'));
		} else {
			$this->Flash->error(__('The user facebook login info could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
