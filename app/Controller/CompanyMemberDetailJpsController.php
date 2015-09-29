<?php
App::uses('AppController', 'Controller');
/**
 * CompanyMemberDetailJps Controller
 *
 * @property CompanyMemberDetailJp $CompanyMemberDetailJp
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CompanyMemberDetailJpsController extends AppController {

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
		$this->CompanyMemberDetailJp->recursive = 0;
		$this->set('companyMemberDetailJps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyMemberDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail jp'));
		}
		$options = array('conditions' => array('CompanyMemberDetailJp.' . $this->CompanyMemberDetailJp->primaryKey => $id));
		$this->set('companyMemberDetailJp', $this->CompanyMemberDetailJp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyMemberDetailJp->create();
			if ($this->CompanyMemberDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The company member detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail jp could not be saved. Please, try again.'));
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
		if (!$this->CompanyMemberDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail jp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyMemberDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The company member detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail jp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyMemberDetailJp.' . $this->CompanyMemberDetailJp->primaryKey => $id));
			$this->request->data = $this->CompanyMemberDetailJp->find('first', $options);
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
		$this->CompanyMemberDetailJp->id = $id;
		if (!$this->CompanyMemberDetailJp->exists()) {
			throw new NotFoundException(__('Invalid company member detail jp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyMemberDetailJp->delete()) {
			$this->Flash->success(__('The company member detail jp has been deleted.'));
		} else {
			$this->Flash->error(__('The company member detail jp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CompanyMemberDetailJp->recursive = 0;
		$this->set('companyMemberDetailJps', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CompanyMemberDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail jp'));
		}
		$options = array('conditions' => array('CompanyMemberDetailJp.' . $this->CompanyMemberDetailJp->primaryKey => $id));
		$this->set('companyMemberDetailJp', $this->CompanyMemberDetailJp->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CompanyMemberDetailJp->create();
			if ($this->CompanyMemberDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The company member detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail jp could not be saved. Please, try again.'));
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
		if (!$this->CompanyMemberDetailJp->exists($id)) {
			throw new NotFoundException(__('Invalid company member detail jp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyMemberDetailJp->save($this->request->data)) {
				$this->Flash->success(__('The company member detail jp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The company member detail jp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyMemberDetailJp.' . $this->CompanyMemberDetailJp->primaryKey => $id));
			$this->request->data = $this->CompanyMemberDetailJp->find('first', $options);
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
		$this->CompanyMemberDetailJp->id = $id;
		if (!$this->CompanyMemberDetailJp->exists()) {
			throw new NotFoundException(__('Invalid company member detail jp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanyMemberDetailJp->delete()) {
			$this->Flash->success(__('The company member detail jp has been deleted.'));
		} else {
			$this->Flash->error(__('The company member detail jp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
