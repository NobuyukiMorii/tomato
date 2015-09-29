<?php
App::uses('AppController', 'Controller');
/**
 * ShopTypes Controller
 *
 * @property ShopType $ShopType
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ShopTypesController extends AppController {

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
		$this->ShopType->recursive = 0;
		$this->set('shopTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ShopType->exists($id)) {
			throw new NotFoundException(__('Invalid shop type'));
		}
		$options = array('conditions' => array('ShopType.' . $this->ShopType->primaryKey => $id));
		$this->set('shopType', $this->ShopType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShopType->create();
			if ($this->ShopType->save($this->request->data)) {
				$this->Flash->success(__('The shop type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop type could not be saved. Please, try again.'));
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
		if (!$this->ShopType->exists($id)) {
			throw new NotFoundException(__('Invalid shop type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopType->save($this->request->data)) {
				$this->Flash->success(__('The shop type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopType.' . $this->ShopType->primaryKey => $id));
			$this->request->data = $this->ShopType->find('first', $options);
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
		$this->ShopType->id = $id;
		if (!$this->ShopType->exists()) {
			throw new NotFoundException(__('Invalid shop type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopType->delete()) {
			$this->Flash->success(__('The shop type has been deleted.'));
		} else {
			$this->Flash->error(__('The shop type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ShopType->recursive = 0;
		$this->set('shopTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ShopType->exists($id)) {
			throw new NotFoundException(__('Invalid shop type'));
		}
		$options = array('conditions' => array('ShopType.' . $this->ShopType->primaryKey => $id));
		$this->set('shopType', $this->ShopType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ShopType->create();
			if ($this->ShopType->save($this->request->data)) {
				$this->Flash->success(__('The shop type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop type could not be saved. Please, try again.'));
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
		if (!$this->ShopType->exists($id)) {
			throw new NotFoundException(__('Invalid shop type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopType->save($this->request->data)) {
				$this->Flash->success(__('The shop type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopType.' . $this->ShopType->primaryKey => $id));
			$this->request->data = $this->ShopType->find('first', $options);
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
		$this->ShopType->id = $id;
		if (!$this->ShopType->exists()) {
			throw new NotFoundException(__('Invalid shop type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopType->delete()) {
			$this->Flash->success(__('The shop type has been deleted.'));
		} else {
			$this->Flash->error(__('The shop type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
