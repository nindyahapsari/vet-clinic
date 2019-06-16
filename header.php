<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <?php wp_head(); ?>

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <a class="navbar-brand logo" href="<?php echo site_url('')?>">Vet Clinic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse navlist" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link home" href="<?php echo site_url('')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about" href="<?php echo site_url('/about')?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link blog" href="<?php echo site_url('/blog')?>">Blog</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-sm-0">
                <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-light my-2 my-sm-0 " type="submit">Search</button>
            </form>



        </div>


    </nav>