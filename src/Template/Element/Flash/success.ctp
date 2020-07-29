<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success" role="alert">
    <div class="alert-text"><?= $message ?></div>
</div>