<?php
$db1 = new Connection("gurukulam");
?>


<div class="test1" style="width:350px; margin-left: 20%;">
<table>
	<tr>
		<td><b>Achievements</b></td>
	<td>
	<?php
	$txt3=new TextArea("achievements");
	$txt3->required(true);
	$txt3->setValue($fd->data[0]['ACHIEVEMENTS']);
	$txt3->addCss("width","85%");
	$txt3->rander();
	?></td>
	</tr>
	<br>
	
</table>
</div>
<div class="test" style="width: 80px; height:45px; margin-left:50%; padding: 10px; background-color: lightgray;">
<?php
$submit=new Button("submit");
$submit->setValue("submit");
$submit->rander();

?>

</div>