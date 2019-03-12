<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Helpdesk $helpdesk
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Helpdesk'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="helpdesk form large-9 medium-8 columns content">
    <?= $this->Form->create($helpdesk) ?>
    <fieldset>
        <legend><?= __('Add Helpdesk') ?></legend>
        <?php
            echo $this->Form->control('QuestionID');
            echo $this->Form->control('QuestionName');
            echo $this->Form->control('QuestionDescription');
            echo $this->Form->control('QuestionRate');
            echo $this->Form->control('QuestionCategory');
            echo $this->Form->control('QuestionTags');
            echo $this->Form->control('DocDate', ['empty' => true]);
            echo $this->Form->control('LastUpdate', ['empty' => true]);
            echo $this->Form->control('UserCreate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
