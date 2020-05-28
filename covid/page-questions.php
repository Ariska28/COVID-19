<?php get_header(); ?>
<!-- 
Template Name: questions  
-->
<div class="s-base s-base--hand" style="background-image: url(<?php the_field('background_img') ?>);">
    <div class="l-container">
        <div class="s-base__wrapper">
            <div class="s-base__content s-base__content--black">
                <h1 class="el-caption el-caption--white">
                    <?php the_field('Headline') ?>
                </h1>
                <p class="el-description el-description--white">
                    <?php the_field('headline_descr') ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="s-general">
    <div class="l-container">
        <h1 class="s-general__caption">
            <?php the_field('Title') ?>
        </h1>

        <div class="c-accordeon js-accordeon">
            <div class="c-accordeon__block">
                <div class="c-accordeon__block-header">
                    <?php the_field('Blocks_headlien') ?>
                </div>
                <div class="c-accordeon__block-description  hide">
                    <?php the_field('blocks_descr') ?>
                </div>
            </div>

            <div class="c-accordeon__block">
                <div class="c-accordeon__block-header">
                    <?php the_field('Blocks_headlien_2') ?>
                </div>
                <div class="c-accordeon__block-description  hide">
                    <?php the_field('blocks_descr_2') ?>
                </div>
            </div>

            <div class="c-accordeon__block">
                <div class="c-accordeon__block-header">
                    <?php the_field('Blocks_headlien_3') ?>
                </div>
                <div class="c-accordeon__block-description hide">
                    <?php the_field('blocks_descr_3') ?>
                </div>
            </div>

            <div class="c-accordeon__block">
                <div class="c-accordeon__block-header">
                    <?php the_field('Blocks_headlien_4') ?>
                </div>
                <div class="c-accordeon__block-description hide">
                    <?php the_field('blocks_descr_4') ?>
                </div>
            </div>

            <div class="c-accordeon__block">
                <div class="c-accordeon__block-header">
                    <?php the_field('Blocks_headlien_5') ?>
                </div>
                <div class="c-accordeon__block-description hide">
                    <?php the_field('blocks_descr_5') ?>
                </div>
            </div>

            <div class="c-accordeon__block">
                <div class="c-accordeon__block-header">
                    <?php the_field('Blocks_headlien_6') ?>
                </div>
                <div class="c-accordeon__block-description hide">
                    <?php the_field('blocks_descr_6') ?>
                </div>
            </div>

            <div class="c-accordeon__block">
                <div class="c-accordeon__block-header">
                    <?php the_field('Blocks_headlien_7') ?>
                </div>
                <div class="c-accordeon__block-description hide">
                    <?php the_field('blocks_descr_7') ?>
                </div>
            </div>

            <div class="c-accordeon__block">
                <div class="c-accordeon__block-header">
                    <?php the_field('Blocks_headlien_8') ?>
                </div>
                <div class="c-accordeon__block-description hide">
                    <?php the_field('blocks_descr_8') ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>