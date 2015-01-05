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
        <div >
            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/book/exec">
                <fieldset>
                    <!-- Form Name -->
                    <h3 class="font title-font"><b class="font-yellow">Detail</b> Reservasi</h3>
                    <?php
                        $adult = $this->session->userdata('adult');
                        $children = $this->session->userdata('children');
                        $infant = $this->session->userdata('infant');
                        $adult_gauge = 0;
                        $children_gauge = 0;
                        $infant_gauge = 0;
                        $total = $adult + $children + $infant;
                        for($i = 0; $i < $total; $i = $i + 1){
                            if ($adult_gauge < $adult){
                                echo '
                                    <div>

                                    For Adult
                                    <input type="hidden" name="id_jadwal_'.$i.'"'.'value="'.$id_jadwal.'">

                                    <label class="detail-label">For Adult</label>
                                    <input type="hidden" name="id_jadwal"'.'value="'.$id_jadwal.'">



                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="nama_penumpang_'.$i.'">Nama Penumpang</label>
                                        <div class="controls">
                                            <input id="nama_penumpang_'.$i.'" name="nama_penumpang_'.$i.'" type="text" placeholder="" class="input-xlarge">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="nomor_identitas_'.$i.'">Nomor Identitas</label>
                                        <div class="controls">
                                            <input id="nomor_identitas_'.$i.'" name="nomor_identitas_'.$i.'" type="text" placeholder="" class="input-xlarge">

                                        </div>
                                    </div>
                                    <input type="hidden" value="adult" name="age'.$i.'">
                                    <div>
                                ';
                                $adult_gauge = $adult_gauge + 1;
                            }
                            else if ($children_gauge < $children){
                                echo '
                                    <div>

                                    For Children
                                    <input type="hidden" name="id_jadwal_'.$i.'"'.'value="'.$id_jadwal.'">

                                    <label class="detail-label">For Children</label>
                                    <input type="hidden" name="id_jadwal"'.'value="'.$id_jadwal.'">



                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="nama_penumpang_'.$i.'">Nama Penumpang</label>
                                        <div class="controls">
                                            <input id="nama_penumpang_'.$i.'" name="nama_penumpang_'.$i.'" type="text" placeholder="" class="input-xlarge">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="nomor_identitas_'.$i.'">Nomor Identitas</label>
                                        <div class="controls">
                                            <input id="nomor_identitas_'.$i.'" name="nomor_identitas_'.$i.'" type="text" placeholder="" class="input-xlarge">

                                        </div>
                                    </div>
                                    <input type="hidden" value="children" name="age'.$i.'">
                                    </div>
                                ';
                                $children_gauge = $children_gauge + 1;
                            }
                            else if ($infant_gauge < $infant){
                                echo '
                                    <div>

                                    For Infant
                                    <input type="hidden" name="id_jadwal_'.$i.'"'.'value="'.$id_jadwal.'">

                                    <label class="detail-label">For Infant</label>
                                    <input type="hidden" name="id_jadwal"'.'value="'.$id_jadwal.'">


                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="nama_penumpang_'.$i.'">Nama Penumpang</label>
                                        <div class="controls">
                                            <input id="nama_penumpang_'.$i.'" name="nama_penumpang_'.$i.'" type="text" placeholder="" class="input-xlarge">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="control-group">
                                        <label class="control-label" for="nomor_identitas_'.$i.'">Nomor Identitas</label>
                                        <div class="controls">
                                            <input id="nomor_identitas_'.$i.'" name="nomor_identitas_'.$i.'" type="text" placeholder="" class="input-xlarge">

                                        </div>
                                    </div>
                                    <input type="hidden" value="infant" name="age'.$i.'">
                                    </div>
                                ';
                                $infant_gauge = $infant_gauge + 1;
                            }
                        }
                    ?>

                    <!-- Button -->
                    <div class="control-group">
                        <label class="control-label" for="submit"></label>
                        <div class="controls">
                            <button id="submit" name="submit" class="btn btn-primary">Submit</button>

                            <button id="submit" name="submit" class="button">Submit</button>

                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
        </section>
    </body>
</html>