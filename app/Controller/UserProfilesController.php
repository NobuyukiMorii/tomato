<?php
App::uses('AppController', 'Controller');
/**
 * UserProfiles Controller
 *
 * @property UserProfile $UserProfile
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserProfilesController extends AppController {

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
		$this->UserProfile->recursive = 0;
		$this->set('userProfiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserProfile->exists($id)) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		$options = array('conditions' => array('UserProfile.' . $this->UserProfile->primaryKey => $id));
		$this->set('userProfile', $this->UserProfile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserProfile->create();
			if ($this->UserProfile->save($this->request->data)) {
				$this->Flash->success(__('The user profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user profile could not be saved. Please, try again.'));
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
		if (!$this->UserProfile->exists($id)) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserProfile->save($this->request->data)) {
				$this->Flash->success(__('The user profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user profile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserProfile.' . $this->UserProfile->primaryKey => $id));
			$this->request->data = $this->UserProfile->find('first', $options);
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
		$this->UserProfile->id = $id;
		if (!$this->UserProfile->exists()) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserProfile->delete()) {
			$this->Flash->success(__('The user profile has been deleted.'));
		} else {
			$this->Flash->error(__('The user profile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserProfile->recursive = 0;
		$this->set('userProfiles', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserProfile->exists($id)) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		$options = array('conditions' => array('UserProfile.' . $this->UserProfile->primaryKey => $id));
		$this->set('userProfile', $this->UserProfile->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserProfile->create();
			if ($this->UserProfile->save($this->request->data)) {
				$this->Flash->success(__('The user profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user profile could not be saved. Please, try again.'));
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
		if (!$this->UserProfile->exists($id)) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserProfile->save($this->request->data)) {
				$this->Flash->success(__('The user profile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user profile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserProfile.' . $this->UserProfile->primaryKey => $id));
			$this->request->data = $this->UserProfile->find('first', $options);
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
		$this->UserProfile->id = $id;
		if (!$this->UserProfile->exists()) {
			throw new NotFoundException(__('Invalid user profile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserProfile->delete()) {
			$this->Flash->success(__('The user profile has been deleted.'));
		} else {
			$this->Flash->error(__('The user profile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
