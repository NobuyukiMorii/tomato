<?php
App::uses('AppController', 'Controller');
/**
 * UserWishItems Controller
 *
 * @property UserWishItem $UserWishItem
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserWishItemsController extends AppController {

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
		$this->UserWishItem->recursive = 0;
		$this->set('userWishItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserWishItem->exists($id)) {
			throw new NotFoundException(__('Invalid user wish item'));
		}
		$options = array('conditions' => array('UserWishItem.' . $this->UserWishItem->primaryKey => $id));
		$this->set('userWishItem', $this->UserWishItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserWishItem->create();
			if ($this->UserWishItem->save($this->request->data)) {
				$this->Flash->success(__('The user wish item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user wish item could not be saved. Please, try again.'));
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
		if (!$this->UserWishItem->exists($id)) {
			throw new NotFoundException(__('Invalid user wish item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserWishItem->save($this->request->data)) {
				$this->Flash->success(__('The user wish item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user wish item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserWishItem.' . $this->UserWishItem->primaryKey => $id));
			$this->request->data = $this->UserWishItem->find('first', $options);
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
		$this->UserWishItem->id = $id;
		if (!$this->UserWishItem->exists()) {
			throw new NotFoundException(__('Invalid user wish item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserWishItem->delete()) {
			$this->Flash->success(__('The user wish item has been deleted.'));
		} else {
			$this->Flash->error(__('The user wish item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserWishItem->recursive = 0;
		$this->set('userWishItems', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserWishItem->exists($id)) {
			throw new NotFoundException(__('Invalid user wish item'));
		}
		$options = array('conditions' => array('UserWishItem.' . $this->UserWishItem->primaryKey => $id));
		$this->set('userWishItem', $this->UserWishItem->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserWishItem->create();
			if ($this->UserWishItem->save($this->request->data)) {
				$this->Flash->success(__('The user wish item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user wish item could not be saved. Please, try again.'));
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
		if (!$this->UserWishItem->exists($id)) {
			throw new NotFoundException(__('Invalid user wish item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserWishItem->save($this->request->data)) {
				$this->Flash->success(__('The user wish item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user wish item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserWishItem.' . $this->UserWishItem->primaryKey => $id));
			$this->request->data = $this->UserWishItem->find('first', $options);
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
		$this->UserWishItem->id = $id;
		if (!$this->UserWishItem->exists()) {
			throw new NotFoundException(__('Invalid user wish item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserWishItem->delete()) {
			$this->Flash->success(__('The user wish item has been deleted.'));
		} else {
			$this->Flash->error(__('The user wish item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
