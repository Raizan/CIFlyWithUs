<html>
    <head>
        <title> Redirecting... </title>
        <script>
            setTimeout("location.href = '<?php echo base_url();?>/index.php/search';", 5000);
        </script>
    </head>
    <body>
        <div align="center">
            <?php
                if ($flag == "success") {
                    echo '<img src="'.base_url().'assets/images/success.jpg">';
                }
                else if ($flag == "failed"){
                    echo '<img src="'.base_url().'assets/images/failed.jpg">';
                }
            ?>
            <p> Redirecting in 5 seconds, if it doesn't work click <a href="<?php echo base_url();?>/index.php/search">here</a></p>
        </div>
    </body>
</html>