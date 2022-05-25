<!DOCTYPE html>
<html>


<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
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
echo '<title>'. wp_get_document_title() .'</title>';
echo '<title>'. wp_get_document_title() .' - '. bloginfo('name') .'</title>';
echo home_url();
echo '<a href="'.home_url().'">главная страница</a>';
echo current_time('d.m.Y H:i:s').'<br>';
get_calendar();
if ( have_posts() ){
while ( have_posts() ){
the_post();
if(is_single())
{
echo '<h1>'. get_the_title().'</h1>';
the_author();
echo'<br>';
the_time('d.m.Y');
echo'<br>';
//выведет миниатюру
the_post_thumbnail('thumbnail');
the_content('подробнее...');
}
else
{
echo '<h2>'. get_the_title() .'</h2>';
the_post_thumbnail('thumbnail');
echo get_the_excerpt();
echo '<p><a href="'. get_permalink() .'">Подробнее</p>';
}
}


echo '<h2><a href="'. get_permalink() .'">'. get_the_title() .'</a></h2>';
echo '<title>'. positiv .'</title>';
echo get_bloginfo('template_url');
echo get_bloginfo('stylesheet_url');
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
echo ' <p>Записей нет...</p>';
}
?>
</div>


<footer class="footer">
<?php echo date('Y') ?> © Я и компания моя
<?php bloginfo('description'); ?>
</footer> 

</body>

</html>