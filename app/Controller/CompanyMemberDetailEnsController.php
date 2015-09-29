<?php
App::uses('AppController', 'Controller');
/**
 * CompanyMemberDetailEns Controller
 *
 * @property CompanyMemberDetailEn $CompanyMemberDetailEn
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompanyMemberDetailEnsController extends AppController {

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
		$this->CompanyMemberDetailEn->recursive = 0;
		$this->set('companyMemberDetailEns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyMemberDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail en'));
		}
		$options = array('conditions' => array('CompanyMemberDetailEn.' . $this->CompanyMemberDetailEn->primaryKey => $id));
		$this->set('companyMemberDetailEn', $this->CompanyMemberDetailEn->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyMemberDetailEn->create();
			if ($this->CompanyMemberDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The company member detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail en could not be saved. Please, try again.'));
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
		if (!$this->CompanyMemberDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail en'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyMemberDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The company member detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail en could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyMemberDetailEn.' . $this->CompanyMemberDetailEn->primaryKey => $id));
			$this->request->data = $this->CompanyMemberDetailEn->find('first', $options);
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
		$this->CompanyMemberDetailEn->id = $id;
		if (!$this->CompanyMemberDetailEn->exists()) {
			throw new NotFoundException(__('Invalid company member detail en'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyMemberDetailEn->delete()) {
			$this->Flash->success(__('The company member detail en has been deleted.'));
		} else {
			$this->Flash->error(__('The company member detail en could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CompanyMemberDetailEn->recursive = 0;
		$this->set('companyMemberDetailEns', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompanyMemberDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail en'));
		}
		$options = array('conditions' => array('CompanyMemberDetailEn.' . $this->CompanyMemberDetailEn->primaryKey => $id));
		$this->set('companyMemberDetailEn', $this->CompanyMemberDetailEn->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompanyMemberDetailEn->create();
			if ($this->CompanyMemberDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The company member detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail en could not be saved. Please, try again.'));
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
		if (!$this->CompanyMemberDetailEn->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail en'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyMemberDetailEn->save($this->request->data)) {
				$this->Flash->success(__('The company member detail en has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail en could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyMemberDetailEn.' . $this->CompanyMemberDetailEn->primaryKey => $id));
			$this->request->data = $this->CompanyMemberDetailEn->find('first', $options);
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
		$this->CompanyMemberDetailEn->id = $id;
		if (!$this->CompanyMemberDetailEn->exists()) {
			throw new NotFoundException(__('Invalid company member detail en'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyMemberDetailEn->delete()) {
			$this->Flash->success(__('The company member detail en has been deleted.'));
		} else {
			$this->Flash->error(__('The company member detail en could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
