<?php
App::uses('AppController', 'Controller');
/**
 * CompanyMembers Controller
 *
 * @property CompanyMember $CompanyMember
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompanyMembersController extends AppController {

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
		$this->CompanyMember->recursive = 0;
		$this->set('companyMembers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyMember->exists($id)) {
			throw new NotFoundException(__('Invalid company member'));
		}
		$options = array('conditions' => array('CompanyMember.' . $this->CompanyMember->primaryKey => $id));
		$this->set('companyMember', $this->CompanyMember->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyMember->create();
			if ($this->CompanyMember->save($this->request->data)) {
				$this->Flash->success(__('The company member has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member could not be saved. Please, try again.'));
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
		if (!$this->CompanyMember->exists($id)) {
			throw new NotFoundException(__('Invalid company member'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyMember->save($this->request->data)) {
				$this->Flash->success(__('The company member has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyMember.' . $this->CompanyMember->primaryKey => $id));
			$this->request->data = $this->CompanyMember->find('first', $options);
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
		$this->CompanyMember->id = $id;
		if (!$this->CompanyMember->exists()) {
			throw new NotFoundException(__('Invalid company member'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyMember->delete()) {
			$this->Flash->success(__('The company member has been deleted.'));
		} else {
			$this->Flash->error(__('The company member could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CompanyMember->recursive = 0;
		$this->set('companyMembers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompanyMember->exists($id)) {
			throw new NotFoundException(__('Invalid company member'));
		}
		$options = array('conditions' => array('CompanyMember.' . $this->CompanyMember->primaryKey => $id));
		$this->set('companyMember', $this->CompanyMember->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompanyMember->create();
			if ($this->CompanyMember->save($this->request->data)) {
				$this->Flash->success(__('The company member has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member could not be saved. Please, try again.'));
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
		if (!$this->CompanyMember->exists($id)) {
			throw new NotFoundException(__('Invalid company member'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyMember->save($this->request->data)) {
				$this->Flash->success(__('The company member has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyMember.' . $this->CompanyMember->primaryKey => $id));
			$this->request->data = $this->CompanyMember->find('first', $options);
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
		$this->CompanyMember->id = $id;
		if (!$this->CompanyMember->exists()) {
			throw new NotFoundException(__('Invalid company member'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyMember->delete()) {
			$this->Flash->success(__('The company member has been deleted.'));
		} else {
			$this->Flash->error(__('The company member could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
