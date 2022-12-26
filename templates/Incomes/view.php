<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Income $income
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Income'), ['action' => 'edit', $income->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Income'), ['action' => 'delete', $income->id], ['confirm' => __('Are you sure you want to delete # {0}?', $income->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Incomes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Income'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="incomes view content">
            <h3><?= h($income->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Income Category') ?></th>
                    <td><?= $income->has('income_category') ? $this->Html->link($income->income_category->name, ['controller' => 'IncomeCategories', 'action' => 'view', $income->income_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Purpose') ?></th>
                    <td><?= h($income->purpose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($income->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($income->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($income->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($income->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
