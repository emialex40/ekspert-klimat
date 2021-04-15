<?php
/*
Template Name: Страница с калькулятором
*/
?>
<?php get_header(); ?>
    <article class="calculator_page">
        <h2 class="h3 front_page_title">Калькулятор</h2><!--front_page_title-->
        <section class="calculator_section">
           <div class="container">
                   <div id="calculator_tabs" class="calculator_tabs">
                       <ul class="calculator_tabs-nav">
                           <li>Мощность кондиционера</li>
                       </ul><!--calculator_tabs-->

                       <div class="calculator_tabs-items">
                           <div class="calculator_tabs-item air_conditioner_power" id="calculator_tab-1"  style="background-image: url('<?php print bloginfo("template_url") ?>/images/temp/calculator_bg.jpg') ">
                               <div class="calculator_container">
                                   <h1 class="calculator_title">Расчет мощности кондиционера</h1>
                                   <div class="air_conditioner_power_calculator_table">
                                       <div class="air_conditioner_power_calculator_string">
                                           <h6 class="calculator_parameter_header">Площадь помещения (м2)</h6>
                                           <input type="number" class="calculator_parameter_input room_square" placeholder="42">

                                       </div><!--air_conditioner_power_calculator_string-->

                                       <div class="air_conditioner_power_calculator_string">
                                           <h6 class="calculator_parameter_header">Высота потолков (м)</h6>
                                           <select class="calculator_parameter_input_select room_height">
                                               <option value="1">до 2,5м</option>
                                               <option value="1.25">от 2,5м до 3,2м</option>
                                               <option value="1.5">больше 3,2м</option>
                                           </select>
                                       </div><!--air_conditioner_power_calculator_string-->

                                       <div class="air_conditioner_power_calculator_string">
                                           <h6 class="calculator_parameter_header">Количество людей в помещении</h6>
                                           <select class="calculator_parameter_input_select room_people_quantity">
                                               <option value="1">до 4 человек</option>
                                               <option value="1.1">от 4-8 человек</option>
                                               <option value="1.2">от 8-12 человек</option>
                                               <option value="1.5">от 12-20 человек</option>
                                               <option value="1.8">от 20-40 человек</option>
                                               <option value="2">от 40-80 человек</option>
                                               <option value="2.2">больше 80 человек</option>
                                           </select>
                                       </div><!--air_conditioner_power_calculator_string-->

                                   </div><!--air_conditioner_power_calculator_table-->
                                   <button class="link_button_sm calculate_button">Рассчитать</button>
                               </div><!--calculator_container-->
                           </div><!--calculator_tabs calculator_tab-1-->
                       </div><!--calculator_tabs-->

               </div><!--calculator_tabs-->
           </div> <!--container-->
        </section><!--calculator_section-->
    </article><!--calculator_page-->

<?php get_footer(); ?>