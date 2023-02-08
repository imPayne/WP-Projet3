<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
 
 
<body <?php body_class(); ?>>

<?php


// On récupère la liste des menus 
$menuLocations = get_nav_menu_locations();


// On récupère l'ID de notre menu principal
$menuID = $menuLocations['menu_principal'];


// On récupère les liens de ce menu
$menu = wp_get_nav_menu_items($menuID);

?>
<div class="h-20 grid grid-cols-2 place-items-center">
    <img src="<?php the_field('logo', 'options'); ?>" alt="logo">
    <ul class="w-262 h-50 flex space-x-2">
        <?php // On boucle dans les liens et on les affiche
        foreach ( $menu as $navItem ) {
            echo '<li class="font-semibold list-none pr-4 block lg:inline-block lg:mt-0 mr-4"><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
        }?>
    </ul>
</div>
<?php wp_body_open(); ?>