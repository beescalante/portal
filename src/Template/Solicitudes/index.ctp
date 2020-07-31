<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitude[]|\Cake\Collection\CollectionInterface $solicitudes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Solicitude'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estudiantes'), ['controller' => 'Estudiantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estudiante'), ['controller' => 'Estudiantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Carreras'), ['controller' => 'Carreras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Carrera'), ['controller' => 'Carreras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sedes'), ['controller' => 'Sedes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sede'), ['controller' => 'Sedes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solicitudes index large-9 medium-8 columns content">
    <h3><?= __('Solicitudes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estudiante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carrera_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sede_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitudes as $solicitude): ?>
            <tr>
                <td><?= $this->Number->format($solicitude->id) ?></td>
                <td><?= $solicitude->has('user') ? $this->Html->link($solicitude->user->id, ['controller' => 'Users', 'action' => 'view', $solicitude->user->id]) : '' ?></td>
                <td><?= h($solicitude->cedula) ?></td>
                <td><?= $solicitude->has('estudiante') ? $this->Html->link($solicitude->estudiante->id, ['controller' => 'Estudiantes', 'action' => 'view', $solicitude->estudiante->id]) : '' ?></td>
                <td><?= $solicitude->has('carrera') ? $this->Html->link($solicitude->carrera->id, ['controller' => 'Carreras', 'action' => 'view', $solicitude->carrera->id]) : '' ?></td>
                <td><?= $solicitude->has('sede') ? $this->Html->link($solicitude->sede->id, ['controller' => 'Sedes', 'action' => 'view', $solicitude->sede->id]) : '' ?></td>
                <td><?= h($solicitude->periodo) ?></td>
                <td><?= h($solicitude->created) ?></td>
                <td><?= $this->Number->format($solicitude->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $solicitude->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitude->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitude->id)]) ?>
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
