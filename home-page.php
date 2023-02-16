<?php
/**
 * Template Name: Home
 * Description: Page template Home
 *
 */


get_header();
?>
<section id="carousel">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<?php
						if( have_rows('caarousel_box') ): 
						$countDot = 0;
						while( have_rows('caarousel_box') ) : the_row();
						if( get_sub_field('iamge_carousel') ): ?>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $countDot;?>"  <?php if($countDot == 0){echo 'class="active" aria-current="true"';}else{};?>   aria-label="Slide <?= $countDot;?>"></button>
						<?php
						$countDot++;
						endif; 
						endwhile;
						else :
						endif;
						?> 
						</div>
						<div class="carousel-inner">
							<?php 
							if( have_rows('caarousel_box') ):
								$countSlide = 0;
							while( have_rows('caarousel_box') ) : the_row();
							?>
								<div class="carousel-item <?php if($countSlide == 0){echo 'active';}else{};?>">
									<div class="row">
										<div class="col-12 col-lg-6 carousel-text">
											<h2><?php the_sub_field('title_carousel'); ?></h2>
											<p><?php the_sub_field('text_carousel'); ?></p>
											<div d-flex>
											<a href="#about" class="btn"><?php the_sub_field('left_button'); ?></a>
											<a href="#about" class="btn2"><?php the_sub_field('richt_button'); ?></a>
											</div>
										</div>
										<div class="col-12 col-lg-6 carousel-image">
											<img src="<?php the_sub_field('iamge_carousel'); ?>" class="" alt="...">
										</div>
									</div>
								</div>
							<?php
							$countSlide++;
							endwhile; 
							?>
							<?php
							else :
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- wszystko powyzej sformatowac -->
</section>
</section>
<section id="logos" class="logos">
  <div class="container text-center">
    <div class="row">
    <?php 
    if( have_rows('logos_box') ):
    while( have_rows('logos_box') ) : the_row();
      ?>
	  <div class="col-6 col-sm-4 col-lg-2 d-flex align-items-center justify-content-center">
			<img src=" <?php the_sub_field('logos_image'); ?> " class="img-fluid" alt="">
			</div>
     
			<?php
			endwhile; 
			?>
			<?php
			else :
			endif;
			?>
			
      </div>
    </div>
  </div>
</section>
<section id="about_us">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center"> ABOUT US</h2>
				<div class="row">
					<div class="col-12 col-lg-6 about-left">
						<P><?php the_field('left_text_up'); ?></P>
						<?php
						if( have_rows('left_text_box') ): 
						while( have_rows('left_text_box') ) : the_row(); ?>
						<li><i class="ri-check-double-line"></i><?php the_sub_field('lewy_text_about_us'); ?></li>
						<?php 
						endwhile;
						else :
						endif;
						?> 
					</div>
					<div class="col-12 col-lg-6 ">
					<p><?php the_field('richt text'); ?></p>
					<button class="btn3"> <?php the_field('text_button_about_us'); ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="accordion1">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7 accordeon-1">
				<h3><?php the_field('acordeon_text_main'); ?></h3>
				<p><?php the_field('acordeon_text_down'); ?> </p>
				<?php 
				if( have_rows('akordeon_box') ):
				$counteraccordeon = 0;
				while( have_rows('akordeon_box') ) : the_row();
				?>
            	<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="heading<?php echo $counteraccordeon;?>">
						<button class="<?php if($counteraccordeon){echo 'accordion-button collapsed';}else{echo 'accordion-button';};?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counteraccordeon;?>" aria-expanded="<?php if($counteraccordeon){echo 'true';}else{echo 'false';};?>" aria-controls="collapse<?php echo $counteraccordeon;?>">
						<?php the_sub_field('accordeon1_title'); ?>
						</button>
						</h2>
						<div id="collapse<?php echo $counteraccordeon;?>" class="accordion-collapse collapse<?php if($counteraccordeon){echo '';}else{echo ' show';};?>" aria-labelledby="heading<?php echo $counteraccordeon;?>" data-bs-parent="#accordionExample">
						<div class="accordion-body">
						<?php the_sub_field('accordeon1_text'); ?>
						</div>
            		</div>
          		</div>
        	</div>
        <?php
              $counteraccordeon++;
              endwhile; 
              ?>
              <?php
              else :
              endif;
              ?>
			</div>
			<div class="col-12 col-lg-5 accordeon-image">
				<div class="d-block w-100">
					<?php 
					$accordeon_image_richt = get_field('accordeon_image_richt');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $accordeon_image_richt ) {
						echo wp_get_attachment_image( $accordeon_image_richt, $size );
					}?>"
 				</div>
			</div>
		</div>
	</div>
</section>
<section id="progres_bar">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
			<?php 
					$image_progres_bar = get_field('image_progres_bar');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $image_progres_bar ) {
						echo wp_get_attachment_image( $image_progres_bar, $size );
					}?>"
			</div>	
			<div class="col-12 col-lg-6">
				<h3><?php the_field('title_progres_bar'); ?></h3>
				<P><?php the_field('progres_bar_text'); ?></P>
				<?php 
              if( have_rows('progres_bar_box') ):
              while( have_rows('progres_bar_box') ) : the_row();
            ?>
				<div class="text-progress-bar d-flex justify-content-between">
					<p><?php the_sub_field('name_bar'); ?></p>
					<p><?php the_sub_field('%_bar'); ?></p>
					</div>
				<div class="progress">
					<div class="progress-bar " role="progressbar" style="width: <?php the_sub_field('%_bar'); ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<?php
              endwhile; 
              ?>
              <?php
              else :
              endif;
              ?>
					</div>

			</div>
		</div>	
	</div>
</section>
<section id="services">
	<div class="container text-center">
		<div class="row">
			<div class="col-12">
				<h3 class=" text-center">SERVICES</h3>
				<P class=" text-center"> <?php the_field('tekst_services'); ?></P>
			</div>
		</div>
		<div class="row row-box-icon-t">
		<?php 
              if( have_rows('services_box') ):
              while( have_rows('services_box') ) : the_row();
            ?>
			<div class="col-xl-3 col-md-6 d-flex align-items-stretch box-icon-t services_box">
				<div class="icon-box">
					<div class="icon">
						<i class="box">  <img src="<?php the_sub_field('image_services'); ?>" class="" alt="..."></i>
					</div><h4><a href=""><?php the_sub_field('title_servixes'); ?></a></h4>
					<p><?php the_sub_field('text_box_services'); ?></p>
					
				</div>
			</div>
			<?php
              endwhile; 
              ?>
              <?php
              else :
              endif;
              ?>
		</div>
	</div>
</section>
<section id="call_to_action">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-9 call-left">
				<h3><?php the_field('tiitle_call_to_action'); ?></h3>
				<P><?php the_field('text_call_to_action'); ?></P>
			</div>
			<div class="col-12 col-lg-3 call-richt">
				<Button> <?php the_field('button_call_to_action'); ?></Button>
			</div>
		</div>
	</div>
</section>
<section id="portfolio">
	<div class="container text-center">
		<h3>Portfolio</h3>
		<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		<div class="row">
			<div class="col-12">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><?php the_field('nazwa_1_zakladki_portfolio'); ?></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><?php the_field('nazwa_2_zakladki_portfolio'); ?></button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="Kontakt-tab" data-bs-toggle="tab" data-bs-target="#kontakt" type="button" role="tab" aria-controls="kontakt" aria-selected="false"><?php the_field('nazwa_3_zakladki_portfolio'); ?></button>
			</li>
			</ul>
			<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<div class="row">
				<?php 
              if( have_rows('portfolio_box_home') ):
              while( have_rows('portfolio_box_home') ) : the_row();
            ?>
					<div class="col-12 col-lg-4"><img src="<?php the_sub_field('Image_portfolio'); ?>" class="img-fluid" alt=""></div>
					<?php
              endwhile; 
              ?>
              <?php
              else :
              endif;
              ?>
				</div>
				</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			<div class="row">
				<?php 
              if( have_rows('portfolio_box_profile') ):
              while( have_rows('portfolio_box_profile') ) : the_row();
            ?>
					<div class="col-12 col-lg-4"><img src="<?php the_sub_field('Image_portfolio'); ?>" class="img-fluid" alt=""></div>
					<?php
              endwhile; 
              ?>
              <?php
              else :
              endif;
              ?>
				</div>
				</div>
				<div class="tab-pane fade" id="kontakt" role="tabpanel" aria-labelledby="Kontakt-tab">
			<div class="row">
			<?php 
              if( have_rows('portfolio_box_contact') ):
              while( have_rows('portfolio_box_contact') ) : the_row();
            ?>
					<div class="col-12 col-lg-4"><img src="<?php the_sub_field('Image_portfolio'); ?>" class="img-fluid" alt=""></div>
					<?php
              endwhile; 
              ?>
              <?php
              else :
              endif;
              ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="team">
	<div class="container text-center">
		<div class="row">
			<div class="col-12 team_12">
				<h3>Team</h3>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>
			<div class="row" id="people">
			<?php 
              if( have_rows('team_box') ):
              while( have_rows('team_box') ) : the_row();
            ?>
				<div class="col-12 col-lg-6 team-profil" >
					<div class="profil">
					<div class="row">
						<div class="col-12 col-lg-4 team_img">
						<img src="<?php the_sub_field('team_image'); ?>"  class="img-fluid" id="team_img" alt="">
						</div>
						<div class="col-12 col-lg-8 image_team">
						<h4><?php the_sub_field('name_team'); ?></h4>
						<p><?php the_sub_field('text1_team'); ?></p>
						<p><?php the_sub_field('text2_team'); ?></p>
						<div class="row" id="media">
							<div class="col-3"><img src="<?php the_sub_field('link_ikona_1'); ?>" class="img-fluid" alt=""></div>
							<div class="col-3"><img src="<?php the_sub_field('link_ikona_2'); ?>" class="img-fluid" alt=""></div>
							<div class="col-3"><img src="<?php the_sub_field('link_ikona_3'); ?>" class="img-fluid" alt=""></div>
							<div class="col-3"><img src="<?php the_sub_field('link_ikona_4'); ?>" class="img-fluid" alt=""></div>
						</div>
						</div>
					</div>
					</div>
				</div>
				<?php
              endwhile; 
              ?>
              <?php
              else :
              endif;
              ?>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section id="pricing">
	<div class="container text-center">
		<div class="row">
			<div class="col-12 pricing_12">
			<h3>Pricing</h3>
				<p><?php the_field('text_down_title pricing'); ?></p>
			</div>
				<div class="row"> 
					
									<?php 
								if( have_rows('pricing_box') ):
								while( have_rows('pricing_box') ) : the_row();
								?>
								<div class="col-12 col-md-4">
							<div class="price">
								<h5><?php the_sub_field('title_pricing'); ?></h5>
								<h4><sup>$</sup><?php the_sub_field('price_pricing'); ?></h4>
								<h3> <span>per month</span> </h3>
										<i class="yes"></i> <?php the_sub_field('list_pricing_1'); ?></p>
										<p><i class="yes"></i> <?php the_sub_field('list_pricing_2'); ?></p>
										<p><i class="yes"></i> <?php the_sub_field('list_pricing_3'); ?></p>
										<p class="no"> <span> <?php the_sub_field('list_pricing_4'); ?></p>
										<p class="no"> <span> <?php the_sub_field('list_pricing_5'); ?></p>
									<button class="start"><?php the_sub_field('button_text'); ?> </button>
									</div>
									</div> 
									<?php
									endwhile; 
									?>
									<?php
									else :
									endif;
									?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<section id="faq">
	<div class="container text-center">
		<div class="row">
			<div class="col-12">
				<h3>FREQUENTLY ASKED QUESTIONS</h3>
				<p><?php the_field('text_under_faq pricing'); ?></p>
				<div class="accordion" id="accordionExample">

						
				<div class="accordion-item">
						<?php 
						if( have_rows('faq_box') ):
						$counteraccordeontwo = 0;
						while( have_rows('faq_box') ) : the_row();
						?>
					<h2 class="accordion-header" id="heading<?php echo $counteraccordeontwo;?>">
						<button class="<?php if($counteraccordeontwo){echo 'accordion-button collapsed';}else{echo 'accordion-button';};?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counteraccordeontwo;?>" aria-expanded="<?php if($counteraccordeontwo){echo 'true';}else{echo 'false';};?>" aria-controls="collapse<?php echo $counteraccordeontwo;?>">
							<?php the_sub_field('title_faq'); ?>
						</button>
						</h2>
						<div id="collapse<?php echo $counteraccordeontwo;?>" class="accordion-collapse collapse<?php if($counteraccordeontwo){echo '';}else{echo ' show';};?>" aria-labelledby="heading<?php echo $counteraccordeontwo;?>" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<?php the_sub_field('answer_faq'); ?>
						</div>
						</div>
						<?php
					$counteraccordeontwo++;
					endwhile; 
					?>
					<?php
					else :
					endif;
					?>
				</div>
			</div>
				
			</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>CONTACT</h3>
				<p class="paragraf"><?php the_field('contackt_text_under_title'); ?></p>
				<div class="row">
					<div class="col-12 col-lg-4 contact-info">
						<div class="row">
							<div class="col-4">
							<img src="<?php the_field('iamge_location'); ?>" class="img-fluid" alt="">
							</div>
							<div class="col-8">
							<h5>Location:</h5>
						<p><?php the_field('location_contact'); ?></p> 
							</div>
						</div>
						<div class="row">
							<div class="col-4">
							<img src="<?php the_field('iamge_email'); ?>" class="img-fluid" alt="">
							</div>
							<div class="col-8">
							<h5>Email:</h5>
							<p><?php the_field('email_contact'); ?></p> 
							</div>
						</div>
						<div class="row">
							<div class="col-4">
							<img src="<?php the_field('iamge_call'); ?>" class="img-fluid" alt="">
							</div>
							<div class="col-8">
							<h5>Call:</h5>
							<p><?php the_field('call_contact'); ?></p> 
							</div>
						</div>
						<iframe src="<?php the_field('script_google_maps'); ?></p>" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen=""></iframe>
					</div>
				
					<div class="col-12 offset-lg-1 col-lg-7 contact-form">
								<?php echo do_shortcode( '[contact-form-7 id="44" title="Formularz 1"]' ); ?>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</section>
<section id="newsletter">
	<div class="container text-center">
		<div class="row">
			<div class="col-12">
				<h1>Join Our Newsletter</h1>
				<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
			<div class="Subscribe_box">
					<input type="email" name="email"> 
					<input type="submit" value="Subscribe">
				</div>
			</div>
		</div>
	</div>
</section>	
<div style="height: 10vh"></div>			
<?php
get_footer();
