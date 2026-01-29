<?php
$term = get_queried_object();

$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>

<!--Metaetiquetas del Máster de SEO técnico-->

<!--AUTOMATIZACIÓN metarobots-->
<?php 
$metarobots_checked_values = get_field( 'metarobots', $term ); 
// 2. Comprobamos si hay valores seleccionados
if ( $metarobots_checked_values ) : ?>
      <meta name="robots" content="<?php echo implode( ', ', $metarobots_checked_values ); ?>">
<?php endif; ?>



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<meta name="robots" content=""> 

<link rel="canonical" href="<?php if (get_field ('canonical', $term))
{the_field('canonical', $term);}
else {echo $url_sin_string;}
                              ?>">

<!--Auromatismo para añadir Metatags Personalizados con Plug In ACF-->            
            <?php the_field('custom_meta', $term) ?>

<!--Auromatismo para añadir title con Plug In ACF-->
            <title><?php the_field('title', $term );?></title>
            
<!--Condicional para poner la description si no añado og_title-->
            <meta name="description" content="<?php
            if (get_field('metadescription', $term )) {
            the_field('metadescription', $term);
            } elseif (get_field('og_description', $term )) {
            the_field('og_description', $term);
            } else {
            the_field('title', $term);}?>">
            

            <meta property="og:locale" content="">
            <meta property="og:type" content="website">

<!--Condicional para poner el title si no añado og_title-->
            <meta property="og:title" content="<?php 
            if (get_field('og_title', $term )){
                  the_field( 'og_title', $term);
            } else{the_field('title', $term );}?>">
            
            <meta property="og:description" content="">

            <meta property="og:url" content="<?php the_field('canonical', $term) ?>">
            <meta property="og:site_name" content="">
            <meta property="og:image" content="<?php the_field('og_image');?>">
            <meta property="og:image:alt" content="<?php the_field('title', $term );?>">
            <meta property="og:image:width" content="">        
            <meta property="og:image:height" content="">

            <meta property="twitter:card" content="summary_large_image">
            <meta property="twitter:site" content="@SEO_Tecnico">       
            <meta property="twitter:creator" content="@SEO_Tecnico">

<!--Condicional para poner el title si no añado twitter_title-->     
            <meta property="twitter:title" content="<?php
            if (get_field('twitter_title', $term )) {
            the_field('twitter_title', $term);
            } elseif (get_field('og_title', $term )) {
            the_field('og_title', $term);
            } else {
            the_field('title', $term);}?>"> 
                        
<!--Condicional para poner el title si no añado twitter_title-->     
            <meta property="twitter:description" content="<?php
            if (get_field('twitter_description', $term )) {
            the_field('twitter_description', $term);
            } elseif (get_field('og_title', $term )) {
            the_field('og_title', $term);
            } else {
            the_field('title', $term);}?>"> 
            <meta property="twitter:image" content="<?php the_field('og_image');?>">

            <meta property="rating" content="adult">

            <meta property="googlebot" content="">
            <meta property="format-detection" content="">

            <div data-nosnippet>
            </div>
<!--FIN de las Metaetiquetas del Máster de SEO técnico-->