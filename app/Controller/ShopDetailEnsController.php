<?php
App::uses('AppController', 'Controller');
/**
 * ShopDetailEns Controller
 *
 * @property ShopDetailEn $ShopDetailEn
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ShopDetailEnsController extends AppController {

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
		$this->ShopDetailEn->recursive = 0;
		$this->set('shopDetailEns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ShopDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail en'));
		}
		$options = array('conditions' => array('ShopDetailEn.' . $this->ShopDetailEn->primaryKey => $id));
		$this->set('shopDetailEn', $this->ShopDetailEn->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShopDetailEn->create();
			if ($this->ShopDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The shop detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail en could not be saved. Please, try again.'));
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
		if (!$this->ShopDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail en'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The shop detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail en could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopDetailEn.' . $this->ShopDetailEn->primaryKey => $id));
			$this->request->data = $this->ShopDetailEn->find('first', $options);
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
		$this->ShopDetailEn->id = $id;
		if (!$this->ShopDetailEn->exists()) {
			throw new NotFoundException(__('Invalid shop detail en'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopDetailEn->delete()) {
			$this->Flash->success(__('The shop detail en has been deleted.'));
		} else {
			$this->Flash->error(__('The shop detail en could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ShopDetailEn->recursive = 0;
		$this->set('shopDetailEns', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ShopDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail en'));
		}
		$options = array('conditions' => array('ShopDetailEn.' . $this->ShopDetailEn->primaryKey => $id));
		$this->set('shopDetailEn', $this->ShopDetailEn->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ShopDetailEn->create();
			if ($this->ShopDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The shop detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail en could not be saved. Please, try again.'));
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
		if (!$this->ShopDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail en'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The shop detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail en could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopDetailEn.' . $this->ShopDetailEn->primaryKey => $id));
			$this->request->data = $this->ShopDetailEn->find('first', $options);
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
		$this->ShopDetailEn->id = $id;
		if (!$this->ShopDetailEn->exists()) {
			throw new NotFoundException(__('Invalid shop detail en'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopDetailEn->delete()) {
			$this->Flash->success(__('The shop detail en has been deleted.'));
		} else {
			$this->Flash->error(__('The shop detail en could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
