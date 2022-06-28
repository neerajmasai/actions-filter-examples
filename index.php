<?php 

/**
 * Actions & Filters Demo
 * @package af
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actions & Filters</title>
</head>
<body>
    <h1>Actions & Filters</h1>
    <?php

        // load custom widget
        dynamic_sidebar("sample_sidebar");

        //load posts

        while(have_posts()){

            the_post();

            ?> <h1><?php the_title() ?></h1> <?php

            ?> <p><?php the_excerpt() ?></p><?php
        }

    ?>
</body>
</html>