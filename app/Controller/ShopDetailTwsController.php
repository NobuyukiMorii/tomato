<?php
App::uses('AppController', 'Controller');
/**
 * ShopDetailTws Controller
 *
 * @property ShopDetailTw $ShopDetailTw
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ShopDetailTwsController extends AppController {

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
		$this->ShopDetailTw->recursive = 0;
		$this->set('shopDetailTws', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ShopDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail tw'));
		}
		$options = array('conditions' => array('ShopDetailTw.' . $this->ShopDetailTw->primaryKey => $id));
		$this->set('shopDetailTw', $this->ShopDetailTw->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShopDetailTw->create();
			if ($this->ShopDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The shop detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail tw could not be saved. Please, try again.'));
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
		if (!$this->ShopDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail tw'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The shop detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail tw could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopDetailTw.' . $this->ShopDetailTw->primaryKey => $id));
			$this->request->data = $this->ShopDetailTw->find('first', $options);
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
		$this->ShopDetailTw->id = $id;
		if (!$this->ShopDetailTw->exists()) {
			throw new NotFoundException(__('Invalid shop detail tw'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopDetailTw->delete()) {
			$this->Flash->success(__('The shop detail tw has been deleted.'));
		} else {
			$this->Flash->error(__('The shop detail tw could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ShopDetailTw->recursive = 0;
		$this->set('shopDetailTws', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ShopDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail tw'));
		}
		$options = array('conditions' => array('ShopDetailTw.' . $this->ShopDetailTw->primaryKey => $id));
		$this->set('shopDetailTw', $this->ShopDetailTw->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ShopDetailTw->create();
			if ($this->ShopDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The shop detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail tw could not be saved. Please, try again.'));
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
		if (!$this->ShopDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail tw'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The shop detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail tw could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopDetailTw.' . $this->ShopDetailTw->primaryKey => $id));
			$this->request->data = $this->ShopDetailTw->find('first', $options);
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
		$this->ShopDetailTw->id = $id;
		if (!$this->ShopDetailTw->exists()) {
			throw new NotFoundException(__('Invalid shop detail tw'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopDetailTw->delete()) {
			$this->Flash->success(__('The shop detail tw has been deleted.'));
		} else {
			$this->Flash->error(__('The shop detail tw could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
