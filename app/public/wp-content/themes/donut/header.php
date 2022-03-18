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
    <!-- <link href="<?php echo get_bloginfo('template_directory') ?>style.css"> -->
    <link href="<?php wp_enqueue_style('style.css', get_stylesheet_uri()) ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

<?php wp_head() ?>
</head>

<body>
    <header class="row">
        <div class="col-md-4 alert-primary logo">
            <a href="<?php echo get_bloginfo('wpurl') ?>">LOGO</a>
        </div>
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