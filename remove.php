<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = escape($_GET['id']);

    $query = $db->prepare('SELECT * FROM bs_products WHERE id = ?');
    $query->execute([$id]);

    if ($query->rowCount() > 0) {
        // remove
        $result = $query->fetch(PDO::FETCH_OBJ);
        unset($_SESSION['cart'][$result->id]);
        echo alert('Product removed from the shopping cart', 'success');
    } else {
        echo alert('Product could not be found.', 'danger');
    }
} else {
    echo 'Invalid input.';
}