<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>General Account SignUp</title>
<?php include("head.php") ?>
</head>

<body >
<div class="top-log">
  <div class="lang"><a id="langSelBtn" href="#">English</a>
    <div class="lang-selection">
      <ul>
       <li><label data-lang="English"><input type="radio" name="langSelct"/>English</label></li>
       <li><label data-lang="Hindi"><input type="radio" name="langSelct"/>Hindi</label></li>
       <li><label data-lang="中文"><input type="radio" name="langSelct"/>中文</label></li>
       <li><label data-lang="Urdu"><input type="radio" name="langSelct"/>Urdu</label></li>
       <li><label data-lang="Other"><input type="radio" name="langSelct"/>Other</label></li>
      </ul>
    </div>
  </div>
  <div class="log-pg-hds">General Account Sign-Up</div>
  <div class="log-pg-optn"><a href="#"><i class="fa fa-question"></i><strong>Support</strong></a></div>
</div>
<div class="general-form">
  <div class="form-field">
    <div class="cnt-sort field-75"><input type="text" /><div class="cnt-optn"></div></div>
    <button type="submit" class="roll-btn field-25" >SEND OTP</button>
  </div>
  <div class="form-field">
  <input type="text" placeholder="Enter OTP received on Phone" />
  </div>
  <div class="form-field">
    <button type="submit" class="roll-btn full-btn" >Next</button>
  </div>
  <p>Already have an account? <a href="#" >Login</a></p>
</div>
<?php include("footer.php"); ?>
</body>
</html>