<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>default Accent</title>
<?php include("head.php") ?>
</head>

<body>
<?php include("Admin_Update_header.php"); ?>
<main>
<section class="side-bar">
  <div class="side-bar-content">
    <div class="search-list-item"><input type="text" placeholder="Search here"></div>
    <div class="sidebar-list">
    <ul class="fa-ul">
                                <li><a class="active" href="#"><span class="fa-li"><i class="fas fa-microphone"></i></span>Accent</a></li>
                                <li><a href="#"><span class="fa-li"><i class="fa fa-globe"></i></span>Countries</a></li>
                                <li><a href="#"> <span class="fa-li"><i class="fas fa-map-marked-alt"></i></span>States</a></li>
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
       <a class="orde-rev-bt">Order Review</a>
       <h1>Accent</h1>
       <div class="filter-form">
         <div class="form-fl form-4" >
           <div class="t-b-one" style="width:50%;"><input type="text" placeholder="Accent id" ><button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="t-b-one" style="width:50%;"><input type="text" placeholder="Enter Accent name " ><button type="submit"><i class="fa fa-search"></i></button></div>
         </div>
         <div class="form-usr-option">
           <a href="#" class="add-opn">Add As New</a>
           <a href="#" class="rew-opn">Review Selected</a>
           <a href="#" class="del-opn">Delete Selected</a>
         </div>
       </div>   
       <div class="table-options">
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
             <li><button class="sort-button active">All</button></li>
             <li><button class="sort-button">Review In Pending</button></li>
             <li><button class="sort-button">Review Completed</button></li>
           </ul>
         </div>
         <div class="table-pagging">
           <a href="#">&lt;</a>
           <a href="#">1</a>
           <a href="#">2</a>
           <a href="#">3</a>
           <a href="#">&gt;</a>
         </div>
       </div>
    </div>
    <div class="main-content">
      <div class="table-list country-table">
        <div class="table-row">
          <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>
          <div class="cnt-top">
          <div class="country-name"> 
            <div>Native English Speaker</div>
            <div><a class="fr-expnd"><i class="fa fa-angle-down"></i> <span>Show more</span></a></div>
          </div>
          </div>
          <div class="cnt-btom tog-expand">
           <div class="row-list">
           <ul>
                          <li><img src="images/icon19.png"><span>621 </span></li>
                                                   <li><img src="images/icon25.png"><span>Pakistan  </span></li>
                                                    <li><img src="images/icon17.png"><span>Punjab  </span> </li>
                                                   <li><img src="images/icon29.png"><span>Kamran Ali </span></li>
                                                    <li><img src="images/icon20.png"><span>GH213433453324532343</span></li>
                                                     <li><img src="images/icon30.png"><span>Review In Pending</span> </li>
                                                      <li><img src="images/icon10.png"><span>Kamran Ali </span></li>
                                                       <li><img src="images/icon22.png"><span>GH213433453324532343</span></li>
                                             </ul>
          <div class="row-option"><a href="#">Edit</a></div>
          </div>
          </div>
          
        </div>
        
        <div class="table-row">
          <label class="chk-bx"><input type="checkbox" /><i class="fa fa-check-square"></i></label>
          <div class="cnt-top">
          <div class="country-name"> 
            <div>European</div>
            <div><a class="fr-expnd"><i class="fa fa-angle-down"></i> <span>Show more</span></a></div>
          </div>
          </div>
          <div class="cnt-btom tog-expand">
           <div class="row-list">
           <ul>
                          <li><img src="images/icon19.png"><span>621 </span></li>
                                                   <li><img src="images/icon25.png"><span>Pakistan  </span></li>
                                                    <li><img src="images/icon17.png"><span>Punjab  </span> </li>
                                                   <li><img src="images/icon29.png"><span>Kamran Ali </span></li>
                                                    <li><img src="images/icon20.png"><span>GH213433453324532343</span></li>
                                                     <li><img src="images/icon30.png"><span>Review In Pending</span> </li>
                                                      <li><img src="images/icon10.png"><span>Kamran Ali </span></li>
                                                       <li><img src="images/icon22.png"><span>GH213433453324532343</span></li>
                                             </ul>
          <div class="row-option"><a href="#">Edit</a></div>
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
</body>
</html>