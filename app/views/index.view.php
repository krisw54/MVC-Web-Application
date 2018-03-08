<?php require 'partials/head.php'; ?>

<header>
    <h1>Welcome to the MVC from scratch tutorial</h1>
</header>

<body>
<form method="get" action="/search">
    <p>
        <label for="name">Search Name:</label>
        <input type="text" id="name" name="name" placeholder="your name">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</body>

<?php require 'partials/foot.php'; ?>