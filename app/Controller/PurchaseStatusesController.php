<?php
App::uses('AppController', 'Controller');
/**
 * PurchaseStatuses Controller
 *
 * @property PurchaseStatus $PurchaseStatus
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PurchaseStatusesController extends AppController {

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
		$this->PurchaseStatus->recursive = 0;
		$this->set('purchaseStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PurchaseStatus->exists($id)) {
			throw new NotFoundException(__('Invalid purchase status'));
		}
		$options = array('conditions' => array('PurchaseStatus.' . $this->PurchaseStatus->primaryKey => $id));
		$this->set('purchaseStatus', $this->PurchaseStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PurchaseStatus->create();
			if ($this->PurchaseStatus->save($this->request->data)) {
				$this->Flash->success(__('The purchase status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The purchase status could not be saved. Please, try again.'));
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
		if (!$this->PurchaseStatus->exists($id)) {
			throw new NotFoundException(__('Invalid purchase status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PurchaseStatus->save($this->request->data)) {
				$this->Flash->success(__('The purchase status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The purchase status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PurchaseStatus.' . $this->PurchaseStatus->primaryKey => $id));
			$this->request->data = $this->PurchaseStatus->find('first', $options);
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
		$this->PurchaseStatus->id = $id;
		if (!$this->PurchaseStatus->exists()) {
			throw new NotFoundException(__('Invalid purchase status'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PurchaseStatus->delete()) {
			$this->Flash->success(__('The purchase status has been deleted.'));
		} else {
			$this->Flash->error(__('The purchase status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PurchaseStatus->recursive = 0;
		$this->set('purchaseStatuses', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PurchaseStatus->exists($id)) {
			throw new NotFoundException(__('Invalid purchase status'));
		}
		$options = array('conditions' => array('PurchaseStatus.' . $this->PurchaseStatus->primaryKey => $id));
		$this->set('purchaseStatus', $this->PurchaseStatus->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PurchaseStatus->create();
			if ($this->PurchaseStatus->save($this->request->data)) {
				$this->Flash->success(__('The purchase status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The purchase status could not be saved. Please, try again.'));
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
		if (!$this->PurchaseStatus->exists($id)) {
			throw new NotFoundException(__('Invalid purchase status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PurchaseStatus->save($this->request->data)) {
				$this->Flash->success(__('The purchase status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The purchase status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PurchaseStatus.' . $this->PurchaseStatus->primaryKey => $id));
			$this->request->data = $this->PurchaseStatus->find('first', $options);
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
		$this->PurchaseStatus->id = $id;
		if (!$this->PurchaseStatus->exists()) {
			throw new NotFoundException(__('Invalid purchase status'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PurchaseStatus->delete()) {
			$this->Flash->success(__('The purchase status has been deleted.'));
		} else {
			$this->Flash->error(__('The purchase status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
