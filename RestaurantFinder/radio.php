<?php
  
$name_array=array(
   0=>"Soul",
   1=>'Italian',
   2=>'Mexican',
   3=>'Indian',
   4=>'Thai',
   5=>'Sea',
   6=>'Cajun',
   7=>'Japanese',
   8=>'American'
);

$duration_array = array(
   0=>'Annies Overflow Restaurant',
   1=>'Italian Farmhouse',
   2=>'Burrito Me',
   3=>'Taj-E-India',
   4=>'Thai Smile',
   5=>'Georges Seafood & BBQ',
   6=>'Phat Fish',
   7=>'Hong Kong Garden',
   8=>'Main Street Station'
);

if(is_array($_POST)&&count($_POST)>1){
  $message='<p>';
  foreach($_POST['exercise'] as $key=>$val){
    if($val==1){
      $food_name=$name_array[$key];
      $restaurant=$duration_array[$key]; 
      $message.="</p?\n<p>You should go to $restaurant for some great $food_name food. ";
    }
  }
}
else  $message='did you pick a culture of food?';

$page_str=<<<EOPAGE
<Html>
<head>
<Style Type="text/css">
<!--
  Body, P  {color: green; font-family: verdana; font-size: 10 pt}
  H1 {color: purple; font-family: arial; font-size:12 pt}
-->
</Style>
</head>

<body>
 <Table Border=0 cellPadding=10 Width=100%>
  <Tr>
   <Td BGColor="F0F8FF" Align=Center VAlign=top Width=150> </Td>
   <Td BGColor="FFFFFF" Align=Left VAlign=Top Width=83%>

   <H1>Restaurant Finder <br> (multiple checkboxes with arrays)</H1>
     <p>The Restaurant Finder Says: $message  </p>
   </Td>
  </Tr>
 </Table>   
</body>
</Html>
EOPAGE;

echo $page_str;
?>
