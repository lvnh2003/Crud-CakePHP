<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Expense> $expenses
 */
?>
<div class="expenses index content">
    <?= $this->Html->link(__('New Expense'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Expenses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('expenses_category_id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('purpose') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($expenses as $expense): ?>
                <tr>
                    <td><?= $this->Number->format($expense->id) ?></td>
                    <td><?= $expense->has('expenses_category') ? $this->Html->link($expense->expenses_category->name, ['controller' => 'ExpensesCategories', 'action' => 'view', $expense->expenses_category->id]) : '' ?></td>
                    <td><?= $this->Number->format($expense->amount) ?></td>
                    <td><?= h($expense->purpose) ?></td>
                    <td><?= h($expense->created) ?></td>
                    <td><?= h($expense->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $expense->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expense->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expense->id)]) ?>
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
