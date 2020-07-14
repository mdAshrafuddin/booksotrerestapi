<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publisher $publisher
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Publisher'), ['action' => 'edit', $publisher->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Publisher'), ['action' => 'delete', $publisher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Publisher'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Publisher'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="publisher view content">
            <h3><?= h($publisher->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Book') ?></th>
                    <td><?= $publisher->has('book') ? $this->Html->link($publisher->book->title, ['controller' => 'Books', 'action' => 'view', $publisher->book->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pub Name') ?></th>
                    <td><?= h($publisher->pub_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($publisher->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($publisher->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($publisher->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($publisher->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($publisher->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($publisher->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
