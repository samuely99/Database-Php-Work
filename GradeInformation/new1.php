<HTML>
<HEAD>
<TITLE>Student Grade Information</TITLE>
</HEAD>
<BODY>
<!-- Table for info -->
<EM>Student Grade Information</EM>
<TABLE border="5" width="20%">
<!-- Create the very first row, consisting of the headings.-->

<tr><th align="center">Student ID</th><th align="center">Student Name</th><th align="center">DBMS Grade</th>
<th align="center">Data Structures Grade</th><th align="center">Average</th></tr>
<?php
$grades=array('01'=>array(),'23'=>array(),
'45'=>array(),'67'=>array(),'89'=>array());
//Populating the grade info

$grades['01']['Name']="Andy Anderson";
$grades['23']['Name']="Brenda Blue";
$grades['45']['Name']="Connor Cool";
$grades['67']['Name']="Daisy Darling";
$grades['89']['Name']="Eddie Elephant";
$grades['01']['DBMS']= 78;
$grades['23']['DBMS']= 83;
$grades['45']['DBMS']= 90;
$grades['67']['DBMS']= 70;
$grades['89']['DBMS']= 67;
$grades['01']['DataS']= 85;
$grades['23']['DataS']= 90;
$grades['45']['DataS']= 82;
$grades['67']['DataS']= 74;
$grades['89']['DataS']= 70; 
$grades['01']['Avg']= (78 + 85)/2 ;
$grades['23']['Avg']= (83 + 90)/2;
$grades['45']['Avg']= (90 + 82)/2;
$grades['67']['Avg']= (70 + 74)/2;
$grades['89']['Avg']= (67 + 70)/2;

foreach($grades as $name => $gradeinfo)
{

print("<tr><td><center>$name</center></td>");
foreach($gradeinfo as $info)

{
print("<td><center>$info</center></td>");
}
print("</tr>");
}
?>
</TABLE>
</BODY>
</HTML>
