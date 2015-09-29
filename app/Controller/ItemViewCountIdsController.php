<?php
App::uses('AppController', 'Controller');
/**
 * ItemViewCountIds Controller
 *
 * @property ItemViewCountId $ItemViewCountId
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ItemViewCountIdsController extends AppController {

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
		$this->ItemViewCountId->recursive = 0;
		$this->set('itemViewCountIds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemViewCountId->exists($id)) {
			throw new NotFoundException(__('Invalid item view count id'));
		}
		$options = array('conditions' => array('ItemViewCountId.' . $this->ItemViewCountId->primaryKey => $id));
		$this->set('itemViewCountId', $this->ItemViewCountId->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemViewCountId->create();
			if ($this->ItemViewCountId->save($this->request->data)) {
				$this->Flash->success(__('The item view count id has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item view count id could not be saved. Please, try again.'));
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
		if (!$this->ItemViewCountId->exists($id)) {
			throw new NotFoundException(__('Invalid item view count id'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemViewCountId->save($this->request->data)) {
				$this->Flash->success(__('The item view count id has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item view count id could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemViewCountId.' . $this->ItemViewCountId->primaryKey => $id));
			$this->request->data = $this->ItemViewCountId->find('first', $options);
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
		$this->ItemViewCountId->id = $id;
		if (!$this->ItemViewCountId->exists()) {
			throw new NotFoundException(__('Invalid item view count id'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemViewCountId->delete()) {
			$this->Flash->success(__('The item view count id has been deleted.'));
		} else {
			$this->Flash->error(__('The item view count id could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ItemViewCountId->recursive = 0;
		$this->set('itemViewCountIds', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ItemViewCountId->exists($id)) {
			throw new NotFoundException(__('Invalid item view count id'));
		}
		$options = array('conditions' => array('ItemViewCountId.' . $this->ItemViewCountId->primaryKey => $id));
		$this->set('itemViewCountId', $this->ItemViewCountId->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ItemViewCountId->create();
			if ($this->ItemViewCountId->save($this->request->data)) {
				$this->Flash->success(__('The item view count id has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item view count id could not be saved. Please, try again.'));
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
		if (!$this->ItemViewCountId->exists($id)) {
			throw new NotFoundException(__('Invalid item view count id'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemViewCountId->save($this->request->data)) {
				$this->Flash->success(__('The item view count id has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item view count id could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemViewCountId.' . $this->ItemViewCountId->primaryKey => $id));
			$this->request->data = $this->ItemViewCountId->find('first', $options);
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
		$this->ItemViewCountId->id = $id;
		if (!$this->ItemViewCountId->exists()) {
			throw new NotFoundException(__('Invalid item view count id'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemViewCountId->delete()) {
			$this->Flash->success(__('The item view count id has been deleted.'));
		} else {
			$this->Flash->error(__('The item view count id could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
