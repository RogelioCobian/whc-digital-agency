<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template Name: Home
 * 
 * @package whc-digital-agency
 */

get_header();
?>

<section id="Banner" style="background-image: url(<?php echo( get_header_image() ); ?>)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 offset-1">
				<h1>
					We are very capable, digital agency
				</h1>
            </div>
		</div>  
		
		<div class="row">
			<div class="col-4 offset-1">
				<h6>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque cumque excepturi, totam numquam quae quo tenetur dolor libero. 
				</h6>
			</div>
		</div>

		<div class="row btn-row">
			<div class="col-2 offset-1">
			<button type="button" class="btn btn-dark">Purchase Now</button>
			</div>

		</div>

    </div>

</section>


<section id="Welcome">
	<div class="container">
		<div class="row">
			<div class="col-4 offset-4">
				<h2>Welcome to digency</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 text-center">
				<p class="gray"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque cumque excepturi.  </p>
			</div>
		</div>
		<div class="row">
			<div class="col-2 offset-5 text-center">
			<hr>
			</div>
		</div>
	</div>
</section>


<section id="Post">
	<div class="container">
		<div class="row">
			<?php 
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => '_services',
                    'order' => 'ASC'
                );

                $services = new WP_Query($args);
            ?>

			<?php if($services -> have_posts()): while($services-> have_posts()): $services -> the_post() ?>

			<div class="col-4 text-center">

				<div class="icon">
					<?php the_post_thumbnail(); ?>
				</div>

				<h3>
					<?php the_title(); ?>
				</h3>

				<p class="gray"> <?php the_content(); ?> </p>

			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<section id="Stats">
	<div class="container">
			<div class="row">
				<div class="col-3">
				<i class="far fa-map fa-3x kindaWhite"></i>
				<h2 class="left">230</h2>

				</div>
				<div class="col-3">
				<i class="fas fa-paperclip fa-3x kindaWhite"></i>
				<h2 class="left">789</h2>

				</div>
				<div class="col-3">
				<i class="fas fa-newspaper fa-3x kindaWhite"></i>
				<h2 class="left">580</h2>

				</div>
				<div class="col-3">
				<i class="far fa-map fa-3x kindaWhite"></i>
				<h2 class="left">129</h2>

				</div>
			</div>
	</div>
</section>



<section id="Clients">
	<div class="container-fluid">
		<div class="row">
			<?php 
                $argsTwo = array(
                    'posts_per_page' => 1,
                    'post_type' => '_clients',
                    'order' => 'ASC'
                );

                $clients = new WP_Query($argsTwo);
            ?>

			<?php if($clients -> have_posts()): while($clients-> have_posts()): $clients -> the_post() ?>

			<div class="col-4 offset-1">
				<h2><?php the_title(); ?></h2>
				<hr>
				<p>
					<?php the_content(); ?>
				</p>
			</div>
			<div class="col-4 offset-2">
				<?php the_post_thumbnail(); ?>	

			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<section id="Form">
	<div class="container">
		<form>
			<div class="row">
				<div class="col-4">
					<input type="text" class="form-control" placeholder="First name">
					<input type="text" class="form-control" placeholder="Last name">
					<input type="text" class="form-control" placeholder="Your Text">
					<button type="button" class="btn btn-dark">Purchase Now</button>
				</div>

				<div class="col-5 offset-2">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit similique nihil, vero quidem quia consequatur, doloremque obcaecati.</p>
				</div>
			</div>
		</form>
	</div>
</section>


<section id="Map">

	<?php 
        $argsThree = array(
            'posts_per_page' => 1,
            'post_type' => '_maps',
            'order' => 'ASC'
            );

            $maps = new WP_Query($argsThree);
    ?>

	<?php if($maps -> have_posts()): while($maps-> have_posts()): $maps -> the_post() ?>
	<div class="row">
		<div class="col-12">
			<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile; endif; ?>
</section>


<section id="News">
	<div class="container-fluid">
		<div class="row">
			<div class="col-8 offset-2 text-center">
				<h1>Subscribe Newsletter</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit similique nihil, vero quidem quia consequatur.</p>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-8 offset-2 input-group">
				<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-dark" type="button">Button</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="Footer">
	<div class="container-fluid">
		<div class="row flex">

			<h3>Digency</h3>

			<p> &copy; 2018, All Rights Reserved </p>
		</div>
	</div>
</section>

<?php
get_footer();
