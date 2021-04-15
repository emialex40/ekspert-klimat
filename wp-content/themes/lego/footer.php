</main>
</div>
</div></div>

<footer class="footer_section">
<div class="container">
	<div class="row">
        <div class="col-lg-2 col-md-3 col-12 footer_menu_block">
<!--            Выводится меню с админки Заголовок и список должны быть ссылками-->
            <a href="https://ekspert-klimat.ru/kontakty/"><h4 class="footer_title">О компании</h4></a>
            <div class="footer_menu_list d-none d-md-block">
                <?php
                if ( has_nav_menu( 'about_company_menu' ) ) {
                    wp_nav_menu( array(
                        'theme_location'  => 'about_company_menu',
                        'menu_class'      => 'about_company_menu',
                        'container'       => '',
                        'container_class' => '',
                        'menu_id'         => 'about_company_menu',
                        'walker'          => new Main_Submenu_Class()
                    ) );
                }
                ?>
            </div></div>
        <div class="col-lg-4 col-md-3 col-12 footer_menu_block">
            <a href="https://ekspert-klimat.ru/faq-chastye-voprosy/"><h4 class="footer_title">Сервис и поддержка</h4></a>
            <div class="footer_menu_list d-none d-md-block">
                <?php
                if ( has_nav_menu( 'services_company_menu' ) ) {
                    wp_nav_menu( array(
                        'theme_location'  => 'services_company_menu',
                        'menu_class'      => 'services_company_menu_func',
                        'container'       => '',
                        'container_class' => '',
                        'menu_id'         => 'services_company_menu_func',
                        'walker'          => new Main_Submenu_Class()
                    ) );
                }
                ?>
            </div></div>
<!--        <div class="offset-md-2 vertikal_line"></div>-->
        <div class="col-md-6 col-12 footer_contact_block">
           <div class="container justify-content-center">
               <a href="#"><h4 class="footer_title">Наши контакты</h4></a>
               <div class="footer_social_list d-none d-md-block">
                   <?php
                   if ( has_nav_menu( 'contact_company_menu' ) ) {
                       wp_nav_menu( array(
                           'theme_location'  => 'contact_company_menu',
                           'menu_class'      => 'contact_company_menu_func',
                           'container'       => '',
                           'container_class' => '',
                           'menu_id'         => 'contact_company_menu_func',
                           'walker'          => new Main_Submenu_Class()
                       ) );
                   }
                   ?>
                   <!--<a href="mailto:ekspert-klimat@mail.ru" class="footer_email"><i class="fal fa-envelope"></i>ekspert-klimat@mail.ru</a>
                   <a href="https://goo.gl/maps/M6ncaDJ3CXz3yVK59" class="footer_address" target="_blank"><i class="fal fa-map-marker-alt"></i>Россия, г.Керчь<br>ул. Козлова, 19</a>-->
               </div>
           </div>
        </div>
        <div class="col-auto footer_social_block">
            <?php dynamic_sidebar( 'social_icon_footer' ); ?>
         <!--   <a href="#vk" id="icon-vk"><img src="/wp-content/uploads/2020/02/vk-e1580656234147.png" alt="vk.png"></a><a href="#instagram" id="icon-instagram"><img
                        src="/wp-content/uploads/2020/02/instagram.png"
                        alt="insagram"></a>-->
        </div>
	</div>
    <div class="row d-block d-md-none copyright_block">
        <div class="container">
            <div class="col-12">
                <p><i class="far fa-copyright"></i>&nbsp;Эксперт Климат</p>
            </div>
        </div>
    </div>
</div>
</footer>
<div class="call-back-popup" id="call-back-popup" style="display: none;">
    <p>Звоните по телефону <b>+ 7 (978) 09-00-150</b> или заполните форму</p>
    <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="493" title="Обратный звонок.(Наши услуги + Шапка)"]'); ?>
    </div>
</div>
<!--HEADER MOBILE MENU ON -->
<div class="mobile_menu ">
<?php
					    if ( has_nav_menu( 'header_menu' ) ) {
					    wp_nav_menu( array(
					    'theme_location' 	=> 'header_menu',
					    'menu_class' 	 	=> 'header_menu_mob',
					    'container'		 	=> '',
					    'container_class' 	=> '',
						'menu_id'         => 'header_menu_mob',
					    'walker' 			=> new Main_Submenu_Class()));
					    }
					    ?>
</div>
<div class="bg "></div>
<!--HEADER MOBILE MENU OFF -->
<script>
var ajax_web_url = '<?php echo admin_url('admin-ajax.php', 'relative') ?>';   
</script>


<?php wp_footer(); ?>
</body>
</html>