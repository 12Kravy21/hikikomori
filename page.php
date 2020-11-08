<!-- header -->
<?php get_header(); ?>


<body>

    <?php
		// циклы вывода записей
		// если записи найдены
		if ( have_posts() ){
			while ( have_posts() ){
				the_post();

				the_content();
			}
		}
		// если записей не найдено
		else{
			echo ' <p>Записей нет...</p>';
		}
		?>

</body>


<!-- footer -->
<?php get_footer(); ?>
