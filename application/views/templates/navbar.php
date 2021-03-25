<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0542a0">
	 	<div class="container">
	  <a class="navbar-brand" href="#">BahariExpress</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto float-md-right" style=" font-size: 16px;">
	      <li class="nav-item active mr-2">
	        <a class="nav-link" href="<?= base_url('user/Home'); ?>">Home<span class="sr-only">(current)</span></a>
	      </li>
	    <!--   <li class="nav-item">
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
	        <a class="nav-link" href="<?= base_url('user/index'); ?>">Profile</a>
	        <li class="nav-item">
	        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
	      </li>
	      </li>
	      </li>
	    </ul>
	  </div>
	  </div>
	</nav>