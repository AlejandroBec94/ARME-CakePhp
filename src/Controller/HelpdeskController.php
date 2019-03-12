<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Helpdesk Controller
 *
 * @property \App\Model\Table\HelpdeskTable $Helpdesk
 *
 * @method \App\Model\Entity\Helpdesk[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HelpdeskController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $helpdesk = $this->paginate($this->Helpdesk);

        $this->set(compact('helpdesk'));
    }

    /**
     * View method
     *
     * @param string|null $id Helpdesk id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $helpdesk = $this->Helpdesk->get($id, [
            'contain' => []
        ]);

        $this->set('helpdesk', $helpdesk);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $helpdesk = $this->Helpdesk->newEntity();
        if ($this->request->is('post')) {
            $helpdesk = $this->Helpdesk->patchEntity($helpdesk, $this->request->getData());
            if ($this->Helpdesk->save($helpdesk)) {
                $this->Flash->success(__('The helpdesk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The helpdesk could not be saved. Please, try again.'));
        }
        $this->set(compact('helpdesk'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Helpdesk id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $helpdesk = $this->Helpdesk->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $helpdesk = $this->Helpdesk->patchEntity($helpdesk, $this->request->getData());
            if ($this->Helpdesk->save($helpdesk)) {
                $this->Flash->success(__('The helpdesk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The helpdesk could not be saved. Please, try again.'));
        }
        $this->set(compact('helpdesk'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Helpdesk id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $helpdesk = $this->Helpdesk->get($id);
        if ($this->Helpdesk->delete($helpdesk)) {
            $this->Flash->success(__('The helpdesk has been deleted.'));
        } else {
            $this->Flash->error(__('The helpdesk could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
