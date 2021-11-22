<style type="text/css">
<!--
/* ROOT FONT STYLES */

* {
    padding: 0;
    margin: 0 auto;
    box-sizing: border-box;
}



/* ==== GRID SYSTEM ==== */
.container {
  width: 90%;
  margin-left: auto;
  margin-right: auto;
}

.row {
  position: relative;
  width: 100%;
  background-color: #9FD6FF;
  
}

.row [class^="col"] {
  float: left;
 }

.row::after {
    content: "";
    clear: both;
    display: block;
}

.col-2 {width: 16.66%;}
.col-1 {width: 8.33%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 80.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

/* Custom */

  .container{
    min-height:84px;
    border:1px solid black;
    max-width:420px;
    margin: 0 auto;
    margin-top:40px;
  }
  header{
    min-height:83px;
    border-bottom:1px solid black;
    
  }

.doc-details{
    margin-top:5px;
  margin-left:15px;
  
}
  
.clinic-details{
  margin-top:5px;
  margin-left:15px;
}
  .doc-name{
    font-weight:bold;
    margin-bottom:5px;
    
  }
  .doc-meta{
    font-size:9px;
  }
.datetime{
  font-size:10px;
  margin-top:5px;

}

.row.title{
 font-weight:bold;
  padding-left:10px;
  margin-top:10px;
  margin-bottom:10px;
}

.prescription{
  min-height:380px;
  margin-bottom:0px;
font-size: x-large;
  background-color:#C4E9FB;
}
table{
  text-align:left;
  width:90%;
  min-height:25px;
}
table th{
  font-size:8px;
  font-weight:bold;
}

table tr{
  margin-top:20px;
}
table td{
  font-size:7px;
  
}

.instruction{
  font-size:6px;
}
-->
</style>

<div class="container">
  <header class="row" BGCOLOR="#008DD2">
    <div class="col-10">
      <div class="doc-details">
        <p class="doc-name">RAFIK HARIRI UNIVERSITY HOSPITAL</p>
        <p class="doc-meta">MS - Family Medicine , FECSM (Oxford , UK) , MBBS</p>
        <p class="doc-meta">Rgn: 2341</p>
      </div>

      <div class="clinic-details">
        <p class="doc-meta">People Care Intl' Hospital</p>
        <p class="doc-meta">#1, Crescent Park Street, Chennai</p>
      </div>

    </div>
    <div class="col-2 datetime">
      <img src="images/reportimg.png" height="80px" width="75px">
    </div>
  </header>
  <div class="prescription">
  <?php
  include"bdd.php"; 
  
  $d1="";
  $d2="";
  $d3="";
  $d4="";

  $sql1="select patient.MR,patient.PatientFirstName,patient.PatientPhone,vital.visitdat, vital.notes from patient,vital where patient.MR=1 and vital.MR=patient.MR";

  
  $res1=mysql_query($sql1);
  while($row=mysql_fetch_array($res1)){
	  $d1=$row['MR'];
	  $a=date("20y-m-d",time());
  $d2=$row['PatientFirstName'];
  $d3=$row['visitdat'];
  $d4=$row['notes'];
  $d5=$row['PatientPhone'];
	  echo "<tr><td><center><table ><tr><td><h2><b> MR : </b>".$d1."</h2></center><center></td><br></center>";
	  echo "<td><td height=22 width=175><h2><b>NAME : </b>".$d2."</h2></td></tr></td>";
	  echo "<tr><td><h2><b>VISIT DATE : </b>".$d3."</h2></td>";
	  echo "<td><td><h2><b>PHONE NUMBER : </b>".$d5."</h2></td></tr>";
	   echo "<tr><td></td></tr>";
	    echo "<tr><td></td></tr>";
		 echo "<tr><td></td></tr>";
		  echo "<tr><td></td></tr>";
		   echo "<tr><td></td></tr>";
		   echo "<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
		echo "<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
		echo "<td><h2><b>DOCTOR NOTES:</b></h2></td><tr></tr>";
	    echo "<tr>";
		echo "<h3><td colspan=3>The doctor have checked patient ".$d2." and the patient has been diagnozed with ".$d4."</h3></td></tr>";
		echo "<td>Therefore the patient needs to rest.</td><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
		echo "<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
		echo "<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
		echo "<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
		echo "<td align=center><h2>Doctor's Signature:</h2> </td>";
		echo "<td></td>";
			   	  echo "<td align=center><h2>".$a."</h2></td></tr></table>";
			   	  echo"</table>";
				  
				  

  }
  
?>
    
  </div>
  

</div>