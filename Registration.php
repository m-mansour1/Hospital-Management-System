
<?php
  include"bdd.php";
  include"session.php";?>
  
<html>
<head>
<title>Patient Registration</title>

<style type="text/css">
<!--
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image:url("images/log1.png"); 
}
.imagebox{width:100%;
height:300;
background-color:#DEFAFF  ;
}
INPUT {
background-color: white;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}


.listbox{ 
background-color: #C8F7FF ;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}

.altTextField {
background-color: #background-color: white;;
font-family: verdana;
font-size: 12pt;
color: #09c09c
}

.select{
background-color: #C8F7FF ;
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
			 
			   
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> ADD NEW PATIENT </b>
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


<body text="#000000" leftmargin="0" topmargin="0">




<form  action="Registration.php" id="Registration" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="return ValidateForm()">

<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var emailID=document.customerregistration.email
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
</script>
				
                 



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




include"bdd.php";

if(isset($_POST["add"]))
{
 $d1=$_POST["MR"];
$d2=$_POST["PatientFirstName"];
$d3=$_POST["PatientAddress"];
$d4=$_POST["PatientPhone"];
$d5=$_POST["RegisterNumber"];
$d6=$_POST["sexcode"];
$d7=$_POST["chooseNationality"];
$d8=$_POST["chooseStatus"];
$d9=$_POST["PatientBirthday"];
$d10=$_POST["PatientRegisterdate"];



$d7="select nationalities.NationalityName from nationalities where nationalities.NationalityName='".$_POST["chooseNationality"]."' ";
$res1=mysql_query($d7);
$p1=mysql_fetch_array($res1);

$d8="select status.statusName from status where status.statusName='".$_POST["chooseStatus"]."' ";
$res2=mysql_query($d8);
$p2=mysql_fetch_array($res2);

$query=mysql_query("select patient.PatientFirstName from patient where patient.PatientFirstName='".$d7."'");
if (mysql_num_rows($query)>0)
{
echo"<script>alert(\" Patient FirstName Already Exists Please Re-Enter New PatientFirstName\")</script>";
}
else
{
$sql="insert into patient (PatientFirstName,PatientAddress,PatientPhone,RegisterNumber,PatientSex,PatientNationality,PatientStatus,PatientBirthday,PatientRegisterdate) VALUES ('".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."','" .$p1[0]."','" .$p2[0]."','" .$d9."','" .$d10."')";


$Id= "SELECT MR FROM patient WHERE MR=(SELECT max(MR) FROM patient)";
$result=mysql_query($Id);
$p3=mysql_fetch_array($result);
$updateId = $p3[0] +1;

if (mysql_query($sql)){
echo '<script type="text/javascript">alert("Your Medical Number is '.$updateId.'");</script>';
}
else{
echo"<script>alert(\"ERROR \")</script>";
}

}}
 ?>
 <?php

 if(isset($_POST["add"])){
$u=$_POST["PatientFirstName"];
$p=$_POST["PatientPhone"];
$password=md5($p);
  $sql = "select PatientFirstName,PatientPhone from  patient where patient.PatientFirstName='".$u."' and patient.PatientPhone='".$p."';";
  $res = mysql_query($sql,$link);
if (mysql_num_rows($res)!=0)
       {
       
       $_SESSION["PatientFirstName"] = $u;
       $_SESSION["PatientPhone"] = $p;
        }
}

?>
	  
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
				   <td align="left"><h1><b>PATIENT REGISTRATION</b></h1></td>
				   </p></form>
				   
                  </td>
				 
              </tr>
            </table>
			
			
</head>
</table>









	<div class="imagebox">

<TABLE width="900" BORDER= 0   class="imagebox">
 

<tr>
<TD></TD>

<TD><INPUT TYPE="hidden" NAME="MR" SIZE=20 value="<?php echo $d1;?>" ></TD></tr><tr>
<TD><b>FIRST NAME:</b></TD>
<TD><INPUT TYPE=TEXT NAME="PatientFirstName" SIZE=27 value="<?php echo $d2;?>"></TD>

<TD><b>ADDRESS:</b></TD>
<TD><INPUT TYPE=TEXT NAME="PatientAddress" SIZE=27 value="<?php echo $d3;?>" ></TD></tr><tr>

<TD><b>PHONE NUMBER:</b></TD>
<TD><INPUT TYPE=TEXT NAME="PatientPhone" SIZE=27 value="<?php echo $d4;?>"></TD>

<td><b>REGISTER NUMBER:</b></TD>
<TD><INPUT TYPE=TEXT NAME="RegisterNumber" SIZE=27 value="<?php echo $d5;?>"></TD></tr>

<tr>
<TD><b> SEX:</b></TD><td><select name="sexcode"  value="<?php echo $d6;?>">><option>SELECT OPTION</option><option>Male</option><option>Female</option></select></td>

	
<TD><b>NATIONALITY:</b></TD>
<td>
<select name="chooseNationality" >
        <option value="<?php echo $d7;?>">SELECT OPTION</option>'
                 <?php 
				 include"bdd.php";
                    $query = mysql_query("SELECT NationalityName FROM  nationalities ") 
                           or die(mysql_error());  
                    while ($result = mysql_fetch_assoc($query)) {   
                           $stateChoice = $result['NationalityName'];                                      
                             echo '<option value="';
                             echo "$stateChoice"; 
                             echo '">';
                             echo "$stateChoice";  
                             echo '</option>';
                             echo '<br />';                  
                     }
                  ?>
    </select> 
	</tr><tr>

<TD><b> MARITAL STATUS:</b></TD>
<td>
<select name="chooseStatus" >
        <option value="<?php echo $d8;?>">SELECT OPTION</option>'
                 <?php 
				 include"bdd.php";
                    $query = mysql_query("SELECT statusName FROM status ") 
                           or die(mysql_error());  
                    while ($result = mysql_fetch_assoc($query)) {   
                           $stateChoice = $result['statusName'];                                      
                             echo '<option value="';
                             echo "$stateChoice"; 
                             echo '">';
                             echo "$stateChoice";  
                             echo '</option>';
                             echo '<br />';                  
                     }
                  ?>
    </select> 
	</TD>

<TD><b>BIRTHDATE:</b></TD>
<TD><INPUT TYPE=date NAME="PatientBirthday" SIZE=27 value="<?php echo $d9;?>"></TD></tr><tr>

</tr><tr>
<td>
<input name="PatientRegisterdate" size=15 type="hidden" class="input" value="<?php echo date("20y-m-d",time())?>" >
              
</td>
</tr>
<tr><td>

<td> 

<td> 
<input type="submit"  style="height:60"  style="width:200"  name="add" value="----- SAVE -----" ></input> </td>



<td>              
</td>
</tr>
</table>
      </fieldset>
               </form>
 </body>

</html>
