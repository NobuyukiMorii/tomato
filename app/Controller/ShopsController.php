<?php
App::uses('AppController', 'Controller');
/**
 * Shops Controller
 *
 * @property Shop $Shop
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ShopsController extends AppController {

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
		$this->Shop->recursive = 0;
		$this->set('shops', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
		$this->set('shop', $this->Shop->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shop->create();
			if ($this->Shop->save($this->request->data)) {
				$this->Flash->success(__('The shop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop could not be saved. Please, try again.'));
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
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shop->save($this->request->data)) {
				$this->Flash->success(__('The shop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
			$this->request->data = $this->Shop->find('first', $options);
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
		$this->Shop->id = $id;
		if (!$this->Shop->exists()) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shop->delete()) {
			$this->Flash->success(__('The shop has been deleted.'));
		} else {
			$this->Flash->error(__('The shop could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Shop->recursive = 0;
		$this->set('shops', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
		$this->set('shop', $this->Shop->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Shop->create();
			if ($this->Shop->save($this->request->data)) {
				$this->Flash->success(__('The shop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop could not be saved. Please, try again.'));
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
		if (!$this->Shop->exists($id)) {
			throw new NotFoundException(__('Invalid shop'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shop->save($this->request->data)) {
				$this->Flash->success(__('The shop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shop.' . $this->Shop->primaryKey => $id));
			$this->request->data = $this->Shop->find('first', $options);
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
		$this->Shop->id = $id;
		if (!$this->Shop->exists()) {
			throw new NotFoundException(__('Invalid shop'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shop->delete()) {
			$this->Flash->success(__('The shop has been deleted.'));
		} else {
			$this->Flash->error(__('The shop could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
