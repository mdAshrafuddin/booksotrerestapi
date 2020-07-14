<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory[]|\Cake\Collection\CollectionInterface $inventory
 */
?>
<div class="inventory index content">
    <?= $this->Html->link(__('New Inventory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inventory') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('book_id') ?></th>
                    <th><?= $this->Paginator->sort('stock_level_used') ?></th>
                    <th><?= $this->Paginator->sort('stock_level_new') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventory as $inventory): ?>
                <tr>
                    <td><?= $this->Number->format($inventory->id) ?></td>
                    <td><?= $inventory->has('book') ? $this->Html->link($inventory->book->title, ['controller' => 'Books', 'action' => 'view', $inventory->book->id]) : '' ?></td>
                    <td><?= h($inventory->stock_level_used) ?></td>
                    <td><?= h($inventory->stock_level_new) ?></td>
                    <td><?= h($inventory->created) ?></td>
                    <td><?= h($inventory->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inventory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?>
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
