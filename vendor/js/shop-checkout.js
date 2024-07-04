function logOut(){
    $.ajax({
                    url: '../../pages/data-service/logout/logout.php', // URL ของไฟล์ PHP ที่จะจัดการข้อมูล
                    type: 'POST', // วิธีการส่งข้อมูล
                
                    dataType : 'html', // คาดหวัง response เป็น JSON
                    success: function(response) {
                        window.location="../../pages/shop-checkout/shop-checkout.php";
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr);
                        console.log(error);
                        
                    }
            });
}

$('#click-basket-cart').on('click', function () {
    $('#cart-detail').toggleClass('active');
   
  
});
function goToCart(){
    window.location="../../pages/shop-cart/shop-cart.php";
}