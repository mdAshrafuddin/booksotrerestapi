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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $publisher->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Publisher'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="publisher form content">
            <?= $this->Form->create($publisher) ?>
            <fieldset>
                <legend><?= __('Edit Publisher') ?></legend>
                <?php
                    echo $this->Form->control('book_id', ['options' => $books, 'empty' => true]);
                    echo $this->Form->control('pub_name');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('country');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
