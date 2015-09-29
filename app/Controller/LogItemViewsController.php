<?php
App::uses('AppController', 'Controller');
/**
 * LogItemViews Controller
 *
 * @property LogItemView $LogItemView
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class LogItemViewsController extends AppController {

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
		$this->LogItemView->recursive = 0;
		$this->set('logItemViews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LogItemView->exists($id)) {
			throw new NotFoundException(__('Invalid log item view'));
		}
		$options = array('conditions' => array('LogItemView.' . $this->LogItemView->primaryKey => $id));
		$this->set('logItemView', $this->LogItemView->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LogItemView->create();
			if ($this->LogItemView->save($this->request->data)) {
				$this->Flash->success(__('The log item view has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log item view could not be saved. Please, try again.'));
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
		if (!$this->LogItemView->exists($id)) {
			throw new NotFoundException(__('Invalid log item view'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LogItemView->save($this->request->data)) {
				$this->Flash->success(__('The log item view has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log item view could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LogItemView.' . $this->LogItemView->primaryKey => $id));
			$this->request->data = $this->LogItemView->find('first', $options);
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
		$this->LogItemView->id = $id;
		if (!$this->LogItemView->exists()) {
			throw new NotFoundException(__('Invalid log item view'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LogItemView->delete()) {
			$this->Flash->success(__('The log item view has been deleted.'));
		} else {
			$this->Flash->error(__('The log item view could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LogItemView->recursive = 0;
		$this->set('logItemViews', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LogItemView->exists($id)) {
			throw new NotFoundException(__('Invalid log item view'));
		}
		$options = array('conditions' => array('LogItemView.' . $this->LogItemView->primaryKey => $id));
		$this->set('logItemView', $this->LogItemView->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LogItemView->create();
			if ($this->LogItemView->save($this->request->data)) {
				$this->Flash->success(__('The log item view has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log item view could not be saved. Please, try again.'));
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
		if (!$this->LogItemView->exists($id)) {
			throw new NotFoundException(__('Invalid log item view'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LogItemView->save($this->request->data)) {
				$this->Flash->success(__('The log item view has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log item view could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LogItemView.' . $this->LogItemView->primaryKey => $id));
			$this->request->data = $this->LogItemView->find('first', $options);
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
		$this->LogItemView->id = $id;
		if (!$this->LogItemView->exists()) {
			throw new NotFoundException(__('Invalid log item view'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LogItemView->delete()) {
			$this->Flash->success(__('The log item view has been deleted.'));
		} else {
			$this->Flash->error(__('The log item view could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
