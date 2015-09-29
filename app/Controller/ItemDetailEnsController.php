<?php
App::uses('AppController', 'Controller');
/**
 * ItemDetailEns Controller
 *
 * @property ItemDetailEn $ItemDetailEn
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ItemDetailEnsController extends AppController {

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
		$this->ItemDetailEn->recursive = 0;
		$this->set('itemDetailEns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid item detail en'));
		}
		$options = array('conditions' => array('ItemDetailEn.' . $this->ItemDetailEn->primaryKey => $id));
		$this->set('itemDetailEn', $this->ItemDetailEn->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemDetailEn->create();
			if ($this->ItemDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The item detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail en could not be saved. Please, try again.'));
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
		if (!$this->ItemDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid item detail en'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The item detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail en could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemDetailEn.' . $this->ItemDetailEn->primaryKey => $id));
			$this->request->data = $this->ItemDetailEn->find('first', $options);
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
		$this->ItemDetailEn->id = $id;
		if (!$this->ItemDetailEn->exists()) {
			throw new NotFoundException(__('Invalid item detail en'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemDetailEn->delete()) {
			$this->Flash->success(__('The item detail en has been deleted.'));
		} else {
			$this->Flash->error(__('The item detail en could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ItemDetailEn->recursive = 0;
		$this->set('itemDetailEns', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ItemDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid item detail en'));
		}
		$options = array('conditions' => array('ItemDetailEn.' . $this->ItemDetailEn->primaryKey => $id));
		$this->set('itemDetailEn', $this->ItemDetailEn->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ItemDetailEn->create();
			if ($this->ItemDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The item detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail en could not be saved. Please, try again.'));
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
		if (!$this->ItemDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid item detail en'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The item detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail en could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemDetailEn.' . $this->ItemDetailEn->primaryKey => $id));
			$this->request->data = $this->ItemDetailEn->find('first', $options);
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
		$this->ItemDetailEn->id = $id;
		if (!$this->ItemDetailEn->exists()) {
			throw new NotFoundException(__('Invalid item detail en'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemDetailEn->delete()) {
			$this->Flash->success(__('The item detail en has been deleted.'));
		} else {
			$this->Flash->error(__('The item detail en could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
