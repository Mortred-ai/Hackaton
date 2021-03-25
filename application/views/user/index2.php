<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Css.css">

    <title>Hackaton</title>
  </head>
  <body>
	 <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0542a0">
	 	<div class="container">
	  <a class="navbar-brand" href="#">BahariExpress</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto float-md-right" style=" font-size: 16px;">
	      <li class="nav-item active mr-2">
	        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <!-- <li class="nav-item">
	        <a class="nav-link mr-2" href="#pantai">Pantai</a>
	      </li> -->
	      <li class="nav-item dropdown mr-1">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Pemesanan
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Jasa Fotografer</a>
	          <a class="dropdown-item" href="#">Sewa Tenda</a>
	          <a class="dropdown-item" href="#">Sewa Alat Pesta</a>
	          <a class="dropdown-item" href="#">Sewa Travel</a>
	          <a class="dropdown-item" href="#">Sewa Penginapan</a>

	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Diving</a>
	          <a class="dropdown-item" href="#">Snorkeling</a>
	          <a class="dropdown-item" href="#">Trail</a>
	          <a class="dropdown-item" href="#">ATV</a>
	          <a class="dropdown-item" href="#">Boot</a>
	        </div>
	        <li class="nav-item mr-2">
	        <a class="nav-link" href="<?= base_url('user/profile'); ?>">Profile</a>
	        <li class="nav-item">
	        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
	      </li>
	      </li>
	      </li>
	    </ul>
	  </div>
	  </div>
	</nav>



	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url()?>assets/images/bgp2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption" >
        <!-- <h5>Judul</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>assets/images/bgp4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>assets/images/bgp6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <br><br><br>
</div>

<div id="pantai">
<div class="container">
<div class="card" style="width: 18rem;">
  <img src="<?php echo base_url()?>assets/images/bgp.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pantai Balekambang</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>
<br>

<div class="container-fluid">
<div class="col">
	
<div class="jumbotron" style="background-image: url(bgp3.jpeg); margin-top: 10%; ">

  <h2 class="display-6"><b>Tidak menemukan Paket Anda?
Jangan ragu untuk bertanya kepada kami.
Kami akan membuatnya untuk Anda</b></h2>
  <p class="lead"></p>
  <hr class="my-4">
  
  <a class="btn btn-primary btn-lg tombol" href="https://api.whatsapp.com/send?phone=628990407729" role="button">Hubungi Kami</a>
</div>
</div>
</div>

<div class="container">
<div class="card-deck">
  <div class="card">
    <img src="<?php echo base_url()?>assets/images/bgp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Jasa Fotografer</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    
  </div>
  <div class="card">
    <img src="<?php echo base_url()?>assets/images/bgp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sewa Tenda</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>

  <div class="card">
    <img src="<?php echo base_url()?>assets/images/bgp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sewa Alat Pesta</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>

<br>
<div class="card-deck">
  <div class="card">
    <img src="<?php echo base_url()?>assets/images/bgp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sewa Penginapan</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    
  </div>
  <div class="card">
    <img src="<?php echo base_url()?>assets/images/bgp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sewa Travel</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    
  </div>
  <div class="card">
    <img src="<?php echo base_url()?>assets/images/bgp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fasilitas</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>
</div>
<footer>
	<div class="jumbotron mt-5" style="margin-bottom: -20px;">
	
	  <p class="lead"></p>
  
</div>
</div>
</footer>

<br>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>