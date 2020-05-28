<?php get_header(); ?>
<!-- 
Template Name: vaccination  
-->
<div class="s-base s-base--vaccination" style="background-image: url(<?php the_field('background_img') ?>);">
    <div class="l-container">
        <div class="s-base__wrapper">
            <div class="s-base__content s-base__content--white">
                <h1 class="el-caption">
                    <?php the_field('Headline') ?>
                </h1>
                <p class="el-description">
                    <?php the_field('description') ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="s-general">
    <div class="l-container">
        <div class="c-inf">
            <div class="c-inf__block">
                <p class="c-inf__block-description">
                    <?php the_field('block_descr_1') ?>
                </p>
                <figure class="c-inf__block-media">
                    <img src="<?php the_field('img_block_1') ?>" alt="" class="c-inf__block-img">
                </figure>
            </div>

            <div class="c-inf__block">
                <p class="c-inf__block-description">
                    <?php the_field('block_descr_2') ?>
                </p>
                <figure class="c-inf__block-media">
                    <img src="<?php the_field('img_block_2') ?>" alt="" class="c-inf__block-img">
                </figure>
            </div>

            <div class="c-inf__block">
                <p class="c-inf__block-description">
                    <?php the_field('block_descr_3') ?>
                </p>
                <figure class="c-inf__block-media">
                    <img src="<?php the_field('img_block_3') ?>" alt="" class="c-inf__block-img">
                </figure>
            </div>


        </div>
    </div>
</div>

<?php get_footer(); ?>