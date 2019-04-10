<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>General Account SignUp</title>
<?php include("head.php") ?>
</head>

<body >
<div class="top-log">
  <div class="lang"><a href="#">English</a><a href="#">中文</a> </div>
  <div class="log-pg-hds">General Account Sign-Up</div>
  <div class="log-pg-optn"><a href="#"><i class="fa fa-question"></i><strong>Support</strong></a></div>
</div>
<div class="general-form">
  <div class="form-field">
    <div class="cnt-sort field-75"><input type="text" /><div class="cnt-optn"></div></div>
    <input type="button" class="roll-btn field-25" value="SEND OTP" />
  </div>
  <div class="form-field">
  <input type="text" placeholder="Enter OTP received on Phone" />
  </div>
  <div class="form-field">
    <input type="button" value="Next" class="roll-btn full-btn" />
  </div>
  <p>Already have an account? <a href="#" >Login</a></p>
</div>
<?php include("footer.php"); ?>
</body>
</html>