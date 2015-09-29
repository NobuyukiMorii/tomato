<?php
App::uses('AppController', 'Controller');
/**
 * PhotoSizes Controller
 *
 * @property PhotoSize $PhotoSize
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PhotoSizesController extends AppController {

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
		$this->PhotoSize->recursive = 0;
		$this->set('photoSizes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PhotoSize->exists($id)) {
			throw new NotFoundException(__('Invalid photo size'));
		}
		$options = array('conditions' => array('PhotoSize.' . $this->PhotoSize->primaryKey => $id));
		$this->set('photoSize', $this->PhotoSize->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PhotoSize->create();
			if ($this->PhotoSize->save($this->request->data)) {
				$this->Flash->success(__('The photo size has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The photo size could not be saved. Please, try again.'));
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
		if (!$this->PhotoSize->exists($id)) {
			throw new NotFoundException(__('Invalid photo size'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PhotoSize->save($this->request->data)) {
				$this->Flash->success(__('The photo size has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The photo size could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PhotoSize.' . $this->PhotoSize->primaryKey => $id));
			$this->request->data = $this->PhotoSize->find('first', $options);
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
		$this->PhotoSize->id = $id;
		if (!$this->PhotoSize->exists()) {
			throw new NotFoundException(__('Invalid photo size'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PhotoSize->delete()) {
			$this->Flash->success(__('The photo size has been deleted.'));
		} else {
			$this->Flash->error(__('The photo size could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PhotoSize->recursive = 0;
		$this->set('photoSizes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PhotoSize->exists($id)) {
			throw new NotFoundException(__('Invalid photo size'));
		}
		$options = array('conditions' => array('PhotoSize.' . $this->PhotoSize->primaryKey => $id));
		$this->set('photoSize', $this->PhotoSize->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PhotoSize->create();
			if ($this->PhotoSize->save($this->request->data)) {
				$this->Flash->success(__('The photo size has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The photo size could not be saved. Please, try again.'));
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
		if (!$this->PhotoSize->exists($id)) {
			throw new NotFoundException(__('Invalid photo size'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PhotoSize->save($this->request->data)) {
				$this->Flash->success(__('The photo size has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The photo size could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PhotoSize.' . $this->PhotoSize->primaryKey => $id));
			$this->request->data = $this->PhotoSize->find('first', $options);
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
		$this->PhotoSize->id = $id;
		if (!$this->PhotoSize->exists()) {
			throw new NotFoundException(__('Invalid photo size'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PhotoSize->delete()) {
			$this->Flash->success(__('The photo size has been deleted.'));
		} else {
			$this->Flash->error(__('The photo size could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
