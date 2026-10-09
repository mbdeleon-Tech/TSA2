<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<section class="hero shell">
    <div class="hero-copy">
        <p class="eyebrow">Welcome back</p>
        <h1>Make today’s work visible.</h1>
        <p class="lede">The Tasks for Today Management System keeps the team focused on the work scheduled for <?= esc(date('F j, Y', strtotime($today))) ?>.</p>
        <div class="hero-actions"><a class="button button-primary" href="<?= site_url('tasks') ?>">View all tasks</a><a class="button button-secondary" href="<?= site_url('profile') ?>">Open profile</a></div>
    </div>
    <div class="hero-panel" aria-label="Today’s task summary">
        <div class="panel-heading"><span>Today at a glance</span><span class="status"><i></i> <?= count($tasks) ?> scheduled</span></div>
        <div class="metric-grid">
            <article><span class="metric-icon">01</span><strong><?= count($tasks) ?></strong><small>Tasks due today</small></article>
            <article><span class="metric-icon">02</span><strong><?= count(array_filter($tasks, static fn (array $task): bool => $task['status'] === 'done')) ?></strong><small>Already completed</small></article>
            <article><span class="metric-icon">03</span><strong><?= count(array_filter($tasks, static fn (array $task): bool => $task['status'] !== 'done')) ?></strong><small>Still in progress</small></article>
            <article><span class="metric-icon">04</span><strong>3</strong><small>Dates in the schedule</small></article>
        </div>
    </div>
</section>
<section class="section shell">
    <div class="section-heading"><div><p class="eyebrow">Today’s queue</p><h2>Tasks scheduled for today</h2></div><p>This filtered dashboard reads from the shared tasks table and shows only records whose date matches today.</p></div>
    <?php if ($tasks === []): ?><p class="empty-state">There are no tasks scheduled for today.</p><?php else: ?><div class="task-grid"><?php foreach ($tasks as $task): ?><article class="task-card"><div class="task-card-top"><span class="task-status <?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></span><time><?= esc(date('M j', strtotime($task['task_date']))) ?></time></div><h3><?= esc($task['title']) ?></h3><p>Created <?= esc(date('M j, Y g:i A', strtotime($task['created_at']))) ?></p></article><?php endforeach; ?></div><?php endif; ?>
</section>
<?= $this->endSection() ?>
