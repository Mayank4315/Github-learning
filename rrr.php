<?php
$db1 = new Connection("gurukulam");
?>


<div class="test1" style="width:350px; margin-left: 20%;">
<table>
	<tr>
		<td><b>Name</b></td>
	<td>
	<?php
	$txt1=new Textbox("Name");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>Type</b></td>
	<td>
	<?php
	$txt1=new Textbox("Type");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>About_center</b></td>
	<td>
	<?php
	$txt1=new TextArea("About_center");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>Inagurated_by</b></td>
	<td>
	<?php
	$txt1=new Textbox("Inagurated_by");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>Activities</b></td>
	<td>
	<?php
	$txt1=new TextArea("Activities");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>Address</b></td>
	<td>
	<?php
	$txt1=new TextArea("Address");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>Email</b></td>
	<td>
	<?php
	$txt1=new Textbox("Email");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>Mobile</b></td>
	<td>
	<?php
	$txt1=new Textbox("Mobile");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>Achievements</b></td>
	<td>
	<?php
	$txt1=new TextArea("Achievements");
	?></td>
	</tr>
	<br>
	<tr>
		<td><b>City</b></td>
	<td>
	<?php
	$txt1=new Textbox("City");
	?></td>
	</tr>
	<br>
	
</table>
</div>
<!-- <div class="test" style="width: 80px; height:45px; margin-left:50%; padding: 10px; background-color: lightgray;">
<?php
$submit=new Button("submit");
$submit->setValue("submit");
$submit->rander();

?>

</div> --> -->