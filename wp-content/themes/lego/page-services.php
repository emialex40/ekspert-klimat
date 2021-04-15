<?php
/*
Template Name: Страница с услугами
*/
?>
<?php get_header(); ?>
    <article class="services_page">
        <h1 class="h3 front_page_title"><?php print the_field('page_title') ?></h1><!--front_page_title-->
        <section class="services_section">
           <div class="container">
                   <div id="services_tabs" class="services_tabs">

                       <ul class="services_tabs-nav">
                           <li><a href="#services_tab-1" class="active">Замеры</a></li>
                           <li><a href="#services_tab-2">Доставка</a></li>
                           <li><a href="#services_tab-3">Монтаж</a></li>
                           <li><a href="#services_tab-4">Гарантия</a></li>
                           <li><a href="#services_tab-5">Обслуживание</a></li>
                       </ul><!--services_tabs-->

                       <div class="services_tabs-items">

                           <div class="services_tabs-item measurements" id="services_tab-1" style="background-image: url('<?php print the_field('tab_background_1') ?>') ">
                               <div class="services_container">
                                   <div class="services_content">
                                       <?php print the_field('tab_1_content_1') ?>
                                   </div><!--services_content-->
                                   <div class="services_callback">
                                       <div class="services_callback_title">
                                           <?php print the_field('tab_1_form_title') ?>
                                           <!--     В кастом филдс добавить описание. Если хотите выделить слово/номер используйте оберните его в <b>Текст</b> -->
                                       </div><!--services_callback_title-->
                                       <div class="services_callback_form">
                                           <?php echo do_shortcode('[contact-form-7 id="493" title="Обратный звонок.(Наши услуги + Шапка)"]'); ?>
                                       </div>
                                   </div><!--services_callback-->
                               </div><!--services_container-->
                           </div><!--services_tabs services_tab-1-->


                           <div class="services_tabs-item delivery" id="services_tab-2" style="background-image: url('<?php print the_field('tab_background_2') ?>') ">
                               <div class="services_container">
                                   <div class="services_content">
                                       <h4 class="services_title"><?php print the_field('tab_2_content_1') ?></h4>
                                    </div><!--services_content-->
                                   <div class="services_callback">
                                       <div class="row">
                                           <div class="col-lg-4 col-md-6 col-12 delivery_services">
                                               <h4 class="delivery_services_title"><?php print the_field('tab_2_col_1_title') ?></h4>
                                               <div class="delivery_services_content">
                                                   <?php print the_field('tab_2_col_1_text') ?>
                                               </div>
                                               <!--<a href="" class="delivery_button">заказать</a>-->
                                               <div class="vertical_line"></div>
                                           </div><!--delivery_services-->
                                           <div class="col-lg-4 col-md-6 col-12 delivery_services">
                                               <h4 class="delivery_services_title"><?php print the_field('tab_2_col_2_title') ?></h4>
                                               <div class="delivery_services_content">
                                                   <?php print the_field('tab_2_col_2_text') ?>
                                               </div>
                                               <!--<a href="" class="delivery_button">заказать</a>-->
                                               <div class="vertical_line"></div>
                                           </div><!--delivery_services-->
                                           <div class="col-lg-4 col-12 delivery_services">
                                               <h4 class="delivery_services_title"><?php print the_field('tab_2_col_3_title') ?></h4>
                                               <div class="delivery_services_content">
                                                   <?php print the_field('tab_2_col_3_text') ?>
                                               </div>
                                               <!--<a href="" class="delivery_button">заказать</a>-->
                                           </div><!--delivery_services-->
                                       </div>
                                   </div><!--services_callback-->
                               </div><!--services_container-->
                           </div><!--services_tabs services_tab-2-->


                           <div class="services_tabs-item installation" id="services_tab-3" style="background-image: url('<?php print the_field('tab_background_3') ?>') ">
                               <div class="services_container">
                                   <div class="services_content">
                                        <?php print the_field('tab_3_content_1') ?>
                                   </div><!--services_content-->
                                   <div class="services_callback">
                                       <div class="services_callback_title">
                                           <?php print the_field('tab_3_form_title') ?>
                                           <!--     В кастом филдс добавить описание. Если хотите выделить слово/номер используйте оберните его в <b>Текст</b> -->
                                       </div><!--services_callback_title-->


                                       <div class="services_callback_form">
                                             <?php echo do_shortcode('[contact-form-7 id="493" title="Обратный звонок.(Наши услуги + Шапка)"]'); ?>
                                       </div>

                                   </div><!--services_callback-->
                               </div><!--services_container-->
                           </div><!--services_tabs services_tab-3-->
                           <div class="services_tabs-item trade" id="services_tab-4" style="background-image: url('<?php print the_field('tab_background_4') ?>') ">
                               <div class="services_container">
                                   <div class="services_content">
                                       <p class="services_title"> <?php print the_field('tab_4_content_1') ?></p>
                                       <p class="services_title"> <?php print the_field('tab_4_content_2') ?></p>
                                   </div><!--services_content-->
                                   <div class="services_callback">
                                       <h4 class="trade_services_title"><?php print the_field('tab_4_col_0_title') ?></h4>
                                       <div class="row">
                                           <div class="col-lg-5 col-sm-6 col-12 trade_services">
                                               <h6 class="trade_services_title"><?php print the_field('tab_4_col_1_title') ?></h6>
                                               <div class="trade_services_content">
                                                   <?php print the_field('tab_4_col_1_text') ?>

                                               </div>
                                           </div><!--delivery_services-->
                                           <div class="col-lg-2 d-none d-lg-block"><div class="vertical_line"></div></div>
                                           <div class="col-lg-5 col-sm-6 col-12 trade_services">
                                               <h6 class="trade_services_title"><?php print the_field('tab_4_col_2_title') ?></h6>
                                               <div class="trade_services_content">
                                                   <?php print the_field('tab_4_col_2_text') ?>
                                               </div>
                                           </div><!--delivery_services-->
                                       </div><!--row-->
                                       <!--<a href="" class="trade_button">Оформить</a>-->
                                   </div><!--services_callback-->
                               </div><!--services_container-->
                           </div><!--services_tabs services_tab-4-->
                           <div class="services_tabs-item condition_care" id="services_tab-5" style="background-image: url('<?php print the_field('tab_background_5') ?>') ">
                               <div class="services_container">
                                   <div class="services_content">
                                       <h4 class="services_content_title"><?php print the_field('tab_5_content_1') ?></h4>
                                       <h4 class="services_content_title"><?php print the_field('tab_5_content_2') ?></h4>
                                   </div><!--services_content-->
                                   <div class="services_callback">
                                       <div class="services_callback_title">
                                           <?php print the_field('tab_5_form_title') ?>
                                       </div><!--services_callback_title-->
                                       <div class="services_callback_form">
                                           <?php echo do_shortcode('[contact-form-7 id="493" title="Обратный звонок.(Наши услуги + Шапка)"]'); ?>
                                       </div>
                                   </div><!--services_callback-->
                               </div><!--services_container-->
                           </div><!--services_tabs services_tab-5-->
                       </div><!--services_tabs-->

               </div><!--services_tabs-->
           </div> <!--container-->
        </section><!--services_section-->
    </article><!--services_page-->

<?php get_footer(); ?>