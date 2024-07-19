<?php
session_start();

// ตรวจสอบว่ามีการส่ง ID และ quantity มาหรือไม่
if (isset($_POST['id']) && isset($_POST['quantity'])) {
    $id = $_POST['id'];
    $quantity = intval($_POST['quantity']);

    // อัปเดตจำนวนสินค้าใน session
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $id) {
                $_SESSION['cart'][$key]['quantity'] = $quantity;
                break;
            }
        }
    }
    echo json_encode($_SESSION['cart']);
} else {
    echo json_encode($_SESSION['cart']);
}
?>
