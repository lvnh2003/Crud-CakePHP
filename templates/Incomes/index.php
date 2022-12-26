<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Income> $incomes
 */
?>
<div class="incomes index content">
    <?= $this->Html->link(__('New Income'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Incomes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('income_category_id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('purpose') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($incomes as $income): ?>
                <tr>
                    <td><?= $this->Number->format($income->id) ?></td>
                    <td><?= $income->has('income_category') ? $this->Html->link($income->income_category->name, ['controller' => 'IncomeCategories', 'action' => 'view', $income->income_category->id]) : '' ?></td>
                    <td><?= $this->Number->format($income->amount) ?></td>
                    <td><?= h($income->purpose) ?></td>
                    <td><?= h($income->created) ?></td>
                    <td><?= h($income->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $income->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $income->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $income->id], ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]) ?>
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
