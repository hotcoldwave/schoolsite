<?php get_header(); ?>
<script src='https://pos.gosuslugi.ru/bin/script.min.js'></script> 
<script>
(function(){
  "use strict";function ownKeys(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);if(t)o=o.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});n.push.apply(n,o)}return n}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(n),true).forEach(function(t){_defineProperty(e,t,n[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(n));else ownKeys(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}function _defineProperty(e,t,n){if(t in e)Object.defineProperty(e,t,{value:n,enumerable:true,configurable:true,writable:true});else e[t]=n;return e}var POS_PREFIX_23="--pos-banner-fluid-23__",posOptionsInitialBanner23={background:"#ffffff","grid-template-columns":"100%","grid-template-rows":"262px auto","max-width":"100%","text-font-size":"20px","text-margin":"0 0 24px 0","button-wrap-max-width":"100%","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/18/banner-fluid-bg-18-2.svg')","bg-url-position":"right bottom","content-padding":"26px 24px 24px","content-grid-row":"0","logo-wrap-padding":"16px 12px 12px","logo-width":"65px","logo-wrap-top":"0","logo-wrap-left":"0","slogan-font-size":"12px"},setStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_23;Object.keys(e).forEach(function(o){t.style.setProperty(n+o,e[o])})},removeStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_23;Object.keys(e).forEach(function(e){t.style.removeProperty(n+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner23),n=document.getElementById("js-show-iframe-wrapper"),o=n?n.offsetWidth:document.body.offsetWidth;if(o>340)t["button-wrap-max-width"]="209px";if(o>482)t["content-padding"]="24px",t["text-font-size"]="24px";if(o>568)t["grid-template-columns"]="1fr 292px",t["grid-template-rows"]="100%",t["content-grid-row"]="1",t["content-padding"]="32px 24px",t["bg-url-position"]="calc(100% + 35px) bottom";if(o>610)t["bg-url-position"]="calc(100% + 12px) bottom";if(o>726)t["bg-url-position"]="right bottom";if(o>783)t["grid-template-columns"]="1fr 390px";if(o>820)t["grid-template-columns"]="1fr 420px",t["bg-url-position"]="right bottom";if(o>1098)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/18/banner-fluid-bg-18-3.svg')",t["bg-url-position"]="calc(100% + 55px) bottom",t["grid-template-columns"]="1fr 557px",t["text-font-size"]="32px",t["content-padding"]="32px 32px 32px 50px",t["logo-width"]="78px",t["slogan-font-size"]="15px",t["logo-wrap-padding"]="20px 16px 16px";if(o>1422)t["max-width"]="1422px",t["grid-template-columns"]="1fr 720px",t["content-padding"]="32px 48px 32px 160px",t.background="linear-gradient(90deg, #ffffff 50%, #f8efec 50%)";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner23);window.removeEventListener("resize",changePosBannerOnResize),removeStyles(t,e)};
})()
</script>

<div class="container-fluid">

  <div id='js-show-iframe-wrapper'>
    <div class='pos-banner-fluid bf-23'>
      <div class='bf-23__decor'>
        <div class='bf-23__logo-wrap'>
          <img
            class='bf-23__logo'
            src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg'
            alt='Госуслуги'
          />
          <div class='bf-23__slogan'>Решаем вместе</div>
        </div>
      </div>
      <div class='bf-23__content'>
        <div class='bf-23__text'>
          Есть предложения по организации учебного процесса или знаете, как сделать школу лучше?
        </div>

        <div class='bf-23__bottom-wrap'>
          <div class='bf-23__btn-wrap'>
            <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
            <button
              class='pos-banner-btn_2'
              type='button'
            >Написать о проблеме
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>Widget("https://pos.gosuslugi.ru/form", 262465)</script>

  <div class="row align-content-center">
    <div class="col-12 col-lg-9">
      <div class="">
      <!-- <div class="col-12 order-1 col-xl-6">
            <img
              src="<?php echo get_theme_file_uri('/images/director.jpg'); ?>"
              alt="Фотография директора школы"
              class="img-fluid rounded main__director-photo"
            />
      </div> -->

        <div class="col-12 order-2 ">
          <img
              src="<?php echo get_theme_file_uri('/images/director.jpg'); ?>"
              alt="Фотография директора школы"
              class="img-fluid rounded main__director-photo"
            />
          <blockquote class="citation citation-success">
            <div class="citation-body">
            <p>Дорогие гости нашего сайта, я рада приветствовать вас! Наша школа является единственным образовательным учреждением в России, предоставляющим услуги по  углубленному изучению языка хинди, и в этом ее уникальность. В условиях всестороннего развития российско-индийских международных отношений знание языка хинди все больше будет востребовано как в экономической, так и в культурной сфере и предоставит своим владельцам перспективы выгодного трудоустройства.</p> 
            <p>Наши выпускники – результат нашего труда! Образованные, с активной гражданской позицией, они претворяют в жизнь все, о чем мечтали вместе с нами, здесь, в стенах родной школы. Мы гордимся их успехами и победами!</p>
            <p>С нашей историей, достижениями, инновационными проектами можно ознакомиться более подробно на страницах школьного сайта!</p> 
            </div>
            <div class="citation-footer">
              <cite>Елена Николаевна Шубина, директор школы.</cite>
            </div>
          </blockquote>
        </div>
    
        </div>
        <div class="row mt-3">
          <div class="col-12 pl-4">
            <?php get_template_part('includes/section', 'frontcontent'); ?>
          </div>
      </div>
    </div>

      <?php get_sidebar(); ?>
      
  </div>
</div>

<?php get_footer();
?>
