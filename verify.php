<?php
require_once "init.php";

?>
     
   <div class="format ">
   
    
    <div class="container">
        
   

       
           <div class="row">
           <div class="col-12 col-lg-5">
               <h2 class="mt-5 mb-5 text-right">ادخل الكود</h2>
            <form action="home.php" method="POST">
                <div class="form-group form-style">
                    <input type="text" class="form-control form-style" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل الكود المرسل اليك">
                    <a href="#">اعاده ارسال الكود</a>
                  </div>
                                
                              <div >
                <button class="sub" type="submit" class="btn btn-primary">تاكيد</button>
                
                 </div>
            
            </form>
           </div>
           <div id="sora" class="col-lg-7 d-none d-lg-block" style="padding-top: 200px;;" >
            <img  src="assets/images/reg.jpg" class="img-fluid">
      
        </div>
       
       </div>
       </div>
   </div>
  </div>
  <?php
  include $tpl . "footer.php";
   ?>