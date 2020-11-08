<!DOCTYPE html>
<html>
<head>
    <title>Аниме форум</title>
    <?php wp_head();?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Neucha&display=swap');
        html {
            font-family: 'Neucha', "Times New Roman", Times, serif;
        }
        body{
            background: black;
        }
        ::selection{
            color: #333 !important;
            background: white !important;
        }
    </style>
</head>
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
<?php wp_footer(); ?>
</html>