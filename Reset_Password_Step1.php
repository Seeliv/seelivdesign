<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Reset Password Step 1</title>
<?php include("head.php") ?>
</head>

<body >
<div class="top-log">
  <div class="lang"><a id="langSelBtn" href="#">English</a>
    <div class="lang-selection">
      <ul>
       <li><label data-lang="English"><input type="radio" name="langSelct"/>English</label></li>
       <li><label data-lang="русский"><input type="radio" name="langSelct"/>русский</label></li>
       <li><label data-lang="Español"><input type="radio" name="langSelct"/>Español</label></li>
       <li><label data-lang="中文"><input type="radio" name="langSelct"/>中文</label></li>
       <li><label data-lang="हिंदी"><input type="radio" name="langSelct"/>हिंदी</label></li>
       <li><label data-lang="Türk"><input type="radio" name="langSelct"/>Türk</label></li>
       <li><label data-lang="Português"><input type="radio" name="langSelct"/>Português</label></li>
       <li><label data-lang="Deutsche"><input type="radio" name="langSelct"/>Deutsche</label></li>
       <li><label data-lang="français"><input type="radio" name="langSelct"/>français</label></li>
      </ul>
    </div>
  </div>
  <div class="log-pg-hds">Reset Password</div>
  <div class="log-pg-optn"><a href="#"><i class="fa fa-question"></i><strong>Support</strong></a></div>
</div>
<div class="general-form">
  <div class="form-field">
    <div class="cnt-sort  for-mobile-mod active"><input type="text" /><div class="cnt-optn"></div></div>
    <div class="for-email-mod"><input type="text" placeholder="Email / Account ID / Approval ID" /></div>
  </div>
  <div class="form-field">
  <input type="text" placeholder="Enter ASP Pin" />
  </div>
  <p class="lnk-two">
  <a href="#" class="send-log-mod">Reset Via Email / IDs</a>
<a href="#">Forget ASP Pin</a>
  </p>
  <div class="form-field">
    <button type="submit" class="roll-btn full-btn" >Next</button>
  </div>
  <p><a href="#" >Return To Login</a></p>
</div>
<?php include("footer.php"); ?>
</body>
</html>