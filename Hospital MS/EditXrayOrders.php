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
			 
			   
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> EDIT X_RAY ORDERS </b>
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
				   <td align="left"><h1><b>EDIT X_RAY ORDERS</b></h1></td>
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
		   <form action="EditXrayOrders.php" method="POST">
            <table align="center" width="70%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  <?php
  include"bdd.php";
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

if(isset($_POST["add"])){
	$d1=$_POST["xrayid"];
	$d2=$_POST["MR"];
	$d3=$_POST["doctorname"];
	$d4=$_POST["orderdate"];
	$d5=$_POST["xrayname"];
	
	
	
	
	
	
	
	$sql="insert into xray (MR,doctorname,orderdate,xrayname)
	values ('".$d2."','" .$d3."','" .$d4."','" .$d5."')";
	mysql_query($sql);
	
		echo"<script>alert(\" REGISTRATION DONE  \")</script>";
	
    
}
	
 ?>
 <?php
 if(isset($_REQUEST["xrayid"])){
	 $req=$_REQUEST["xrayid"];
	 $sql="select * from xray where xrayid=".$req;
	 $res = mysql_query($sql);
	 $data=mysql_fetch_row($res);
	 $d1=$data[0];
	 $d2=$data[1];
	 $d3=$data[2];
	 $d4=$data[3];
	 $d5=$data[4];

}
if (isset($_POST["modifier"])){
   $d1=$_POST["xrayid"];
   $d2=$_POST["MR"];
   $d3=$_POST["doctorname"];
   $d4=$_POST["orderdate"];
   $d5=$_POST["xrayname"];

$sql = "update from xray set MR= '" .$_POST["MR"]."'and doctorname ='" .$_POST["doctorname"]."'and orderdate='" .$_POST["orderdate"]."'and xrayname ='" .$_POST["xrayname"];
     $res = mysql_query($sql);
     if($sql==0){
echo"<script>alert(\" UPDATE OK \")</script>";
}
else{
echo"<script>alert(\" ATTENTION UPDATE FAILED\")</script>";
}
    }
if(isset($_POST["delete"])){
	 $d1=$_POST["xrayid"];
   $d2=$_POST["MR"];
   $d3=$_POST["doctorname"];
   $d4=$_POST["orderdate"];
   $d5=$_POST["xrayname"];
	
    $sql = "delete from xray where xrayid = ".$d1;
    $res = mysql_query($sql);
    if($sql==0){
		echo"<script>alert(\" XRAY ORDER DELETED \")</script>";
	}else{
		echo"<script>alert(\" ATTENTION DELETE FAILED\")</script>";
		}
	}

?>
<html>
<body  topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0">

  
<form  action="EditXrayOrders.php" id="EditXrayOrders" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">

<TABLE width="700"    background="images/log1.jpg" align="left">
<tr><TD><INPUT TYPE="hidden" NAME="xrayid" SIZE=20 value="<?php echo $d1;?>"></TD></tr><tr>
<TD width="500"><b>MR:</b></TD>
<TD><INPUT TYPE=TEXT NAME="MR" SIZE=20 value="<?php echo $d2;?>" onChange="controler(this)";></TD>
<td><TD width="500"><b>DOCTOR NAME:</b></TD>
<TD><select  width="100%" NAME="doctorname"   value="<?php echo $d3;?>" class="listbox">
<option>SELECT OPTION</option>
<option>wisam</option>
</select></TD></tr>

<TD><b>ORDER DATE:</b></TD>
 <td>
<div align="left" style="float:left">
<input name="orderdate"  type="date" size="15" class="input"  value="<?php echo $d4;?>">
</div>
</div>
</td>


<td><TD><b>X_RAY NAME:</b></TD>
<TD>
<INPUT TYPE=TEXT NAME="xrayname" SIZE=20 value="<?php echo $d5;?>" onChange="controler(this)";>
</td>
		</select></tr><tr>
		
		
		
		
		
<TABLE  BORDER=0 align="left" width=670   background="images/log1.jpg">


<td><input type="submit"   style="height:40"  style="width:80"  name="add" value="S A V E" ></td><td>
   <input type="submit" style="height:40"  style="width:80" value="MODIFY" name="modifier"></td><td>
  <input type="submit" value="DELETE" style="height:40"  style="width:80" name="delete"></td><td>
    <INPUT name="RESET" style="height:40"  style="width:80" TYPE=submit VALUE="CLEAR"></td>
	<td width="600"><a href="xrayprint.php"><b><center>PRINT X_RAY ORDER </center></b></a></td>
</table>
</form>

<?php
include"bdd.php";
$sql = "select xray.xrayid,
               patient.MR,
			   xray.doctorname,
			   orderdate,xrayname 
			   from patient,xray 
			   where patient.MR=xray.MR 
			   order by xray.xrayid  ";

  $res = mysql_query($sql);
  
 ?> 
 <br><br><br>
<TABLE BORDER width="1000" align="left"   background="#fccf17">
<?php
echo "<CAPTION><b><i>X_RAY ORDERS LISTS</i></b></CAPTION>" ;
echo "<th>SELECT</th><th>MR</th><th>DOCTOR NAME</th><th>ORDER DATE</th><th>X_RAY NAME</th>";
 for($n=0;$n<mysql_num_rows($res);$n++)
 {   if($n % 2==0)
 $bgcolor="#9FD6FF";
 else
 $bgcolor="#FFFB9F";
  $data = mysql_fetch_row($res);
  $lig="<TR bgcolor=".$bgcolor."><TD><a href=\"EditXrayOrders.php?xrayid=".$data[0]."\">".$data[0]."</a></TD><TD>".$data[1]."</TD><TD>".$data[2]."</TD><TD>".$data[3]."</TD><TD>".$data[4]."</TD></tr>";
  echo $lig;
    }
       ?>
</table>