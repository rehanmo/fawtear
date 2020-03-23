<?php
require_once "init.php";
?>
     
    <div class="format ">
    
      
      <div class="container">
          
    

        
            <div class="row">
            <div class="col-12 col-lg-6">
                <h2 class="mt-5 mb-5 text-right">تسجيل دخول</h2>
              <form action="user.php" method="POST">
                  <div class="form-group form-style">
                      <input type="text" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اسم المستخدم">
                    </div>
                  
                  
                    <div class="form-group">
                      <input type="password" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="كلمه المرور">
                    </div>
                  <div >
                  <button class="sub" type="submit" class="btn btn-primary">تاكيد</button>
                  <a class="forget" href="forget.php">هل نسيت كلمه السر</a>
                  </div>
                <div>
                  <a class="new" href="signup.html">انشاء حساب</a>
                </div>    
              </form>
            </div>
            <div id="sora" class="col-lg-6 d-none d-lg-block" style="padding-top: 200px;;" >
              <img  src="assets/images/reg.jpg" class="img-fluid">
        
          </div>
        
        </div>
        </div>
    </div>


<?php
include $tpl . "footer.php";
?>