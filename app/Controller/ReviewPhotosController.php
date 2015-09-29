<?php
App::uses('AppController', 'Controller');
/**
 * ReviewPhotos Controller
 *
 * @property ReviewPhoto $ReviewPhoto
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ReviewPhotosController extends AppController {

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
		$this->ReviewPhoto->recursive = 0;
		$this->set('reviewPhotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReviewPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid review photo'));
		}
		$options = array('conditions' => array('ReviewPhoto.' . $this->ReviewPhoto->primaryKey => $id));
		$this->set('reviewPhoto', $this->ReviewPhoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReviewPhoto->create();
			if ($this->ReviewPhoto->save($this->request->data)) {
				$this->Flash->success(__('The review photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The review photo could not be saved. Please, try again.'));
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
		if (!$this->ReviewPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid review photo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReviewPhoto->save($this->request->data)) {
				$this->Flash->success(__('The review photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The review photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReviewPhoto.' . $this->ReviewPhoto->primaryKey => $id));
			$this->request->data = $this->ReviewPhoto->find('first', $options);
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
		$this->ReviewPhoto->id = $id;
		if (!$this->ReviewPhoto->exists()) {
			throw new NotFoundException(__('Invalid review photo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ReviewPhoto->delete()) {
			$this->Flash->success(__('The review photo has been deleted.'));
		} else {
			$this->Flash->error(__('The review photo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ReviewPhoto->recursive = 0;
		$this->set('reviewPhotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ReviewPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid review photo'));
		}
		$options = array('conditions' => array('ReviewPhoto.' . $this->ReviewPhoto->primaryKey => $id));
		$this->set('reviewPhoto', $this->ReviewPhoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ReviewPhoto->create();
			if ($this->ReviewPhoto->save($this->request->data)) {
				$this->Flash->success(__('The review photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The review photo could not be saved. Please, try again.'));
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
		if (!$this->ReviewPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid review photo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReviewPhoto->save($this->request->data)) {
				$this->Flash->success(__('The review photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The review photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReviewPhoto.' . $this->ReviewPhoto->primaryKey => $id));
			$this->request->data = $this->ReviewPhoto->find('first', $options);
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
		$this->ReviewPhoto->id = $id;
		if (!$this->ReviewPhoto->exists()) {
			throw new NotFoundException(__('Invalid review photo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ReviewPhoto->delete()) {
			$this->Flash->success(__('The review photo has been deleted.'));
		} else {
			$this->Flash->error(__('The review photo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
