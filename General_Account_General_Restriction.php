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
    <div class="sort-option option-sort-3">
           <ul>
             <li><button class="sort-button active">General Account</button></li>
             <li><button class="sort-button">School Account</button></li>
             <li><button class="sort-button">Attendant Account</button></li>
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
                                <li><a class="active" href="#"><span class="fa-li"><i class="fas fa-user-plus"></i></span>New Account Sign-up</strong></a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-sign-in-alt"></i></span>Existing Account login</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-user-circle"></i></span>Changing Guardian</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-user-circle"></i></span>Being Guardian</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-user-md"></i></span>Being Coordinator</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-wallet"></i></span>Top-up Fund</strong></a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-money-check-alt"></i></span>Withdraw Fund</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comments-dollar"></i></span>National fund Transfer</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comments-dollar"></i></span>International fund Transfer</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-hand-holding-usd"></i></span>National fund Collection</a></li>
                                <li><a href="#"><span class="fa-li"><<i class="fas fa-hand-holding-usd"></i></span>International fund Collection</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-user-plus"></i></span>Adding New Friends</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-podcast"></i></span>Broadcast Service</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>1-on-1 Chat Calendar Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-microphone"></i></span>1-on-1 Chat Microphone Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="far fa-images"></i></span>1-on-1 Chat Gallery Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-camera"></i></span>1-on-1 Chat Camera Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-print"></i></span>1-on-1 Chat Documents Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comment-dots"></i></span>1-on-1 Chat Outgoing message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-comment-dots"></i></span>1-on-1 Chat Incoming message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-phone-volume"></i></span>1-on-1 Chat Outgoing Audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-phone-volume"></i></i></span>1-on-1 Chat Incoming audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-video"></i></span>1-on-1 Chat Outgoing video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-video"></i></span>1-on-1 Chat Incoming video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>1-on-1 Chat Favorite Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>1-on-1 Chat Location Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>1-on-1 Chat Contact Card Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Creating New Group</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Calendar Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Microphone Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Gallery Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Camera Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Documents Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Outgoing message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Incoming message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Outgoing Audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Incoming audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Outgoing video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Incoming video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Favorite Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Location Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Group chat Contact Card Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Calendar Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Microphone Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Gallery Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Camera Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Documents Access</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Outgoing message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Incoming message</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Outgoing Audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Incoming audio call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Outgoing video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Incoming video call</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Favorite Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Location Sharing</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Enrollment Chat Contact Card Sharing<</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Posting Resume & Applying for Jobs</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Applying for scholarships</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Applying for Programs</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Applying & attempting Exams</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Ticket Booking</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Auto-Deleting Message</a></li>
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