<?php
App::uses('AppController', 'Controller');
/**
 * CompanyDetailJps Controller
 *
 * @property CompanyDetailJp $CompanyDetailJp
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompanyDetailJpsController extends AppController {

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
		$this->CompanyDetailJp->recursive = 0;
		$this->set('companyDetailJps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid company detail jp'));
		}
		$options = array('conditions' => array('CompanyDetailJp.' . $this->CompanyDetailJp->primaryKey => $id));
		$this->set('companyDetailJp', $this->CompanyDetailJp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyDetailJp->create();
			if ($this->CompanyDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The company detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail jp could not be saved. Please, try again.'));
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
		if (!$this->CompanyDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid company detail jp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The company detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail jp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyDetailJp.' . $this->CompanyDetailJp->primaryKey => $id));
			$this->request->data = $this->CompanyDetailJp->find('first', $options);
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
		$this->CompanyDetailJp->id = $id;
		if (!$this->CompanyDetailJp->exists()) {
			throw new NotFoundException(__('Invalid company detail jp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyDetailJp->delete()) {
			$this->Flash->success(__('The company detail jp has been deleted.'));
		} else {
			$this->Flash->error(__('The company detail jp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CompanyDetailJp->recursive = 0;
		$this->set('companyDetailJps', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompanyDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid company detail jp'));
		}
		$options = array('conditions' => array('CompanyDetailJp.' . $this->CompanyDetailJp->primaryKey => $id));
		$this->set('companyDetailJp', $this->CompanyDetailJp->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompanyDetailJp->create();
			if ($this->CompanyDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The company detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail jp could not be saved. Please, try again.'));
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
		if (!$this->CompanyDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid company detail jp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The company detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail jp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyDetailJp.' . $this->CompanyDetailJp->primaryKey => $id));
			$this->request->data = $this->CompanyDetailJp->find('first', $options);
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
		$this->CompanyDetailJp->id = $id;
		if (!$this->CompanyDetailJp->exists()) {
			throw new NotFoundException(__('Invalid company detail jp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyDetailJp->delete()) {
			$this->Flash->success(__('The company detail jp has been deleted.'));
		} else {
			$this->Flash->error(__('The company detail jp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
