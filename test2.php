


////////////////////////////////////
Code ok sans bouton
////////////////////////////////

<?php

global $wpbd;
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = get_current_user_id( );
$userName = $current_user->user_nicename;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');

$requete = "SELECT * FROM $table WHERE user = $user_id AND module like '%$pageActuelle' AND page like '%$pageUr'";
$result = $wpdb->get_results($requete);

if ($result != null) {
    echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
    }
else {
$wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
    }
?>

////////////////////////////////////
Code ok avec bouton
////////////////////////////////
<?php

global $wpbd;
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = get_current_user_id( );
$userName = $current_user->user_nicename;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');

$requete = "SELECT * FROM $table WHERE user = $user_id AND module like '%$pageActuelle' AND page like '%$pageUr'";
$result = $wpdb->get_results($requete);

if ($result != null) {
    echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
    }
else {
    ?>
    <form method="post" action="" >
    <input type="hidden" name="valid" value= "<?php echo $pageActuelle; ?>" >
    <input type="submit" name="Submit" class="btn-success" value="Valider le module">
    </form> 
    <?php
        if(isset($_POST['valid'])){
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
    }
}

//////////////////////////////////////////////////////////////////////////////

<?php
    ?>
    <script>
    jQuery(document).ready(function(){
    jQuery('a#valid').click(function(){
        jQuery('#valid').hide();
        jQuery.post(
            'ajoutModule.php'{

                table : jQuery("#table").val(),
                data1 : jQuery("#data1").val(),
                data2 : jQuery("#data2").val(),
                data3 : jQuery("#data3").val(),
                format : jQuery("#format").val()
            },

            'text'
        );
        $wpdb->insert($table, $data, $format);
        echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";

    });
    });
    </script>
    <?php

    global $wpbd;
    $table = $wpdb->prefix.'modulesCours';
    $pageActuelle = get_the_title();
    $user_id = get_current_user_id( );
    $userName = $current_user->user_nicename;
    $pageUrl = get_page_link();

    $data = array(
        'module'=> $pageActuelle,
        'user'=> $user_id,
        'page'=> $pageUrl,);
        $format = array('%s', '%d');

    $requete = "SELECT * FROM $table WHERE user = $user_id AND module like '%$pageActuelle' AND page like '%$pageUr'";
    $result = $wpdb->get_results($requete);

    if ($result != null) {
        echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
        }
    else {
        ?>
   

    <form method="post" action="" >
    <input type="hidden" name="table" value= "<?php echo $table; ?>" >
    <input type="hidden" name="data1" value= "<?php echo $pageActuelle; ?>" >
    <input type="hidden" name="data2" value= "<?php echo $user_id; ?>" >
    <input type="hidden" name="data3" value= "<?php echo $pageUrl; ?>" >
    <input type="hidden" name="format" value= "<?php echo $format; ?>" >
    <input type="submit" name="Submit" value="Valider le module">
    </form>
    <?php

}

//////








    if(isset($_POST['valid'])){
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
    }
}
    











//////////////////////////////////////////////////////////////////////////////////////

<?php
?>

<script>
$(document).ready(function(){
$("p").click(function(){
    $(this).hide();
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
});
});
</script>
<?php

global $wpbd;
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = get_current_user_id( );
$userName = $current_user->user_nicename;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');

$requete = "SELECT * FROM $table WHERE user = $user_id AND module like '%$pageActuelle' AND page like '%$pageUr'";
$result = $wpdb->get_results($requete);

if ($result != null) {
    echo "Désolé $userName mais vous aviez déjà validé le module <b> $pageActuelle </b>!";
    }
else {
    ?>
    <p>Valider le module</p>
    <?php
}
    <form method="post" action="" >
    <input type="hidden" name="valid" value= "<?php echo $pageActuelle; ?>" >
    <input type="submit" name="Submit" value="Valider le module">
    </form> -->
    <?php
    if(isset($_POST['valid'])){
    $wpdb->insert($table, $data, $format);
    echo "Merci $userName d'avoir validé le module <b> $pageActuelle </b>!";
    }
}
    


/////////////////////////////////
xxx 
///////////////////////////



<?php

$pageActuelle = get_the_title();
$current_user = wp_get_current_user();
$user_id = $current_user->ID;


update_user_meta($user_id , $pageActuelle, '1');


?>



////////////////////////////////////
A TESTER  2
////////////////////////////////

<?php
global $wpbd;
$current_user = wp_get_current_user();
$table = $wpdb->prefix.'modulesCours';
$pageActuelle = get_the_title();
$user_id = $current_user->ID;
$pageUrl = get_page_link();

$data = array(
    'module'=> $pageActuelle,
    'user'=> $user_id,
    'page'=> $pageUrl,);
    $format = array('%s', '%d');
    
    // var_dump($data);
    // var_dump($user_name);
    
    $query = "SELECT * FROM $table WHERE user = $user_id AND module = $pageActuelle";
    echo $query;
    $wpdb->get_results($query);
    $result = $wpdb->get_results($query);
    if($result == 0) {
        $wpdb->insert($table, $data, $format);
    }
    echo $result;
    var_dump($result);
    
    ?>
    ////////////////////////////////////
    A TESTER  3
    ////////////////////////////////
    
    <?php
    global $wpbd;
    $current_user = wp_get_current_user();
    $table = $wpdb->prefix.'modulesCours';
    $pageActuelle = get_the_title();
    $user_id = $current_user->ID;
    $pageUrl = get_page_link();
    
    $data = array(
        'module'=> $pageActuelle,
        'user'=> $user_id,
        'page'=> $pageUrl,);
        $format = array('%s', '%d');
        
// var_dump($data);
// var_dump($user_name);
$result = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE user = $user_id AND module = $pageActuelle" ) );
print_r($result);
if ($user_id  and $pageActuelle == true){
    echo "On les a !";
} else {
    echo "je rajoute !";
    $wpdb->insert($table, $data, $format);
}

echo $result;
var_dump($result);

?>