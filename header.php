
<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>

<div id="page" class="site">
	
		<div id="content" class="site-content">
		<div id="primary" class="content-area">
			

		<header>
<?php
wp_nav_menu( array( 
    'theme_location' => 'header-menu',
    'container_class' => 'header-menu-class' ) 
); 
?>
<h1>NATHALIE MOTAheader</h1>




</header>

<main id="main" class="site-main">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="container-fluid">
  <div class="row">
    <div class="col d-flex align-items-center justify-content-center text-center">
      <img class="img-fluid d-inline-block rounded-4 video w-100 m-2" id="FVcCIPJO410">
         </div>
  </div>
</div>

<div class="modal" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header bg-dark rounded-top-4">
        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body overflow-hidden p-0">
        <iframe class="bg-black rounded-bottom-4" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="videoplayer"></iframe>
      </div>
    </div>
  </div>
</div>
