<?php 
// index.php
session_start();

// If user is logged in, retrieve identity from session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>company.prof</title>
    </head>
    <body>
        <h1>Home</h1>
        <?php if ($identity==null): ?>
        <a href="db_table.php">Search DB table</a>
        <?php else: ?>
        <strong>Good, <?= $identity ?></strong> <a href="logout.php">Sign out</a>
        <?php endif; ?>
        
        <p>
            This is a simple website to company.prof.
        </p>
    </body>
</html>

