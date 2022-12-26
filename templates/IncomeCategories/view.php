<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IncomeCategory $incomeCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Income Category'), ['action' => 'edit', $incomeCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Income Category'), ['action' => 'delete', $incomeCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incomeCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Income Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Income Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="incomeCategories view content">
            <h3><?= h($incomeCategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($incomeCategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($incomeCategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($incomeCategory->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($incomeCategory->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Incomes') ?></h4>
                <?php if (!empty($incomeCategory->incomes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Income Category Id') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Purpose') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($incomeCategory->incomes as $incomes) : ?>
                        <tr>
                            <td><?= h($incomes->id) ?></td>
                            <td><?= h($incomes->income_category_id) ?></td>
                            <td><?= h($incomes->amount) ?></td>
                            <td><?= h($incomes->purpose) ?></td>
                            <td><?= h($incomes->created) ?></td>
                            <td><?= h($incomes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Incomes', 'action' => 'view', $incomes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Incomes', 'action' => 'edit', $incomes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Incomes', 'action' => 'delete', $incomes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incomes->id)]) ?>
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
