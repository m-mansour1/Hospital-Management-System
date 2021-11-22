
<?php
  include"bdd.php";
  include"session.php";?>
  
<html>
<head>
<title>Vital Signs </title>

<style type="text/css">
<!--
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image:url("images/log1.png"); 
}
.imagebox{width:100%;
height:300;
background-color: #DEFAFF ;
}
INPUT {
background-color: white;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}


.listbox{ 
background-color: white ;
color: black;
font-family: arial, verdana, ms sans serif;
}

.altTextField {
background-color: #background-color: white;;
font-family: verdana;
font-size: 12pt;
color: #09c09c
}

.select{
background-color: #C8F7FF;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
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
			 
			   
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><h1><b>Vital Signs</b></h1>
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
				   <td align="left"><h1></h1></td>
				   </p></form>
				   
                  </td>
				 
              </tr>
            </table>
			
			
</head>
</table>
<body text="#000000" leftmargin="0" topmargin="0">

<form  action="vitalsigns.php" id="vitalsigns" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="return ValidateForm()">


<?php
error_reporting(0);


$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";
$d7="";
$d8="";
$d9="";
$d10="";
$d11="";
$d12="";
$d13="";

include"bdd.php";

if(isset($_POST["add"]))
{
 $d1=$_POST["vitalid"];
$d2=$_POST["MR"];
$d3=$_POST["doctorname"];
$d4=$_POST["visitdat"];
$d5=$_POST["temperature"];
$d6=$_POST["height"];
$d7=$_POST["weight"];
$d8=$_POST["respiratoryrate"];
$d9=$_POST["bodyposition"];
$d10=$_POST["bloodpressure"];
$d11=$_POST["heartstatus"];
$d12=$_POST["heart"];
$d13=$_POST["notes"];

$sql="insert into vital VALUES (NULL,'".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."','" .$d7."','" .$d8."','" .$d9."','" .$d10."','" .$d11."','" .$d12."','" .$d13."')";


if (mysql_query($sql)){
echo '<script type="text/javascript">alert("REGISTRATION DONE");</script>';
}
else{
echo"<script>alert(\"ERROR \")</script>";
}

}
 ?>

	  
<div class="imagebox">

<TABLE width="900" BORDER= 0   class="imagebox">
 

<tr>

<tr><TD><INPUT TYPE="hidden" NAME="vitalid" SIZE=20 value="<?php echo $d1;?>"></TD></tr><tr>
<TD><b>MEDICAL NUMBER:</b></TD>
<TD><INPUT TYPE=TEXT NAME="MR" SIZE=27 value="<?php echo $d2;?>" onChange="controler(this)";></TD>
<td><b>DOCTOR NAME:</b></TD>
<TD><select  width="100%" NAME="doctorname"   value="<?php echo $d3;?>" class="listbox">
<option>SELECT OPTION</option>
<option>wisam</option>
</select></TD></tr><tr>

<input name="visitdat" size=15 type="hidden" class="input" value="<?php echo date("20y-m-d",time())?>" >

<TD><b>TEMPERATURE:</b></TD>
<TD><INPUT TYPE=TEXT NAME="temperature" SIZE=27 value="<?php echo $d5;?>"><b>C</b></TD>

<td><b>HEIGHT:</b></TD>
<TD><INPUT TYPE=TEXT NAME="height" SIZE=27 value="<?php echo $d6;?>"><b>Cm</b></TD></tr>

<tr>
<TD><b>WEIGHT:</b></TD><td>
<select name="weight"  value="<?php echo $d7;?>"><b>Kg</b>
<option>SELECT OPTION</option>
<option>40</option>
<option>50</option>
<option>60</option>
<option>70</option>
<option>80</option>
<option>90</option>
</select></td>

	
<TD><b>RESPIRATORY RATE:</b></TD>
<td>
<select name="respiratoryrate"  value="<?php echo $d8;?>">
<option>SELECT OPTION</option>
<option>12-20</option>
<option>20-30</option>
<option>24-30</option>
<option>30-60</option>

</select></td>

	</tr><tr>

<TD><b>BLOOD PRESSURE:</b></TD>
<td>
<select name="bodyposition"  value="<?php echo $d9;?>">
<option>SELECT OPTION</option>
<option>ABOVE 120</option>
<option>90 OR HIGHER</option>
<option>80-89</option>
<option>BELOW 80</option>
<option>ABOVE 180</option>
<option>140 or HIGHER</option>
<option>130-139</option>
<option>120-129</option>
<option>BELOW 120</option>
</select> <INPUT TYPE=TEXT NAME="bloodpressure" SIZE=10 value="<?php echo $d10;?>"></td>

<TD><b>HEART:</b></TD>
<td>
<select name="heartstatus"  value="<?php echo $d11;?>">BPM
<option>SELECT OPTION</option>
<option>100-170</option>
<option>95-162</option>
<option>93-157</option>
<option>90-153</option>
<option>88-149</option>
<option>85-145</option>
<option>83-140</option>
<option>80-136</option>
<option>78-132</option>
<option>75-128</option>
</select> <INPUT TYPE=TEXT NAME="heart" SIZE=10 value="<?php echo $d12;?>"></td>
</tr><tr>
<td>
<b>DOCTOR NOTES:</b></td>
<td>
<INPUT TYPE=TEXT size=25 value="<?php echo $d13;?>" style="height:70" style="width:200" NAME="notes" SIZE=10>

</td>

</tr><tr>
<td>
              
</td>
</tr>
<tr><td>

<td> 

<td> 
<input type="submit"  style="height:60"  style="width:200"  name="add" value="----- SAVE -----" ></input> </td>


<td><INPUT name="RESET" style="height:60"  style="width:200" TYPE=submit VALUE="---- CLEAR ----"></td>
              
</td>
</tr>
</table>
      </fieldset>
               </form>
 </body>

</html>

