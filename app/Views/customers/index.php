<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<section class="page-hero compact shell">
    <p class="eyebrow">Account directory</p>
    <div class="title-row"><div><h1>Customer Accounts</h1><p>Contact details for <?= count($customers) ?> sample customers stored in a controller array.</p></div><span class="count-badge"><?= count($customers) ?> records</span></div>
</section>
<section class="table-section shell">
    <div class="table-wrap"><table>
        <thead><tr><th scope="col">Customer</th><th scope="col">Email address</th><th scope="col">Phone number</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><span class="avatar"><?= esc(strtoupper(substr($customer['full_name'], 0, 1))) ?></span><strong><?= esc($customer['full_name']) ?></strong></td>
                <td><a href="mailto:<?= esc($customer['email']) ?>"><?= esc($customer['email']) ?></a></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table></div>
</section>
<?= $this->endSection() ?>
