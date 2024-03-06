<h2><?= esc($title) ?></h2>

<?php if (! empty($signup) && is_array($signup)): ?>

    <?php foreach ($signup as $signup_item): ?>

        <h3><?= esc($signup_item['firstname']) ?></h3>

        <div class="main">
            <?= esc($signup_item['email']) ?>
        </div>
        <p><a href="/signup/<?= esc($signup_item['email'], 'url') ?>">View User detail </a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Users</h3>

    <p>Unable to find any users for you.</p>

<?php endif ?>