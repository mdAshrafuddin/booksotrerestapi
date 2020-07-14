<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publisher[]|\Cake\Collection\CollectionInterface $publisher
 */
?>
<div class="publisher index content">
    <?= $this->Html->link(__('New Publisher'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Publisher') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('book_id') ?></th>
                    <th><?= $this->Paginator->sort('pub_name') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($publisher as $publisher): ?>
                <tr>
                    <td><?= $this->Number->format($publisher->id) ?></td>
                    <td><?= $publisher->has('book') ? $this->Html->link($publisher->book->title, ['controller' => 'Books', 'action' => 'view', $publisher->book->id]) : '' ?></td>
                    <td><?= h($publisher->pub_name) ?></td>
                    <td><?= h($publisher->city) ?></td>
                    <td><?= h($publisher->state) ?></td>
                    <td><?= h($publisher->country) ?></td>
                    <td><?= h($publisher->created) ?></td>
                    <td><?= h($publisher->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $publisher->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publisher->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publisher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
