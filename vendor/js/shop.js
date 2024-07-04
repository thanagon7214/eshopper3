function logOut(){
    $.ajax({
                    url: '../../pages/data-service/logout/logout.php', // URL ของไฟล์ PHP ที่จะจัดการข้อมูล
                    type: 'POST', // วิธีการส่งข้อมูล
                
                    dataType : 'html', // คาดหวัง response เป็น JSON
                    success: function(response) {
                        window.location="../../pages/shop/shop.php";
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
function addToCart(productId, productName, productPrice) {
    $.ajax({
        url: '../../pages/shop/add-cart.php',
        type: 'POST',
        data: {
            id: productId,
            name: productName,
            price: productPrice
        },
        success: function(response) {
            alert('สินค้าได้ถูกเพิ่มในตะกร้า');
            let cart=JSON.parse(response)
            console.log(cart);
            let table = '<table class="table" id="table-cart"> <thead id="thead-cart"> <tr> <th scope="col">ลำดับ</th> <th class="text-center" scope="col" colspan="2">รายละเอียด</th><th class="text-center" scope="col" >ราคา</th>  <th class="text-center" scope="col">จำนวน</th> </tr> </thead> <tbody>';

            // วนลูปข้อมูลและเพิ่มแถวในตาราง
            let count_cart= cart.length; 
            
            document.getElementById('count-cart').innerHTML = count_cart;
            let order_num=1;
            cart.forEach(item => {
                let string_img="";
                if(item.id==1){
                    string_img= "product-1.jpg";
                }else if(item.id==2){
                    string_img= "product-2.jpg";
                }else if(item.id==3){
                    string_img= "product-3.jpg";
                }else if(item.id==4){
                    string_img= "product-4.jpg";
                }else if(item.id==5){
                    string_img= "product-5.jpg";
                }else if(item.id==6){
                    string_img= "product-6.jpg";
                }else if(item.id==7){
                    string_img= "product-7.jpg";
                }else if(item.id==8){
                    string_img= "product-8.jpg";
                }else{
                    string_img= "product-1.jpg";
                }
                table += `<tr>
                            <td class="align-middle" scope="row">${order_num}</td>
                            <td class="align-middle"><img class="img-fluid img-cart" src="../../vendor/template-main/img/${string_img}" alt=""></td>
                            <td class="align-middle">${item.name}</td>
                            <td class="align-middle">฿${item.price}</td>
                            <td class="align-middle">
                                    <div class="input-group quantity mr-3" style="width: 130px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary btn-minus btn-cart-1">
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control bg-secondary text-center" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary btn-plus btn-cart-1">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                            </td>
                          </tr>`;
                // <td>${item.price}</td>
                order_num=order_num+1;
            });

            table += '</table><button onClick="goToCart()" class="btn btn-block btn-primary my-3 py-3">To Cart</button>';

            // แทรกตารางใน div ที่กำหนด
            document.getElementById('cart-detail').innerHTML = table;
        }
    });
}