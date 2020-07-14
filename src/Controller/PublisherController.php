<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Publisher Controller
 *
 * @property \App\Model\Table\PublisherTable $Publisher
 * @method \App\Model\Entity\Publisher[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublisherController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Books'],
        ];
        $publisher = $this->paginate($this->Publisher);

        $this->set(compact('publisher', 'message'));
        $this->viewBuilder()->setOption('serialize', ['publisher', 'message']);
    }

    /**
     * View method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publisher = $this->Publisher->get($id, [
            'contain' => ['Books'],
        ]);

        $this->set(compact('publisher', 'message'));
        $this->viewBuilder()->setOption('serialize', ['publisher', 'message']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publisher = $this->Publisher->newEmptyEntity();
        if ($this->request->is('post')) {
            $publisher = $this->Publisher->patchEntity($publisher, $this->request->getData());
            if ($this->Publisher->save($publisher)) {
                $message = "Saved";
            } else {
                $message = "Error";
            }
        }
        $books = $this->Publisher->Books->find('list', ['limit' => 200]);
        $this->set(compact('publisher', 'books', 'message'));
        $this->viewBuilder()->setOption('serialize', ['publisher', 'message']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publisher = $this->Publisher->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publisher = $this->Publisher->patchEntity($publisher, $this->request->getData());
            if ($this->Publisher->save($publisher)) {
                $message = "Saved";
            } else {
                $message = "Error";
            }
        }
        $books = $this->Publisher->Books->find('list', ['limit' => 200]);
        
        $this->set(compact('publisher', 'books', 'message'));
        $this->viewBuilder()->setOption('serialize', ['publisher', 'message']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Publisher id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publisher = $this->Publisher->get($id);
        $message = "Saved";
        if (!$this->Publisher->delete($publisher)) {
            $message = "Error";
        } 

        $this->set(compact('message'));
        $this->viewBuilder()->setOption('serialize', ['message']);
    }
}
