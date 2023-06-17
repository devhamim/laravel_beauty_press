 <section class="s-slider-area">
     <div class="s-slider-bg fix" style="background-image:url({{ get_setting('banner_image_back') }})">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="slider-content text-center mt-145">
                         <h2 data-animation="fadeInUpS" data-delay=".3s" class=""
                             style="animation-delay: 0.3s;color:{{ get_setting('banner_color_1') }}">
                             {{ get_setting('banner_text_header') }}
                         </h2>
                         <p data-animation="fadeInUpS" data-delay=".6s" class=""
                             style="animation-delay: 0.6s; color:{{ get_setting('banner_color_2') }}">
                             {{ get_setting('banner_text_bottom') }}
                         </p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="slider-golve">
             <img src="{{ asset(get_setting('banner_image')) }}" class="rotateme" alt="">
         </div>

     </div>
 </section>
