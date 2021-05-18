<?php
include("phpbook-vars.php");
include("displayDBQueryField.php");
$database="sty1001";
$connect=mysqli_connect($hostname, $user, $password);
mysqli_select_db($connect, $database);
?>
<Html>
<Head>
<Title>Student(s) with the Lowest GPA</Title>
</Head>
<Body>
<Table Border=0 cellPadding=10 Width=100%>
<Tr>
<Td BGColor="820DE7" Align=Center VAlign=top Width=17%> </Td>
<Td BGColor="FFFFFF" Align=Left VAlign=Top Width=83%>
<?php
$query="Select S.Name, S.Id, S.GPA From Student S
Where S.GPA <= (Select Min(S1.GPA) From Student S1)";
echo "<h1>The following displays students with the lowest GPA.</h1>";
echo "<br>";
display_db_query($query, $connect,True,2);
mysqli_close($connect);
?>
</Td>
</Tr>
</Table>
</Body>
</Html>
