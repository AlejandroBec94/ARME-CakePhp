<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Helpdesk $helpdesk
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Helpdesk'), ['action' => 'edit', $helpdesk->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Helpdesk'), ['action' => 'delete', $helpdesk->id], ['confirm' => __('Are you sure you want to delete # {0}?', $helpdesk->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Helpdesk'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Helpdesk'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="helpdesk view large-9 medium-8 columns content">
    <h3><?= h($helpdesk->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('QuestionID') ?></th>
            <td><?= h($helpdesk->QuestionID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuestionName') ?></th>
            <td><?= h($helpdesk->QuestionName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuestionCategory') ?></th>
            <td><?= h($helpdesk->QuestionCategory) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($helpdesk->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuestionRate') ?></th>
            <td><?= $this->Number->format($helpdesk->QuestionRate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserCreate') ?></th>
            <td><?= $this->Number->format($helpdesk->UserCreate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DocDate') ?></th>
            <td><?= h($helpdesk->DocDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LastUpdate') ?></th>
            <td><?= h($helpdesk->LastUpdate) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('QuestionDescription') ?></h4>
        <?= $this->Text->autoParagraph(h($helpdesk->QuestionDescription)); ?>
    </div>
    <div class="row">
        <h4><?= __('QuestionTags') ?></h4>
        <?= $this->Text->autoParagraph(h($helpdesk->QuestionTags)); ?>
    </div>
</div>
