<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Website of a Donut Cake Shop">
        <meta name="keywords" content="Donut, Cake">
        <meta name="robots" content="index,follow"/>
        <meta name="author" content="Kamil Pietraszko">
        <title>Donut Cake Shop</title>

        <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/motel.png">
        <link href="<?php echo get_bloginfo('template_directory') ?>/style.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <![endif]-->

    <?php wp_head() ?>
    </head>

    <body>
        <header class="row">
            <div class="col-md-4 alert-primary logo">LOGO</div>
            <nav class="col-md-8 alert-success menu">
                <ul>
                    <li><a>Home</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav> 
        </header>
        
        <main class="container">
            <div class="row">
                <div class="col-md-12 gallery">
                    <div>
                    <h2>Gallery</h2>

                    </div>
                </div>
            </div>
        </main>

        <footer class="col-md-12 text-center p-3">
			© Kamil Pietraszko 2022 <a href="https://github.com/kpietraszkoGit">GitHub</a>
	    </footer>


        <!-- Bootstrap Bundle with Popper and Bootstrap JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            
        <?php wp_footer() ?>
    </body>
</html>
