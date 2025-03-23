<!doctype html>
<html lang="en">
   <?php include("php_include/head.php");?>
   <body class="theme-cyan">
      <!-- Page Loader -->
      <?php include("php_include/loader.php");?>
      <!-- Overlay For Sidebars -->
      <div id="wrapper">
      <?php include("php_include/nav.php");?>
      <?php include("php_include/side_bar.php");?>
      <div id="main-content">
         <div class="container-fluid">
            <div class="block-header">
               <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-12">
                     <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Update Medical Card</h2>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Update Medical Card</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <br><br><br>
         <div class="tab-content padding-0">
            <div class="tab-pane active" id="Basic">
               <div class=" col-md-6 ">
                  <div class="card" >
                     <div class="body">
                        <form action="old_medical.php" method="POST" style="padding: 30px 25px 25px 25px;">
                           <input type="hidden" name="userid" value="<?php echo $userid; ?>">
                        <h4> Upload  Medical Card</h4>
                        <br>
                        <div class="row clearfix">
                           <div class=" col-md-12">
                             
                              <div class="form-group">
                                 <input type="number"  placeholder="Aadhar Number" name="medical_card_number" class="form-control" required>
                              </div>
                             
                              <div class="card">
                                 <h6>Upload Medical Card front image</h6>
                                 <div class="body">
                                    <input type="file" name="medical_card_front" class="dropify">
                                 </div>
                              </div>
                              <div class="card">
                                 <h6>Upload Medical Card Back image</h6>
                                 <div class="body">
                                    <input type="file" name="medical_card_back" ="dropify">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button> &nbsp;&nbsp;
                     </div>
					 </form>
                  </div>
               </div>
            </div>
			
			<?php
				    if(isset($_POST['submit'])){
				       
				        $medical_card_number      =      $_POST['medical_card_number'];
				        $medical_card_front      =    $_POST['medical_card_front'];
				        $medical_card_back        =      $_POST['medical_card_back'];
				        
				       
				  $query=mysqli_query($con,"UPDATE `user` SET `medical_card_number`='$medical_card_number',`medical_card_front`='$medical_card_front',
				  `medical_card_back`='$medical_card_back' WHERE `userid`='$userid'");
               
               if($query){
               	echo'<script>alert("Update Successful");window.location.assign("old_medical.php");</script>';
               }
               else{
               echo'<script>alert("Not updated");window.location.assign("old_medical.php");</script>';
               }
               
               }
                                ?>
         </div>
      </div>
      <?php include("php_include/all_js.php");?>
   </body>
</html>