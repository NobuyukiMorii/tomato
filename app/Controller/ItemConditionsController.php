<?php
App::uses('AppController', 'Controller');
/**
 * ItemConditions Controller
 *
 * @property ItemCondition $ItemCondition
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ItemConditionsController extends AppController {

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
		$this->ItemCondition->recursive = 0;
		$this->set('itemConditions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemCondition->exists($id)) {
			throw new NotFoundException(__('Invalid item condition'));
		}
		$options = array('conditions' => array('ItemCondition.' . $this->ItemCondition->primaryKey => $id));
		$this->set('itemCondition', $this->ItemCondition->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemCondition->create();
			if ($this->ItemCondition->save($this->request->data)) {
				$this->Flash->success(__('The item condition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item condition could not be saved. Please, try again.'));
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
		if (!$this->ItemCondition->exists($id)) {
			throw new NotFoundException(__('Invalid item condition'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemCondition->save($this->request->data)) {
				$this->Flash->success(__('The item condition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item condition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemCondition.' . $this->ItemCondition->primaryKey => $id));
			$this->request->data = $this->ItemCondition->find('first', $options);
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
		$this->ItemCondition->id = $id;
		if (!$this->ItemCondition->exists()) {
			throw new NotFoundException(__('Invalid item condition'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemCondition->delete()) {
			$this->Flash->success(__('The item condition has been deleted.'));
		} else {
			$this->Flash->error(__('The item condition could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ItemCondition->recursive = 0;
		$this->set('itemConditions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ItemCondition->exists($id)) {
			throw new NotFoundException(__('Invalid item condition'));
		}
		$options = array('conditions' => array('ItemCondition.' . $this->ItemCondition->primaryKey => $id));
		$this->set('itemCondition', $this->ItemCondition->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ItemCondition->create();
			if ($this->ItemCondition->save($this->request->data)) {
				$this->Flash->success(__('The item condition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item condition could not be saved. Please, try again.'));
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
		if (!$this->ItemCondition->exists($id)) {
			throw new NotFoundException(__('Invalid item condition'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemCondition->save($this->request->data)) {
				$this->Flash->success(__('The item condition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item condition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemCondition.' . $this->ItemCondition->primaryKey => $id));
			$this->request->data = $this->ItemCondition->find('first', $options);
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
		$this->ItemCondition->id = $id;
		if (!$this->ItemCondition->exists()) {
			throw new NotFoundException(__('Invalid item condition'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemCondition->delete()) {
			$this->Flash->success(__('The item condition has been deleted.'));
		} else {
			$this->Flash->error(__('The item condition could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
