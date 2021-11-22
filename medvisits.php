
<?php
  include"bdd.php";
  include"session.php";?>
  
<html>
<head>
<title>Medical Visits </title>

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
			 
			   
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><h1><b>Medical Visits</b></h1>
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

<form  action="medvisits.php" id="medvisits" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="return ValidateForm()">


<?php
error_reporting(0);


$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";
$d7="";


include"bdd.php";

if(isset($_POST["add"]))
{
 $d1=$_POST["investigationid"];
$d2=$_POST["MR"];
$d3=$_POST["date"];
$d4=$_POST["history"];
$d5=$_POST["chiefcomplaint"];
$d6=$_POST["physicalexam"];
$d7=$_POST["diagnosis"];


$sql="insert into investigation VALUES (NULL,'".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."','" .$d7."')";


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

<tr><TD><INPUT TYPE="hidden" NAME="investigationid" SIZE=20 value="<?php echo $d1;?>"></TD></tr><tr>
<TD><b>MEDICAL NUMBER:</b></TD>
<TD><INPUT TYPE=TEXT NAME="MR" SIZE=27 value="<?php echo $d2;?>" onChange="controler(this)";></TD>
<td><b>VISIT DATE:</b></TD>
<TD><input type=date width="100%" NAME="date" value="<?php echo date("20y-m-d",time())?>">

</TD>
</tr><tr>

<TD><b>HISTORY:</b></TD>
<TD><INPUT TYPE=TEXT NAME="history" style="height:70" style="width:200" SIZE=27 value="<?php echo $d4;?>"></TD>

<td><b>CHIEF COMPLAINT:</b></TD>
<TD><INPUT TYPE=TEXT NAME="chiefcomplaint" style="height:70" style="width:200" SIZE=27 value="<?php echo $d5;?>"></TD></tr>

</tr><tr>
<td><b>PHYSICAL EXAM:</b></TD>
<TD><INPUT TYPE=TEXT NAME="physicalexam" style="height:70" style="width:200"  SIZE=27 value="<?php echo $d6;?>"></TD>

<td><b>DIAGNOSIS:</b></TD>
<TD><INPUT TYPE=TEXT NAME="diagnosis" style="height:70" style="width:200"   SIZE=27 value="<?php echo $d7;?>"></TD></tr>

<td>
              
</td>
</tr>
<tr><td>

<td> 

<td> 
<input type="submit"  style="height:60"  style="width:200"  name="add" value="----- SAVE -----" ></input> </td>
          
</td>
</tr>
</table>
      </fieldset>
               </form>
 </body>

</html>

