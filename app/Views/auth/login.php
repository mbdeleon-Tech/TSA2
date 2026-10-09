<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
<section class="page-shell narrow"><p class="eyebrow">SECURE MANAGEMENT</p><h1>Log in to manage tasks.</h1><p>Welcome, Task List, Profile, and About stay public. Task management requires the demo account.</p>
<form class="task-form" method="post" action="<?= site_url('login') ?>">
<label>Username<input name="username" required value="<?= esc(old('username')) ?>"></label>
<label>Password<input type="password" name="password" required></label>
<button class="button" type="submit">Log in</button>
</form><p class="muted">Demo username: <strong>marco.deleon</strong></p></section>
<?= $this->endSection() ?>
