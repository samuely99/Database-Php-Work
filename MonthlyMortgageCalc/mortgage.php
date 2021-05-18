<HTML>
<HEAD>
<TITLE>Monthly Mortgage Payment Cost</TITLE>
<Style type="text/css">
<!--
Body {font-size:14pt;}
.heading {font-size: 18 pt; color: green}
-->
</Style>
</HEAD>
<?php
if (!IsSet($_POST['Submit']) || $_POST['Submit']!='Calculate'){
$_POST['Principal']="";
$_POST['Air']="";
$_POST['Length']="";
$_POST['principalLeft']="";
$Calculation=0;
$Denominator=0;
$Format = 0;
$principalLeft = 0;
$r = 0;
$h = 0;
$c = 0;
$q = 0;
$Principal = 0;
$formatPrincipal = 0;

}
else {
$Principal=$_POST['Principal'];
$Months=$_POST['Length']*12;
$Intrest=$_POST['Air']/(12*100);
$Denominator= 1 - ((1 + $Intrest)**(-1 * $Months));
$Calculation = $Principal * ($Intrest/$Denominator);
$Format = number_format((float)$Calculation, 2, '.', '');
$principalLeft = $_POST['principalLeft'];
$r = 0;
while ($r <= $principalLeft){
	if ($principalLeft == $Months){
		$Principal = 0;
		break;
	}
	if ($principalLeft == ""){
		break;
	}
	$h = $Principal * $Intrest;
	$c = $Format - $h;
	$q = $Principal - $c;
	$Principal = $q;
	$r = $r + 1;
}
$formatPrincipal = number_format((float)$Principal, 2, '.', '');
}
?>
<BODY>
<Div Align="CENTER" ID="Div1" class="heading">
<h2>monthy mortgage payment calculator</h2>
</Div>
<p class=blurb>Fill in all the values (except "Monthly Mortgage Payment") and see how
much monthy mortgage payments will be under different scenarios.
</p>
<p> You can change the vlaues and resubmit the form as many times as you like.
You must fill in the three variables Principal, annual intrest rate, and Length of the loan. 
Annual intrest rate must be between 0 and 100 percent. All values must be POSITIVE.
</p>
<Form Method="POST" Action="<?php echo $_SERVER['PHP_SELF']; ?>">
<p>Principal:
<Input Type="text" Size=5 Name="Principal"
Value="<?php echo $_POST['Principal']; ?>">
<p>Annual interest rate:
<Input Type="text" Size=5 Name="Air"
Value="<?php echo $_POST['Air']; ?>">
<p>Length (in years) of the loan:
<Input Type="text" Size=5 Name="Length"
Value="<?php echo $_POST['Length']; ?>">
<p>How much principal is left after given months:
<Input Type="text" Size=5 Name="principalLeft"
Value="<?php echo $_POST['principalLeft']; ?>">

<br><br>
<p><B>Monthly Mortgage Payment</B>: $<?php echo $Format; ?>
<p><B>Principal Left After</B> <?php echo $principalLeft ?><B> Months: $</B><?php echo $formatPrincipal; ?>
<p><Input Type="submit" Name="Submit" Value="Calculate">
</Form>

</BODY>
</HTML>