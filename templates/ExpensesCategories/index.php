<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ExpensesCategory> $expensesCategories
 */
?>
<div class="expensesCategories index content">
    <?= $this->Html->link(__('New Expenses Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Expenses Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($expensesCategories as $expensesCategory): ?>
                <tr>
                    <td><?= $this->Number->format($expensesCategory->id) ?></td>
                    <td><?= h($expensesCategory->name) ?></td>
                    <td><?= h($expensesCategory->created) ?></td>
                    <td><?= h($expensesCategory->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $expensesCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $expensesCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $expensesCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expensesCategory->id)]) ?>
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
