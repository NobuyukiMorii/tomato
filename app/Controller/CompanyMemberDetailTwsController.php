<?php
App::uses('AppController', 'Controller');
/**
 * CompanyMemberDetailTws Controller
 *
 * @property CompanyMemberDetailTw $CompanyMemberDetailTw
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompanyMemberDetailTwsController extends AppController {

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
		$this->CompanyMemberDetailTw->recursive = 0;
		$this->set('companyMemberDetailTws', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyMemberDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail tw'));
		}
		$options = array('conditions' => array('CompanyMemberDetailTw.' . $this->CompanyMemberDetailTw->primaryKey => $id));
		$this->set('companyMemberDetailTw', $this->CompanyMemberDetailTw->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyMemberDetailTw->create();
			if ($this->CompanyMemberDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The company member detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail tw could not be saved. Please, try again.'));
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
		if (!$this->CompanyMemberDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail tw'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyMemberDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The company member detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail tw could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyMemberDetailTw.' . $this->CompanyMemberDetailTw->primaryKey => $id));
			$this->request->data = $this->CompanyMemberDetailTw->find('first', $options);
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
		$this->CompanyMemberDetailTw->id = $id;
		if (!$this->CompanyMemberDetailTw->exists()) {
			throw new NotFoundException(__('Invalid company member detail tw'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyMemberDetailTw->delete()) {
			$this->Flash->success(__('The company member detail tw has been deleted.'));
		} else {
			$this->Flash->error(__('The company member detail tw could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CompanyMemberDetailTw->recursive = 0;
		$this->set('companyMemberDetailTws', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompanyMemberDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail tw'));
		}
		$options = array('conditions' => array('CompanyMemberDetailTw.' . $this->CompanyMemberDetailTw->primaryKey => $id));
		$this->set('companyMemberDetailTw', $this->CompanyMemberDetailTw->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompanyMemberDetailTw->create();
			if ($this->CompanyMemberDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The company member detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail tw could not be saved. Please, try again.'));
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
		if (!$this->CompanyMemberDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail tw'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyMemberDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The company member detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail tw could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyMemberDetailTw.' . $this->CompanyMemberDetailTw->primaryKey => $id));
			$this->request->data = $this->CompanyMemberDetailTw->find('first', $options);
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
		$this->CompanyMemberDetailTw->id = $id;
		if (!$this->CompanyMemberDetailTw->exists()) {
			throw new NotFoundException(__('Invalid company member detail tw'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyMemberDetailTw->delete()) {
			$this->Flash->success(__('The company member detail tw has been deleted.'));
		} else {
			$this->Flash->error(__('The company member detail tw could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
