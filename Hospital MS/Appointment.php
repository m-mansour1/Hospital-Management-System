<html>
<head>
<title>CMIS</title>

<style type="text/css">
<!--
body{  
  font-family: Calibri, Helvetica, sans-serif;  
 background-image:url("images/log1.png");  
} 

A. { 
    font-family: "Arial";
    font-size: 11pt; 
	text-decoration: underline
	}
.table {
	font-family: "Arial";
	font-size: 12pt;
	line-height: 12pt}
A:link {
	color:#000000;
	text-decoration: none
	}
A:visited{
	color:#000000;
	text-decoration: none
	} 
A:hover {
	color: #ff0000;
	text-decoration: underline
	}
.q1 {  
    background-color: #FFFF99;
	border: #000000;
	border-style: ridge;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px}

INPUT {
background-color: white;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}
.listbox{ 
background-color: white;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}


.imagebox{width:100%;
height:300;
background-color:#C8F7FF   ;
}

.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
}

.arrow {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}



.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
} 

fieldset {
    border: 0;
}

.select{
background-color: #C8F7FF ;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}

-->
</style>

<table width="100%" border="0" bgcolor="#C8F7FF " align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  <br></br>
        <tr> 
		<table align="center" width="1350" border = "0">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="34">
              <tr align="center" bgcolor="#E3FEFF">
			 
			   
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> RESERVE AN APPOINTMENT </b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
	
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="4" height="7" bgcolor="#1c1f4c"></td>
        </tr>
        <tr >
          <td colspan="4" height="20">
		  </tr>
		  </tr>
		  </td>
		  </td>
</head>
</table>
</table>
</table>



</head>


<fieldset>

<table align="center" width="1350" border = "0">
        </tr>
        <tr align="left"> 
		
		<p>
		
          <td> 
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="34">
              <tr bgcolor="#E3FEFF">
	
				   <td>
				   <form><i class="arrow left"></i> 
				   <input type="button" style="height:25"  style="width:100"  value="BACK " onclick="history.back()"/>
				   <td align="left"><h1><b>APPOINTMENT RESERVATION</b></h1></td>
				   </p></form>
				   
                  </td>
				 
              </tr>
            </table>
			
			
</head>
</table>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#DEFAFF  " align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#DEFAFF  ">
	  
        <tr> <br>
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="Appointment.php" method="POST">
            <table align="center" width="70%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  <?php
  include"bdd.php";
  ?>
  <?php
  if(isset($_POST["ref"]))
{

    $sql = "insert into reservation1 (reservation1id,MR,doctorname,reservationdate,reservationtime,getdate) select * from reservation";
    $res = mysql_query($sql);
	$sql1 = "delete from reservation";
    $res1 = mysql_query($sql1);

	 if($sql==0){
	echo"<script>alert(\" SEND OK \")</script>";
}
else{
echo"<script>alert(\" NOT SENT. TRY AGAIN\")</script>";
    
}

if($res1==0){
	echo"<script>alert(\" Sent to reservation1 \")</script>";
}
else{
echo"<script>alert(\" Could not send\")</script>";
    
}


}


?>
          
</body>
</html>

<?php
error_reporting(0);

include"bdd.php";
$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";

if(isset($_POST["add"])){
	$d1=$_POST["reservationid"];
	$d2=$_POST["medicalnumber"];
	$d3=$_POST["doctorname"];
	$d4=$_POST["reservationdate"];
	$d5=$_POST["reservationtime"];
	$d6=$_POST["getdate"];
	
	
	
	
	
	$sql1="select reservationtime,reservationdate from reservation where  reservationtime='".$d5."'";
	$result=mysql_query($sql1);
	
	
	if(mysql_num_rows($result)>0){
		echo"<script>alert(\"APPOINTMENT ALREADY TAKEN\")</script>";
		
	}
	else{
	$sql="insert into reservation (MR,doctorname,reservationdate,reservationtime,getdate)
	values ('".$d2."','" .$d3."','" .$d4."','" .$d5."','".$d6."')";
 
	mysql_query($sql);
	
		echo"<script>alert(\" REGISTRATION DONE  \")</script>";
	
    }
}
	
 ?>
 <?php
 if(isset($_REQUEST["reservationid"])){
	 $req=$_REQUEST["reservationid"];
	 $sql="select * from reservation where reservationid=".$req;
	 $res = mysql_query($sql);
	 $data=mysql_fetch_row($res);
	 $d1=$data[0];
	 $d2=$data[1];
	 $d3=$data[2];
	 $d4=$data[3];
	 $d5=$data[4];
	 $d6=$data[5]; 

}
if (isset($_POST["modifier"])){
   $d1=$_POST["reservationid"];
   $d2=$_POST["medicalnumber"];
   $d3=$_POST["doctorname"];
   $d4=$_POST["reservationdate"];
   $d5=$_POST["reservationtime"];
   $d6=$_POST["getdate"];

   $sql = "update reservation set MR= '" .$_POST["medicalnumber"]. 
                                       "',doctorname ='" .$_POST["doctorname"].
									   "',reservationdate='" .$_POST["reservationdate"].
									   "', reservationtime ='" .$_POST["reservationtime"].
									   "', getdate='" .$_POST["getdate"].
									   "' where reservationid = ".$_POST["reservationid"];
     $res = mysql_query($sql);
     if($sql==0){
echo"<script>alert(\" UPDATE OK \")</script>";
}
else{
echo"<script>alert(\" ATTENTION UPDATE FAILED\")</script>";
}
    }
if(isset($_POST["delete"])){
	$d1=$_POST["reservationid"];
    $d2=$_POST["medicalnumber"];
    $d3=$_POST["doctorname"];
    $d4=$_POST["reservationdate"];
    $d5=$_POST["reservationtime"];
    $d6=$_POST["getdate"];
	
    $sql = "delete from reservation where reservationid = ".$d1;
    $res = mysql_query($sql);
    if($sql==0){
		echo"<script>alert(\" APPOINTMENT DELETED \")</script>";
	}else{
		echo"<script>alert(\" ATTENTION DELETE FAILED\")</script>";
		}
	}

?>
<html>
<body  topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0">
<script language="javascript">
 function controler(a){
         if(isNaN(a.value)){
                 alert("ATTENTION MEDICAL NUMBER:INTEGER VALUE");
                 a.value="";
         }
 }

  </script>
  
<form  action="Appointment.php" id="Appointment" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">

<TABLE width="700"    background="images/log1.jpg" align="left">
<tr><TD><INPUT TYPE="hidden" NAME="reservationid" SIZE=20 value="<?php echo $d1;?>"></TD></tr><tr>
<TD width="500"><b>MR:</b></TD>
<TD><INPUT TYPE=TEXT NAME="medicalnumber" SIZE=20 value="<?php echo $d2;?>" onChange="controler(this)";></TD>
<td><TD width="500"><b>DOCTOR NAME:</b></TD>
<TD><select  width="100%" NAME="doctorname"   value="<?php echo $d3;?>" class="listbox">
<option></option>
<option>wisam</option>
</select></TD></tr>

<TD><b>RESERVATION DATE:</b></TD>
 <td>
<div align="left" style="float:left">
<input name="reservationdate"  type="date" size="15" class="input"  value="<?php echo $d4;?>">
</div>
</div>
</td>


<td><TD><b>RESERVATION TIME:</b></TD>
<TD>
<select name="reservationtime"  value="<?php echo $d5;?>">>
<option>APPOINTMENT SLOTS</option>
<option>9:00 am - 9:30 am</option><option>9:30 am - 10:00 am</option>
<option>10:00 am - 10:30 am</option><option>10:30 am - 11:00 am</option>
<option>11:00 am - 11:30 am</option><option>11:30 am - 12:00 pm</option>
<option>12:00 pm - 12:30 pm</option><option>12:30 pm - 1:00 pm</option>
<option>1:00 pm - 1:30 pm</option><option>1:30 pm - 2:00 pm</option>
</select>
		</select></tr><tr>




<TD><INPUT TYPE="hidden" NAME="getdate"  SIZE=30 value="<?php echo date("20y-m-d",time())?>"></TD>
</table><br><br><br><br><br><br>
<TABLE  BORDER=0 align="left" width=670   background="images/log1.jpg">


<td><input type="submit"   style="height:40"  style="width:80"  name="add" value="S A V E" ></td><td>
   <input type="submit" style="height:40"  style="width:80" value="MODIFY" name="modifier"></td><td>
  <input type="submit" value="DELETE" style="height:40"  style="width:80" name="delete"></td><td>
    <INPUT name="RESET" style="height:40"  style="width:80" TYPE=submit VALUE="CLEAR"></td>
	<td><input type="submit"  value="S E N D" style="height:40"  style="width:80"   name="ref"></td>
	<td width="600"><a href="showappointments.php"><b><center>PRINT SLIP APPOINTMENT </center></b></a></td>
</table>
</form>

<?php
include"bdd.php";
$sql = "select reservation.reservationid,patient.MR,PatientFirstName,reservation.doctorname,reservationdate,reservationtime from patient,reservation where patient.MR=reservation.MR order by reservation.reservationid  ";

  $res = mysql_query($sql);
  
 ?> 
 <br><br><br>
<TABLE BORDER width="1000" align="left"   background="#fccf17">
<?php
echo "<CAPTION><b><i>RESERVATION LISTS</i></b></CAPTION>" ;
echo "<th>SELECT</th><th>MR</th><th>PATIENT NAME</th><th>DOCTOR NAME</th><th>RESERVATION DATE</th><th>RESERVATION TIME</th>";
 for($n=0;$n<mysql_num_rows($res);$n++)
 {   if($n % 2==0)
 $bgcolor="#9FD6FF";
 else
 $bgcolor="#FFFB9F";
  $data = mysql_fetch_row($res);
  $lig="<TR bgcolor=".$bgcolor."><TD><a href=\"Appointment.php?reservationid=".$data[0]."\">".$data[0]."</a></TD><TD>".$data[1]."</TD><TD>".$data[2]."</TD><TD>".$data[3]."</TD><TD>".$data[4]."</TD><TD>".$data[5]."</TD></tr>";
  echo $lig;
    }
       ?>
</table>