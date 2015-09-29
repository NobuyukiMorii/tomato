<?php
App::uses('AppController', 'Controller');
/**
 * CompanyDetailTws Controller
 *
 * @property CompanyDetailTw $CompanyDetailTw
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompanyDetailTwsController extends AppController {

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
		$this->CompanyDetailTw->recursive = 0;
		$this->set('companyDetailTws', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid company detail tw'));
		}
		$options = array('conditions' => array('CompanyDetailTw.' . $this->CompanyDetailTw->primaryKey => $id));
		$this->set('companyDetailTw', $this->CompanyDetailTw->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyDetailTw->create();
			if ($this->CompanyDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The company detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail tw could not be saved. Please, try again.'));
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
		if (!$this->CompanyDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid company detail tw'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The company detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail tw could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyDetailTw.' . $this->CompanyDetailTw->primaryKey => $id));
			$this->request->data = $this->CompanyDetailTw->find('first', $options);
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
		$this->CompanyDetailTw->id = $id;
		if (!$this->CompanyDetailTw->exists()) {
			throw new NotFoundException(__('Invalid company detail tw'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyDetailTw->delete()) {
			$this->Flash->success(__('The company detail tw has been deleted.'));
		} else {
			$this->Flash->error(__('The company detail tw could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CompanyDetailTw->recursive = 0;
		$this->set('companyDetailTws', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompanyDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid company detail tw'));
		}
		$options = array('conditions' => array('CompanyDetailTw.' . $this->CompanyDetailTw->primaryKey => $id));
		$this->set('companyDetailTw', $this->CompanyDetailTw->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompanyDetailTw->create();
			if ($this->CompanyDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The company detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail tw could not be saved. Please, try again.'));
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
		if (!$this->CompanyDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid company detail tw'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The company detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail tw could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyDetailTw.' . $this->CompanyDetailTw->primaryKey => $id));
			$this->request->data = $this->CompanyDetailTw->find('first', $options);
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
		$this->CompanyDetailTw->id = $id;
		if (!$this->CompanyDetailTw->exists()) {
			throw new NotFoundException(__('Invalid company detail tw'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyDetailTw->delete()) {
			$this->Flash->success(__('The company detail tw has been deleted.'));
		} else {
			$this->Flash->error(__('The company detail tw could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
