<ul>
    <?php foreach ($userlistt as $user): ?>
        <li><?php echo $user['fullname']; ?> - <?php echo $user['email']; ?></li>
    <?php endforeach; ?>
</ul>
