<!DOCTYPE html>
<html lang="en">
<head>
  <title>Public Health Documentation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="jquery-3.1.1.min.js"></script> 
   
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
	body {
      position: relative;

  }

    .header{
	background-color: #ffffff;
	
	}
 		
    .navbar {
      margin-bottom: 0;
      border-radius: 0;	
	
	
	
    }  
 	
    .foot
	{
		background-color:black;
	}
	
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      align:bottom;	
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  
     #welcome_page {padding-top:50px;height:500px;color: #000; background-color: #ffffff;}


  </style>
</head>
<body>

<div class="container-fluid" >
	<div class="header jumbotron" style="padding-bottom:0"  >
    <h1><center>Public Health Documentation</center></h1>
    <h3 align="right"> Papia Raj </h3>	
  </div>

</div>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#web1.html">Logo</a>
    </div>	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active" ><a href="#home" onclick="">Home</a></li>
        <li ><a href="#people" onclick="">People</a></li>
        <li ><a href="javascript:void(0);" onclick="load_it('research.html',true)">Research</a></li>
        <li><a href="javascript:void(0);" onclick="load_it('achievements.html',true)">Achievements And Awards</a></li>
	<li><a href="javascript:void(0);" onclick="load_it('achievements.html',true)">Contact Us</a></li>
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>       -->
    </div>
 	<div id="replaceme"></div>
	
  </div>

<script>
function load_it(isfirst){
var hash = window.location.hash;
if(hash == '#people')
	$("#replaceme").load('people.html');
else
	$("#replaceme").load('home.html');
if(!isfirst)
	$("html, body").animate({scrollTop : "80px"});

}
window.onhashchange = function() {
	load_it(false);
}
load_it(true);
 $(".nav li").on("click", function() {
      $(".nav li").removeClass("active");
      $(this).addClass("active");
	
    });

/*$(function() 
                    { 
                      $('a[data-toggle="tab"]').on('shown', function () {
                        //save the latest tab; use cookies if you like 'em better:
                        localStorage.setItem('lastTab', $(this).attr('href'));
                       });

                      //go to the latest tab, if it exists:
                      var lastTab = localStorage.getItem('lastTab');
                      if (lastTab) {
                         $('a[href=' + lastTab + ']').tab('show');
                      }
                      else
                      {
                        // Set the first tab if cookie do not exist
                        $('a[data-toggle="tab"]:first').tab('show');
                      }
                  });*/

/*load_it(
<?php 
if(isset($_REQUEST['uname']) && in_array($_REQUEST['uname'],array('home.html','people.html','research.html')) )
 echo "'" . $_REQUEST['uname'] . "'"; 
else
 echo "'home.html'";
?>,false);*/
</script>
</nav>

  



<footer class="foot container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>


















 

