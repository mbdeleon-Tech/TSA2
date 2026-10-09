<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<section class="page-hero shell"><p class="eyebrow">Demo user</p><h1>Profile</h1><p>The single user record stored for this assessment.</p></section>
<section class="section shell profile-card"><div class="profile-avatar"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div><div><p class="eyebrow">Team member</p><h2><?= esc($user['full_name']) ?></h2><p class="body-copy"><strong>@<?= esc($user['username']) ?></strong><br><a href="mailto:<?= esc($user['email']) ?>"><?= esc($user['email']) ?></a></p><p class="body-copy">Member since <?= esc(date('F j, Y', strtotime($user['created_at']))) ?>.</p></div></section>
<?= $this->endSection() ?>
