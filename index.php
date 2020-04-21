<!DOCTYPE html>
<html>
<head>
<title>Hostel Allotment System</title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="css/style1.css" />
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <img src="images/logonew.jpeg" height="150" width="200" style="float:left">
            <div id="header2">
                <div class=headstyle>
            <img src="images/white.png" height="150" width="800" style="float:left">
             <div class="centered"><h1 style=   "font-family: 'Lobster', Georgia, Times, serif;
    text-align:left;
    color:black;
    text-shadow: 2px 2px 2px black;
    font-size:40px;                                        
    font-weight:bold;
    margin-top:0px;
    margin-bottom: 1px;">HOSTEL ALLOTMENT SYSTEM</h1>
    <h2 style=  "font-family:Arial,sans-serif;
    text-align:left;
    color:black;
    text-shadow: 1px 1px 1px red;
    font-size:30px;
    font-weight:lighter;
    margin-top:0px;
    margin-bottom: 1px;">Cochin university college of engineering and technology,Kuttanad,Kerala,India.</h2>
    <h3 style=  "font-family:Times New Roman,serif;
    text-align:left;
    color:black;
    text-shadow: 2px 2px 2px white;
    font-size:20px;
    font-weight:lighter;
    margin-top:0px;
    margin-bottom: 1px;">Hostel application website.</h3>
</div>
             </div>        

        </div></div>
        <div id="leftcolumn">
          <?php include('ver_nav.php');?>
        </div>
        <div id="content">
           <?php
               $content=$_GET['page'];
                //echo $content;
                if(isset($content))
                {
                    include("$content");
                }
                else
                {
                    include('home.php');
                }
            ?>
       </div>
        <div id="footer">
            <center>
            <p><b><i>All copyrights recieved.2019</i></b></p>
        </center>
        </div>
    </div>
</body>
</html>
