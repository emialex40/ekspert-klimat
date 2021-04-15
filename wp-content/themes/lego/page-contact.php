<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
    <article class="contact_page">
        <h1 class="h3 front_page_title"><?php print the_field('page_title') ?></h1><!--front_page_title-->
        <section class="contact_page_about_us">
            <div class="container">
                <h3 class="h5 contact_page_address_title"><?php print the_field('section_1_address_index_info') ?></h3>
                <h2 class="h4 contact_page_title"><?php print the_field('section_1_title') ?></h2>
                <!-- /.h4 contact_page_title -->
                <div class="row">
                    <div class="col-md-7 col-sm-8 col-12">
                        <div class="contact_page_about_us_content"><?php print the_field('section_1_content') ?></div>
                    </div><!--.col-md-7-->
                    <div class="offset-lg-2 col-lg-3 col-md-5 col-sm-4 col-12 about_us_img_block">
                        <img src="<?php print the_field('section_1_image_1') ?>"
                             alt="<?php print the_field('section_1_title') ?>" class="contact_page_about_us_image">
                    </div><!--about_us_img_block-->
                    <?php if (get_field('section_1_image_2') != ""): ?>
                        <div class="col-md-3 col-6 about_us_img_block">
                            <img src="<?php print the_field('section_1_image_2') ?>"
                                 alt="<?php print the_field('section_1_title') ?>" class="contact_page_about_us_image">
                        </div><!--about_us_img_block-->
                    <?php endif; ?>
                    <?php if (get_field('section_1_image_3') != ""): ?>
                        <div class="col-md-3 col-6 about_us_img_block">
                            <img src="<?php print the_field('section_1_image_3') ?>"
                                 alt="<?php print the_field('section_1_title') ?>" class="contact_page_about_us_image">
                        </div><!--about_us_img_block-->
                    <?php endif; ?>
                    <?php if (get_field('section_1_image_4') != ""): ?>
                        <div class="col-md-3 col-6 about_us_img_block">
                            <img src="<?php print the_field('section_1_image_4') ?>"
                                 alt="<?php print the_field('section_1_title') ?>" class="contact_page_about_us_image">
                        </div><!--about_us_img_block-->
                    <?php endif; ?>
                    <?php if (get_field('section_1_image_5') != ""): ?>
                        <div class="col-md-3 col-6 about_us_img_block">
                            <img src="<?php print the_field('section_1_image_5') ?>"
                                 alt="<?php print the_field('section_1_title') ?>" class="contact_page_about_us_image">
                        </div><!--about_us_img_block-->
                    <?php endif; ?>
                </div><!--row-->
            </div> <!-- /.container -->
        </section><!-- /.contact_page_about_us -->
        <section class="contact_page_love_us">
            <div class="container">
                <h3 class="h4 contact_page_title"><?php print the_field('section_2_title') ?></h3>
                <div class="row">
                    <?php if (get_field('section_2_love_us_title_1') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_1') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_1') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_1') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_1') ?></h5>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('section_2_love_us_title_2') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_2') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_2') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_2') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_2') ?></h5>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('section_2_love_us_title_3') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_3') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_3') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_3') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_3') ?></h5>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('section_2_love_us_title_4') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_4') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_4') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_4') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_4') ?></h5>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('section_2_love_us_title_5') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_5') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_5') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_5') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_5') ?></h5>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('section_2_love_us_title_6') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_6') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_6') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_6') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_6') ?></h5>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('section_2_love_us_title_7') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_7') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_7') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_7') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_7') ?></h5>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('section_2_love_us_title_8') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_8') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_8') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_8') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_8') ?></h5>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('section_2_love_us_title_9') != ""): ?>
                        <div class="col-md-4 col-sm-6 col-12 love_us_block">
                            <?php if (get_field('section_2_love_us_image_9') != ""): ?>
                                <img src="<?php print the_field('section_2_love_us_image_9') ?>"
                                     alt="<?php print the_field('section_2_love_us_title_9') ?>" class="love_us_icon">
                            <?php endif; ?>
                            <h5 class="love_us_title"><?php print the_field('section_2_love_us_title_9') ?></h5>
                        </div>
                    <?php endif; ?>

                </div><!--row-->
            </div><!--container-->
        </section><!--contact_page_love_us-->
        <section class="contact_page_our_numbers">
            <div class="container">
                <h3 class="h4 contact_page_title"><?php print the_field('section_3_title') ?></h3>
                <div class="our_numbers_wrapper">
                    <?php if (get_field('section_3_love_us_title_1') != ""): ?>
                        <div class="our_numbers_block">
                            <?php if (get_field('section_3_love_us_image_1') != ""): ?>
                                <img src="<?php print the_field('section_3_love_us_image_1') ?>"
                                     alt="<?php print the_field('section_3_love_us_number_1') ?> <?php print the_field('section_3_love_us_title_1') ?>"
                                     class="our_numbers_block_icon"><?php endif; ?>
                            <h4 class="our_numbers_block_title"><?php print the_field('section_3_love_us_number_1') ?></h4>
                            <h5 class="our_numbers_block_subtitle"><?php print the_field('section_3_love_us_title_1') ?></h5>
                        </div><!--our_numbers_block-->
                    <?php endif; ?>
                    <?php if (get_field('section_3_love_us_title_2') != ""): ?>
                        <div class="our_numbers_block">
                            <?php if (get_field('section_3_love_us_image_2') != ""): ?>
                                <img src="<?php print the_field('section_3_love_us_image_2') ?>"
                                     alt="<?php print the_field('section_3_love_us_number_2') ?> <?php print the_field('section_3_love_us_title_2') ?>"
                                     class="our_numbers_block_icon"><?php endif; ?>
                            <h4 class="our_numbers_block_title"><?php print the_field('section_3_love_us_number_2') ?></h4>
                            <h5 class="our_numbers_block_subtitle"><?php print the_field('section_3_love_us_title_2') ?></h5>
                        </div><!--our_numbers_block-->
                    <?php endif; ?>
                    <?php if (get_field('section_3_love_us_title_3') != ""): ?>
                        <div class="our_numbers_block">
                            <?php if (get_field('section_3_love_us_image_3') != ""): ?>
                                <img src="<?php print the_field('section_3_love_us_image_3') ?>"
                                     alt="<?php print the_field('section_3_love_us_number_3') ?> <?php print the_field('section_3_love_us_title_3') ?>"
                                     class="our_numbers_block_icon"><?php endif; ?>
                            <h4 class="our_numbers_block_title"><?php print the_field('section_3_love_us_number_3') ?></h4>
                            <h5 class="our_numbers_block_subtitle"><?php print the_field('section_3_love_us_title_3') ?></h5>
                        </div><!--our_numbers_block-->
                    <?php endif; ?>
                    <?php if (get_field('section_3_love_us_title_4') != ""): ?>
                        <div class="our_numbers_block">
                            <?php if (get_field('section_3_love_us_image_4') != ""): ?>
                                <img src="<?php print the_field('section_3_love_us_image_4') ?>"
                                     alt="<?php print the_field('section_3_love_us_number_4') ?> <?php print the_field('section_3_love_us_title_4') ?>"
                                     class="our_numbers_block_icon"><?php endif; ?>
                            <h4 class="our_numbers_block_title"><?php print the_field('section_3_love_us_number_4') ?></h4>
                            <h5 class="our_numbers_block_subtitle"><?php print the_field('section_3_love_us_title_4') ?></h5>
                        </div><!--our_numbers_block-->
                    <?php endif; ?>
                </div><!--our_numbers_wrapper-->
                <?php if (get_field('section_3_love_us_text_1') != ""): ?>
                    <div class="our_numbers_content">
                        <?php print the_field('section_3_love_us_text_1') ?>
                    </div><!--our_numbers_content-->
                <?php endif; ?>

            </div><!--container-->
        </section><!--contact_page_our_numbers-->
        <section class="contact_page_our_address">
            <div class="container">
                <h3 class="h4 contact_page_title"><?php print the_field('section_4_title') ?></h3>


                <?php if (get_field('section_4_address_title_1') != "" || get_field('section_4_address_map_1') != ""): ?>
                    <div class="our_addres_map_block">
                        <?php if (get_field('section_4_address_title_1') != ""): ?>
                            <h4 class="our_address_title">
                                <i class="fal fa-map-marker-alt"  style="font-style: inherit;"></i>
                                <?php print the_field('section_4_address_title_1') ?>
                            </h4>
                        <?php endif; ?>
                        <?php if (get_field('section_4_address_map_1') != ""): ?>
                            <div class="our_address_map">
                                <?php print the_field('section_4_address_map_1') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if (get_field('section_4_address_title_2') != "" || get_field('section_4_address_map_2') != ""): ?>
                    <div class="our_addres_map_block">
                        <?php if (get_field('section_4_address_title_2') != ""): ?>
                            <h4 class="our_address_title">
                                <i class="fal fa-map-marker-alt"  style="font-style: inherit;"></i>
                                <?php print the_field('section_4_address_title_2') ?>
                            </h4>
                        <?php endif; ?>
                        <?php if (get_field('section_4_address_map_2') != ""): ?>
                            <div class="our_address_map">
                                <?php print the_field('section_4_address_map_2') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div><!--container-->
        </section><!--contact_page_our_address-->


    </article><!--contact_page-->

<?php get_footer(); ?>