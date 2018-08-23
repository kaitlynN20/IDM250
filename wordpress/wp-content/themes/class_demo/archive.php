<?php

get_header(); ?>

<div class="container">
    <h1><?php echo get_the_archive_title();?></h1>
</div>

<h2>Archives by Month</h2>
<ul>
    <?php 
        $arg = [
            'type' => 'monthly'
        ];
    wp_get_archives($arg);
?>
</ul>