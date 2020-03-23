<?php

require_once "init.php";
?>

<!--start account div-->
<div class="accountr pt-5 ">
    
  <div class="container">
    <div class="row">
      <div class="photo col-lg-4 col-sm-12 text-center text-primary" >
        <img src="assets/images/man.png" alt="profile photo" >
          <h3 class="mt-3"> اسم المستخدم </h3>
          <span class=""> <i class="fas fa-shopping-cart"></i> 100 </span>
          <h5> رصيد المحفظة </h5>
          <div class="list-group mt-5">
              <a href="#" class="list-group-item list-group-item-action active">
                اضافة عداد كهرباء
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                اضافة عداد غاز
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                 اضافة عداد مياه
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                 فواتير التليفون الارضى
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                 فواتيرى
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                 شحن المحفظة 
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                 اعدادات
              </a>
          </div>
      </div>
        <div class="count col-lg-8 col-sm-12   " > 
        
          <div class="add_acount">
              
                <form  class="user_form">
                  <div class="form-group ">
                      <h2 class="text-center pt-5 mb-4"> اضافة خط أرضي</h2>  
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اسم المستخدم ">
                  </div>
                    
                 <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="كود المنطقه  ">
                  </div>
                    
                    <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="رقم الارضي ">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="رقم الهاتف المحمول ">
                  </div>
                    
                 
                    
                 
                    
                  <button type="submit" class="login btn btn-primary mt-5">أضافة الخط الارضي</button>
                </form>
          </div>
      </div>
    </div>
  </div>
</div>


<!--end account div-->


<?php
 include $tpl . "footer.php";

?>