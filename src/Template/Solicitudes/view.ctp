<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitude $solicitude
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Solicitude'), ['action' => 'edit', $solicitude->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Solicitude'), ['action' => 'delete', $solicitude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitude->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitude'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estudiantes'), ['controller' => 'Estudiantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estudiante'), ['controller' => 'Estudiantes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Carreras'), ['controller' => 'Carreras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrera'), ['controller' => 'Carreras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sedes'), ['controller' => 'Sedes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sede'), ['controller' => 'Sedes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="solicitudes view large-9 medium-8 columns content">
    <h3><?= h($solicitude->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $solicitude->has('user') ? $this->Html->link($solicitude->user->id, ['controller' => 'Users', 'action' => 'view', $solicitude->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= h($solicitude->cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estudiante') ?></th>
            <td><?= $solicitude->has('estudiante') ? $this->Html->link($solicitude->estudiante->id, ['controller' => 'Estudiantes', 'action' => 'view', $solicitude->estudiante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carrera') ?></th>
            <td><?= $solicitude->has('carrera') ? $this->Html->link($solicitude->carrera->id, ['controller' => 'Carreras', 'action' => 'view', $solicitude->carrera->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sede') ?></th>
            <td><?= $solicitude->has('sede') ? $this->Html->link($solicitude->sede->id, ['controller' => 'Sedes', 'action' => 'view', $solicitude->sede->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= h($solicitude->periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($solicitude->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($solicitude->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($solicitude->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materias') ?></h4>
        <?php if (!empty($solicitude->materias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Codigo') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Bloque') ?></th>
                <th scope="col"><?= __('Creditos') ?></th>
                <th scope="col"><?= __('Carrera Id') ?></th>
                <th scope="col"><?= __('Requisitos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($solicitude->materias as $materias): ?>
            <tr>
                <td><?= h($materias->id) ?></td>
                <td><?= h($materias->codigo) ?></td>
                <td><?= h($materias->nombre) ?></td>
                <td><?= h($materias->bloque) ?></td>
                <td><?= h($materias->creditos) ?></td>
                <td><?= h($materias->carrera_id) ?></td>
                <td><?= h($materias->requisitos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materias', 'action' => 'view', $materias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materias', 'action' => 'edit', $materias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materias', 'action' => 'delete', $materias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
