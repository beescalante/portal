<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cobro[]|\Cake\Collection\CollectionInterface $cobros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cobro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sedes'), ['controller' => 'Sedes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sede'), ['controller' => 'Sedes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cobros index large-9 medium-8 columns content">
    <h3><?= __('Cobros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('concepto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('impuesto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descuento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sede_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cobros as $cobro): ?>
            <tr>
                <td><?= $this->Number->format($cobro->id) ?></td>
                <td><?= h($cobro->cedula) ?></td>
                <td><?= h($cobro->concepto) ?></td>
                <td><?= $this->Number->format($cobro->subtotal) ?></td>
                <td><?= $this->Number->format($cobro->impuesto) ?></td>
                <td><?= $this->Number->format($cobro->descuento) ?></td>
                <td><?= $this->Number->format($cobro->total) ?></td>
                <td><?= $this->Number->format($cobro->status) ?></td>
                <td><?= $cobro->has('sede') ? $this->Html->link($cobro->sede->id, ['controller' => 'Sedes', 'action' => 'view', $cobro->sede->id]) : '' ?></td>
                <td><?= h($cobro->referencia) ?></td>
                <td><?= h($cobro->created) ?></td>
                <td><?= h($cobro->usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cobro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cobro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cobro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cobro->id)]) ?>
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
