<!DOCTYPE html>
<html>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
echo '<title>'.pozitiv  .'</title>';
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

<?php wp_head(); ?>
</head>

<body>
<header class="header">
<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>
</header>

<div class="middle">
<?php
// циклы вывода записей
// если записи найдены
if ( have_posts() ){
while ( have_posts() ){
the_post();

echo '<h2><a href="'. get_permalink() .'">'. get_the_title() .'</a></h2>';
echo '<div class="teaser">'. apply_filters( 'the_content', get_the_content('подробнее')) .'</div>';

echo get_the_excerpt();
echo '<h2><a href="'. get_permalink() .'">подробнее</a></h2>';
the_title();
the_content();
the_author();
the_date('d.m.Y h:m:i');
echo get_the_category_list(',');
echo get_the_tag_list('', ' | ');
echo get_the_post_thumbnail();
}
}
// елси записей не найдено
else{
echo ' <p>Записей нет...</p>';
}
?>
</div>


<footer class="footer">
<?php echo date('Y') ?> © Я и компания моя  cамые самые 
<?php bloginfo('description'); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>