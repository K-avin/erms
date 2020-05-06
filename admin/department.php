<?php
$title = "Add Department | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <!-- 1st row start -->
            <div class="card  mb-3">
  <div class="card-header">
  <div class="row">
  <div class="col"><h4>Department</h4></div>
  <div class="col-auto"><button type="submit" class="btn btn-outline-primary">
  Departments 
 </button>
 </div>
 </div>
  <div class="card-body ">
    

  <div class="card  mb-3">
  <div class="card-body ">
    <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Code</span>
                       </div>
                       <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
                         </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Name</span>
                       </div>
                       <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 2 row end -->
                     <div class="row">
  </div>
</div>
  </div>
  <div class="card-footer bg-transparent ">  <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                     </div>
                     </div></div>
</div>
                <!-- 1st row end -->
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">
                
                  
                    <!-- 2 row start -->
                    
                     
                   
</form>
                    


                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>
