<?php
/*
Template Name: FAQ Частые вопросы
*/
?>
<?php get_header(); ?>

<?php
$args = array(
    'taxonomy' => 'faqcat',
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC'
);

$terms = get_terms($args);
?>
    <article class="faq_page">
        <h1 class="h3 front_page_title">Частые вопросы</h1><!--front_page_title-->
        <section class="faq_section">
            <div class="container">
                <div id="tabs">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <ul class="tabs-nav">
                                <?php
                                $i = 1;
                                foreach ($terms as $term) { ?>
                                    <li><a href="#tab-<?= $term->slug; ?>"><?php echo $term->name; ?></a></li>
                                <?php } ?>
                            </ul><!--tabs-nav-->
                        </div>

                        <div class="col-md-8 col-12">
                            <div class="tabs-items">

                                <?php
                                $i = 1;
                                foreach ($terms as $term) :
                                    $post_args = [
                                        'post_type' => 'faq',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'faqcat',
                                                'field' => 'id',
                                                'terms' => $term->term_id
                                            )
                                        )

                                    ]; ?>
                                    <div class="tabs-item" id="tab-<?= $term->slug; ?>">
                                        <div class="accordion">
                                            <?php
                                            $posts = new WP_Query($post_args);

                                            if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();
                                                ?>

                                                <div class="accordion-item">
                                                    <div class="accordion-header"><?php the_title(); ?></div>
                                                    <div>
                                                        <p><?php the_content(); ?></p>
                                                    </div>
                                                </div>
                                            <?php
                                            endwhile;
                                            endif;
                                            wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                <?php endforeach;
                                ?>
                            </div><!--tabs-items-->
                        </div>
                    </div>
                </div><!--tabs-->
            </div><!--container-->
        </section><!--faq_section-->
    </article><!--faq_page-->

<?php get_footer(); ?>