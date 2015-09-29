<?php
App::uses('AppController', 'Controller');
/**
 * CommentPhotos Controller
 *
 * @property CommentPhoto $CommentPhoto
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CommentPhotosController extends AppController {

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
		$this->CommentPhoto->recursive = 0;
		$this->set('commentPhotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CommentPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid comment photo'));
		}
		$options = array('conditions' => array('CommentPhoto.' . $this->CommentPhoto->primaryKey => $id));
		$this->set('commentPhoto', $this->CommentPhoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommentPhoto->create();
			if ($this->CommentPhoto->save($this->request->data)) {
				$this->Flash->success(__('The comment photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comment photo could not be saved. Please, try again.'));
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
		if (!$this->CommentPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid comment photo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CommentPhoto->save($this->request->data)) {
				$this->Flash->success(__('The comment photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comment photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CommentPhoto.' . $this->CommentPhoto->primaryKey => $id));
			$this->request->data = $this->CommentPhoto->find('first', $options);
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
		$this->CommentPhoto->id = $id;
		if (!$this->CommentPhoto->exists()) {
			throw new NotFoundException(__('Invalid comment photo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CommentPhoto->delete()) {
			$this->Flash->success(__('The comment photo has been deleted.'));
		} else {
			$this->Flash->error(__('The comment photo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CommentPhoto->recursive = 0;
		$this->set('commentPhotos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CommentPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid comment photo'));
		}
		$options = array('conditions' => array('CommentPhoto.' . $this->CommentPhoto->primaryKey => $id));
		$this->set('commentPhoto', $this->CommentPhoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CommentPhoto->create();
			if ($this->CommentPhoto->save($this->request->data)) {
				$this->Flash->success(__('The comment photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comment photo could not be saved. Please, try again.'));
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
		if (!$this->CommentPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid comment photo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CommentPhoto->save($this->request->data)) {
				$this->Flash->success(__('The comment photo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comment photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CommentPhoto.' . $this->CommentPhoto->primaryKey => $id));
			$this->request->data = $this->CommentPhoto->find('first', $options);
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
		$this->CommentPhoto->id = $id;
		if (!$this->CommentPhoto->exists()) {
			throw new NotFoundException(__('Invalid comment photo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CommentPhoto->delete()) {
			$this->Flash->success(__('The comment photo has been deleted.'));
		} else {
			$this->Flash->error(__('The comment photo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
