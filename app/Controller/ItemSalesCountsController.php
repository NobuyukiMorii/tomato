<?php
App::uses('AppController', 'Controller');
/**
 * ItemSalesCounts Controller
 *
 * @property ItemSalesCount $ItemSalesCount
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ItemSalesCountsController extends AppController {

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
		$this->ItemSalesCount->recursive = 0;
		$this->set('itemSalesCounts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemSalesCount->exists($id)) {
			throw new NotFoundException(__('Invalid item sales count'));
		}
		$options = array('conditions' => array('ItemSalesCount.' . $this->ItemSalesCount->primaryKey => $id));
		$this->set('itemSalesCount', $this->ItemSalesCount->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemSalesCount->create();
			if ($this->ItemSalesCount->save($this->request->data)) {
				$this->Flash->success(__('The item sales count has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item sales count could not be saved. Please, try again.'));
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
		if (!$this->ItemSalesCount->exists($id)) {
			throw new NotFoundException(__('Invalid item sales count'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemSalesCount->save($this->request->data)) {
				$this->Flash->success(__('The item sales count has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item sales count could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemSalesCount.' . $this->ItemSalesCount->primaryKey => $id));
			$this->request->data = $this->ItemSalesCount->find('first', $options);
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
		$this->ItemSalesCount->id = $id;
		if (!$this->ItemSalesCount->exists()) {
			throw new NotFoundException(__('Invalid item sales count'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemSalesCount->delete()) {
			$this->Flash->success(__('The item sales count has been deleted.'));
		} else {
			$this->Flash->error(__('The item sales count could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ItemSalesCount->recursive = 0;
		$this->set('itemSalesCounts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ItemSalesCount->exists($id)) {
			throw new NotFoundException(__('Invalid item sales count'));
		}
		$options = array('conditions' => array('ItemSalesCount.' . $this->ItemSalesCount->primaryKey => $id));
		$this->set('itemSalesCount', $this->ItemSalesCount->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ItemSalesCount->create();
			if ($this->ItemSalesCount->save($this->request->data)) {
				$this->Flash->success(__('The item sales count has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item sales count could not be saved. Please, try again.'));
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
		if (!$this->ItemSalesCount->exists($id)) {
			throw new NotFoundException(__('Invalid item sales count'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemSalesCount->save($this->request->data)) {
				$this->Flash->success(__('The item sales count has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item sales count could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemSalesCount.' . $this->ItemSalesCount->primaryKey => $id));
			$this->request->data = $this->ItemSalesCount->find('first', $options);
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
		$this->ItemSalesCount->id = $id;
		if (!$this->ItemSalesCount->exists()) {
			throw new NotFoundException(__('Invalid item sales count'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemSalesCount->delete()) {
			$this->Flash->success(__('The item sales count has been deleted.'));
		} else {
			$this->Flash->error(__('The item sales count could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
