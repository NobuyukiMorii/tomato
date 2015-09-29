<?php
App::uses('AppController', 'Controller');
/**
 * ItemStocks Controller
 *
 * @property ItemStock $ItemStock
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ItemStocksController extends AppController {

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
		$this->ItemStock->recursive = 0;
		$this->set('itemStocks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemStock->exists($id)) {
			throw new NotFoundException(__('Invalid item stock'));
		}
		$options = array('conditions' => array('ItemStock.' . $this->ItemStock->primaryKey => $id));
		$this->set('itemStock', $this->ItemStock->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemStock->create();
			if ($this->ItemStock->save($this->request->data)) {
				$this->Flash->success(__('The item stock has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item stock could not be saved. Please, try again.'));
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
		if (!$this->ItemStock->exists($id)) {
			throw new NotFoundException(__('Invalid item stock'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemStock->save($this->request->data)) {
				$this->Flash->success(__('The item stock has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item stock could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemStock.' . $this->ItemStock->primaryKey => $id));
			$this->request->data = $this->ItemStock->find('first', $options);
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
		$this->ItemStock->id = $id;
		if (!$this->ItemStock->exists()) {
			throw new NotFoundException(__('Invalid item stock'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemStock->delete()) {
			$this->Flash->success(__('The item stock has been deleted.'));
		} else {
			$this->Flash->error(__('The item stock could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ItemStock->recursive = 0;
		$this->set('itemStocks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ItemStock->exists($id)) {
			throw new NotFoundException(__('Invalid item stock'));
		}
		$options = array('conditions' => array('ItemStock.' . $this->ItemStock->primaryKey => $id));
		$this->set('itemStock', $this->ItemStock->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ItemStock->create();
			if ($this->ItemStock->save($this->request->data)) {
				$this->Flash->success(__('The item stock has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item stock could not be saved. Please, try again.'));
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
		if (!$this->ItemStock->exists($id)) {
			throw new NotFoundException(__('Invalid item stock'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemStock->save($this->request->data)) {
				$this->Flash->success(__('The item stock has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item stock could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemStock.' . $this->ItemStock->primaryKey => $id));
			$this->request->data = $this->ItemStock->find('first', $options);
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
		$this->ItemStock->id = $id;
		if (!$this->ItemStock->exists()) {
			throw new NotFoundException(__('Invalid item stock'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemStock->delete()) {
			$this->Flash->success(__('The item stock has been deleted.'));
		} else {
			$this->Flash->error(__('The item stock could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
