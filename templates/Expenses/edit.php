<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Expense $expense
 * @var string[]|\Cake\Collection\CollectionInterface $expensesCategories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $expense->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Expenses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="expenses form content">
            <?= $this->Form->create($expense) ?>
            <fieldset>
                <legend><?= __('Edit Expense') ?></legend>
                <?php
                    echo $this->Form->control('expenses_category_id', ['options' => $expensesCategories]);
                    echo $this->Form->control('amount');
                    echo $this->Form->control('purpose');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
