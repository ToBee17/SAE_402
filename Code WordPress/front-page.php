<?php 
    get_header();  
    the_post();  
?>

<main>

    <section>

    <div>

    <?php include('section-one.php'); ?>

    <?php include('transit-one.php'); ?>

    <?php include('carousel.php'); ?>

    <?php include('transit-two.php'); ?>

    <?php include('section-cards.php'); ?>

    </div>


    </section>


</main>

<?php get_footer() ?>