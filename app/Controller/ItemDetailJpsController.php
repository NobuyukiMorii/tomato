<?php
App::uses('AppController', 'Controller');
/**
 * ItemDetailJps Controller
 *
 * @property ItemDetailJp $ItemDetailJp
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ItemDetailJpsController extends AppController {

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
		$this->ItemDetailJp->recursive = 0;
		$this->set('itemDetailJps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid item detail jp'));
		}
		$options = array('conditions' => array('ItemDetailJp.' . $this->ItemDetailJp->primaryKey => $id));
		$this->set('itemDetailJp', $this->ItemDetailJp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemDetailJp->create();
			if ($this->ItemDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The item detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail jp could not be saved. Please, try again.'));
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
		if (!$this->ItemDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid item detail jp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The item detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail jp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemDetailJp.' . $this->ItemDetailJp->primaryKey => $id));
			$this->request->data = $this->ItemDetailJp->find('first', $options);
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
		$this->ItemDetailJp->id = $id;
		if (!$this->ItemDetailJp->exists()) {
			throw new NotFoundException(__('Invalid item detail jp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemDetailJp->delete()) {
			$this->Flash->success(__('The item detail jp has been deleted.'));
		} else {
			$this->Flash->error(__('The item detail jp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ItemDetailJp->recursive = 0;
		$this->set('itemDetailJps', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ItemDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid item detail jp'));
		}
		$options = array('conditions' => array('ItemDetailJp.' . $this->ItemDetailJp->primaryKey => $id));
		$this->set('itemDetailJp', $this->ItemDetailJp->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ItemDetailJp->create();
			if ($this->ItemDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The item detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail jp could not be saved. Please, try again.'));
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
		if (!$this->ItemDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid item detail jp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The item detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail jp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemDetailJp.' . $this->ItemDetailJp->primaryKey => $id));
			$this->request->data = $this->ItemDetailJp->find('first', $options);
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
		$this->ItemDetailJp->id = $id;
		if (!$this->ItemDetailJp->exists()) {
			throw new NotFoundException(__('Invalid item detail jp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemDetailJp->delete()) {
			$this->Flash->success(__('The item detail jp has been deleted.'));
		} else {
			$this->Flash->error(__('The item detail jp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
