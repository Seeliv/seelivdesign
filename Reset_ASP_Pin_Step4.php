<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Reset ASP Pin Step 4</title>
<?php include("head.php") ?>
</head>

<body >
<div class="top-log">
  <div class="lang"><a id="langSelBtn" href="#">English</a>
    <div class="lang-selection">
      <ul>
       <li><label data-lang="English"><input type="radio" name="langSelct"/>English</label></li>
       <li><label data-lang="Hindi"><input type="radio" name="langSelct"/>中文</label></li>
       <li><label data-lang="中文"><input type="radio" name="langSelct"/>русский</label></li>
       <li><label data-lang="Urdu"><input type="radio" name="langSelct"/>Português</label></li>
       <li><label data-lang="Other"><input type="radio" name="langSelct"/>Deutsche</label></li>
       <li><label data-lang="Other"><input type="radio" name="langSelct"/>français</label></li>
       <li><label data-lang="Other"><input type="radio" name="langSelct"/>Türk</label></li>
      </ul>
    </div>
  </div>
  <div class="log-pg-hds">Reset Password</div>
  <div class="log-pg-optn"><a href="#"><i class="fa fa-question"></i><strong>Support</strong></a></div>
</div>
<div class="general-form">
  <div class="form-field">
  <input type="text" placeholder="Type 4 digit New ASP PIN" />
  </div>
  <div class="form-field">
  <input type="text" placeholder="Retype 4 digit New ASP PIN" />
  </div>
  <div class="form-field">
    <button type="submit" class="roll-btn full-btn" >Update ASP PIN</button>
  </div>
  <p><a href="#" >Return To Login</a></p>
</div>
<?php include("footer.php"); ?>
</body>
</html>