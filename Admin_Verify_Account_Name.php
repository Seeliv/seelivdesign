<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Verify Account Name</title>
<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
<?php include("head.php") ?>
</head>

<body>
<?php include("Admin_Verify_header.php"); ?>
<main>
<section class="side-bar">
  <div class="side-bar-content">
    <div class="search-list-item"><input type="text" placeholder="Search here"></div>
    <div class="sidebar-list">
    <ul class="fa-ul">
                                <li><a class="active" href="#"><span class="fa-li"><i class="fas fa-user-edit"></i></span>Account Name</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-portrait"></i></span>Display Picture (dp)</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-image"></i></span>Cover Photo (cp)</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-newspaper"></i></span>Notice Board</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-pen-square"></i></span>School Introduction</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-images"></i></span>Slide Bar (1)</a></li>
                                <li><a href="#"><span class="fa-li"><i class="far fa-images"></i></span>Slide Bar (2)</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-book-dead"></i></span>Local Students' Rule Book</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fas fa-journal-whills"></i></span>Foreigner Students' Rule Book</a></li>
                          </ul>
                          </div>
  </div>
</section>
<div class="content">
  <div class="content-data">
  <div class="content-in">
    <div class="content-fix-head">
       <h1>Account Name</h1>
       <div class="fix-tog-top">
       <label>
         <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span> </label>
                            Auto Approve</label>
       </div>
       <div class="filter-form">
         <div class="form-fl form-fl-full form-5"><!--
           <div class="mob-filter-head"><button id="filter-close"><i class="fa fa-arrow-left"></i></button><p>State Search</p></div>-->
           <div class="o-b-one">
             <div class="for-lbl">Location</div>
             <select>
             <option>All Countries</option>
             <option>----</option>
             <option>----</option>
             </select>
           </div>
           <div class="o-b-one">
             <div class="for-lbl"></div>
             <select>
             <option>All States</option>
             <option>----</option>
             <option>----</option>
             </select>
           </div>
           <div class="t-b-one">
           <div class="for-lbl"><label><input type="radio" name="lbl-dte-for" /><i class="roll-chk-show"></i>Updated On</label><label><input type="radio" name="lbl-dte-for" /><i class="roll-chk-show"></i>Varified On</label></div>
           <input type="text" data-range="true" data-multiple-dates-separator=" - " placeholder="Select Date Range" class="from-date datepicker-here" data-language='en' ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="t-b-one">
           <div class="for-lbl"><label><input type="radio" name="lbl-sel-for" /><i class="roll-chk-show"></i>Updated On</label><label><input type="radio" name="lbl-sel-for" /><i class="roll-chk-show"></i>Varified On</label></div>
           <input type="text" class="select-date datepicker-here" placeholder="Enter Date" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="t-b-one">
           <div class="for-lbl for-lbl-4">
             <label><input type="radio" name="lbl-id-for" /><i class="roll-chk-show"></i>All</label>
             <label><input type="radio" name="lbl-id-for" /><i class="roll-chk-show"></i>Acc-ID</label>
             <!--<label><input type="radio" name="lbl-id-for" /><i class="roll-chk-show"></i>AP-ID</label>-->
             <label><input type="radio" name="lbl-id-for" /><i class="roll-chk-show"></i>Email</label>
             <label><input type="radio" name="lbl-id-for" id="srch-tog-0" /><i class="roll-chk-show"></i>Phone</label>
           </div>
           <input type="text" placeholder="Search here" id="srch-tog-1" >
           <input type="text" placeholder="+86" id="srch-tog-2" >
           <button type="submit"><i class="fa fa-search"></i></button></div>
         </div>
       </div>   
       <div class="table-options opt-wth-chks">
         <div class="all-sel"><label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label> <a id="edit-mod">Edit</a></div>
         <div class="mob-page-tool">
           <ul>
             <li>
               <button class="mob-fil-sh filt-click" id="filter-open"><i class="fa fa-search"></i></button>
             </li>
             
             <li>
               <button class="mob-fil-sh filt-click" id="fill-optn"><i class="fa fa-filter"></i></button>
               <div class="filter-bt-bl"></div>
             </li>
             <li>
               <button class="mob-fil-sh filt-click" id="fill-sort"><i class="fa fa-sort"></i></button>
             </li>
             <li>
               <button class="mob-fil-sh filt-click" id="form-opt-open" ><i class="fa fa-cog"></i></button>
             </li>
           </ul>
         </div>
         <div class="sort-option">
           <button class="sort-button roll-filter"><i class="fa fa-filter"></i></button>
           <ul>
             <li><button class="sort-button">Review In Pending</button></li>
             <li><button class="sort-button">Review Completed</button></li>
             <li><button class="sort-button">Overall Requests</button></li>
           </ul>
         </div>
         <div class="table-pagging">
           <a href="#">&lt;</a>
           <a href="#">1</a>
           <a href="#">2</a>
           <a href="#">3</a>
           <a href="#">&gt;</a>
           <div class="pagging-opt">
             
              <a class="chk-icn" href="#"><i class="fa fa-check-circle"></i></a>
              <a class="rmv-icn" href="#"><i class="fa fa-remove"></i></a>
           </div>
         </div>
       </div>
    </div>
    <div class="main-content">
      <div class="table-list country-table for-usr-wt-img">
        <div class="table-row">
          <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>
          <div class="cnt-top">
          <div class="country-name">
           <div class="usr-img-unvr">
             <img src="images/22.png" />
           </div>
           <div>Unverified User<br/><span class="unv-usrNm"><img src="images/icon29.png">Kamran Ali</span></div>
           <div><a class="fr-expnd"><i class="fa fa-angle-down"></i> <span>Show more</span></a></div>
          </div>
          </div>
          <div class="cnt-btom tog-expand">
           <div class="row-list">
           <ul>
                                
                                                   <li><img src="images/icon19.png"><span>Punjab, India </span></li>
                                                   <li><img src="images/icon17.png"><span>Geo Stamp  </span></li>
                                                   <li><img src="images/icon29.png"><span>Last Login Location </span></li>
                                                    <li><img src="images/icon20.png"><span>23 March 2018 10:10:20</span></li>
                                                     <li><img src="images/icon30.png"><span>in Pending</span> </li>
                                                      <li><img src="images/icon10.png"><span>Kamran Ali </span></li>
                                                       <li><img src="images/icon22.png"><span>36363636</span></li>
                                                    <li><img src="images/icon20.png"><span>24 March 2018 10:10:20</span></li>
                                             </ul>
                                             
          
          </div>
          <div class="row-fix-optn">
            <ul>
              <li><a class="p-icn" href="#">P</a></li>
              <li><a class="n-icn" href="#">N</a></li>
              <li><a class="imgs-icn" href="#"><img src="images/icon13.png" /></a></li>
              <li><a class="chk-icn" href="#"><i class="fa fa-check-circle"></i></a></li>
              <li><a class="rmv-icn" href="#"><i class="fa fa-remove"></i></a></li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</main>
<?php include("footer.php"); ?>
<script src="js/datepicker.min.js"></script>
<script src="js/datepicker.en.js"></script>
<script>
$('.from-date').datepicker({
    language: 'en',
    maxDate: new Date(), // Now can select only dates, which goes after today
	range: true
})
$('.select-date').datepicker({
    language: 'en',
    maxDate: new Date(), // Now can select only dates, which goes after today
	//range: true
})
</script>
</body>
</html>