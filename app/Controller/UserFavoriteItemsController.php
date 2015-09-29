<?php
App::uses('AppController', 'Controller');
/**
 * UserFavoriteItems Controller
 *
 * @property UserFavoriteItem $UserFavoriteItem
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserFavoriteItemsController extends AppController {

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
		$this->UserFavoriteItem->recursive = 0;
		$this->set('userFavoriteItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserFavoriteItem->exists($id)) {
			throw new NotFoundException(__('Invalid user favorite item'));
		}
		$options = array('conditions' => array('UserFavoriteItem.' . $this->UserFavoriteItem->primaryKey => $id));
		$this->set('userFavoriteItem', $this->UserFavoriteItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserFavoriteItem->create();
			if ($this->UserFavoriteItem->save($this->request->data)) {
				$this->Flash->success(__('The user favorite item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user favorite item could not be saved. Please, try again.'));
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
		if (!$this->UserFavoriteItem->exists($id)) {
			throw new NotFoundException(__('Invalid user favorite item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserFavoriteItem->save($this->request->data)) {
				$this->Flash->success(__('The user favorite item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user favorite item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserFavoriteItem.' . $this->UserFavoriteItem->primaryKey => $id));
			$this->request->data = $this->UserFavoriteItem->find('first', $options);
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
		$this->UserFavoriteItem->id = $id;
		if (!$this->UserFavoriteItem->exists()) {
			throw new NotFoundException(__('Invalid user favorite item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserFavoriteItem->delete()) {
			$this->Flash->success(__('The user favorite item has been deleted.'));
		} else {
			$this->Flash->error(__('The user favorite item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserFavoriteItem->recursive = 0;
		$this->set('userFavoriteItems', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserFavoriteItem->exists($id)) {
			throw new NotFoundException(__('Invalid user favorite item'));
		}
		$options = array('conditions' => array('UserFavoriteItem.' . $this->UserFavoriteItem->primaryKey => $id));
		$this->set('userFavoriteItem', $this->UserFavoriteItem->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserFavoriteItem->create();
			if ($this->UserFavoriteItem->save($this->request->data)) {
				$this->Flash->success(__('The user favorite item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user favorite item could not be saved. Please, try again.'));
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
		if (!$this->UserFavoriteItem->exists($id)) {
			throw new NotFoundException(__('Invalid user favorite item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserFavoriteItem->save($this->request->data)) {
				$this->Flash->success(__('The user favorite item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user favorite item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserFavoriteItem.' . $this->UserFavoriteItem->primaryKey => $id));
			$this->request->data = $this->UserFavoriteItem->find('first', $options);
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
		$this->UserFavoriteItem->id = $id;
		if (!$this->UserFavoriteItem->exists()) {
			throw new NotFoundException(__('Invalid user favorite item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserFavoriteItem->delete()) {
			$this->Flash->success(__('The user favorite item has been deleted.'));
		} else {
			$this->Flash->error(__('The user favorite item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
