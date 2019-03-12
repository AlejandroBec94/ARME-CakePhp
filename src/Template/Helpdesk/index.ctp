<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Helpdesk[]|\Cake\Collection\CollectionInterface $helpdesk
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Helpdesk'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="helpdesk index large-9 medium-8 columns content">
    <h3><?= __('Helpdesk') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QuestionID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QuestionName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QuestionRate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QuestionCategory') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DocDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LastUpdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('UserCreate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($helpdesk as $helpdesk): ?>
            <tr>
                <td><?= $this->Number->format($helpdesk->id) ?></td>
                <td><?= h($helpdesk->QuestionID) ?></td>
                <td><?= h($helpdesk->QuestionName) ?></td>
                <td><?= $this->Number->format($helpdesk->QuestionRate) ?></td>
                <td><?= h($helpdesk->QuestionCategory) ?></td>
                <td><?= h($helpdesk->DocDate) ?></td>
                <td><?= h($helpdesk->LastUpdate) ?></td>
                <td><?= $this->Number->format($helpdesk->UserCreate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $helpdesk->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $helpdesk->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $helpdesk->id], ['confirm' => __('Are you sure you want to delete # {0}?', $helpdesk->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
