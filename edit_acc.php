<?php
include ("user_fb_login.php");
include 'config_db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($fbuser){
    $fname = $_POST['fname_sub'];mysqli_query($conn, "UPDATE users_final SET fname = '$fname' WHERE unique_id = '$unique_id';");
    $lname = $_POST['lname_sub'];mysqli_query($conn, "UPDATE users_final SET lname = '$lname' WHERE unique_id = '$unique_id';"); 
    $email = $_POST['email_sub'];mysqli_query($conn, "UPDATE users_final SET email = '$email' WHERE unique_id = '$unique_id';");
    //mysqli_query($conn, "UPDATE users_final SET fname = '$fname', lname = '$lname', email = '$email' WHERE unique_id = '$unique_id';");
    header("Location:my_acc.php");
  }
  if (logged_in()) {
    $fname = $_POST['fname_sub'];mysqli_query($conn, "UPDATE login_data SET fname = '$fname' WHERE unique_id = '$unique_id';");
    $lname = $_POST['lname_sub'];mysqli_query($conn, "UPDATE users_final SET lname = '$lname' WHERE unique_id = '$unique_id';"); 
    $email = $_POST['email_sub'];mysqli_query($conn, "UPDATE users_final SET email = '$email' WHERE unique_id = '$unique_id';");
    //mysqli_query($conn, "UPDATE users_final SET fname = '$fname', lname = '$lname', email = '$email' WHERE unique_id = '$unique_id';");
    header("Location:my_acc.php");
  }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<?php include ("includes/essential.php"); ?>
<LINK rel="stylesheet" type="text/css" href="static/css/bootstrap.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="static/css/font-awesome.min.css"></LINK>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<script>
    function redirect(){
       window.location.href = "my_acc.php" ;
    }
</script>
<script>
function emailcheck(){
    var string1=document.info_submit.email_sub.value
    if (string1.indexOf("@")==-1){
        alert("Please input a valid email address!")
        document.info_submit.email_sub.focus()
    }
}
function alertIt(){
   alert("redirect");
}
</script> 
<style type="text/css">
body{
  background: url(noise.jpg) repeat;
}
.whole{
   border-margin: 5px;
   text-align: justify;
   padding-top: 20px;
   padding-bottom: 20px;  
}
.form-style-5{
    max-width: 50%;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 25px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 25%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: justify;
    font-style: normal;
    width: 35%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
    border-radius: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
</style>
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
        <?php if(!$fbuser): ?>
        <li class="menu_item">
          <a href="#" >Login<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            <?php $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
                  $output = '<a href="'.$loginUrl.'">Login Via Facebook</a>';
            echo $output;
            ?>
            
            <a href="#" >Login Via LinkedIn</a>
                         
          </div>
          
        </li>
        <?php endif; ?> 
        <?php if($fbuser) :?>
          <li class="menu_item">
          <a href="#" ><?php echo $fullname; ?><i class="fa fa-angle-down"></i></a>
          
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
<div class="whole"><div class="form-style-5">
<form name="info_submit" action="<?php $_SERVER['PHP_SELF']?>" method="post">
<fieldset>
<legend><span class="number">1</span> Personal Information</legend>
<label for="job">Name:</label><br><input type="text" name="fname_sub" value="<?php if(isset($fname)) echo $fname; else echo "First Name"; ?>"> <input type="text" name="lname_sub" value="<?php if(isset($lname)) echo $lname; else echo " Last Name"; ?>"><br>
<label for="job">Email Id:</label><br><input type="email" name="email_sub" value="<?php if(isset($email)) echo $email; else echo "Email Id"; ?>" onblur="emailcheck()"><br>
<label for="job">Interests:</label><br>
<select id="job" name="field4">
<optgroup label="Indoors">
  <option value="fishkeeping">Fishkeeping</option>
  <option value="reading">Reading</option>
  <option value="boxing">Boxing</option>
  <option value="debate">Debate</option>
  <option value="gaming">Gaming</option>
  <option value="snooker">Snooker</option>
  <option value="other_indoor">Other</option>
</optgroup>
<optgroup label="Outdoors">
  <option value="football">Football</option>
  <option value="swimming">Swimming</option>
  <option value="fishing">Fishing</option>
  <option value="climbing">Climbing</option>
  <option value="cycling">Cycling</option>
  <option value="other_outdoor">Other</option>
</optgroup>
</select>
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend> <br>
<textarea name="field3" placeholder="About Your School"></textarea><br>
</fieldset>
<input type="submit" value="Submit Changes" />
</form>
</div></div>
</body>
</html>
