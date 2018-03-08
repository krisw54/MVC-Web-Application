<?php require 'partials/head.php'; ?>

<form method="post" action="add_user">
    <p>
        <label for="name">Full name:</label>
        <input type="text" id="name" name="name" placeholder="your name">
    </p>
    <p>
        <label for="email">Email address:</label>
        <input type="email" id="email" name="email" placeholder="your email">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>

<?php require 'partials/foot.php'; ?>

