<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cobro $cobro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cobro'), ['action' => 'edit', $cobro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cobro'), ['action' => 'delete', $cobro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cobros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cobro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sedes'), ['controller' => 'Sedes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sede'), ['controller' => 'Sedes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cobros view large-9 medium-8 columns content">
    <h3><?= h($cobro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= h($cobro->cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Concepto') ?></th>
            <td><?= h($cobro->concepto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sede') ?></th>
            <td><?= $cobro->has('sede') ? $this->Html->link($cobro->sede->id, ['controller' => 'Sedes', 'action' => 'view', $cobro->sede->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($cobro->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($cobro->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cobro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtotal') ?></th>
            <td><?= $this->Number->format($cobro->subtotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Impuesto') ?></th>
            <td><?= $this->Number->format($cobro->impuesto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descuento') ?></th>
            <td><?= $this->Number->format($cobro->descuento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($cobro->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($cobro->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cobro->created) ?></td>
        </tr>
    </table>
</div>
