<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
    <script type="text/javascript" >var url = "<?php echo URL; ?>"</script>
    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
	if (isset($this->css)) 
    {
        foreach ($this->css as $css)
        {
            echo ' <link rel="stylesheet" href="'.URL.'views/'.$css.'"/>';
			   
        }
    }
    ?>
</head>
<body>

<?php Session::init(); ?>
    
<header class='col'>
	<div class='h-1 col-3'>
		<div class='icon'></div>
	</div><div class='h-2 col-2'>
		<div class='search'>
			<div class='search-btn'></div><div class='search-txt'>
				<input type='text' id='search-area'>
			</div>
		</div>
	</div><div class='h-3 col-6'>
		<div class='menu col'>
			<div class='menu-item col-2'>
				<a href='<?php echo URL; ?>index'>Home</a>
			</div><div class='menu-item col-2'>
				<a href='<?php echo URL; ?>about'>About</a>
			</div><div class='menu-item col-2'>
				<a href='#'>Services</a>
				<div class='dropdown-menu'>
					<div class='dm-item'>
						<a href='<?php echo URL; ?>business'>Business</a>
					</div>
					<div class='dm-item'>
						<a href='<?php echo URL; ?>consumer'>Consumer</a>
					</div>
				</div>
			</div><div class='menu-item col-2'>
				<a href='#'>Support</a>
				<div class='dropdown-menu'>
					<div class='dm-item'>
						<a href='<?php echo URL; ?>faq'>FAQ</a>
					</div>
					<div class='dm-item'>
						<a href='<?php echo URL; ?>support'>Support contacts</a>
					</div>
				</div>
			</div><div class='menu-item col-2'>
				<a href='<?php echo URL; ?>partners'>Partners</a>
			</div><div class='menu-item col-2'>
				<a href='<?php echo URL; ?>login'>Login</a>
			</div><div class='menu-item col-2'>
				<a href='<?php echo URL; ?>contact'>Contact us</a>
			</div>
			
		</div>
	</div><div class='col-1'>
		<span style="cursor:pointer" class='lang' data-lang='en'>EN</span>
		<span style="cursor:pointer" class='lang' data-lang='fr'>FR</span>
	</div>
</header>
<div id="content">
    
    