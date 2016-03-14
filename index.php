<?php
require_once ("sessions.php");
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



<div id="fullWidthContent">

<div id="home_page">
	<div id="home_hero" style="background-image:url('media/images/ism_front.jpg');">
    
    <div id="home_search_box">
      <div class="content_wrapper">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
        <path fill="#fff" d="M51.6,51.2L37.7,37.2c2.9-3.2,4.7-7.5,4.7-12.1c0-10-8.1-18.1-18.1-18.1S6.3,15.2,6.3,25.1
          s8.1,18.1,18.1,18.1c4.7,0,8.9-1.8,12.1-4.7l13.9,13.9C50.7,51.9,51.1,51.5,51.6,51.2z M24.3,41.5c-9,0-16.3-7.3-16.3-16.3
          S15.3,8.8,24.3,8.8s16.3,7.3,16.3,16.3S33.3,41.5,24.3,41.5z"/>
        <line fill="#fff" x1="-22.3" y1="12.2" x2="-22.3" y2="12.2"/>
        </svg><form method="get" action="search.php"><input type="text" name="search" placeholder="Search Alumi by name, class, location,employer, course, etc"><input type="hidden" value="1" name="sub_search" /></form>
      </div>
    </div>
  </div>
  <div id="home_page_content">
    <div class="row">
      <div id="home_needs" class="section">
          <div class="section_heading">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
              <g>
                <path fill="#231F20" d="M53.1,12H7.8C7.3,12,7,12.3,7,12.8v29.7c0,0.4,0.3,0.8,0.8,0.8h11.7l0,7c0,0.3,0.2,0.6,0.5,0.7
                  c0.1,0,0.2,0.1,0.3,0.1c0.2,0,0.4-0.1,0.5-0.2l8.4-7.6h23.9c0.4,0,0.8-0.3,0.8-0.8V12.8C53.8,12.3,53.5,12,53.1,12z M52.3,41.6
                  H28.9c-0.2,0-0.4,0.1-0.5,0.2L21,48.5l0-6c0-0.2-0.1-0.4-0.2-0.6c-0.1-0.1-0.3-0.2-0.6-0.2H8.6V13.5h43.7V41.6z"/>
                <path fill="#231F20" d="M25.5,23.8c0.4,0,0.8-0.3,0.8-0.8c0-2.8,2.3-5.1,5.1-5.1c2.8,0,5.1,2.3,5.1,5.1c0,2.8-2.3,5.1-5.1,5.1
                  c-0.4,0-0.8,0.3-0.8,0.8v2c0,0.4,0.3,0.8,0.8,0.8c0.4,0,0.8-0.3,0.8-0.8v-1.2c3.3-0.4,5.9-3.2,5.9-6.6c0-3.7-3-6.7-6.7-6.7
                  c-3.7,0-6.7,3-6.7,6.7C24.7,23.4,25.1,23.8,25.5,23.8z"/>
                <path fill="#231F20" d="M31.4,33.8c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2C33.4,34.7,32.5,33.8,31.4,33.8z M31.4,36.2
                  c-0.2,0-0.4-0.2-0.4-0.4c0-0.2,0.2-0.4,0.4-0.4s0.4,0.2,0.4,0.4C31.8,36,31.6,36.2,31.4,36.2z"/>
              </g>
            </svg>
            <a href="#">About Us </a>
          </div>
          <div class="section_content">
           <p class="alumni_about_us"> This Website provides a strong Alumni connection between the Alumni's of ISM Dhanbad with students and faculties. Now you can search your Alumni in our database, know where they are now and able to get connect soon. So, we built this site with many search features loaded in a single plateform with one click of a button. </p>
            
            
          </div>
        </div>
     <div class="column small-12 large-6 large-push-6 home_right_column">
        
        <!--<div id="home_login" class="section">
          <div class="section_heading">Sign In / Sign Up</div>
          <div class="section_content text-center">
            <div class="row">
              <div class="column small-12 large-6">
                <a href="#"><div class="btn"><span>Connect with Facebook</span></div></a>
              </div>
              <div class="column small-12 large-6">
                <a href="#"><div class="btn"><span>Connect with LinkedIn</span></div></a>
              </div>
            </div>
            <div class="separator"><span>or</span></div>
            <div><a href="login-via=email.html">Connect using email</a></div>
            
          </div>
        </div>-->

        
        <div id="home_news" class="section">
          <div class="section_heading">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
              <g>
                <path d="M54.7,5.2H5.3c-0.5,0-0.9,0.5-0.9,1v47.5c0,0.6,0.4,1,0.9,1h49.4c0.5,0,0.9-0.5,0.9-1V6.2C55.5,5.7,55.2,5.2,54.7,5.2z
                   M53.8,52.7H6.2V7.3h47.7V52.7z"/>
                <path d="M10.4,23.8h39.2c0.5,0,0.9-0.5,0.9-1V12.4c0-0.6-0.4-1-0.9-1H10.4c-0.5,0-0.9,0.5-0.9,1v10.3C9.6,23.3,9.9,23.8,10.4,23.8z
                   M11.3,13.5h37.5v8.3H11.3V13.5z"/>
                <path d="M27.4,30H13.8c-0.5,0-0.9,0.5-0.9,1c0,0.6,0.4,1,0.9,1h13.6c0.5,0,0.9-0.5,0.9-1C28.3,30.5,27.9,30,27.4,30z"/>
                <path d="M27.4,34.1H12.1c-0.5,0-0.9,0.5-0.9,1c0,0.6,0.4,1,0.9,1h15.3c0.5,0,0.9-0.5,0.9-1C28.3,34.6,27.9,34.1,27.4,34.1z"/>
                <path d="M27.4,38.3H12.1c-0.5,0-0.9,0.5-0.9,1s0.4,1,0.9,1h15.3c0.5,0,0.9-0.5,0.9-1S27.9,38.3,27.4,38.3z"/>
                <path d="M27.4,42.4H12.1c-0.5,0-0.9,0.5-0.9,1c0,0.6,0.4,1,0.9,1h15.3c0.5,0,0.9-0.5,0.9-1C28.3,42.9,27.9,42.4,27.4,42.4z"/>
                <path d="M27.4,46.5H12.1c-0.5,0-0.9,0.5-0.9,1s0.4,1,0.9,1h15.3c0.5,0,0.9-0.5,0.9-1S27.9,46.5,27.4,46.5z"/>
                <path d="M47.9,30H32.6c-0.5,0-0.9,0.5-0.9,1c0,0.6,0.4,1,0.9,1h15.3c0.5,0,0.9-0.5,0.9-1C48.7,30.5,48.3,30,47.9,30z"/>
                <path d="M47.9,34.1H32.6c-0.5,0-0.9,0.5-0.9,1c0,0.6,0.4,1,0.9,1h15.3c0.5,0,0.9-0.5,0.9-1C48.7,34.6,48.3,34.1,47.9,34.1z"/>
                <path d="M47.9,38.3H32.6c-0.5,0-0.9,0.5-0.9,1s0.4,1,0.9,1h15.3c0.5,0,0.9-0.5,0.9-1S48.3,38.3,47.9,38.3z"/>
                <path d="M47.9,42.4H32.6c-0.5,0-0.9,0.5-0.9,1c0,0.6,0.4,1,0.9,1h15.3c0.5,0,0.9-0.5,0.9-1C48.7,42.9,48.3,42.4,47.9,42.4z"/>
                <path d="M44.5,46.5H32.6c-0.5,0-0.9,0.5-0.9,1s0.4,1,0.9,1h11.9c0.5,0,0.9-0.5,0.9-1S44.9,46.5,44.5,46.5z"/>
              </g>
            </svg>
            <a href="news.html">News and Announcements</a>
          </div>
          <div class="section_content">
                    
            <!-- Iframe Scroller  -->
<div style="width: 100%; border: solid 4px #d3d3d3; border-radius:5px; background: #F9F9FF; margin: 0; 
line-height: 18px; color: #333333; font-size: 15px">
<marquee onmouseover='this.stop();' onmouseout='this.start();' direction="up" height="195" scrollamount="1">
<ul>
              
              <li class="news_item">
                <a href="#">
                  <div class="news_content">
                    <p class="date"><i class="fa fa-circle-o"></i>Jan 26, 2016</p>
                    <p class="text">Happy 67th Republic Day to all students and our respected Alumnis' of ISM....</p>
                  </div>
                  <i class="fa fa-angle-right hover_link"></i>
                </a>
              </li>
              
              <li class="news_item">
                <a href="#">
                  <div class="news_content">
                    <p class="date"><i class="fa fa-circle-o"></i>Jan 20, 2016</p>
                    <p class="text">Annual Basant Reunion Function of ISM Dhanbad is tentatively scheduled on 07.02.2016. ISM  welcomes Passout Batch of Year 1966 to join us in Basant Reunion 2016 and relive the moments at ISM....</p>
                  </div>
                  <i class="fa fa-angle-right hover_link"></i>
                </a>
              </li>
              
              <li class="news_item">
                <a href="#">
                  <div class="news_content">
                    <p class="date"><i class="fa fa-circle-o"></i>Jan 18, 2016</p>
                    <p class="text">Basant Committee have been constituted to organize Basant 2016 during February 2016. Dr. Biswajit Paul will be the convener and Dr. Dheeraj Kumar will be the co-convener....</p>
                  </div>
                  <i class="fa fa-angle-right hover_link"></i>
                </a>
              </li>
              
            </ul>
</marquee></div>
<!-- Iframe Scroller End -->
            
          </div>
        </div>
        <div id="home_events" class="section">
          <div class="section_heading">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
              <g>
                <path d="M52.9,24.6c0-1.5,0.6-2.9,1.6-3.9c0.3-0.3,0.3-0.8,0-1.1l-13-13c-0.2-0.2-0.4-0.3-0.7-0.2c-0.2,0-0.5,0.2-0.6,0.4
                  c-0.6,0.9-1.9,1.4-3.4,1.4c-1.6,0-3.3-0.6-4.2-1.6c-0.3-0.3-0.8-0.3-1.1,0L6.2,31.7c-0.3,0.3-0.3,0.8,0,1.1c1,1,1.6,2.4,1.6,3.9
                  c0,1.5-0.6,2.9-1.6,3.9c-0.3,0.3-0.3,0.8,0,1.1l13,13c0.3,0.3,0.8,0.3,1.1,0c1-1,2.4-1.6,3.9-1.6c1.5,0,2.9,0.6,3.9,1.6
                  c0.2,0.2,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l25.1-25.1c0.2-0.2,0.2-0.4,0.2-0.6c0-0.2-0.1-0.4-0.2-0.6C53.4,27.5,52.9,26.1,52.9,24.6
                  z M28.7,53.1c-1.2-1-2.8-1.5-4.4-1.5c-1.6,0-3.2,0.5-4.4,1.5L7.9,41.2c1-1.2,1.5-2.8,1.5-4.4s-0.5-3.2-1.5-4.4L32,8.3
                  c1.3,1,3,1.5,4.8,1.5c1.7,0,3.2-0.5,4.2-1.4l11.8,11.8c-1,1.2-1.5,2.8-1.5,4.4c0,1.6,0.5,3.2,1.5,4.4L28.7,53.1z"/>
                <path d="M37.3,14.5c-0.8-0.8-1.8-1.2-2.9-1.2c-1.1,0-2.1,0.4-2.9,1.2L14.2,31.9c-0.8,0.8-1.2,1.8-1.2,2.9c0,1.1,0.4,2.1,1.2,2.9
                  l9.2,9.2c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l17.3-17.3c0.8-0.8,1.2-1.8,1.2-2.9c0-1.1-0.4-2.1-1.2-2.9L37.3,14.5z M45.3,28.3
                  L28,45.6c-0.9,0.9-2.5,0.9-3.4,0l-9.2-9.2c-0.5-0.5-0.7-1.1-0.7-1.7c0-0.7,0.3-1.3,0.7-1.7l17.3-17.3c0.5-0.5,1.1-0.7,1.7-0.7
                  s1.3,0.3,1.7,0.7l9.2,9.2c0.5,0.5,0.7,1.1,0.7,1.7C46,27.3,45.8,27.9,45.3,28.3z"/>
                <path d="M35,21.2c-0.3-0.3-0.8-0.3-1.1,0L21.6,33.3c-0.3,0.3-0.3,0.8,0,1.1c0.2,0.2,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2L35,22.3
                  C35.3,22,35.3,21.5,35,21.2z"/>
                <path d="M35.4,28.5L28.9,35c-0.3,0.3-0.3,0.8,0,1.1c0.2,0.2,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l6.5-6.5c0.3-0.3,0.3-0.8,0-1.1
                  C36.3,28.2,35.8,28.2,35.4,28.5z"/>
              </g>
            </svg>
            <a href="events.html">Events</a>
          </div>
          <div class="section_content">
            
            <div class="row">
              
              <div class="column small-12 large-6 ">
                <div class="event_block">
                  <a href="#">
                    
                    <div class="event_date">
                      <div class="event_date_inner clearfix">
                        <div class="left">
                          <p class="date">7</p>
                        </div>
                        <div class="left">
                          <p class="month">Feb &#39;16</p>
                          <p class="day">Wednesday</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="event_content">
                      <p class="name ellipsis">Basant &#39;2K16</p>
                      
                      <p class="venue ellipsis">At Lower Ground - ISM Dhanbad</p>
                      
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="column small-12 large-6 end">
                <div class="event_block">
                  <a href="#">
                    
                    <div class="event_date">
                      <div class="event_date_inner clearfix">
                        <div class="left">
                          <p class="date">15</p>
                        </div>
                        <div class="left">
                          <p class="month">March &#39;2K15</p>
                          <p class="day">Tuesday</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="event_content">
                      <p class="name ellipsis">Srijan- Cultral Fest</p>
                      
                      <p class="venue ellipsis">At Lower Ground - ISM Dhanbad</p>
                      
                    </div>
                  </a>
                </div>
              </div>
              
            </div>
            
          </div>
        </div>
        <div id="home_new_features" class="section">
          <div class="section_heading">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
              <g>
                <path d="M52.5,18.4L52.5,18.4c0-0.1,0-0.2,0-0.3c0,0,0,0,0-0.1c0-0.1-0.1-0.2-0.1-0.2c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1
                  c0,0-0.1,0-0.1,0c0,0,0,0,0,0L30.8,8.6c-0.2-0.1-0.4-0.1-0.6,0L7.5,17.7c0,0,0,0,0,0c0,0-0.1,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1
                  c0,0,0,0,0,0C7.2,17.9,7.1,18,7.1,18c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0c0,0,0,0,0,0v24.3c0,0.3,0.2,0.6,0.4,0.7
                  l22.8,10.6c0,0,0,0,0,0c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3-0.1c0,0,0,0,0,0l21.2-10.6c0.3-0.1,0.4-0.4,0.4-0.7V18.4
                  C52.5,18.4,52.5,18.4,52.5,18.4z M30.5,10.1l19.4,8.3l-8.4,3.9l-19.2-8.9L30.5,10.1z M30.5,27.4l-20.8-9l10.7-4.3l19.3,9L30.5,27.4
                  z M8.5,19.5l21.2,9.2v23.3L8.5,42.1V19.5z M51,42.2L31.3,52V28.7L51,19.5V42.2z"/>
                <path d="M24.7,31.3l-10.6-4.5c-0.2-0.1-0.5-0.1-0.7,0.1c-0.2,0.1-0.3,0.4-0.3,0.6v9.9c0,0.3,0.2,0.6,0.5,0.7l10.6,4.5
                  c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.3,0,0.4-0.1c0.2-0.1,0.3-0.4,0.3-0.6V32C25.2,31.7,25,31.4,24.7,31.3z M23.7,40.7l-9.1-3.9v-8.2
                  l9.1,3.9V40.7z"/>
              </g>
            </svg>
            <span>Extras</span>
          </div>
          <div class="section_content">
            <div class="row">
              <div class="column small-12 large-6">
                <a href="#">
                  <div class="feature_graphic left">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                      <path fill="#0089CB" d="M52,52H0V0h52V52z M2,50h48V2H2V50z"/>
                      <path fill="#0089CB" d="M17,23.1c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S19.4,23.1,17,23.1z M17,16.4
                        c-1.3,0-2.3,1-2.3,2.3c0,1.3,1,2.3,2.3,2.3c1.3,0,2.3-1,2.3-2.3C19.4,17.4,18.3,16.4,17,16.4z"/>
                      <path fill="#0089CB" d="M37.4,19.9h-5.2c-0.6,0-1.1-0.5-1.1-1.1v0c0-0.6,0.5-1.1,1.1-1.1h5.2c0.6,0,1.1,0.5,1.1,1.1v0
                        C38.5,19.4,38,19.9,37.4,19.9z"/>
                      <path fill="#0089CB" d="M26.6,43.9c-7.5,0-15.5-5-18.5-7.1c-0.5-0.4-0.8-1.1-0.6-1.7C7.7,34.4,8.3,34,9,34h34.9c0.7,0,1.2,0.4,1.5,1
                        c0.2,0.6,0,1.3-0.5,1.7c-2.4,1.9-8.8,6.3-16.5,7.1C27.8,43.9,27.2,43.9,26.6,43.9z M10.5,36c3.5,2.3,10,5.9,16.1,5.9
                        c0.5,0,1,0,1.5-0.1c6.2-0.6,11.6-3.8,14.4-5.8H10.5z"/>
                      <line fill="#0089CB" x1="16.6" y1="1" x2="16.6" y2="51"/>
                      <line fill="#0089CB" x1="33.6" y1="2" x2="33.6" y2="52"/>
                      <line fill="#0089CB" x1="50.6" y1="19" x2="0.6" y2="19"/>
                      <line fill="#0089CB" x1="50.6" y1="36" x2="0.6" y2="36"/>
                    </svg>
                  </div>
                  <div class="feature_content">
                    <p class="name">Classmates</p>
                    <p class="description">Reconnect with your classmates in a fun way</p>
                  </div>
                </a>
              </div>
              <div class="column small-12 large-6">
                <a href="gallery.html">
                  <div class="feature_graphic left">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="0 0 50 50.9" enable-background="new 0 0 50 50.9" xml:space="preserve">
                      <g>
                        <path fill="#0089CB" d="M41.8,0L0,0l0,41.8h41.8V0z M39.9,1.8v30.9h-6.6L27,16.4c-0.1-0.3-0.5-0.6-0.8-0.6c-0.4,0-0.7,0.2-0.9,0.5
                          l-5.1,11.3l-4.8-5.8c-0.2-0.2-0.5-0.4-0.8-0.3c-0.3,0-0.6,0.2-0.7,0.4L7.6,32.7H1.8l0-30.9L39.9,1.8z M31.3,32.7H9.8l5.1-8.6
                          l4.9,5.9c0.2,0.2,0.5,0.4,0.8,0.3c0.3,0,0.6-0.2,0.7-0.5l4.8-10.6L31.3,32.7z M1.8,40l0-5.4h38.1V40H1.8z"/>
                        <path fill="#0089CB" d="M44.5,14.5c-0.5,0-0.9,0.3-1,0.8c0,0.5,0.3,0.9,0.8,1l3.7,0.3l-3,32.4l-33.3-3c-0.5,0-0.9,0.3-1,0.8
                          c0,0.5,0.3,0.9,0.8,1l35.1,3.2l3.3-36L44.5,14.5z"/>
                        <path fill="#0089CB" d="M10.9,16.4c2.5,0,4.5-2,4.5-4.5s-2-4.5-4.5-4.5s-4.5,2-4.5,4.5S8.4,16.4,10.9,16.4z M10.9,9.1
                          c1.5,0,2.7,1.2,2.7,2.7s-1.2,2.7-2.7,2.7s-2.7-1.2-2.7-2.7S9.4,9.1,10.9,9.1z"/>
                      </g>
                    </svg>
                  </div>
                  <div class="feature_content">
                    <p class="name">Gallery</p>
                    <p class="description">Share memories through photographs</p>
                  </div>
                </a>
              </div>
              <div class="column small-12 large-6">
                <a href="http://www.ismdhanbad.ac.in">
                  <div class="feature_graphic left">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="0 0 50 40" enable-background="new 0 0 50 40" xml:space="preserve">
                      <g>
                        <path fill="#0089CB" d="M45.8,0H15.4c-2.2,0-3.8,1.5-3.8,3.7v3.1C6,7.4,0,11.6,0,21.7v6.7C0,34.5,5.5,40,11.7,40h12.5h3h0.3
                          c0.1,0,0.2,0,0.3-0.1c1.7-0.3,3-2,3-4.1c0-1-0.3-1.8-0.7-2.5h5.7c2.2,0,4.2-1.9,4.2-4.2c0-0.9-0.4-1.8-0.9-2.5h6.7
                          c2.2,0,4.2-1.9,4.2-4.2V4.2C50,2,48,0,45.8,0z M13.3,3.7c0-1.3,0.8-2,2.1-2h30.4c1.3,0,2.5,1.2,2.5,2.5v4.2H24
                          c-1-1.1-2.5-1.7-4-1.7h-6.7V3.7z M38.3,29.2c0,1.3-1.2,2.5-2.5,2.5h-8.3c0,0-0.1,0-0.1,0c-0.1,0-0.1,0-0.2,0h-5.5
                          c-0.5,0-0.8,0.4-0.8,0.8s0.4,0.8,0.8,0.8h5.5c1.3,0,2,1.3,2,2.5c0,1.2-0.7,2.5-2,2.5h-3H11.7c-5.3,0-10-4.7-10-10v-6.7
                          C1.7,9,11.4,8.3,13.3,8.3H20c1.6,0,3.3,0.9,3.3,2.5v1.7c0,1.6-1.7,2.5-3.3,2.5h-4.2c-0.3,0-0.7,0.2-0.8,0.5c0,0-1.2,3.1-3.1,4.9
                          c0,0,0,0,0,0c-0.8,0.7-1.7,1.2-2.7,1.2c-0.5,0-0.8,0.4-0.8,0.8s0.4,0.8,0.8,0.8c0.9,0,1.8-0.3,2.5-0.7c0.1,2.2,2,4,4.2,4h5.8h14.2
                          C37.1,26.7,38.3,27.9,38.3,29.2z M45.8,25h-10H21.7h-5.8c-1.3,0-2.5-1.2-2.5-2.5v-1.1c1.6-1.6,2.6-3.7,3.1-4.7H20
                          c2.4,0,5-1.5,5-4.2v-1.7c0-0.3,0-0.6-0.1-0.8h23.4v12.5C48.3,23.8,47.1,25,45.8,25z"/>
                        <path fill="#0089CB" d="M44.2,13.3h-6.7c-0.5,0-0.8,0.4-0.8,0.8c0,0.5,0.4,0.8,0.8,0.8h6.7c0.5,0,0.8-0.4,0.8-0.8
                          C45,13.7,44.6,13.3,44.2,13.3z"/>
                      </g>
                    </svg>
                  </div>
                  <div class="feature_content">
                    <p class="name">ISM Official Site</p>
                    <p class="description">Link to ISM official site</p>
                  </div>
                </a>
              </div>
              <div class="column small-12 large-6">
                <a href="SEE/index.html">
                  <div class="feature_graphic left">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                      <path fill="#0089CB" d="M14.2,0.3l-14,16C0.1,16.5,0,16.8,0,17l0,34c0,0.6,0.4,1,1,1h50c0.6,0,1-0.4,1-1V1c0-0.6-0.4-1-1-1L15,0
                        C14.7,0,14.4,0.1,14.2,0.3z M3.2,16L14,3.7V16H3.2z M50,50H2V18h13c0.6,0,1-0.4,1-1V2h34V50z"/>
                      <g>
                        <path fill="#0089CB" d="M9.9,27.2h1.6v5.6H9.9V27.2z"/>
                        <path fill="#0089CB" d="M14.7,27.2h1.4l2.3,3v-3H20v5.6h-1.4l-2.4-3.1v3.1h-1.5V27.2z"/>
                        <path fill="#0089CB" d="M21,27.2h4.5v1.3h-3v0.8h2.7v1.2h-2.7v0.9h3v1.3H21V27.2z"/>
                        <path fill="#0089CB" d="M26.3,27.2h4.5v1.3h-3v0.8h2.7v1.2h-2.7v0.9h3v1.3h-4.5V27.2z"/>
                        <path fill="#0089CB" d="M31.7,27.2h2.2c2,0,3.2,1.2,3.2,2.8v0c0,1.6-1.2,2.8-3.2,2.8h-2.1V27.2z M33.9,31.4c0.9,0,1.5-0.5,1.5-1.4
                          v0c0-0.9-0.6-1.4-1.5-1.4h-0.6v2.8H33.9z"/>
                        <path fill="#0089CB" d="M37.4,31.2H39v1.6h-1.6V31.2z"/>
                        <path fill="#0089CB" d="M40.4,31.2H42v1.6h-1.6V31.2z"/>
                        <path fill="#0089CB" d="M43.4,31.2H45v1.6h-1.6V31.2z"/>
                      </g>
                    </svg>
                  </div>
                  <div class="feature_content">
                    <p class="name">Connect with SEE</p>
                    <p class="description">Get to know how SEE is working.</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <div class="column small-12 large-6 large-pull-6 home_left_column">
        
        <div id="home_notable_alumni" class="section">
          <div class="section_heading">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
              <g>
                <path fill="#231F20" d="M55.7,11.5H39.6c-33.2,0-0.9,0.4-0.9,0.9S18,13.3,18.5,13.3h36.3v7.1h-50v-7.1H20c30.9,0,20.5-0.4,20.5-0.9
                  s9.4-0.9-20.5-0.9H3.9c-0.5,0-0.9,0.4-0.9,0.9v35.7C3,48.6,3.4,49,3.9,49h51.8c0.5,0,0.9-0.4,0.9-0.9V12.4
                  C56.6,11.9,56.2,11.5,55.7,11.5z M4.8,47.2v-25h50v25H4.8z"/>
                <path fill="#231F20" d="M30.7,29.3h9.8c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9h-9.8c-0.5,0-0.9,0.4-0.9,0.9
                  C29.8,28.9,30.2,29.3,30.7,29.3z"/>
                <path fill="#231F20" d="M44.1,32.9H30.7c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9h13.4c0.5,0,0.9-0.4,0.9-0.9
                  C45,33.3,44.6,32.9,44.1,32.9z"/>
                <path fill="#231F20" d="M42.3,38.3H30.7c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9h11.6c0.5,0,0.9-0.4,0.9-0.9
                  C43.2,38.7,42.8,38.3,42.3,38.3z"/>
                <path fill="#231F20" d="M21.3,34.6c0.9-0.8,1.5-1.9,1.5-3.2c0-2.4-1.9-4.3-4.3-4.3s-4.3,1.9-4.3,4.3c0,1.3,0.6,2.4,1.5,3.2
                  c-2.3,1.3-3.8,4.3-3.8,8.2c0,0.5,0.4,0.9,0.9,0.9h11.3c0,0,0,0,0,0c0.5,0,0.9-0.4,0.9-0.9c0-0.1,0-0.1,0-0.2
                  C25,38.8,23.6,35.9,21.3,34.6z M16.1,31.4c0-1.4,1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5c0,1.4-1.1,2.5-2.5,2.5
                  C17.2,33.9,16.1,32.7,16.1,31.4z M13.8,41.9c0.3-3.7,2.1-6.2,4.7-6.2s4.5,2.5,4.7,6.2H13.8z"/>
              </g>
            </svg>
            <span>Notable Alumni</span>
          </div>
          <div class="section_content">
            <div id="notable_alumni_slider">
              
              <a href="#">
                  <div class="notable_alumnus_container">
                    <div class="notable_alumnus">
                      <div class="picture" style="background-image:url('alumni_profile/shrey_chaturvedi.jpg');"></div>
                      <p class="name">Shrey Chaturvedi</p>
                      <p class="yog">2009-13 Batch</p>
                      <p class="gist">Presently at IIM Kolkata</p>
                    </div>
                  </div>
                </a>
                
              <a href="#">
                  <div class="notable_alumnus_container">
                    <div class="notable_alumnus">
                      <div class="picture" style="background-image:url('alumni_profile/rajesh_seth.jpg');"></div>
                      <p class="name">Rajesh Seth</p>
                      <p class="yog">1973 - 77 Batch</p>
                      <p class="gist">General Manager<br>
                        Technical Services & Rock Blasting Co LLC<br>
                                         Muscat
</p>
                    </div>
                  </div>
                </a>
                
              <a href="#">
                  <div class="notable_alumnus_container">
                    <div class="notable_alumnus">
                      <div class="picture" style="background-image:url('alumni_profile/utkarsh_srivastava.jpg');"></div>
                      <p class="name">Utkarsh Shrivastava</p>
                      <p class="yog">2008 - 12 Batch</p>
                      <p class="gist">Wireline Engineer @ Schlumberger<br>Abu Dhabi</p>
                    </div>
                  </div>
                </a>
                
              <a href="#">
                  <div class="notable_alumnus_container">
                    <div class="notable_alumnus">
                      <div class="picture" style="background-image:url('alumni_profile/priya_dwivedi.jpg');"></div>
                      <p class="name">Priya Dwivedi</p>
                      <p class="yog">2008 - 13 Batch</p>
                      <p class="gist">Technische Universiteit Delft<br>Netherlands</p>
                    </div>
                  </div>
                </a>
                
              <a href="#">
                  <div class="notable_alumnus_container">
                    <div class="notable_alumnus">
                      <div class="picture" style="background-image:url('alumni_profile/yatin_suri.jpg');"></div>
                      <p class="name">Yatin Suri</p>
                      <p class="yog">2006 - 10 Batch</p>
                      <p class="gist">Reservoir Engineer,OPCL Ltd<br>London</p>
                    </div>
                  </div>
                </a>
                
              <a href="#">
                  <div class="notable_alumnus_container">
                    <div class="notable_alumnus">
                      <div class="picture" style="background-image:url('alumni_profile/shashwat.jpg');"></div>
                      <p class="name">Shashwat Sharma</p>
                      <p class="yog">2004- 08 Batch</p>
                      <p class="gist">Vice President @ Hannam & Partners<br>London</p>
                    </div>
                  </div>
                </a>
                
              <a href="#">
                  <div class="notable_alumnus_container">
                    <div class="notable_alumnus">
                      <div class="picture" style="background-image:url('alumni_profile/vellanky.jpg');"></div>
                      <p class="name">Vellanky Venkateswarlu</p>
                      <p class="yog">1978 - 81 Batch</p>
                      <p class="gist">  Director<br>National Institute of Rock Mechanics<br>Bangalore</p>
                    </div>
                  </div>
                </a>
                
            </div>
          </div>
        </div>
        
        
        <!--<div id="home_jobs" class="section">
          <div class="section_heading">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
              <path fill="#231F20" d="M57,16H42c-0.5-5.7-5.1-10-11-10s-10.5,4.3-11,10H3c-0.6,0-1,0.4-1,1v36c0,0.6,0.4,1,1,1h54c0.6,0,1-0.4,1-1
              V17C58,16.4,57.6,16,57,16z M31,8c4.7,0,8.5,3.4,8.9,8H22.1C22.5,11.4,26.3,8,31,8z M56,18v12H36v-3c0-0.6-0.4-1-1-1h-8
              c-0.6,0-1,0.4-1,1v3H4V18H56z M28,28h6v8h-6V28z M4,52V32h22v5c0,0.6,0.4,1,1,1h8c0.6,0,1-0.4,1-1v-5h20v20H4z"/>
            </svg>
            <a href="jobs.html">Jobs & Internships</a>
          </div>
          <div class="section_content">
            
            
            <div class="job">
            
              <div class="right">
                <a href="#"><div class="btn action"><span>Apply</span></div></a>
              </div>
              <div class="job_details">
                <p class="title"><a href="href="http://www.ephesoft.com" target="_blank""><b> Internship</b> at <b>Ephesoft Innovations</b></a></p>
                <p>Location: Salt Lake City,CA</p>
                <p>Job Profile: Java,Big Data, Machine Learning</p>
                <p>Apply by: Feb 25th</p>
              </div>
            
            </div>
            
            <div class="job">
            
              <div class="right">
                <a href=""><div class="btn action"><span>Apply</span></div></a>
              </div>
              <div class="job_details">
                <p class="title"><a href="http://www.prizmatics.com" target="_blank"><b>Internship  </b> at <b>Prizmatics</b></a></p>
                <p>Location: Gurgaon </p>
                <p>Job Profile: HTML,CSS,PHP & Javasript</p>
                <p>Apply by: Feb 25th</p>
              </div>
            
            </div>
            
            
          </div>
        </div>-->
        <div id="home_gallery" class="section">
          <div class="section_heading">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
              <g>
                <path fill="#231F20" d="M5.7,4.9v49.2h49.2V4.9H5.7z M53.3,6.5v34.4h-1.1l-7.7-15.1c-0.7-1.5-2.2-2.4-3.8-2.4
                  c-1.5,0-2.9,0.8-3.7,2.1l-5.6,9.6c-1.5-1.9-5-5.5-9.2-5.5c-5.1,0-9.3,8.8-10.3,11.3H7.3V6.5H53.3z M50.3,40.9H13.5
                  c1.6-3.5,5.1-9.6,8.5-9.6c4.7,0,8.6,5.8,8.6,5.8c0.2,0.2,0.4,0.4,0.7,0.4c0.3,0,0.5-0.2,0.7-0.4l6.2-10.7c0.5-0.8,1.3-1.3,2.3-1.3
                  c1,0,1.9,0.6,2.4,1.5L50.3,40.9z M7.3,52.4v-9.8h45.9v9.8H7.3z"/>
                <path fill="#231F20" d="M18.7,22.9c0.1,0,0.2,0,0.2,0l6.2,0c0.1,0,0.2,0,0.3,0h0c1.5,0,3-0.6,4.1-1.7c1.1-1.1,1.7-2.6,1.7-4.1
                  c0-3.3-2.7-6-6-6c-2.6,0-4.9,1.7-5.7,4.2c-0.2,0-0.3,0-0.5,0c-2.2,0-3.9,1.8-3.9,3.9C15,21.2,16.7,22.9,18.7,22.9z M18.9,16.8
                  c0.3,0,0.5,0.1,0.8,0.2l0.9,0.4l0.2-1c0.3-2.1,2.1-3.7,4.3-3.7c2.4,0,4.3,2,4.3,4.3c0,1.1-0.4,2.2-1.2,3c-0.8,0.8-1.8,1.2-2.9,1.2
                  h0c-0.1,0-0.1,0-0.2,0l-6.3,0c-1.2,0.1-2.2-0.9-2.2-2.1C16.6,17.9,17.7,16.8,18.9,16.8z"/>
              </g>
            </svg>
            <a href="#">Photo Gallery</a>
          </div>
          <div class="section_content">
            
            <div id="home_gallery_preview">
              <div id="home_gallery_slider">
                
                <div class="home_gallery_slide" style="background-image:url('media/gallery/basant1.jpg')">
                  <a href="#"></a>
                </div>
                
                <div class="home_gallery_slide" style="background-image:url('media/gallery/oval_garden.jpg')">
                  <a href="#"></a>
                </div>
                
                <div class="home_gallery_slide" style="background-image:url('media/gallery/alumni_visiting.jpg')">
                  <a href="#"></a>
                </div>
                
              </div>
              <div class="cB"></div>
            </div>
            
          </div>
        </div>
       
        
        
        
        
      </div>
    </div>
    
    
    <div id="map" style="height: 20em;"></div>
  </div>
</div>

</div>



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