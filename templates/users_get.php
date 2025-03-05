<section>
    <?php
    $users = $data['users'];
    foreach ($users as $user) {
        echo "<div>";
        echo "<img src='" . $user['image'] . "' height=150 alt=''>";
        echo "<p>" . $user['image'] . "</p>";
        echo "<p>" . $user['fullname'] . "</p>";
        echo "<p>" . $user['email'] . "</p>";
        echo "<p>" . $user['birthdate'] . "</p>";
        echo "<a href='delete_user?idx=" . $user['idx'] . "'>Delete</a>";
        echo "<hr>";
        echo "</div>";
    }
    ?>
</section>