<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
<?php $editing = ! empty($task); $errors = session()->getFlashdata('errors') ?? []; ?>
<section class="page-shell narrow"><p class="eyebrow">TASK MANAGEMENT</p><h1><?= $editing ? 'Edit task' : 'New task' ?></h1>
<?php if ($errors): ?><ul class="form-errors"><?php foreach ($errors as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul><?php endif; ?>
<form class="task-form" method="post" action="<?= esc($action) ?>">
<label>Title<input name="title" required maxlength="150" value="<?= esc(old('title', $task['title'] ?? '')) ?>"></label>
<label>Status<select name="status"><option value="pending" <?= old('status',$task['status']??'pending')==='pending'?'selected':'' ?>>Pending</option><option value="in_progress" <?= old('status',$task['status']??'')==='in_progress'?'selected':'' ?>>In progress</option><option value="done" <?= old('status',$task['status']??'')==='done'?'selected':'' ?>>Done</option></select></label>
<label>Task date<input type="date" name="task_date" required value="<?= esc(old('task_date',$task['task_date']??date('Y-m-d'))) ?>"></label>
<button class="button" type="submit"><?= $editing ? 'Save changes' : 'Create task' ?></button> <a href="<?= site_url('tasks') ?>">Cancel</a>
</form></section>
<?= $this->endSection() ?>
