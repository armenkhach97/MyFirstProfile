<section class='first-section'>
	<div class='fs-content'>
		<h1><?php 
		$lang = "en";
		$a=$this->lists; 
		if($lang == $a[0]["lang"]){
		print($a[0]["header"]);}
		else { print($a[1]["header"]);}
	?></h1>
		<h2><?php if($lang == $a[0]["lang"]) {print($a[0]["text"]);} else {print($a[1]["text"]);}?></h2>
		<div class = 'map-icon'>
		</div>
	</div>
</section>
