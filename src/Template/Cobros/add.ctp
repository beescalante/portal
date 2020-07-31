<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cobro $cobro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cobros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sedes'), ['controller' => 'Sedes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sede'), ['controller' => 'Sedes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cobros form large-9 medium-8 columns content">
    <?= $this->Form->create($cobro) ?>
    <fieldset>
        <legend><?= __('Add Cobro') ?></legend>
        <?php
            echo $this->Form->control('cedula');
            echo $this->Form->control('concepto');
            echo $this->Form->control('subtotal');
            echo $this->Form->control('impuesto');
            echo $this->Form->control('descuento');
            echo $this->Form->control('total');
            echo $this->Form->control('status');
            echo $this->Form->control('sede_id', ['options' => $sedes]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
