<?php
$db1 = new Connection("gurukulam");
if(isset($id))
{
	
	$q="select name from center_master";	
	$center= $db1->execute($q);
	if($center->count>0)
	{
		$center = $center->data[0];
		$name = $center['NAME'];
	}
	else
	{
		$name="";
	}
}
else
{
	$id = '1';
	$name = "Centers";
}

if($user->isValid())
{
	?>
		<script type="text/javascript" >
		ajax("/gurukulam/home/getProfileDetail","type=center&id=<?=$id?>",
		function(resp)
		{
			$("#contentOption").html(resp);
		},
		true);
		</script>
	<?php
}
?>
<style>
//.centerInfoBox{
	width:450px; float:left; padding:20px; margin:80px;
}
</style>
<h2 class="title apptitle" ><?=$name?></h2>
<div class="contentMenu">
	<?php
		include "modules/ashram/center/menu.php";
	?>
</div>
<div id="appActionDiv">
	<?php
		$dx = new DataBox("centerParameter");
		$dx->add("centerId",$id);
		$dx->toSession();
	?>
	<br/>
	<div class="centerInfoBox" style="">
		<?php

			$q="select name,address,about_center,activities,email,mobile,achievements,estb_date,image from center_master";
			//echo $q;
			$info = $db1->execute($q);
		
		?>
		<?php if(!empty($name))
		{ 
		?>
	</div>
			<div class="row">
			<h3><b>DISPLAY CENTER:</b></h3>
			<div class="row" style="background-color: red;">
				<img style="float:left; margin-right:20px; width:550px; border:solid 2px yellow;"src="/images/center_profile.png"/>
			<h3><b>DISPLAY CENTER:</b></h3>
				<div style="font-size:26px;">Address:<br><?echo $info->data[0]['ADDRESS']?>
				<?
					$button= new Link("editaddress");
					$button->addCss("font-size","15px");
					$button->setvalue("edit");
					$button->rander();
				?><br>
				</div><br>
				<div class="row" style="background-color: blue;padding:70%; margin-top:-120%;margin-right:50px;width: 700px;">
					<p style=";">
						<strong>Address:</strong>&nbsp;Delhi, India<br>
						<strong>Phone:</strong>&nbsp;85555555nbsp;<strong>Fax&nbsp:455666</strong><br>
						<strong>Email:</strong><a href="" traget="_blank" title="Email">mkak@gmail.com</a>br>
						<strong>Gallery:</strong><a href="http://gurukulam.awgp.in/gurukulam/center/home">View Image</a><br>

					&nbs</p>
					
				</div>
				<div style="font-size:24px;"><?echo $info->data[0]['ABOUT_CENTER']?>
				<?
					$button= new Link("aboutcenter");
					$button->addCss("font-size","15px");
					$button->setvalue("edit");
					$button->rander();
				?>
				</div><br>
				<div style="font-size:18px;"><?echo $info->data[0]['MOBILE']?>-<?echo $info->data[0]['EMAIL']?></div><br>
				
				</div>

			</div>

		<?php 
		} 
	else
	{
	?>
		<div class="centerInfoBox" style="width:750px;font-size:24px;color:red;"> Invalid ID ! </div>
	<?php }
	?>
</div>