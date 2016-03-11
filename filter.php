<?php
include ("user_fb_login.php");
?>
<html>
<head>
<?php include ("includes/essential.php");?>
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
<br><br>
<form method="GET" name="theform" action="search.php"> 
<?php
echo "<select placeholder='batch' name='batch' onKeyup='checkform()' >"; 
        echo "<option value='select'>Select</option>n";  
        //echo each year as an option     
        for ($i=2001;$i<=2017;$i++){ 
        echo "<option value=".$i.">".$i."</option>n";     
        } 
      
    //close the select tag 
    echo "</select>";
?><br/>
<input type="hidden" value="1" name="sub_filter" />
<select value="Branch" name="branch" onKeyup="checkform()">
  <option value='select'>Select</option>
  <option value="ECE">BTech ECE</option>
  <option value="EI">BTech EI</option>
  <option value="MTech">MTech</option>
  <option value="JRF">JRF</option>
</select>
<input type="hidden" value="1" name="sub_filter" />
<input id="submitbutton" type="submit" value="Search">
</form>

</body>
<script type="text/javascript" language="javascript">
    function checkform()
    {
        var f = document.forms["theform"].elements;
        var cansubmit = true;

        for (var i = 0; i < f.length; i++) {
            if (f[i]=='select') cansubmit = false;
        }

        if (cansubmit) {
            document.getElementById('submitbutton').disabled = false;
        }
    }
</script>
</html>