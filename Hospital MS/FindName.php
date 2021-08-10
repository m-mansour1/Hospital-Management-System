

<?php
 
  include "session.php";
  include"bdd.php";
 ?>
<html>

<style type ="text/css">
<!--
body{  
  font-family: Calibri, Helvetica, sans-serif;  
 background-image:url("images/log1.png");  
} 


a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    background-color: #6fc6a5;
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
<head>
<title>Check Patient</title>

</head>

<center>
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
			 
			   
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>SEARCH FOR A PATIENT</b>
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



  
<form  action="FindName.php" id="FindName" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">
 
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
				   <td><h1><b>SEARCH FOR EXISTING PATIENT </b></h1></td>
				   </p></form>
				   
                  </td>
				 
              </tr>
            </table>
			
			
</head>
</table>
 
<TABLE  align="center" border="0" >

<tr>
<tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr>
<tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr>

                <td  ><b>Enter the name of patient:</b> </td>
                <td  >
				<div align="left" style="float:left">
                    <input name="Name"  type="text" size="15"  >
                </div>
				
				
             <td align="center" colspan="7">
<input type=submit size=30 name="btsearch" value="FIND"></td></td><tr></tr>
</tr>
				

</table>
</center>
<?php
include"bdd.php";
if(isset($_POST["btsearch"])){
$sql2 ="select MR,PatientFirstName,PatientAddress,PatientPhone,PatientBirthday from patient where PatientFirstName like '%".$_POST["Name"]."%'";
	


$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
       echo "<center><br>NO PATIENT FOUND</center>";
   
  else { ?>
<br>
     <TABLE BORDER=1 align="center"   background="#fccf17">

 <th><b>Medical Number</b></th>
 <th><b>Patient Name</b></th>
 <th><b>Address</b></th>
 <th><b>Phone</b></th>
 <th><b>Birthday</b></th>
   <?php
   for ($n=0;$n<mysql_num_rows($res);$n++) 
   {   if($n % 2==0)
 
 $bgcolor="#9FD6FF ";
 else
 $bgcolor="#FFFB9F ";
      
       $data = mysql_fetch_row($res);
        $lig="<TR bgcolor=".$bgcolor."><TD><center><b>".$data[0]."</TD><TD>".$data[1]."</TD><TD>".$data[2]."</TD><TD>".$data[3]."</TD><TD>".$data[4]."</TD>";
       echo $lig;
    }
    echo "</TABLE>";
  }


}

  ?>
 
<tr><td><td><td>
<center>
<tr>
</table>
</tr><tr><td></td>
<tr>
<a href="Registration.php"><input type="button" style="height:60"  style="width:200"  value="-ADD NEW PATIENT-" /></tr>
</a>
</center>

 </form>