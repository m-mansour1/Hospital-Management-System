
<?php
  include"bdd.php";
  include"session.php";?>
  
<html>
<head>
<title>Staff Registration</title>

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
			 
			   
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>STAFF REGISTRATION</b>
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
				   <td align="left"><h1><b>ADD NEW STAFF</b></h1></td>
				   </p></form>
				   
                  </td>
				 
              </tr>
            </table>
			
			
</head>
</table>
<body text="#000000" leftmargin="0" topmargin="0">

<form  action="NewUser.php" id="NewUser" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="return ValidateForm()">


<?php
error_reporting(0);


$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";


include"bdd.php";

if(isset($_POST["add"]))
{
 $d1=$_POST["userid"];
$d2=$_POST["Name"];
$d3=$_POST["username"];
$d4=$_POST["password"];
$d5=$_POST["Email"];
$d6=$_POST["staffregdate"];
$d7=$_POST["confirm"];


$query=mysql_query("select user.username from user where user.username='".$d3."'");
if (mysql_num_rows($query)>0)
{
echo"<script>alert(\" USERNAME Already Exists Please Re-Enter New Username\")</script>";
}
else
{
$sql="insert into user (Name,username,password,Email,date,usertypeid) VALUES ('".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."','" .$d7."')";

if (mysql_query($sql)){
echo '<script type="text/javascript">alert("REGISTRATION DONE");</script>';
}
else{
echo"<script>alert(\"ERROR \")</script>";
}

}}
 ?>

	  
<fieldset>
<h1><b>STAFF REGISTRATION</b></h1>


	<div class="imagebox">

<TABLE width="900" BORDER= 0   class="imagebox">
 

<tr>
<TD></TD>

<TD><INPUT TYPE="hidden" NAME="userid" SIZE=20 value="<?php echo $d1;?>" ></TD></tr><tr>
<TD><b>NAME:</b></TD>
<TD><INPUT TYPE=TEXT NAME="Name" SIZE=27 value="<?php echo $d2;?>"></TD>

<TD><b>USERNAME:</b></TD>
<TD><INPUT TYPE=TEXT NAME="username" SIZE=27 value="<?php echo $d3;?>" ></TD></tr><tr>

<TD><b>PASSWORD:</b></TD>
<TD><INPUT TYPE=PASSWORD NAME="password" SIZE=27 value="<?php echo $d4;?>"></TD>

<td><b>EMAIL:</b></TD>
<TD><INPUT TYPE=TEXT NAME="Email" SIZE=27 value="<?php echo $d5;?>"></TD></tr>

<td></TD><td></TD>
<input name="staffregdate" size=15 type="hidden" class="input" value="<?php echo date("20y-m-d",time())?>" >

<TD colspan="2"><b> IS ADMIN:</b><INPUT TYPE="radio" NAME="confirm" SIZE=27 value="1" checked="checked">&nbsp&nbsp&nbsp <b>IS EMPLOYER:</b>
<INPUT TYPE="radio" NAME="confirm" SIZE=27 value="2"></TD>

<tr>
<tr><td>

<td><td><td>
<input type="submit"  style="height:60"  style="width:200"  name="add" value="----- SAVE -----" ></input> </td>
<td></td>

<td>              
</td>
</tr>
</table>
      </fieldset>
               </form>
 </body>

</html>
