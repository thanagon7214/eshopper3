<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['id'];
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];

    // ตรวจสอบว่ามีตัวแปรตะกร้าสินค้าในเซสชันหรือไม่
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // เพิ่มสินค้าในตะกร้า
    $_SESSION['cart'][] = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price
    );

    // ส่งคำตอบกลับไปยังฝั่งไคลเอนต์
    echo json_encode($_SESSION['cart']);
}
?>
