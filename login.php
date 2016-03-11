<?php
include ("user_fb_login.php");
?>
<html>
<head>
<?php include ("includes/essential.php");?>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="menu">
  <nav class="top-bar content_wrapper" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name text-left">
        <a href="index.html" style="background-image:url('media/images/ism_logo.png');"></a>
      </li>
      <li id="menu_college_name"><a href="index.php">Indian School of Mines</a></li>
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
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Log In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">

                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input id="login-username" required="true" type="text" class="form-control" name="login_email" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" required="true" type="password" class="form-control" name="login_pwd" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-md-offset-3 col-md-9">
                                      <!--<a id="btn-login" href="#" type="submit" class="btn btn-success">Login  </a>-->
                                      <button id="btn-login" type="submit" class="btn btn-success"><i class="icon-hand-left"></i> &nbsp Log In</button>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" required="true" class="form-control" name="reg_email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" required="true" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" required="true" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password"  required="true" class="form-control" name="reg_pwd" placeholder="Password">
                                    </div>
                                </div>
                                    
                               

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                          
                                    </div>
                                </div>
                                
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
include 'config_db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{   
    if(isset($_POST['login_email'])){
        $login_email = test_input($_POST['login_email']);
        $login_pwd = test_input($_POST['login_pwd']);
        $query = mysqli_query($conn, "SELECT * FROM login_data where email like '$login_email'");
        $row = mysqli_fetch_array($query);
        $rows = mysqli_num_rows($query);

        if($rows==1){
            if(check_password($login_pwd, $row['password'])){
                $fingerprint = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
                $_SESSION['last_active'] = time();
                $_SESSION['fingerprint'] = $fingerprint;
                $_SESSION['user_email']=$login_email;
                $_SESSION['user_firstname']=$row['fname'];
                $_SESSION['user_lastname']=$row['lname'];
                //$_SESSION['user_addr']=$row['Address'];
                //$_SESSION['user_id']=$row['id'];
                //$_SESSION['user_phno']=$row['PhNo'];
                // var_dump($_SESSION);
                // die;
                redirect_to("index.php");
            }

        }
        else
        {
           echo "<script>$('#login_error').show();</script>";
        }
    }
    elseif (isset($_POST['reg_email'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['reg_email'];
    $passwd = $_POST['reg_pwd'];
    $query_log = mysqli_query($conn,"SELECT email FROM login_data WHERE email='$email' union SELECT email FROM users_final WHERE email='$email'");
    //$query_fb = mysqli_query($conn,"SELECT email FROM users_final WHERE email='$email'");
    if(!isset($query_log)){
    $query1 = mysqli_query($conn, "INSERT INTO login_data (email, fname, lname, password) VALUES ('$email', '$firstname', '$lastname', '$passwd')");
        if($query1)
        {
            $fingerprint = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
            $_SESSION['last_active'] = time();
            $_SESSION['fingerprint'] = $fingerprint;
            $_SESSION['user_email']=$email;
            $_SESSION['user_firstname']=$firstname;
            $_SESSION['user_lastname']=$lastname;
            //$_SESSION['user_phno']=$phno;
            //$_SESSION['user_id']=mysqli_insert_id($conn);
            // var_dump($_SESSION);
            redirect_to("index.php");
        }
    }else{echo "Error in Sign-Up.....email id already registered";}
    }

}
else
{
    echo "<script> $('#login_error').hide(); </script>";
}
mysqli_close($conn);

ob_end_flush();
?>
