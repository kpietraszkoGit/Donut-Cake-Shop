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
    <title><?php echo get_bloginfo('name')?></title>
    
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="img/motel.png">
    <link href="<?php wp_enqueue_style('style.css', get_stylesheet_uri()) ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Courgette -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

<?php wp_head() ?>
</head>

<body>
    <header class="row">
        <div class="col-lg-3 img-fluid dcs-logo">
            <a href="<?php echo get_bloginfo('wpurl') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo"/></a>
        </div>
        <div class="menu-trigger">Menu</div>
        <nav class="col-lg-9 dcs-menu">
               <?php wp_nav_menu(['theme_location' => 'main_menu']); ?> 
        </nav> 
    </header>