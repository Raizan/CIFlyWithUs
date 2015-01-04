<!DOCTYPE html>
<html>
    <head>
        <title>Fly With Us | Online Airplane Ticket Reservation</title>
        <link href="<?php echo base_url();?>assets/stylesheets/main.css?body=1" media="screen" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/stylesheets/style1.css?body=1" media="screen" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/stylesheets/font-awesome.min.css?body=1" media="screen" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/stylesheets/bootstrap.min.css?body=1" media="screen" rel="stylesheet" />
        <script src="<?php echo base_url();?>assets/javascripts/jquery-1.11.2.js?body=1"></script>
        <script src="<?php echo base_url();?>assets/javascripts/bootstrap.min.js?body=1"></script>
        <script src="<?php echo base_url();?>assets/javascripts/main.js?body=1"></script>
        <script src="<?php echo base_url();?>assets/javascripts/modernizr-2.6.2-respond-1.1.0.min.js?body=1"></script>
    </head>
    <body class="long">
       <header>
        <nav id="navbar">
            <ul class="site-nav">
                <!--<li id="main-logo"><img src="../images"  </li>-->
                <li><a href"#">Home</a></li>
                <li>Contact</li>
                <li><a href="<?php echo base_url();?>index.php/search">Search</a></li>
            </ul>
            <div class="nav-collapse collapse">
            <ul class="login-nav nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" aria-expanded="false"><?php echo $this->session->userdata('nama'); ?><b class=" icon-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/cart">Cart</a></li>
                        <li><a href="<?php echo base_url();?>index.php/cart/history">History</a></li>
                        <li><a href="<?php echo base_url();?>index.php/logout">Sign Out</a></li>
                    </ul>
                </li>   
            </ul>
            </div>
        </nav>
    </header>
    <section class="navbar-down"> 
        <div class="center">
            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/book/exec">
                <fieldset>

                    <!-- Form Name -->
                    <h3 class="font title-font"><b class="font-yellow">Detail</b> Reservasi</h3>

                    <!-- Multiple Radios -->
                    <div class="control-group">
                        <input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal; ?>"/>
                        <label class="control-label" for="radios">Tiket ini diperuntukkan untuk Anda?</label>
                        <div class="controls">
                            <label class="radio" for="radios-0">
                                <input type="radio" name="for_myself" id="radios-0" value="Ya" checked="checked">
                                Ya
                            </label>
                            <label class="radio" for="radios-1">
                                <input type="radio" name="for_myself" id="radios-1" value="Tidak">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <p> Jika Anda menjawab tidak, isi formulir di bawah ini</p>
                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="nama_penumpang">Nama Penumpang</label>
                        <div class="controls">
                            <input id="nama_penumpang" name="nama_penumpang" type="text" placeholder="" class="input-xlarge">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="nomor_identitas">Nomor Identitas</label>
                        <div class="controls">
                            <input id="nomor_identitas" name="nomor_identitas" type="text" placeholder="" class="input-xlarge">

                        </div>
                    </div>

                    <!-- Multiple Radios -->
                    <div class="control-group">
                        <label class="control-label" for="age">Kategori Penumpang</label>
                        <div class="controls">
                            <label class="radio" for="age-0">
                                <input type="radio" name="age" id="age-0" value="Dewasa">
                                Dewasa
                            </label>
                            <label class="radio" for="age-1">
                                <input type="radio" name="age" id="age-1" value="Children">
                                Children
                            </label>
                            <label class="radio" for="age-2">
                                <input type="radio" name="age" id="age-2" value="Infant">
                                Infant
                            </label>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="control-group">
                        <label class="control-label" for="submit"></label>
                        <div class="controls">
                            <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
        </section>
    </body>
</html>