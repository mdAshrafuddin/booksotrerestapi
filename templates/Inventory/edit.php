<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inventory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventory form content">
            <?= $this->Form->create($inventory) ?>
            <fieldset>
                <legend><?= __('Edit Inventory') ?></legend>
                <?php
                    echo $this->Form->control('book_id', ['options' => $books, 'empty' => true]);
                    echo $this->Form->control('stock_level_used');
                    echo $this->Form->control('stock_level_new');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
