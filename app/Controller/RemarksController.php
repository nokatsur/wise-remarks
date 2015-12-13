<?php
App::uses('AppController', 'Controller');

/**
 * Remarks Controller
 *
 * @property Remark $Remark
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class RemarksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Remark->recursive = 0;
		$this->set('remarks', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->Remark->exists($id)) {
			throw new NotFoundException(__('Invalid remark'));
		}
		$options = array('conditions' => array('Remark.' . $this->Remark->primaryKey => $id));
		$this->set('remark', $this->Remark->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Remark->create();
			if ($this->Remark->save($this->request->data)) {
				$this->Flash->success(__('The remark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The remark could not be saved. Please, try again.'));
			}
		}
		$users = $this->Remark->User->find('list');
		$this->set(compact('users'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->Remark->exists($id)) {
			throw new NotFoundException(__('Invalid remark'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Remark->save($this->request->data)) {
				$this->Flash->success(__('The remark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The remark could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Remark.' . $this->Remark->primaryKey => $id));
			$this->request->data = $this->Remark->find('first', $options);
		}
		$users = $this->Remark->User->find('list');
		$this->set(compact('users'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->Remark->id = $id;
		if (!$this->Remark->exists()) {
			throw new NotFoundException(__('Invalid remark'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Remark->delete()) {
			$this->Flash->success(__('The remark has been deleted.'));
		} else {
			$this->Flash->error(__('The remark could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Remark->recursive = 0;
		$this->set('remarks', $this->Paginator->paginate());
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Remark->exists($id)) {
			throw new NotFoundException(__('Invalid remark'));
		}
		$options = array('conditions' => array('Remark.' . $this->Remark->primaryKey => $id));
		$this->set('remark', $this->Remark->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Remark->create();
			if ($this->Remark->save($this->request->data)) {
				$this->Flash->success(__('The remark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The remark could not be saved. Please, try again.'));
			}
		}
		$users = $this->Remark->User->find('list');
		$this->set(compact('users'));
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Remark->exists($id)) {
			throw new NotFoundException(__('Invalid remark'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Remark->save($this->request->data)) {
				$this->Flash->success(__('The remark has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The remark could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Remark.' . $this->Remark->primaryKey => $id));
			$this->request->data = $this->Remark->find('first', $options);
		}
		$users = $this->Remark->User->find('list');
		$this->set(compact('users'));
	}

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Remark->id = $id;
		if (!$this->Remark->exists()) {
			throw new NotFoundException(__('Invalid remark'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Remark->delete()) {
			$this->Flash->success(__('The remark has been deleted.'));
		} else {
			$this->Flash->error(__('The remark could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
