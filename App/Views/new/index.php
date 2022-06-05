<!doctype html>
<html lang="en" class="h-100">
<head>
<title>DBUZZ Market - Create</title>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/header.php";
   include_once($path);
?>
<style>
	.border-turq {
		border-color: #21FFB5;
	}
	.btn-turq {
		color: #363636;
		background: #21FFB5;
	}
	.border-blue {
		border-color: #033EFD;
	}
	.btn-blue {
		color: #fff;
		background: #033EFD;
	}
	.border-fusch {
		border-color: #FB00FF;
	}
	.btn-fusch {
		color: #fff;
		background: #FB00FF;
	}
</style>
</head>

<body class="d-flex flex-column h-100 padme-t70">
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/nav.php";
   include_once($path);
?>
<main role="main" class="flex-shrink-0">
  <div class="container text-white text-center">
	  <h1>Build A DLUX App</h1>
	  
	  <div class="text-left pt-5">
	  	<h2 >360° EXPERIENCES</h2>
	  <hr class="bg-light m-0" />
	  <p class="lead mt-2">Place your users front-and-center to look anywhere with no player movement</p>
	  </div>
	  
	  <div class="card-deck my-3">
		 <div class="card border-turq bg-dark">
			<div class="card-header">
				<h5 class="card-title">360° GALLERY</h5>
    			<p class="card-text">Grid link 360° images</p>
			</div>
      		<div class="card-body">
					<ul class="text-left">
						<li>App Type: VR</li>
						<li>Builder: 2D drag-and-drop asset upload and publishing form; 3D A-Frame preview</li>
						<li>Difficulty: Easy</li>
					</ul>
			</div>
		  <div class="card-footer">
    	<a href="/new/360-gallery" class="btn btn-turq">Get Started</a>
		  </div>
  	  </div>

	<div class="card border-turq bg-dark text-white-50">
	<div class="card-header">
		<h5 class="card-title">360° TOUR</h5>
    	<p class="card-text">Hotspot link 360° images</p>
		</div>
      <div class="card-body">
		<ul class="text-left">
		<li>App Type: VR</li>
		<li>Builder: 2D drag-and-drop asset upload and hotspot mapping; 3D A-Frame preview</li>
		<li>Difficulty: Easy</li>
		</ul>
		</center>
		  </div>
		  <div class="card-footer">
    	<a href="/new/360-tour" class="btn btn-turq disabled">Coming Soon</a>
		  </div>
	</div>
		  
		  <div class="card border-turq bg-dark text-white-50">
			  <div class="card-header">
			  <h5 class="card-title">360° VIDEO</h5>
    	<p class="card-text">Play a 360° video URL</p>
			  </div>
      <div class="card-body ">
		<ul class="text-left">
		<li>App Type: VR</li>
		<li>Builder: Video URL Input; 3D A-Frame preview</li>
		<li>Difficulty: Easy</li>
		</ul>
		  </div>
		  <div class="card-footer">
    	<a href="/new/360-tour" class="btn btn-turq disabled">Coming Soon</a>
		  </div>
	</div>	  
	  </div>
	  <div class="text-left pt-5">
	  	<h2 >VIRTUAL REALITY</h2>
	  <hr class="bg-light m-0" />
	  <p class="lead mt-2">Fully immersive experiences with player movement and teleport control</p>
	  </div>
	<div class="card-deck my-3">
	<div class="card border-fusch bg-dark">
		<div class="card-header">
			  <h5 class="card-title">VR BUILDER</h5>
    	<p class="card-text">Remix our boilerplate on Glitch and upload your own images and 3D models</p>
			  </div>
      <div class="card-body">
		<ul class="text-left">
		<li>App Type: VR</li>
		<li>Builder: 2D drag-and-drop asset upload, code panel, and publishing form; 3D A-Frame inspector</li>
		<li>Difficulty: Intermediate</li>
		</ul>
		  </div>
		  <div class="card-footer">
    	<a href="https://dlux-vr.glitch.me/build.html" target="_blank" class="btn btn-fusch">Get Started</a>
		  </div>
  	  </div>
		
		<div class="card border-fusch bg-dark text-white-50">
			<div class="card-header">
			  <h5 class="card-title">VR GALLERY</h5>
    	<p class="card-text">Choose a 3D gallery template and upload your assets</p>
			  </div>
      <div class="card-body">
		<ul class="text-left">
		<li>App Type: VR</li>
		<li>Builder: 2D drag-and-drop asset upload, code panel, and publishing form; 3D A-Frame inspector</li>
		<li>Difficulty: Intermediate</li>
		</ul>
		  </div>
		  <div class="card-footer">
    	<a href="#" target="_blank" class="btn btn-fusch disabled">Coming Soon</a>
		  </div>
  	  </div>

	<div class="card border-fusch bg-dark">
		<div class="card-header">
		<h5 class="card-title">SUPERCRAFT</h5>
    	<p class="card-text">Use a VR headset with SUPERMEDIUM to build scenes with your hands </p>
		</div>
      <div class="card-body">
		<ul class="text-left">
		<li>App Type: VR</li>
		<li>Builder: VR with Touch Controls, 2D publishing form</li>
		<li>Difficulty: Easy</li>
		</ul>
		  </div>
		  <div class="card-footer">
    	<a href="/new/supercraft" class="btn btn-fusch">Get Started</a>
		  </div>
  	  </div>
	  </div>
	
		  <div class="text-left pt-5">
	  	<h2 >UTILITIES</h2>
	  <hr class="bg-light m-0" />
	  <p class="lead mt-2">Other useful tools</p>
	  </div>
	
		<div class="card-deck my-3">
	<div class="card border-blue bg-dark">
		<div class="card-header">
			<h5 class="card-title">ADVANCED UPLOADER</h5>
    		<p class="card-text">Upload any HTML5 Single Page App (SPA)</p>
	  </div>
      <div class="card-body">
		<ul class="text-left">
		<li>App Type: AR/VR/2D</li>
		<li>Builder: 2D publishing form with drag-and-drop support for images</li>
		<li>Difficulty: Easy</li>
		</ul>
		  </div>
		  <div class="card-footer">
    	<a href="/new/advanced" class="btn btn-blue">Get Started</a>
		  </div>
  	  </div>
			
				<div class="card border-blue bg-dark">
		<div class="card-header">
			<h5 class="card-title">DLUX NODE</h5>
    		<p class="card-text">Run a node to support the platform</p>
	  </div>
      <div class="card-body">
		<ul class="text-left">
		<li>App Type: Node.js</li>
		<li>Builder: DIY, Auto Script, Pre Configured</li>
		<li>Difficulty: Varies</li>
		</ul>
		  </div>
		  <div class="card-footer">
    	<a href="/new/node" class="btn btn-blue">Get Started</a>
		  </div>
  	  </div>
	</div>
			
	</div>
	  </div>
	</main>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/footer.php";
   include_once($path);
?>
</body></html>
