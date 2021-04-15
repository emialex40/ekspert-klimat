<?php
/**
 * Template Name: Список желаний
 */
get_header(); ?>

<section class="section section_whishlist">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Избранное</h1>
               <?php do_shortcode("[ti_wishlists_addtowishlist loop=yes]"); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

