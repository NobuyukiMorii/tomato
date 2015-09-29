<?php
App::uses('AppController', 'Controller');
/**
 * UserPhotos Controller
 *
 * @property UserPhoto $UserPhoto
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserPhotosController extends AppController {

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
		$this->UserPhoto->recursive = 0;
		$this->set('userPhotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid user photo'));
		}
		$options = array('conditions' => array('UserPhoto.' . $this->UserPhoto->primaryKey => $id));
		$this->set('userPhoto', $this->UserPhoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserPhoto->create();
			if ($this->UserPhoto->save($this->request->data)) {
				$this->Flash->success(__('The user photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user photo could not be saved. Please, try again.'));
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
		if (!$this->UserPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid user photo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserPhoto->save($this->request->data)) {
				$this->Flash->success(__('The user photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserPhoto.' . $this->UserPhoto->primaryKey => $id));
			$this->request->data = $this->UserPhoto->find('first', $options);
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
		$this->UserPhoto->id = $id;
		if (!$this->UserPhoto->exists()) {
			throw new NotFoundException(__('Invalid user photo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserPhoto->delete()) {
			$this->Flash->success(__('The user photo has been deleted.'));
		} else {
			$this->Flash->error(__('The user photo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserPhoto->recursive = 0;
		$this->set('userPhotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid user photo'));
		}
		$options = array('conditions' => array('UserPhoto.' . $this->UserPhoto->primaryKey => $id));
		$this->set('userPhoto', $this->UserPhoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserPhoto->create();
			if ($this->UserPhoto->save($this->request->data)) {
				$this->Flash->success(__('The user photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user photo could not be saved. Please, try again.'));
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
		if (!$this->UserPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid user photo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserPhoto->save($this->request->data)) {
				$this->Flash->success(__('The user photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserPhoto.' . $this->UserPhoto->primaryKey => $id));
			$this->request->data = $this->UserPhoto->find('first', $options);
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
		$this->UserPhoto->id = $id;
		if (!$this->UserPhoto->exists()) {
			throw new NotFoundException(__('Invalid user photo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserPhoto->delete()) {
			$this->Flash->success(__('The user photo has been deleted.'));
		} else {
			$this->Flash->error(__('The user photo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
