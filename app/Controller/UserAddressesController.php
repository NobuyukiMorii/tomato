<?php
App::uses('AppController', 'Controller');
/**
 * UserAddresses Controller
 *
 * @property UserAddress $UserAddress
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserAddressesController extends AppController {

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
		$this->UserAddress->recursive = 0;
		$this->set('userAddresses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserAddress->exists($id)) {
			throw new NotFoundException(__('Invalid user address'));
		}
		$options = array('conditions' => array('UserAddress.' . $this->UserAddress->primaryKey => $id));
		$this->set('userAddress', $this->UserAddress->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserAddress->create();
			if ($this->UserAddress->save($this->request->data)) {
				$this->Flash->success(__('The user address has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user address could not be saved. Please, try again.'));
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
		if (!$this->UserAddress->exists($id)) {
			throw new NotFoundException(__('Invalid user address'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserAddress->save($this->request->data)) {
				$this->Flash->success(__('The user address has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user address could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserAddress.' . $this->UserAddress->primaryKey => $id));
			$this->request->data = $this->UserAddress->find('first', $options);
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
		$this->UserAddress->id = $id;
		if (!$this->UserAddress->exists()) {
			throw new NotFoundException(__('Invalid user address'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserAddress->delete()) {
			$this->Flash->success(__('The user address has been deleted.'));
		} else {
			$this->Flash->error(__('The user address could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserAddress->recursive = 0;
		$this->set('userAddresses', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserAddress->exists($id)) {
			throw new NotFoundException(__('Invalid user address'));
		}
		$options = array('conditions' => array('UserAddress.' . $this->UserAddress->primaryKey => $id));
		$this->set('userAddress', $this->UserAddress->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserAddress->create();
			if ($this->UserAddress->save($this->request->data)) {
				$this->Flash->success(__('The user address has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user address could not be saved. Please, try again.'));
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
		if (!$this->UserAddress->exists($id)) {
			throw new NotFoundException(__('Invalid user address'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserAddress->save($this->request->data)) {
				$this->Flash->success(__('The user address has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user address could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserAddress.' . $this->UserAddress->primaryKey => $id));
			$this->request->data = $this->UserAddress->find('first', $options);
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
		$this->UserAddress->id = $id;
		if (!$this->UserAddress->exists()) {
			throw new NotFoundException(__('Invalid user address'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserAddress->delete()) {
			$this->Flash->success(__('The user address has been deleted.'));
		} else {
			$this->Flash->error(__('The user address could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
