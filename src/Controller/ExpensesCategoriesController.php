<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ExpensesCategories Controller
 *
 * @property \App\Model\Table\ExpensesCategoriesTable $ExpensesCategories
 * @method \App\Model\Entity\ExpensesCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExpensesCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $expensesCategories = $this->paginate($this->ExpensesCategories);

        $this->set(compact('expensesCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Expenses Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expensesCategory = $this->ExpensesCategories->get($id, [
            'contain' => ['Expenses'],
        ]);

        $this->set(compact('expensesCategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expensesCategory = $this->ExpensesCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $expensesCategory = $this->ExpensesCategories->patchEntity($expensesCategory, $this->request->getData());
            if ($this->ExpensesCategories->save($expensesCategory)) {
                $this->Flash->success(__('The expenses category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expenses category could not be saved. Please, try again.'));
        }
        $this->set(compact('expensesCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Expenses Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expensesCategory = $this->ExpensesCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expensesCategory = $this->ExpensesCategories->patchEntity($expensesCategory, $this->request->getData());
            if ($this->ExpensesCategories->save($expensesCategory)) {
                $this->Flash->success(__('The expenses category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expenses category could not be saved. Please, try again.'));
        }
        $this->set(compact('expensesCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Expenses Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expensesCategory = $this->ExpensesCategories->get($id);
        if ($this->ExpensesCategories->delete($expensesCategory)) {
            $this->Flash->success(__('The expenses category has been deleted.'));
        } else {
            $this->Flash->error(__('The expenses category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
