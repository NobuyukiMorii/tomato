<?php
App::uses('AppController', 'Controller');
/**
 * CompanyDetailEns Controller
 *
 * @property CompanyDetailEn $CompanyDetailEn
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompanyDetailEnsController extends AppController {

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
		$this->CompanyDetailEn->recursive = 0;
		$this->set('companyDetailEns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid company detail en'));
		}
		$options = array('conditions' => array('CompanyDetailEn.' . $this->CompanyDetailEn->primaryKey => $id));
		$this->set('companyDetailEn', $this->CompanyDetailEn->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyDetailEn->create();
			if ($this->CompanyDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The company detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail en could not be saved. Please, try again.'));
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
		if (!$this->CompanyDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid company detail en'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The company detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail en could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyDetailEn.' . $this->CompanyDetailEn->primaryKey => $id));
			$this->request->data = $this->CompanyDetailEn->find('first', $options);
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
		$this->CompanyDetailEn->id = $id;
		if (!$this->CompanyDetailEn->exists()) {
			throw new NotFoundException(__('Invalid company detail en'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyDetailEn->delete()) {
			$this->Flash->success(__('The company detail en has been deleted.'));
		} else {
			$this->Flash->error(__('The company detail en could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CompanyDetailEn->recursive = 0;
		$this->set('companyDetailEns', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompanyDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid company detail en'));
		}
		$options = array('conditions' => array('CompanyDetailEn.' . $this->CompanyDetailEn->primaryKey => $id));
		$this->set('companyDetailEn', $this->CompanyDetailEn->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompanyDetailEn->create();
			if ($this->CompanyDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The company detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail en could not be saved. Please, try again.'));
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
		if (!$this->CompanyDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid company detail en'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The company detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company detail en could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyDetailEn.' . $this->CompanyDetailEn->primaryKey => $id));
			$this->request->data = $this->CompanyDetailEn->find('first', $options);
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
		$this->CompanyDetailEn->id = $id;
		if (!$this->CompanyDetailEn->exists()) {
			throw new NotFoundException(__('Invalid company detail en'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyDetailEn->delete()) {
			$this->Flash->success(__('The company detail en has been deleted.'));
		} else {
			$this->Flash->error(__('The company detail en could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
