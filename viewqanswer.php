<!DOCTYPE html> 
<html>
<head>
  
  <title>welcome to patient homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="800px.css" media="screen and (max-width:800px)">
  <link rel ="stylesheet" type="text/css" href="css/menu.css" >

</head>
<body style="background-color: powderblue;">
<div id="Container">
<div id="Header"><img src="images/bbb.jpg" width="1150" height="250"></div><!-- end of header -->
<div id="Menu">
  <ul>
  <li><a href="viewpost.php">view post</a></li>
  <li><a href="pquestion.html">dialogue box</a></li>
  <li><a href="changepassword.php">change pawssord</a></li>
  <li><a href="forgetpass.html">remember password</a></li>
  <li><a href="login1.php">Logout</a></li>

  
  </ul>
</div><!-- End of Menu-->

<div id="sidebar">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<h2 align="center"><b>Important links</b></h2>
<ul>
<li><a href="viewpost.php">Latest news</a></li>
<li><a href="home.php">home</a></li>

</ul>


<!-- 14/06/2017<br /><br />-->

</div>

<div id="rightside">



 <script type="text/javascript">
var image1=new Image()
image1.src="images/aaa.jpg"
var image2=new Image()
image2.src="images/aa.jpg"
var image3=new Image()
image3.src="images/a.jpg"
var image4=new Image()
image4.src="images/elec.jpg"
var image5=new Image()
image5.src="images/bbb.jpg"

</script>
<img src="images/t.jpg" name="slide" width="230" height="276" /><script type="text/javascript">
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<5)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
</script>

<br>
<center>
<script language="javascript" type="text/javascript">
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

//  DECLARE AND INITIALIZE VARIABLES
var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now


/* VARIABLES FOR FORMATTING */

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="50"><TABLE CELLSPACING=4 BORDER=10 BGCOLOR=#2554C7 BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="50"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BGCOLOR=#82CAFF BORDERCOLOR=#2554C7><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="##2554C7"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

//   DO NOT EDIT BELOW THIS POINT  //

// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++)
{

// BOLD TODAY'S DAY OF WEEK
if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

// PRINTS DAY
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  // RETURNS THE NEXT DAY TO PRINT
  week_day =Calendar.getDay(); 

  // START NEW ROW FOR FIRST DAY OF WEEK
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
  var day  = Calendar.getDate();

  // HIGHLIGHT TODAY'S DATE
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  // PRINTS DAY
  else
  cal += TD_start + day + TD_end;
  }

  // END ROW FOR LAST DAY OF WEEK
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  // INCREMENTS UNTIL END OF THE MONTH
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop

cal += '</TD></TR></TABLE></TABLE>';

//  PRINT CALENDAR
document.write(cal);

//  End -->
</script>
</center>




</div><!-- end of side bar -->

<div id="MainCon">  

                      
<form name="reg" action="viewanswers.php" method="post">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <td colspan="1" width="250">
        <div align="center">  
          </div></td>
      </tr>
      <tr>
        <td><div align="right">Patiient_ID:</div></td>
        <td><input type="text" name="i" /></td>
        </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="search" /></td>
<td><input name="reset" type="reset" value="Reset" /></td>
       </tr>
    </table>
    </form>
</fieldset>
    
            <p><a  href="doctorviewquestion.php"> <b>you have 15  messages </b></a></p>



</div><!-- end of main Content -->


<?php include('footer.php');?>