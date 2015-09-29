<?php
App::uses('AppController', 'Controller');
/**
 * UserDeliveryDestinations Controller
 *
 * @property UserDeliveryDestination $UserDeliveryDestination
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserDeliveryDestinationsController extends AppController {

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
		$this->UserDeliveryDestination->recursive = 0;
		$this->set('userDeliveryDestinations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserDeliveryDestination->exists($id)) {
			throw new NotFoundException(__('Invalid user delivery destination'));
		}
		$options = array('conditions' => array('UserDeliveryDestination.' . $this->UserDeliveryDestination->primaryKey => $id));
		$this->set('userDeliveryDestination', $this->UserDeliveryDestination->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserDeliveryDestination->create();
			if ($this->UserDeliveryDestination->save($this->request->data)) {
				$this->Flash->success(__('The user delivery destination has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user delivery destination could not be saved. Please, try again.'));
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
		if (!$this->UserDeliveryDestination->exists($id)) {
			throw new NotFoundException(__('Invalid user delivery destination'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserDeliveryDestination->save($this->request->data)) {
				$this->Flash->success(__('The user delivery destination has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user delivery destination could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserDeliveryDestination.' . $this->UserDeliveryDestination->primaryKey => $id));
			$this->request->data = $this->UserDeliveryDestination->find('first', $options);
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
		$this->UserDeliveryDestination->id = $id;
		if (!$this->UserDeliveryDestination->exists()) {
			throw new NotFoundException(__('Invalid user delivery destination'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserDeliveryDestination->delete()) {
			$this->Flash->success(__('The user delivery destination has been deleted.'));
		} else {
			$this->Flash->error(__('The user delivery destination could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserDeliveryDestination->recursive = 0;
		$this->set('userDeliveryDestinations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserDeliveryDestination->exists($id)) {
			throw new NotFoundException(__('Invalid user delivery destination'));
		}
		$options = array('conditions' => array('UserDeliveryDestination.' . $this->UserDeliveryDestination->primaryKey => $id));
		$this->set('userDeliveryDestination', $this->UserDeliveryDestination->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserDeliveryDestination->create();
			if ($this->UserDeliveryDestination->save($this->request->data)) {
				$this->Flash->success(__('The user delivery destination has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user delivery destination could not be saved. Please, try again.'));
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
		if (!$this->UserDeliveryDestination->exists($id)) {
			throw new NotFoundException(__('Invalid user delivery destination'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserDeliveryDestination->save($this->request->data)) {
				$this->Flash->success(__('The user delivery destination has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user delivery destination could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserDeliveryDestination.' . $this->UserDeliveryDestination->primaryKey => $id));
			$this->request->data = $this->UserDeliveryDestination->find('first', $options);
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
		$this->UserDeliveryDestination->id = $id;
		if (!$this->UserDeliveryDestination->exists()) {
			throw new NotFoundException(__('Invalid user delivery destination'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserDeliveryDestination->delete()) {
			$this->Flash->success(__('The user delivery destination has been deleted.'));
		} else {
			$this->Flash->error(__('The user delivery destination could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
