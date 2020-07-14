<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Books Controller
 *
 * @property \App\Model\Table\BooksTable $Books
 * @method \App\Model\Entity\Book[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BooksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $books = $this->Books->find('all');

        $this->set(compact('books'));
        $this->viewBuilder()->setOption('serialize', ['books']);
    }

    /**
     * View method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $book = $this->Books->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('book'));
        $this->viewBuilder()->setOption('serialize', ['book']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $book = $this->request->allowMethod(['post', 'put']);
        $book = $this->Books->newEntity($book, $this->request->getData());
        if ($this->Books->save($book)) {
            $message = "Saved";
        } else {
            $message = "Error";
        }

        $this->set(compact('book', 'message'));
        $this->viewBuilder()->setOption('serialize', ['book', 'message']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $book = $this->Books->get($id, [
            'contain' => [],
        ]);
        $book = $this->Books->patchEntity($book, $this->request->getData());
        if ($this->Books->save($book)) {
            $message = "Saved";
        } else {
            $message = "Error";
        }  

        $this->set(compact('book', 'message'));
        $this->viewBuilder()->setOption('serialize', ['book', 'message']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $book = $this->Books->get($id);
        $message = 'Deleted';
        if (!$this->Books->delete($book)) {
            $message = 'Error';
        } 

        $this->set('message', $message);
        $this->viewBuilder()->setOption('serialize', ['message']);
    }
}
