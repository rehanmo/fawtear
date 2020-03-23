<?php
require_once "init.php";
?>
     
   <div class="format ">
   
    
    <div class="container">
        
   

       
           <div class="row">
           <div class="col-12 col-lg-6">
               <h2 class="mt-5 mb-5 text-right">نسيت كلمه السر</h2>
            <form action="verify.php" method="POST">
                <div class="form-group form-style">
                    <input type="text" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="رقم الهاتف المحمول او البريد الالكتروني">
                  </div>
                                
                              <div >
                <button class="sub" type="submit" class="btn btn-primary">تاكيد</button>
                
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