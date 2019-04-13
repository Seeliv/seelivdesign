<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>General Account General Restriction</title>
<?php include("head.php") ?>
</head>

<body>
<?php include("Admin_Update_header.php"); ?>
<main>
<section class="side-bar">
  <div class="side-bar-content">
    <div class="search-list-item lft-side-sort">
    <div class="sort-option option-sort-2">
           <ul>
             <li><button class="sort-button active">General Account</button></li>
             <li><button class="sort-button">School Account</button></li>
           </ul>
         </div>
     
    <div class="sort-option">
           <ul>
             <li><button class="sort-button active">General</button></li>
             <li><button class="sort-button">Country</button></li>
             <li><button class="sort-button">State</button></li>
           </ul>
         </div>
    <input type="text" placeholder="Search here"></div>
    <div class="sidebar-list">
    <ul class="fa-ul">
                                <li><a href="#"><span class="fa-li"><i class="fas fa-microphone"></i></span>New Account Signup</a></li>
                                <li><a class="active" href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Countries</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-map-marked-alt"></i></span>States</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-search-location"></i></span>Postal Address</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-subway" ></i></span>Subway Address</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-microphone-alt"></i></span>Mother Tongue</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-compass"></i></span>Study Field</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-layer-group"></i></span>Study level</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-graduation-cap"></i></span>Programs</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-book"></i></span>Subjects</a></li>
      </ul>
    </div>
  </div>
</section>
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>New Account Sign-up</h1>
       <div class="filter-form">
         
       </div>   
       
    </div>
    <div class="main-content">
      <div class="acc-set-tog">
        <h4>This Action Will be applicable to all Accounts</h4>
        <div class="set-sectn">
          <div class="set-sctn-row">
            <div class="set-scn-lbl">Restrict</div>
            <div class="set-action">
                  <div class="sidebtn ">
                    <ul>
                    <li> <a href="">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span> </label>
                        </a> </li>
                    </ul>
                  </div> 
                  </div>
          </div>
          <div class="set-sctn-row">
            <div class="set-scn-lbl">Single Action Required</div>
            <div class="set-action">
                  <div class="sidebtn ">
                    <ul>
                    <li> <a href="">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span> </label>
                        </a> </li>
                    </ul>
                  </div> 
                  </div>
          </div>
          <div class="set-sctn-row">
            <div class="set-scn-lbl">Multiple Action Required</div>
            <div class="set-action">
                  <div class="sidebtn ">
                    <ul>
                    <li> <a href="">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider round"></span> </label>
                        </a> </li>
                    </ul>
                  </div> 
                  </div>
          </div>
          <div class="set-sctn-row-cntr">Verify Identity <a href="#">Edit</a></div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</main>
<?php include("footer.php"); ?>
</body>
</html>