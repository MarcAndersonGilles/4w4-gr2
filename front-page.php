<?php get_header() ?>
<main class="site__main">
<h1 class="animationGroupe2">Groupe #2</h1>
<!-- cercle pour les animations-->

<h2>L'accueil au cégep</h2>
<?php 
  wp_nav_menu(array("menu" => "menu_accueil",
                    "container"=>"nav"));
?>
<h2>Les évènements importants pour l'année</h2>
<?php 
  wp_nav_menu(array("menu" => "evenement",
                    "container"=>"nav"));
?>
<h2>Les ateliers à venir</h2>
<?php 
  wp_nav_menu(array("menu" => "atelier",
                    "container"=>"nav"));
?>


  <!-- section contenuTexte avec le sidebar pour les images et video-->
    <section class="contenuText">
    <?= get_sidebar('front_page_1'); ?>
    <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h2>
    </section>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>