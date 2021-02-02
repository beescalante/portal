<?php if($current_user['role_id']==3): ?>
	<?= $this->element('homee') ?>
<?php else: ?>
	<?= $this->element('homed') ?>
<?php endif; ?>