<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExpensesCategory $expensesCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Expenses Category'), ['action' => 'edit', $expensesCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Expenses Category'), ['action' => 'delete', $expensesCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expensesCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Expenses Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Expenses Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="expensesCategories view content">
            <h3><?= h($expensesCategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($expensesCategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($expensesCategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($expensesCategory->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($expensesCategory->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Expenses') ?></h4>
                <?php if (!empty($expensesCategory->expenses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Expenses Category Id') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Purpose') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($expensesCategory->expenses as $expenses) : ?>
                        <tr>
                            <td><?= h($expenses->id) ?></td>
                            <td><?= h($expenses->expenses_category_id) ?></td>
                            <td><?= h($expenses->amount) ?></td>
                            <td><?= h($expenses->purpose) ?></td>
                            <td><?= h($expenses->created) ?></td>
                            <td><?= h($expenses->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Expenses', 'action' => 'view', $expenses->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Expenses', 'action' => 'edit', $expenses->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Expenses', 'action' => 'delete', $expenses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expenses->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
