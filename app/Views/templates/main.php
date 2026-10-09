<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tasks for Today Management System built with CodeIgniter 4.">
    <title><?= esc($title) ?> | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="nav-shell">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="Tasks for Today home">
                <span class="brand-mark">T</span>
                <span><strong>Tasks for Today</strong><small>Management System</small></span>
            </a>
            <nav class="main-nav" aria-label="Primary navigation">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Welcome</a>
                <a class="<?= $activePage === 'tasks' ? 'active' : '' ?>" href="<?= site_url('tasks') ?>">Task List</a>
                <a class="<?= $activePage === 'profile' ? 'active' : '' ?>" href="<?= site_url('profile') ?>">Profile</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
                <?php if (session()->get('logged_in')): ?>
                    <form method="post" action="<?= site_url('logout') ?>" class="nav-form"><button type="submit">Logout</button></form>
                <?php else: ?>
                    <a class="<?= $activePage === 'login' ? 'active' : '' ?>" href="<?= site_url('login') ?>">Login</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <main>
        <?php if (session()->getFlashdata('message')): ?><p class="flash success"><?= esc(session()->getFlashdata('message')) ?></p><?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?><p class="flash error"><?= esc(session()->getFlashdata('error')) ?></p><?php endif; ?>
        <?= $this->renderSection('content') ?>
    </main>
    <footer class="site-footer">
        <div class="footer-shell">
            <p><strong>Tasks for Today</strong> &middot; CodeIgniter 4</p>
            <p>IT0049 Technical Summative Assessment 2</p>
        </div>
    </footer>
</body>
</html>
