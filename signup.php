<?php
require_once "init.php";

?>
     
   <div class="format ">
    <div class="text-right mr-5"> 
        <img src="assets/images/logo.png" class="logo pr-5"><h1 >فواتيري</h1></img>
    </div>

    <div class="container">
        
    <div>
        <a class="home" href="home.php">الصفحه الرئيسيه</a>
    </div>
        <div class="row">
                    </div>
    </div>
    
    <div class="container">
       
      

       
           <div class="row">
           <div class="col-12 col-lg-6">
               <h2 class="mt-5 mb-5 text-right">انشاء حساب</h2>
            <form action="home.php" method="POST">
                <div class="form-group form-style">
                    <input type="text" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اسم المستخدم">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الرقم القومي">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الالكتروني">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="كلمه المرور">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="تاكيد كلمه المرور">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="رقم الهاتف المحمول">
                  </div>
                <div class="form-group">
                  <input type="email" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="رقم الهاتف الارضي">
                </div>
                <div class="form-group">
                </div>
               
                <button class="sub" type="submit" class="btn btn-primary">تاكيد</button>
                <input class="delet" type="reset" name="resat" value="مسح">             
            </form>
           </div>
           <div class="col-lg-6 d-none d-lg-block" style="padding-top: 200px;;" >
            <img  src="assets/images/reg.jpg" class="img-fluid">
      
        </div>
       </div>
       </div>
   </div>
   <?php
  include $tpl . "footer.php";
   ?>