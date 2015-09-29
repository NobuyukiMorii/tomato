<?php
App::uses('AppController', 'Controller');
/**
 * ShopDetailJps Controller
 *
 * @property ShopDetailJp $ShopDetailJp
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ShopDetailJpsController extends AppController {

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
		$this->ShopDetailJp->recursive = 0;
		$this->set('shopDetailJps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ShopDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail jp'));
		}
		$options = array('conditions' => array('ShopDetailJp.' . $this->ShopDetailJp->primaryKey => $id));
		$this->set('shopDetailJp', $this->ShopDetailJp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShopDetailJp->create();
			if ($this->ShopDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The shop detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail jp could not be saved. Please, try again.'));
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
		if (!$this->ShopDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail jp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The shop detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail jp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopDetailJp.' . $this->ShopDetailJp->primaryKey => $id));
			$this->request->data = $this->ShopDetailJp->find('first', $options);
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
		$this->ShopDetailJp->id = $id;
		if (!$this->ShopDetailJp->exists()) {
			throw new NotFoundException(__('Invalid shop detail jp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopDetailJp->delete()) {
			$this->Flash->success(__('The shop detail jp has been deleted.'));
		} else {
			$this->Flash->error(__('The shop detail jp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ShopDetailJp->recursive = 0;
		$this->set('shopDetailJps', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ShopDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail jp'));
		}
		$options = array('conditions' => array('ShopDetailJp.' . $this->ShopDetailJp->primaryKey => $id));
		$this->set('shopDetailJp', $this->ShopDetailJp->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ShopDetailJp->create();
			if ($this->ShopDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The shop detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail jp could not be saved. Please, try again.'));
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
		if (!$this->ShopDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid shop detail jp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ShopDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The shop detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The shop detail jp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ShopDetailJp.' . $this->ShopDetailJp->primaryKey => $id));
			$this->request->data = $this->ShopDetailJp->find('first', $options);
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
		$this->ShopDetailJp->id = $id;
		if (!$this->ShopDetailJp->exists()) {
			throw new NotFoundException(__('Invalid shop detail jp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ShopDetailJp->delete()) {
			$this->Flash->success(__('The shop detail jp has been deleted.'));
		} else {
			$this->Flash->error(__('The shop detail jp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
