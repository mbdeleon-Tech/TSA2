<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<section class="page-hero compact shell">
    <p class="eyebrow">Team directory</p>
    <div class="title-row"><div><h1>User Accounts</h1><p>Access profiles for <?= count($users) ?> sample staff members stored in a controller array.</p></div><span class="count-badge"><?= count($users) ?> records</span></div>
</section>
<section class="table-section shell">
    <div class="table-wrap"><table>
        <thead><tr><th scope="col">Username</th><th scope="col">Full name</th><th scope="col">Role</th></tr></thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><code class="username"><?= esc($user['username']) ?></code></td>
                <td><strong><?= esc($user['full_name']) ?></strong></td>
                <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table></div>
</section>
<?= $this->endSection() ?>
