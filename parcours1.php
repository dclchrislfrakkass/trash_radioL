<?php /* Template name: Page_de_Parcours_v2 */ ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
main {
    justify-content: center;
}
.main {
    max-width: 1400px!important;
    margin-left: 5%;
    margin-right: 5%;

}
.row a{
    color: #37003d!important;
}
.row a:hover {
    color: #a3bd2f!important;
    text-decoration: none;
}
.topBar{
    max-width: 100%;
    height: auto;
}

</style>
<?php get_header(); ?>

<?php 
$currentClassName = get_the_title();

?>

<main>
<?php

$urlImg = get_stylesheet_directory_uri();
$current_user = wp_get_current_user();
$user_name = $current_user->user_nicename;
?>
<img class="topBar img-fluid" src="<?php echo $urlImg ?>/assets/topBar.png" alt="topbar">
<?php
echo do_shortcode("[ultimatemember form_id='908']");

// echo "<div class='text-center'><br/><br/>Bienvenue <span style='color: #a3b745;'><b> $user_name </b></span>, voici ton parcours actuel.</div><br/><br/>";

$user_id = get_current_user_id();
$notOk = "<img src='$urlImg/assets/nOk.png'/>";
$isOk = "<img src='$urlImg/assets/ok.png'>";
$table = $wpdb->prefix.'modulesCours';

// $count = 1;
// $resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id") ;
// foreach ($resultats as $post) {
// $inBdModule = $post->module;
// $inBdPage = $post->page;
// $inBdUser = $post->user;

//  echo "<br/>Numéro : ". $count."<br/>nom du module : ". $inBdModule ."<br/> url page : ".$inBdPage ."<br/> utilisateur : ".$inBdUser ;
//  $count ++;}

/**
* MODULE ELEVE PARTIE 1
*/
$divOne = "<div class='row col-xl-10'><div class='col-1 pl-0 text-center'>";
$divTwo = "</div></div><div class='col-11 pl-0'>";


echo "<div class='container col-12 col-xl-10 my-0 py-0'>";
echo "<div class='row'>";

echo "<div class='col-sm-12 col-md-6 col-xl-4'>";
echo "<img class='icoMenu' src='$urlImg/assets/images/9a50a5c88b-150x150.png' alt='lycéen'></img><h3>Modules lycéen :</h3><br/>";
echo "<div class='EG01'>";
$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'prends le micro'") ;
if ($resultats){
    $VeleveEG01 = "$divOne <div id='checkModuleEG01'> $isOk $divTwo <div id='moduleEG01'><strong><a href='lyceen-eg01'>Prends le micro</a></strong></div></div></div>";
   
} else { 
    $VeleveEG01 = "$divOne <div id='checkModuleEG01'> $notOk $divTwo <div id='moduleEG01'><strong><a href='lyceen-eg01'>Prends le micro</a></strong></div></div></div>";
}
echo $VeleveEG01;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Animateur'") ;
if ($resultats){
    $VeleveEG01P01 = "$divOne <div id='checkModuleEG01P01'> $isOk $divTwo <div id='moduleEG01P01'><a href='lyceen-eg01-p01'>Animateur</a></div></div></div>";
} else { 
    $VeleveEG01P01 = "$divOne <div id='checkModuleEG01P01'> $notOk $divTwo <div id='moduleEG01P01'><a href='lyceen-eg01-p01'>Animateur</a></div></div></div>";
}
echo $VeleveEG01P01;


$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Chroniqueur'") ;
if ($resultats){
    $VeleveEG01P02 = "$divOne <div id='checkModuleEG01P02'> $isOk $divTwo <div id='moduleEG01P02'><a href='lyceen-eg01-p02'>Chroniqueur</a></div></div></div>";
} else { 
    $VeleveEG01P02 = "$divOne <div id='checkModuleEG01P02'> $notOk $divTwo <div id='moduleEG01P02'><a href='lyceen-eg01-p02'>Chroniqueur</a></div></div></div>";
}
echo $VeleveEG01P02;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Journaliste / Interview'") ;
if ($resultats){
    $VeleveEG01P03 = "$divOne <div id='checkModuleEG01P03'> $isOk $divTwo <div id='moduleEG01P03'><a href='lyceen-eg01-p03'>Journaliste / Interview</a></div></div></div>";
} else { 
    $VeleveEG01P03 = "$divOne <div id='checkModuleEG01P03'> $notOk $divTwo <div id='moduleEG01P03'><a href='lyceen-eg01-p03'>Journaliste / Interview</a></div></div></div>";
}
echo $VeleveEG01P03;

// /**
// * MODULE ELEVE PARTIE 1-3
// */
echo "<div class='EG01M'>";
echo "<br/>";

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Ecrire pour l&#8217;oreille'") ;
if ($resultats){
    $vEG01M01 = "$divOne <div id='checkmoduleEG01M01'> $isOk $divTwo <div id='moduleEG01M01'><a href='lyceen-eg01-m01'>Ecrire pour l'oreille</a></div></div></div>";
} else { 
    $vEG01M01 = "$divOne <div id='checkmoduleEG01M01'> $notOk $divTwo <div id='moduleEG01M01'><a href='lyceen-eg01-m01'>Ecrire pour l'oreille</a></div></div></div>";
}
echo $vEG01M01;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Parler à la radio'") ;
if ($resultats){
    $vEG01M02 = "$divOne <div id='checkmoduleEG01M02'> $isOk $divTwo <div id='moduleEG01M02'><a href='lyceen-eg01-m02'>Parler à la radio</a></div></div></div>";
} else { 
    $vEG01M02 = "$divOne <div id='checkmoduleEG01M02'> $notOk $divTwo <div id='moduleEG01M02'><a href='lyceen-eg01-m02'>Parler à la radio</a></div></div></div>";
}
echo $vEG01M02;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Conducteur radio'") ;
if ($resultats){
    $vEG01M03 = "$divOne <div id='checkmoduleEG01M03'> $isOk $divTwo <div id='moduleEG01M03'><a href='lyceen-eg01-m03'>Conducteur radio</a></div></div></div>";
} else { 
    $vEG01M03 = "$divOne <div id='checkmoduleEG01M03'> $notOk $divTwo <div id='moduleEG01M03'><a href='lyceen-eg01-m03'>Conducteur radio</a></div></div></div>";
}
echo $vEG01M03;

echo "</div>";
echo "<br/>";

// /**
// * MODULE ELEVE PARTIE 2
// */
echo "<div class='EG02'>";
$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Technique'") ;
if ($resultats){
    $VeleveEG02 = "$divOne <div id='checkmoduleEG02'> $isOk $divTwo <div id='moduleEG02'><a href='lyceen-eg02'><strong>Technique</strong></a></div></div></div>";
} else { 
    $VeleveEG02 = "$divOne <div id='checkmoduleEG02'> $notOk $divTwo <div id='moduleEG02'><a href='lyceen-eg02'><strong>Technique</strong></a></div></div></div>";
}
echo $VeleveEG02;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Reportage / Prise de son'") ;
if ($resultats){
    $veleveEG02P01 = "$divOne <div id='checkmoduleEG02P01'> $isOk $divTwo <div id='moduleEG02P01'><a href='lyceen-eg02-p01'>Reportage / Prise de son</a></div></div></div>";
} else { 
    $veleveEG02P01 = "$divOne <div id='checkmoduleEG02P01'> $notOk $divTwo <div id='moduleEG02P01'><a href='lyceen-eg02-p01'>Reportage / Prise de son</a></div></div></div>";
}
echo $veleveEG02P01;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Montage audio'") ;
if ($resultats){
    $veleveEG02P02 = "$divOne <div id='checkmoduleEG02p02'> $isOk $divTwo <div id='moduleEG02P02'><a href='lyceen-eg02-p02'>Montage audio</a></div></div></div>";
} else { 
    $veleveEG02P02 = "$divOne <div id='checkmoduleEG02p02'> $notOk $divTwo <div id='moduleEG02P02'><a href='lyceen-eg02-p02'>Montage audio</a></div></div></div>";
}
echo $veleveEG02P02;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Radio en direct'") ;
if ($resultats){
    $veleveEG02P03 = "$divOne <div id='checkmoduleEG02p03'> $isOk $divTwo <div id='moduleEG02P03'><a href='lyceen-eg02-p03'>Radio en direct</a></div></div></div>";
} else { 
    $veleveEG02P03 = "$divOne <div id='checkmoduleEG02p03'> $notOk $divTwo <div id='moduleEG02P03'><a href='lyceen-eg02-p03'>Radio en direct</a></div></div></div>";
}
echo $veleveEG02P03;


echo "</div>";
echo "<br/>";
/**
* MODULE ELEVE PARTIE 3
*/
echo "<div class='EG03'>";

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Culture radio'") ;
if ($resultats){
    $VeleveEG03 = "$divOne <div id='checkModuleEG03'> $isOk $divTwo <div id=''moduleEG03'><a href='lyceen-eg03'><strong>Culture radio</strong></a></div></div></div>";
} else { 
    $VeleveEG03 = "$divOne <div id='checkModuleEG03'> $notOk $divTwo <div id=''moduleEG03'><a href='lyceen-eg03'><strong>Culture radio</strong></a></div></div></div>";
}
echo $VeleveEG03;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Lexique'") ;
if ($resultats){
    $VeleveEG03P01 = "$divOne <div id='checkModuleEG03P01'> $isOk $divTwo <div id='moduleEG03P01'><a href='lyceen-eg03-p01'>Lexique</a></div></div></div>";
} else { 
    $VeleveEG03P01 = "$divOne <div id='checkModuleEG03P01'> $notOk $divTwo <div id='moduleEG03P01'><a href='lyceen-eg03-p01'>Lexique</a></div></div></div>";
}
echo $VeleveEG03P01;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Infos métier / Formation'") ;
if ($resultats){
    $VeleveEG03P02 = "$divOne <div id='checkModuleEG03P02'> $isOk $divTwo <div id='moduleEG03P02'><a href='lyceen-eg03-p02'>Infos métier / Formation</a></div></div></div>";
} else { 
    $VeleveEG03P02 = "$divOne <div id='checkModuleEG03P02'> $notOk $divTwo <div id='moduleEG03P02'><a href='lyceen-eg03-p02'>Infos métier / Formation</a></div></div></div>";
}
echo $VeleveEG03P02;

echo "</div>";
echo "</div>";
echo "</div>";

// /**
// * MODULE PROFESSEUR PARTIE 1
// */
echo "<div class='col-sm-12 col-md-6 col-xl-4'>";
echo "<img class='icoMenu' src='$urlImg/assets/images/f03d3a419e-1-150x150.png' alt='professeur'></img><h3>Modules professeur :</h3><br/>";
echo "<div class='R01'>";

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Internet pédagogique'") ;
if ($resultats){
    $VR01 = "$divOne <div id='checkModuleVR01'> $isOk $divTwo <div id='moduleVR01'><a href='professeur-r01'><strong>Internet pédagogique</strong></a></div></div></div>";
   
} else { 
    $VR01 = "$divOne <div id='checkModuleVR01'> $notOk $divTwo <div id='moduleVR01'><a href='professeur-r01'><strong>Internet pédagogique</strong></a></div></div></div>";
}
echo $VR01;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Atelier écriture'") ;
if ($resultats){
    $VR01P01 = "$divOne <div id='checkModuleR01P01'> $isOk $divTwo <div id='moduleR01P01'><a href='r01-p01'>Atelier écriture</a></div></div></div>";
} else { 
    $VR01P01 = "$divOne <div id='checkModuleR01P01'> $notOk $divTwo <div id='moduleR01P01'><a href='r01-p01'>Atelier écriture</a></div></div></div>";
}
echo $VR01P01;


$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Information et Communication'") ;
if ($resultats){
    $VR01P02 = "$divOne <div id='checkModuleR01P02'> $isOk $divTwo <div id='moduleR01P02'><a href='r01-p02'>Information et Communication</a></div></div></div>";
} else { 
    $VR01P02 = "$divOne <div id='checkModuleR01P02'> $notOk $divTwo <div id='moduleR01P02'><a href='r01-p02'>Information et Communication</a></div></div></div>";
}
echo $VR01P02;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Atelier oral'") ;
if ($resultats){
    $VR01P03 = "$divOne <div id='checkModuleR01P03'> $isOk $divTwo <div id='moduleR01P03'><a href='r01-p03'>Atelier oral</a></div></div></div>";
} else { 
    $VR01P03 = "$divOne <div id='checkModuleR01P03'> $notOk $divTwo <div id='moduleR01P03'><a href='r01-p03'>Atelier oral</a></div></div></div>";
}
echo $VR01P03;

echo "</div>";
echo "<br/>";

// /**
// * MODULE PROFESSEUR PARTIE 2
// */
echo "<div class='R02'>";

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Mise en place d&#8217;un projet'") ;
if ($resultats){
    $VR02 = "$divOne <div id='checkModuleVR02'> $isOk $divTwo <div id='moduleVR02'><a href='professeur-r02'><strong>Mise en place d'un projet</strong></a></div></div></div>";
   
} else { 
    $VR02 = "$divOne <div id='checkModuleVR02'> $notOk $divTwo <div id='moduleVR02'><a href='professeur-r02'><strong>Mise en place d'un projet</strong></a></div></div></div>";
}
echo $VR02;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Radio Lycée &#8211; Mise en place'") ;
if ($resultats){
    $VR02P01 = "$divOne <div id='checkModuleR02P01'> $isOk $divTwo <div id='moduleR02P01'><a href='r02-p01'>Radio Lycée - Mise en place</a></div></div></div>";
} else { 
    $VR02P01 = "$divOne <div id='checkModuleR02P01'> $notOk $divTwo <div id='moduleR02P01'><a href='r02-p01'>Radio Lycée - Mise en place</a></div></div></div>";
}
echo $VR02P01;


$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Gérer une grille de programme'") ;
if ($resultats){
    $VR02P02 = "$divOne <div id='checkModuleR02P02'> $isOk $divTwo <div id='moduleR02P02'><a href='r02-p02'>Gérer une grille de programme</a></div></div></div>";
} else { 
    $VR02P02 = "$divOne <div id='checkModuleR02P02'> $notOk $divTwo <div id='moduleR02P02'><a href='r02-p02'>Gérer une grille de programme</a></div></div></div>";
}
echo $VR02P02;

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Les outils pour faire de la radio'") ;
if ($resultats){
    $VR02P03 = "$divOne <div id='checkmoduleR02P03'> $isOk $divTwo <div id='moduleR02P03'><a href='professeur-r02-p03'>Les outils pour faire de la radio</a></div></div></div>";
} else { 
    $VR02P03 = "$divOne <div id='checkmoduleR02P03'> $notOk $divTwo <div id='moduleR02P03'><a href='professeur-r02-p03'>Les outils pour faire de la radio</a></div></div></div>";
}
echo $VR02P03;

echo "</div>";
echo "</div>";
// /**
// * MODULE PROVISEUR PARTIE 1
// */
echo "<div class='col-sm-12 col-md-6 col-xl-4'>";
echo "<img class='icoMenu' src='$urlImg/assets/images/b7439c109e-150x150.png' alt='proviseur'></img>";
echo "<h3>Module proviseur :</h3><br/>";
echo "<div class='R01'>";

$resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}modulesCours WHERE user = $user_id AND module like 'Intérêt de la radio dans l&#8217;univers scolaire'") ;
if ($resultats){
    $VP01P01 = "$divOne <div id='checkModuleP01P01'> $isOk $divTwo <div id='moduleP01P01'><a href='p01-p01'>Interet de la radio dans le milieu scolaire</a></div></div></div>";
} else { 
    $VP01P01 = "$divOne <div id='checkModuleP01P01'> $notOk $divTwo <div id='moduleP01P01'><a href='p01-p01'>Interet de la radio dans le milieu scolaire</a></div></div></div>";
}
echo $VP01P01;

echo "</div>";
echo "</div>";
echo "</div>";








?>
<br/>
<?php


?>
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