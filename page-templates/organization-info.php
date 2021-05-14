<?php
/*
Template Name: Новые Сведения об ОО
*/
?>

<?php get_header(); ?>

<div class="row align-content-center">
    <div class="col-12 col-lg-9 text-justify px-5">
      <?php get_template_part("includes/section", "pagecontent"); ?>        

  <p>
  <div class="accordion accordion-requirements" id="accordionRequirements">

  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
        Основные сведения <i class="fas fa-school"></i>
        </button>
      </h2>
    </div>

    <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.1.pdf"
              ); ?>"">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="<?php echo site_url(
               "/about-us/obshhie-svedeniya/"
              ); ?>">Полное и сокращенное наименование организации, дата создания, учредители</a>
            </li>
            <li>
            <a href="<?php echo site_url(
               "/kontakty/"
              ); ?>"> Место нахождения, контактные телефоны, адреса электронной почты</a>
            </li> 
            <li>
            <a href="<?php echo site_url(
               "/usloviya/rezhim-raboty/"
              ); ?>"> Режим и график работы</a>
            </li>
            <li>
              <a href="<?php echo site_url(
               "/about-us/obshhie-svedeniya/"
              ); ?>"> Места осуществления образовательной деятельности</a>
            </li>
            <li>
              Представительства и филиалы <i>(Представительств и филиалов нет)</i> 
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-2">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
          Структура и органы управления
        </button>
      </h2>
    </div>
    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.2.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
            <a href="<?php echo site_url(
               "/about-us/struktura-i-organy-upravleniya-organizacziej/"
              ); ?>">Структура образовательной организации</a>
            </li>
            <li>
            <a href="<?php echo site_url(
               "/about-us/strukturnye-podrazdeleniya/"
              ); ?>">Структурные подразделения</a>
            </li>
            <li>
            <a href="<?php echo site_url(
               "/about-us/struktura-i-organy-upravleniya-organizacziej/"
              ); ?>">Органы управления образовательной организацией</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-3">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
        Документы
        </button>
      </h2>
    </div>
    <div id="collapse-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.3.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Устав образовательной организации</a>
            </li>
            <li>
              <a href="">Свидетельство о государственной аккредитации</a>
            </li>
            <li>
              <a href="">Правила внутреннего распорядка обучающихся</a>
            </li>
            <li>
              <a href="">Правила внутреннего трудового распорядка</a>
            </li>
            <li>
              <a href="">Коллективный договор</a>
            </li>
            <li>
              <a href="">Отчет о результатах самообследования</a>
            </li>
            <li>
              <a href="">Предписания органов, осуществляющих государственный контроль (надзор) в сфере образования, отчеты об исполнении</a>
            </li>
            <li>
              <a href="">Правила приема обучающихся</a>
            </li>
            <li>
              <a href="">Режим занятий обучающихся</a>
            </li>
            <li>
              <a href="">Формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся</a>
            </li>
            <li>
              <a href="">Порядок и основания перевода, отчисления обучающихся</a>
            </li>
            <li>
              <a href="">Порядок оформления отношений между образовательной организацией, обучающимися, родителями</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-4">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
        Образование
        </button>
      </h2>
    </div>
    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.4.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Реализуемые образовательные программы</a>
            </li>
            <li>
              <a href="">Реализуемые профессиональные образовательные программы</a>
            </li>
            <li>
              <a href="">Результаты приема по каждой профессии, специальности среднего профессионального образования</a>
            </li>
            <li>
              <a href="">Численность обучающихся</a>
            </li>
            <li>
              <a href="">Лицензия на осуществление образовательной деятельности</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-5">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
        Образовательные стандарты
        </button>
      </h2>
    </div>
    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.5.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Применяемые федеральные государственные образовательные стандарты</a>
            </li>
            <li>
              <a href="">Утвержденные образовательные стандарты</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-6">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
        Руководство. Педагогический (научно-педагогический) состав
        </button>
      </h2>
    </div>
    <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.6.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Руководитель образовательной организации</a>
            </li>
            <li>
              <a href="">Заместители руководителя</a>
            </li>
            <li>
              <a href="">Руководители филиалов, представительств</a>
            </li>
            <li>
              <a href="">Персональный состав педагогических работников</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-7">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false" aria-controls="collapseFo-7">
        Материально-техническое обеспечение и оснащенность образовательного процесса
        </button>
      </h2>
    </div>
    <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.7.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Оборудованные учебные кабинеты</a>
            </li>
            <li>
              <a href="">Объекты для проведения практических занятий</a>
            </li>
            <li>
              <a href="">Библиотеки</a>
            </li>
            <li>
              <a href="">Объекты спорта</a>
            </li>
            <li>
              <a href="">Средства обучения и воспитания</a>
            </li>
            <li>
              <a href="">Условия питания обучающихся</a>
            </li>
            <li>
              <a href="">Условия охраны здоровья обучающихся</a>
            </li>
            <li>
              <a href="">Доступ к информационным системам и информационно-телекоммуникационным сетям</a>
            </li>
            <li>
              <a href="">Электронные образовательные ресурсы</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-8">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
        Стипендии и меры поддержки обучающихся
        </button>
      </h2>
    </div>
    <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.8.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Стипендии, меры социальной и иной поддержки обучающихся</a>
            </li>
            <li>
              <a href="">Трудоустройство выпускников</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-9">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
        Платные образовательные услуги
        </button>
      </h2>
    </div>
    <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.9.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Порядок и стоимость оказания платных образовательных услуг</a>
            </li>
            <li>
              <a href="">Размер платы, взимаемой с родителей за присмотр и уход за детьми, осваивающими образовательные программы дошкольного образования</a>
            </li>
            <li>
              <a href="">Размер платы, взимаемой с родителей за содержание детей в образовательной организации, если в такой организации созданы условия для проживания обучающихся в интернате</a>
            </li>
            <li>
              <a href="">Размер платы, взимаемой с родителей за осуществление присмотра и ухода за детьми в группах продленного дня</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-10">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
        Финансово-хозяйственная деятельность
        </button>
      </h2>
    </div>
    <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.10.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Объем образовательной деятельности за счет бюджета</a>
            </li>
            <li>
              <a href="">Объем образовательной деятельности по договорам об оказании платных образовательных услуг</a>
            </li>
            <li>
              <a href="">Поступление финансовых и материальных средств по итогам года</a>
            </li>
            <li>
              <a href="">Расходование финансовых и материальных средств по итогам года</a>
            </li>
            <li>
              <a href="">Копия плана финансово-хозяйственной деятельности</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-11">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
        Вакантные места для приема (перевода)
        </button>
      </h2>
    </div>
    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.11.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Количество вакантных мест для приема (перевода) обучающихся</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-12">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
        Доступная среда
        </button>
      </h2>
    </div>
    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.12.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Специально оборудованные учебные кабинеты</a>
            </li>
            <li>
              <a href="">Специально оборудованные объекты для проведения практических занятий</a>
            </li>
            <li>
              <a href="">Специально оборудованные библиотеки</a>
            </li>
            <li>
              <a href="">Специально оборудованные спортивные объекты</a>
            </li>
            <li>
              <a href="">Специально оборудованные средства обучения и воспитания</a>
            </li>
            <li>
              <a href="">Беспрепятственный доступ в здание</a>
            </li>
            <li>
              <a href="">Специальные условия питания</a>
            </li>
            <li>
              <a href="">Доступ к информационным системам и информационно-телекоммуникационным сетям</a>
            </li>
            <li>
              <a href="">Специальные технические средства обучения</a>
            </li>
            <li>
              <a href="">Беспрепятственный доступ в общежитие, интернат</a>
            </li>
            <li>
              <a href="">Количество специально оборудованных жилых помещений в общежитии, интернате</a>
            </li>

          </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading-13">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-13" aria-expanded="false" aria-controls="collapse-13">
        Международное сотрудничество
        </button>
      </h2>
    </div>
    <div id="collapse-13" class="collapse" aria-labelledby="heading-13" data-parent="#accordionRequirements">
      <div class="card-body">
      <p><a href="<?php echo site_url(
               "/wp-content/uploads/2021/04/pr_831_3.13.pdf"
              ); ?>">Требования к контенту раздела</a></p>
      <ul>
            <li>
              <a href="">Заключенные и планируемые договора с иностранными, международными организациями по вопросам образования. Международная аккредитация образовательных программ</a>
            </li>
          </ul>
      </div>
    </div>
  </div>

</div>
</p>

    <p class="h5 my-4"> Требования Федерального законодательства (вставить файлы или ссылки): </p>
     <ul>
     <li>Статья 29 Федерального закона от 29.12.2012 № 273-ФЗ «Об образовании в Российской
Федерации»</li>
     <li>Постановление Правительства РФ от 10.07.2013 N 582 (ред. от 11.07.2020) «Об утверждении Правил размещения на официальном сайте образовательной организации в информационно-телекоммуникационной сети «Интернет» и обновления информации об образовательной организации»</li>
     <li>Приказ Рособрнадзора от 14.08.2020 № 831 «Об утверждении Требований к структуре официального сайта образовательной организации в информационно-телекоммуникационной сети "Интернет" и формату представления информации» </li>
     </ul>

    </div>
    <div class="d-none d-lg-block col-3">
      <div class="p-3 mt-1 border border-secondary">
      <?php get_sidebar(); ?>
      </div> 
    </div>
  </div>

</div>

<?php get_footer();
?>