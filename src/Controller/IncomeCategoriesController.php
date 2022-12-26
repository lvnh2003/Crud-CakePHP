<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * IncomeCategories Controller
 *
 * @property \App\Model\Table\IncomeCategoriesTable $IncomeCategories
 * @method \App\Model\Entity\IncomeCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IncomeCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $incomeCategories = $this->paginate($this->IncomeCategories);

        $this->set(compact('incomeCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Income Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $incomeCategory = $this->IncomeCategories->get($id, [
            'contain' => ['Incomes'],
        ]);

        $this->set(compact('incomeCategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $incomeCategory = $this->IncomeCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $incomeCategory = $this->IncomeCategories->patchEntity($incomeCategory, $this->request->getData());
            if ($this->IncomeCategories->save($incomeCategory)) {
                $this->Flash->success(__('The income category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The income category could not be saved. Please, try again.'));
        }
        $this->set(compact('incomeCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Income Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $incomeCategory = $this->IncomeCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $incomeCategory = $this->IncomeCategories->patchEntity($incomeCategory, $this->request->getData());
            if ($this->IncomeCategories->save($incomeCategory)) {
                $this->Flash->success(__('The income category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The income category could not be saved. Please, try again.'));
        }
        $this->set(compact('incomeCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Income Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $incomeCategory = $this->IncomeCategories->get($id);
        if ($this->IncomeCategories->delete($incomeCategory)) {
            $this->Flash->success(__('The income category has been deleted.'));
        } else {
            $this->Flash->error(__('The income category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
