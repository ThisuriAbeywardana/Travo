
<?php    
  echo '
    <div class="nav_bar-div">
    <br>
      <nav class = "nav_bar">
        <div class="nav_bar_logo">
            <img class="nav_bar_logo_img" src="' . URLROOT . '/public/images/Logo/travo.png" alt="LOGO">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav_bar_links">
          <li class="navigations_name"></li>
          <li class="navigations_name"></li>
          <li class="navigations_name"><a href="'.URLROOT.'/unregistered">HOME</a></li>
          <li class="navigations_name"><a href="'.URLROOT.'/unregistered/faq">FAQ</a></li>
          <li class="navigations_name"><a href="'.URLROOT.'/unregistered#about_us-section">ABOUT</a></li>
          <li class="navigations_name"><a href="#contact_us-section">CONTACT</a></li>
          <li class="navigations_name"><a href="'.URLROOT.'/unregistered/feedback">FEEDBACK</a></li>
          <li class="navigations_name"><a href="'.URLROOT.'/unregistered/login">LOG IN</a></li>
          <li class="navigations_name"><a href="'.URLROOT.'/unregistered/signup">SIGN UP</a></li>
        </ul>
      </nav>
    </div>
  ';    
?>
