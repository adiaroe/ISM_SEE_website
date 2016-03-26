<?php
include ("user_fb_login.php");

include 'config_db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if($fbuser){
    $fname = $_POST['fname_sub'];mysqli_query($conn, "UPDATE users_final SET fname = '$fname' WHERE unique_id = '$unique_id';");
    $lname = $_POST['lname_sub'];mysqli_query($conn, "UPDATE users_final SET lname = '$lname' WHERE unique_id = '$unique_id';"); 
    $email = $_POST['email_sub'];mysqli_query($conn, "UPDATE users_final SET email = '$email' WHERE unique_id = '$unique_id';");
    $gender = $_POST['gender_sub'];mysqli_query($conn, "UPDATE users_final SET gender = '$gender' WHERE unique_id = '$unique_id';");
    $phn = $_POST['phn_sub'];mysqli_query($conn, "UPDATE users_final SET phn = '$phn' WHERE unique_id = '$unique_id';");
    $skype = $_POST['skype_sub'];mysqli_query($conn, "UPDATE users_final SET skype = '$skype' WHERE unique_id = '$unique_id';");
    if (isset($_FILES['photo']['tmp_name'])){
          $target_dir = "profilepic/";
          $target_file = $target_dir . $unique_id.".jpg";
          $uploadOk = 1;
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          $check = getimagesize($_FILES['photo']['tmp_name']);
          if($check !== false){
            $uploadOk = 1;
          }else{
            $uploadOk = 0;
          }
          if ($_FILES["photo"]["size"] > 100000) {
            echo "<script>alert('Sorry, your uploaded file is too large. Must be less than 100 KB.');</script>";
            $uploadOk = 0;
          }
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</scritp>";
            $uploadOk = 0;
          }
          if ($uploadOk == 0) {
          //echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          }else {
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)){
                  mysqli_query($conn, "UPDATE users_final SET image = '$target_file' WHERE unique_id = '$unique_id';");
                  //echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
                }else{
                    echo "<script>alert('Sorry, there was an error uploading your file.')</scritp>";
                }
          }
          }
          //header("Location:my_acc.php");
    }
  if (logged_in()) {
    $fname = $_POST['fname_sub'];mysqli_query($conn, "UPDATE login_data SET fname = '$fname' WHERE unique_id = '$unique_id';");
    $lname = $_POST['lname_sub'];mysqli_query($conn, "UPDATE login_data SET lname = '$lname' WHERE unique_id = '$unique_id';"); 
    $email = $_POST['email_sub'];mysqli_query($conn, "UPDATE login_data SET email = '$email' WHERE unique_id = '$unique_id';");
    $gender = $_POST['gender_sub'];mysqli_query($conn, "UPDATE login_data SET gender = '$gender' WHERE unique_id = '$unique_id';");
    $phn = $_POST['phn_sub'];mysqli_query($conn, "UPDATE login_data SET phn = '$phn' WHERE unique_id = '$unique_id';");
    $skype = $_POST['skype_sub'];mysqli_query($conn, "UPDATE login_data SET skype = '$skype' WHERE unique_id = '$unique_id';");
    if (isset($_FILES['photo']['tmp_name'])){
          $target_dir = "profilepic/";
          $target_file = $target_dir . $unique_id.".jpg";
          $uploadOk = 1;
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          $check = getimagesize($_FILES['photo']['tmp_name']);
          if($check !== false){
            $uploadOk = 1;
          }else{
            $uploadOk = 0;
          }
          if ($_FILES["photo"]["size"] > 100000) {
            echo "<script>alert('Sorry, your uploaded file is too large. Must be less than 100 KB.')</script>";
            $uploadOk = 0;
          }
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
          if ($uploadOk == 0) {
          //echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          }else {
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)){
                  mysqli_query($conn, "UPDATE login_data SET image = '$target_file' WHERE unique_id = '$unique_id';");
                  //echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
                }else{
                    echo "<script>alert('Sorry, there was an error uploading your file.')</scritp>";
                }
          }
          
    //header("Location:my_acc.php");
  }
  }
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include ("includes/essential.php"); ?>
<link href='static/css/default.css' rel='stylesheet' type='text/css' >
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="javascript.js"></script>
<script>
    function redirect(){
       window.location.href = "my_acc.php" ;
    }
</script>
</head>
<body>
<div id="menu">
  <nav class="top-bar content_wrapper" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name text-left">
        <a href="index.html" style="background-image:url('media/images/ism_logo.png');"></a>
      </li>
      <li id="menu_college_name"><a href="index.html">Indian School of Mines</a></li>
      <li class="toggle-topbar menu-icon">
        <a href="index.html#"><span></span></a> 
      </li>
    </ul>
    <section id="menu_main" class="top-bar-section">
      <ul class="right">
      
        <li class="menu_item">
          <a href="index.html#" >Find Alumni<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >By Location</a>
            
            <a href="#" >By Batch</a>
            
            <a href="#" >By Education Profile</a>

            <a href="#" >By Employment</a>
            
          </div>
          
        </li>
        
        <li class="menu_item secondary">
          <a href="SEE/index.html" >SEE</a>
          
        </li>
        
        <!--<li class="menu_item">
          <a href="index.html#" >Careers<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >Jobs</a>
            
            <a href="#" >Internships</a>
            
          
            
          </div>
          
        </li>-->
        
        <li class="menu_item secondary">
          <a href="#" >Events</a>
          
        </li>
        
        <li class="menu_item">
          <a href="index.html#" >More<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >Chapters</a>
            
            
            
            
            
            <a href="#" >Photo Gallery</a>
            
            
          
            <a href="#" >Campus Stories</a>
            
            <a href="#" >News Letter</a>
            
            <a href="#" >Help</a>
            
          </div>
          
        </li>
        
        <!--<li class="menu_item secondary" id="menu_login">-->
        <?php if(!$fbuser && !logged_in()): ?>
        <li class="menu_item">
          <a href="#" >Login<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            <?php $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
                  $output = '<a href="'.$loginUrl.'">Login Via Facebook</a>';
            echo $output;
            ?>
            
            <a href="login.php" >Login/Signup</a>
                         
          </div>
          
        </li>
        <?php endif; ?> 
        <?php if($fbuser || logged_in() ) :?>
          <li class="menu_item">
          <a href="#" ><?php echo $fname." ".$lname; ?><i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="my_acc.php" >My Account</a>
            <a href="logout.php?logout" >Logout</a>
                         
          </div>
          
        </li> 
        <?php endif; ?>
        
      </ul>
    </section>
  </nav>
</div>
<form action="<?php $_SERVER['PHP_SELF']?>" method = "POST" enctype="multipart/form-data" class="register">
            <h1>Edit You Details:</h1>
            <fieldset class="row1">
                <legend>Personal Details
                </legend>
                <p>
                    <label>First Name *
                    </label>
                    <input type="text" name="fname_sub" value="<?php if(isset($fname)) echo $fname;?>" required="<?php if(!isset($fname)) echo "true";?>"/>
                    <label>Last Name *
                    </label>
                    <input type="text" name="lname_sub" value="<?php if(isset($lname)) echo $lname;?>" required="<?php if(!isset($lname)) echo "true";?>"/>
                    <label>Email *
                    </label>
                    <input type="email" name="email_sub" value="<?php if(isset($email)) echo $email;?>" required="<?php if(!isset($email)) echo "true";?>" />
                </p>
                <p>
                    <label>Gender *</label>
                    <input name="gender_sub" type="radio" value="male" <?php if($gender == 'male') echo 'checked';?>/>
                    <label class="gender">Male</label>
                    <input name="gender_sub" type="radio" value="female" <?php if($gender == 'female') echo 'checked';?>/>
                    <label class="gender">Female</label>
                </p>
                <p>
                    <label>Phone No.
                    </label>
                    <input type="text" name="phn_sub" value="<?php if (isset($phn)) echo $phn;?>" />
                    <label>Skype ID
                    </label>
                    <input type="text" name="skype_sub" value="<?php if(isset($skype)) echo $skype;?>" />
                    <p> 
                      <input name="photo" type="file" />
                    </p>
                    <label class="obinfo">* obligatory fields
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Education  @ ISM
                </legend>
                <p>
                    <label>Branch *
                    </label>
                    <select name="branch_sub" value="" ?>">
                        <option>
                        </option>
                        <option value="ECE">ECE
                        </option>
                        <option value="EI">EI
                        </option>
                        
                    </select>
                </p>
                <p>
                    <label>Batch *
                    </label>
                    <select>
                        <option>
                        </option>
                        <option value="2015">2015
                        </option>
                        <option value="2014">2014
                        </option>
                        <option value="2013">2013
                        </option>
                        <option value="2012">2012
                        </option>
                    </select>
                </p>
                
                
            </fieldset>

      <br>
      <fieldset class="row5">

       <legend>Further Education
                </legend>
         <label> Higher Education</label>       
         <input name="higher"type="radio" id="yes"  onclick="javascript:check();"value="radio"/>
         <label class="gender">Yes</label>
        <input name="higher" type="radio" id="no"  onclick="javascript:check();"value="radio"/>
        <label class="gender">No</label>
       
        <div id="education" style="display: none;">
        <label>COURSE</label>
              <select >
                        
                        <option value=""  onclick="javascript:details();">SELECT 
                        </option>
                        <option value="mtech" id="mtech">M.tech
                        </option>
                        <option value="2" id="mba">MBA
                        </option>
                        <option value="3" id="ms">MS
                        </option>
                        <option value="4" id="phd">Phd
                        </option>
                        <option value="5" id="other">Other
                        </option>
            </select>

      
      
      <label>University</label>
     <input type="text" >
     <label> Location</label>
     <input type="text" >
      <label>Specialization</label>
     <input type="text" >
     </div>
       
   </fieldset>

    <fieldset class="row6">
        
<legend>Employement Details</legend>


    <h3>Job Description</h3>
            <select >
                        
                        <option value="">SELECT 
                        </option>
                        <option value="mtech" id="mtech">Core
                        </option>
                        <option value="2" id="mba">IT
                        </option>
                        <option value="3" id="ms">PSU
                        </option>
                        <option value="4" id="phd">Management
                        </option>
                        <option value="5" id="other">Start up
                        </option>
            </select>
   <label>Organisation</label>
  <input type="text">
  <label>Position</label>
  <input type="text">
  </fieldset>


               <div id="remote_int">
                <p class="remote_q">
                    <label class="interest">Interested in Remote Mentorship ? *</label>
                    <label>Yes</label>
                    <input type="radio" name="dep" id="rd1"  value="R and D">
                    <label>No</label>
                    <input type="radio" name="dep" id="web1" value="Web">
                </p>
                <div class="dropdown">
              <span>What is Remote Mentorship ?</span>
       <div class="dropdown-content">
          <p>It is an initiative taken by the Department of Electronics, ISM , in which the alumni members can provide mentorship for the students of the department. The alumni will be allowed student with in background of electronics subject/ Coding/ Management Skills or any other field according  to the sustainability of alumni. Currently being in an employed community you might have tasks related to the above mentioned fields. These tasks and any other real world application project can be assigned to students, thereby helping students to gain real working experience and you can get your task done. The communication can be made through either email,phone,skype etc. This provides an interactive platform between alumni and the department. Hope you take part in this. </p>
     </div>
             </div>
             </div>
            <fieldset class="row3">

                
                
                <div class="infobox"><h4>Disclaimer</h4>
                    <p>The information taken from users will not be shared with any third party.</p>
                </div>
             

            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive mails & newsletter from Department of Electronics.</label>
                </p>
                
            </fieldset>
            <div><button class="button">Save Details &raquo;</button></div>
        </form>






<div id="footer">
  <div class="row" id="footer_left">
  
    <div class="column large-3 small-12">
      <div class="footer_section">
        <a class="footer_section_header" href="search.html" >Browse</a>
        
        <a href="#" >By Search</a>
        
        <a href="#" >By Map</a>
        
        <a href="#" >By Resources</a>
        
      </div>
    </div>
  
    <div class="column large-3 small-12">
      <div class="footer_section">
        <a class="footer_section_header" href="#" >About</a>
        
        <a href="https://www.ismaa.in" target="_blank" >ISM Alumni Association</a>
        
        <a href="#" >Alumni Meet Pictures(2015)  </a>
        
      </div>
    </div>
  
    <div class="column large-3 small-12">
      <div class="footer_section">
        <a class="footer_section_header" href="#">Events</a>
        
        <a href="#">Basant &#39;2K16</a>
        
        <a href="#">Srijan - Cultral Fest of ISM</a>
        
        <a href="#">SEE Meet</a>
        
        <a href="#">All Events</a>
      </div>
    </div>
    <div class="column large-3 small-12">
      <div class="footer_section" id="footer_contact">
            <a href="index.html#" class="footer_section_header">Contact</a>
            <ul class="vertical">
              <li><a href="mailto:ei@ismdhanbad.ac.in">ei@ismdhanbad.ac.in</a></li>
              <li><a href="tel:+91-3262296622">+91-326-229-6622</a></li>
            </ul>
      </div>
      <div id="footer_social_media">
        
        
        
        
        
        
        
      </div>
    </div>
  </div>
</div>


<div id="footer_bottom">
  <div class="row">
    <div class="column large-6 small-12" id="footer_bottom_college">
      <img src="media/images/ism_logo.png" class="desaturate">
      <span id="footer_bottom_college_name">Indian School of Mines</span>
      
      <span>&#169; copyright 2016</span>
    </div>
    <div class="column large-6 small-12" id="powered-by-ism">
      <a href="http://www.ismdhanbad.ac.in/electronics-engineering/index.html" target="_blank">Department of Electronics</a>
      
    </div>
  </div>
</div>
<div id="unsupported_browser">
</body>
</html>