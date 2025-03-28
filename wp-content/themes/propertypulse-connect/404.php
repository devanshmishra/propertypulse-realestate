<?php
get_header();
?>

<div class="container text-center py-5">
    <h1 class="display-4">404 - Page Not Found</h1>
    <p class="lead">Oops! The page you're looking for doesn't exist or has been moved.</p>

    <!-- Optional Image -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" alt="404 Error" class="img-fluid my-4" width="400">

    <p class="mt-3">Try searching for something else or go back to the <a href="<?php echo home_url(); ?>">homepage</a>.</p>

    <!-- Search Form -->
    <?php get_search_form(); ?>

    <!-- Back to Home Button -->
    <a href="<?php echo home_url(); ?>" class="btn btn-primary mt-3">Go to Homepage</a>
</div>

<?php
get_footer();
?>
