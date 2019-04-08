<?php /* Template name: noHeaderFullWidth */ ?>
<style>
main {
    justify-content: center;
}

</style>
<?php wp_enqueue_script('jquery'); ?>
<?php get_header(); ?>




<?php 
$currentClassName = get_the_title(); ?>


<main>

<div class="d-flex auto-mx mt-5">
    <!--button to scroll up -->
    <button onclick="topFunction()" id="btnUp" title="Go to top"><i class="fas fa-angle-double-up"></i></button>

    <script>
    // after scrolling down from 20px, button become visible
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("btnUp").style.display = "block";
    } else {
        document.getElementById("btnUp").style.display = "none";
    }
    }

    // after clicking going to top
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
</div>

	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else : ?>
	
    <h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
    <p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>

<?php endif; ?>
<section>
</section>




</main>


<?php get_footer(); ?>
