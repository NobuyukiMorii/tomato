<?php
App::uses('AppController', 'Controller');
/**
 * ItemDetailTws Controller
 *
 * @property ItemDetailTw $ItemDetailTw
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ItemDetailTwsController extends AppController {

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
		$this->ItemDetailTw->recursive = 0;
		$this->set('itemDetailTws', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid item detail tw'));
		}
		$options = array('conditions' => array('ItemDetailTw.' . $this->ItemDetailTw->primaryKey => $id));
		$this->set('itemDetailTw', $this->ItemDetailTw->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemDetailTw->create();
			if ($this->ItemDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The item detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail tw could not be saved. Please, try again.'));
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
		if (!$this->ItemDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid item detail tw'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The item detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail tw could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemDetailTw.' . $this->ItemDetailTw->primaryKey => $id));
			$this->request->data = $this->ItemDetailTw->find('first', $options);
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
		$this->ItemDetailTw->id = $id;
		if (!$this->ItemDetailTw->exists()) {
			throw new NotFoundException(__('Invalid item detail tw'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemDetailTw->delete()) {
			$this->Flash->success(__('The item detail tw has been deleted.'));
		} else {
			$this->Flash->error(__('The item detail tw could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ItemDetailTw->recursive = 0;
		$this->set('itemDetailTws', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ItemDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid item detail tw'));
		}
		$options = array('conditions' => array('ItemDetailTw.' . $this->ItemDetailTw->primaryKey => $id));
		$this->set('itemDetailTw', $this->ItemDetailTw->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ItemDetailTw->create();
			if ($this->ItemDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The item detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail tw could not be saved. Please, try again.'));
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
		if (!$this->ItemDetailTw->exists($id)) {
			throw new NotFoundException(__('Invalid item detail tw'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemDetailTw->save($this->request->data)) {
				$this->Flash->success(__('The item detail tw has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail tw could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemDetailTw.' . $this->ItemDetailTw->primaryKey => $id));
			$this->request->data = $this->ItemDetailTw->find('first', $options);
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
		$this->ItemDetailTw->id = $id;
		if (!$this->ItemDetailTw->exists()) {
			throw new NotFoundException(__('Invalid item detail tw'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemDetailTw->delete()) {
			$this->Flash->success(__('The item detail tw has been deleted.'));
		} else {
			$this->Flash->error(__('The item detail tw could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
