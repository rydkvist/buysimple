<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = escape($_GET['id']);

    $query = $db->prepare('SELECT * FROM bs_products WHERE id = ?');
    $query->execute([$id]);

    if ($query->rowCount() > 0) {
        $result = $query->fetch(PDO::FETCH_OBJ);

        if ($result->in_stock < 1) {
            echo alert('The product is out of stock', 'danger');
        } else {
            $_SESSION['cart'][$result->id] = $result;
            echo alert('Product was added to cart.', 'success');
        }
    } else {
        echo alert('The product was not found.', 'danger');
    }
} else {
    echo 'Invalid input.';
}
