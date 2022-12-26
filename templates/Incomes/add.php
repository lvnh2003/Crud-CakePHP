<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Income $income
 * @var \Cake\Collection\CollectionInterface|string[] $incomeCategories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Incomes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="incomes form content">
            <?= $this->Form->create($income) ?>
            <fieldset>
                <legend><?= __('Add Income') ?></legend>
                <?php
                    echo $this->Form->control('income_category_id', ['options' => $incomeCategories]);
                    echo $this->Form->control('amount');
                    echo $this->Form->control('purpose');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
