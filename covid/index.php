<?php get_header(); ?>

	<div class="s-base" style="background-image: url(<?php the_field('top_background') ?>);">
		<div class="l-container">
			<div class="s-base__wrapper">
				<div class="s-base__content">
					<h1 class="el-caption">
						<?php the_field('main_headline') ?>
					</h1>
					<p class="el-description">
					<?php the_field('descroption_headline') ?>
					</p>
					
				</div>
			</div>
		</div>
	</div>
	<div class="s-statistic">
		<div class="l-container">
			<div class="s-statistic__wrapper">
				<div class="s-statistic__block">
					<h3 class="el-subtitle el-subtitle--grow">
					<?php the_field('Subtitle') ?>			
					</h3>
					<p class="el-description el-description--light">
					<?php the_field('description-2') ?>
					</p>
				</div>

				<div class="s-statistic__block">

					<div class="c-diagram">
						<div class="c-diagram__description">
							<span class="c-diagram__description-item c-diagram__description-item--red">
								infected
							</span>
							<span class="c-diagram__description-item c-diagram__description-item--black">
								died
							</span>	
							<span class="c-diagram__description-item c-diagram__description-item--blue">
								recovered
							</span>
						</div>
						<div class="c-diagram__lines">
							<div class="c-diagram__lines-line c-diagram__lines-line--red"></div>

							<div class="c-diagram__lines-line c-diagram__lines-line--black"></div>

							<div class="c-diagram__lines-line c-diagram__lines-line--blue"></div>
						</div>
					</div>

					<p class="el-description">
					<?php the_field('description_statistics') ?>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="s-grow">
		<div class="l-container">
			<div class="s-grow__wrapper">
				<div class="c-illness">

					<div class="c-illness__item">
						<div class="c-illness__item-description">
							<p class="c-illness__item-text">
							<?php the_field('diagramm_descr') ?>
							</p>
						</div>

						<div class="c-illness__item-visualisation">
							<figure class="c-illness__item-media">
								<img class="c-illness__item-img" src="<?php the_field('diagramm1')?>" alt="graphic in show peoples, which recover in different grow">
							</figure>
						</div>
					</div>

					<div class="c-illness__item">
						<div class="c-illness__item-description">
							<p class="c-illness__item-text">
							<?php the_field('diagramm_descr-2') ?>
							</p>
						</div>

						<div class="c-illness__item-visualisation">
							<figure class="c-illness__item-media">
								<img class="c-illness__item-img" src="<?php the_field('diagramm-2')?>" alt="graphic in show peoples, which recover in different grow">
							</figure>
						</div>
					</div>

					<div class="c-illness__item">
						<div class="c-illness__item-description">
							<p class="c-illness__item-text">
							<?php the_field('diagramm_descr-3') ?>
							</p>
						</div>

						<div class="c-illness__item-visualisation">
							<figure class="c-illness__item-media">
								<img class="c-illness__item-img" src="<?php the_field('diagramm-3')?>" alt="graphic in show peoples, which recover in different grow">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="s-slider">
		<div class="l-container">
			<div class="s-slider__wrapper">
				<h2 class="el-caption el-caption--blue">
					This is our famous,you can call them
				</h2>
			</div>

			<button class="el-arrow-prev" style='background-image: url("<?php the_field('arrow_prev') ?>");'> </button>
			<div class="c-slider">
				<div class="c-slider__item">
					<figure class="c-slider__item-media">
						<img src="<?php the_field('photo_1')?>" alt="" class="c-slider__item-img">
					</figure>
					<p class="c-slider__item-description"><?php the_field('people_descr_1')?></p>
				</div>

				<div class="c-slider__item">
					<figure class="c-slider__item-media">
						<img src="<?php the_field('photo_2')?>" alt="" class="c-slider__item-img">
					</figure>
					<p class="c-slider__item-description"><?php the_field('people_descr_2')?></p>
				</div>

				<div class="c-slider__item">
					<figure class="c-slider__item-media">
						<img src="<?php the_field('photo_3')?>" alt="" class="c-slider__item-img">
					</figure>
					<p class="c-slider__item-description"><?php the_field('people_descr_3')?></p>
				</div>

				<div class="c-slider__item">
					<figure class="c-slider__item-media">
						<img src="<?php the_field('photo_4')?>" alt="" class="c-slider__item-img">
					</figure>
					<p class="c-slider__item-description"><?php the_field('people_descr_4')?></p>
				</div>

				<div class="c-slider__item">
					<figure class="c-slider__item-media">
						<img src="<?php the_field('photo_5')?>" alt="" class="c-slider__item-img">
					</figure>
					<p class="c-slider__item-description"><?php the_field('people_descr_5')?></p>
				</div>

				<div class="c-slider__item">
					<figure class="c-slider__item-media">
						<img src="<?php the_field('photo_6')?>" alt="" class="c-slider__item-img">
					</figure>
					<p class="c-slider__item-description"><?php the_field('people_descr_6')?></p>
				</div>

				<div class="c-slider__item">
					<figure class="c-slider__item-media">
						<img src="<?php the_field('photo_7')?>" alt="" class="c-slider__item-img">
					</figure>
					<p class="c-slider__item-description"><?php the_field('people_descr_7')?></p>
				</div>

				<div class="c-slider__item">
					<figure class="c-slider__item-media">
						<img src="<?php the_field('photo_8')?>" alt="" class="c-slider__item-img">
					</figure>
					<p class="c-slider__item-description"><?php the_field('people_descr_8')?>
						 </p>
				</div>	
			</div>
			<button class="el-arrow-next" style='background-image: url("<?php the_field('arrow_next') ?>");'> </button>
		</div>
	</div>  

<?php get_footer(); ?>
	

        
	