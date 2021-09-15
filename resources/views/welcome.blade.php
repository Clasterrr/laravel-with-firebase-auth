<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon_io4/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon_io4/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon_io4/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicon_io4/site.webmanifest"> -->


        <!-- <link rel="icon" type="image/png" href="/Users/danielking/Desktop/logo\(dark\).png"> -->
        <link rel="icon" href="/assets/logo_cut2.png"/>
        
        <link rel="stylesheet" href="adaptive.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/css/uikit.min.css" />
        



        <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit-icons.min.js"></script>
        <title>MCEP</title>

    </head>
    <body>
        <article>
            <header>
                
                
                <div style="display: block; " class="uk-inline">
                    <div id="test-target" class="ed-start-block  uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('assets/header-img.png');">
                        <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="target: #test-target; y: 100,0; easing: -1" >
                            <h1 class="uk-text-bolder">{{__('home.welcome.title')}}</h1>
                            <p class="uk-text-bolder" style="font-size: larger;">{{__('home.welcome.subtitle')}}</p>
                        </div>

                    </div>
                    <hr style="width: 100%; margin: 0 auto; height: 3px !important" class="ed-style-hr">
                    @include('welcome_view.nav')  
                </div>    
                
                

            </header>
            
            <div id="aboutUs" class=" ed-center-hr">
                <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>

            <div  class="toTop-div">
                <div class="toTop-div-lang">
                    <a class="toTop-btn" href=""><span uk-icon="icon: world; ratio: 1.5"></span></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="/ru">🇷🇺 RU</a></li>
                            <li><a href="/ua">🇺🇦 UA</a></li>
                            <li><a href="/en">🇬🇧 EN</a></li>
                            <li><a href="/pl">🇵🇱 PL</a></li>
                        </ul>
                        
                    </div>
                    
                </div>
                <div>
                    <a href="#" class="toTop-btn uk-text-bolder"uk-scroll><span uk-icon="icon: chevron-up; ratio: 1.5"></span></a>
                </div>
                
                
            </div>

            <div class="ed-medium-margin ed-main-content">
                <!-- About us-->
                <div class="ed-corner uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="ed-left-media-container uk-card-media-left uk-cover-container" >
                        <img class="ed-about-img" src="/assets/img1.jpg" alt="" uk-cover>
                        <canvas width="700" height="500"></canvas>
                    </div>
                    <div class="ed-about-block">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title uk-text-bolder">{{__('home.aboutUs.title')}}</h3>
                            <p>{{__('home.aboutUs.content')}}</p>
                        </div>
                    </div>
                </div>

                <!-- <hr class="ed-style-hr ed-global-divider ed-center-content "> -->
                <div id="programs" class=" ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
                </div>

                <!--  Programs -->
                <div  class="ed-center ed-corner uk-section ed-white uk-preserve-color">
                    <div class="" style="margin: auto; max-width: 1600px; padding: 0px 40px">

                        <div class="uk-panel uk-light uk-margin-medium" style="margin-bottom: 80px; text-align: center;">
                            <h3 style="font-size:xx-large" class="ed-dark-text uk-text-bolder ">{{__('home.programs.title')}}</h3>
                        </div>

                        <!-- <h4 class="uk-text-bolder" style="font-size: x-large; text-align: center;">{{__('home.programs.subtitle')}}</h4> -->
                        <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
                            <div>
                                <div class="ed-corner ed-card-lightblue uk-card-hover ed-border-lightblue uk-card uk-card-default uk-card-body">
                                    <a class="uk-link-reset" href="#fst-program" uk-scroll>
                                    <!-- <div class="uk-card-badge uk-label">Badge</div> -->

                                    <h3 class="uk-card-title">{{__('home.programs.fst-program.title')}}</h3>
                                    <p>{{__('home.programs.fst-program.content')}}</p>
                                    </a>
                                </div>
                            </div>
                            <div >
                                <div href="#" class="ed-corner ed-card-green uk-card-hover ed-border-green uk-card uk-card-default uk-card-body">
                                    <a class="uk-link-reset" href="#snd-Program" uk-scroll>
                                    <!-- <div class="uk-card-badge uk-label">Badge</div> -->

                                    <h3 class="uk-card-title">{{__('home.programs.snd-program.title')}}</h3>

                                    <p>{{__('home.programs.snd-program.content')}}</p>
                                    </a>
                                </div> 
                                
                            </div>
                            <div >
                                <div href="#" class="ed-corner ed-border-orange ed-card-orange uk-card-hover uk-card uk-card-default uk-card-body">
                                    <a class="uk-link-reset" href="" >
                                    <!-- <div class="uk-card-badge uk-label">Badge</div> -->

                                    <h3 class="uk-card-title">{{__('home.programs.thd-program.title')}}</h3>

                                    <p>{{__('home.programs.thd-program.content')}}</p>
                                    </a>
                                </div> 
                                
                            </div>
                            <div >
                                <div href="#" class="ed-corner ed-border-yellow ed-card-orange uk-card-hover uk-card uk-card-default uk-card-body">
                                    <a class="uk-link-reset" href="#thd-Program" uk-scroll>
                                    <!-- <div class="uk-card-badge uk-label">Badge</div> -->

                                    <h3 class="uk-card-title">{{__('home.programs.fth-program.title')}}</h3>

                                    <p>{{__('home.programs.fth-program.content')}}</p>
                                    </a>
                                </div> 
                                
                            </div>
                        </div>

                    </div>
                </div>
        
            </div>

            <!-- Divider -->
            <div class=" ed-center-hr">
                <hr class="ed-style-vertical-hr">
            </div>

            <!-- First program -->

            <div id="fst-program" class="ed-fst-program">

                <h3 class="ed-light-text uk-text-bolder ed-largeer-title ed-title-padding-bottom">{{__('home.fst-program.title')}}</h3>

                <div style="margin-bottom: 50px">
                    <h2 class="ed-light-text uk-text-bolder" style="text-align: center; margin-bottom: 50px">{{__('home.fst-program.section_0.title')}}</h2>

                    <div class="ed-special-list">

                    

                        <div>
                            <h4>{{__('home.fst-program.section_0.subtitle')}}</h4>
                            <ul class="uk-list uk-list-disc">
                                <li>{{__('home.fst-program.section_0.list.0')}}</li>
                                <li>{{__('home.fst-program.section_0.list.1')}}</li>
                                <li>{{__('home.fst-program.section_0.list.2')}}</li>
                            </ul>
                        </div>
                    </div>  
                </div>
                    
                <div style="margin-bottom: 50px">
                    <h2 class="ed-light-text uk-text-bolder" style="text-align: center; margin-bottom: 50px">{{__('home.fst-program.section_1.title')}}</h2>
                    <div class="ed-special-list">
                    <!-- class="uk-open" -->

                        <ul uk-accordion>

                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_1.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_1.content')}}</p>
                                </div>
                            </li>
                            <li >
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_2.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_2.content')}}</p>
                                </div>
                            </li>

                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_3.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_3.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_4.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_4.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_5.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_5.content')}}</p>
                                </div>
                            </li>
                            <!--  -->

                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_6.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_6.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_7.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_7.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_8.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_8.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_9.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_9.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_10.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_10.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_11.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_11.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_12.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_12.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_13.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_13.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.fst-program.section_1.professions.profession_14.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.fst-program.section_1.professions.profession_14.content')}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="ed-simple-style-vertical-hr uk-divider-vertical">

                <div style="text-align: center;">
                    <div style="margin-bottom: 50px">
                        <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">Условия</h2>
                        <h3 class="ed-light-text" >Мы предлагаем полное сопровождение студента <br>на протяжении всего периода обучения.</h3>
                    </div>
                    <div class="ed-special-list" style="width: 80%;text-align: initial;">
                        <table class="uk-table">
                            <tbody>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Гарантия поступления в наше учебное заведение;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в получении визы родителям;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Гарантированное трудоустройство по специальности по окончанию обучения;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в получении студенческой визы;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Подготовка документов для консульства;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в выборе профессии;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Подготовка документов для зачисления;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в подборе жилья на период обучения;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Предоставление стартового пакета польского оператора;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в получении загранпаспорта;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Оформление прописки студента;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Ориентационная программа по адаптации в Польше;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Контроль студентов во время обучения (прогулы, успеваемость, посещение занятий);</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Определение необходимой нагрузки для изучения языка;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Карта побыта и легализация;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в организации визита родителей к детям;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Поддержка студента в Польше на период всего обучения;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в трудоустройстве во время обучения;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в поиске жилья в крупном городе Жешув;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Курьерская доставка оригиналов документов из учебного заведения;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Выдача документа от учебного заведения, который свидетельствует о резервации и зачислении;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Помощь в открытие банковского счета;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Ваш личный менеджер с вами на связи 24/7 в любом удобном для вас мессенджере;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Прямой контакт с опекуном;</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Юридическая информационная поддержка;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Гарантированное трудоустройство по специальности по окончанию обучения.</td>
                                </tr>
                                <tr>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Гарантия поступления в наше учебное заведение;</td>
                                    <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>Гарантия поступления в наше учебное заведение;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- <hr class="ed-simple-style-vertical-hr uk-divider-vertical">

                <div class="ed-special-list " style="text-align: center;">
                    <h3 class="uk-text-bolder" style="font-size: xx-large;">Стоимость данного пакета услуг составляет: 900Є за весь период обучения</h3>

                    <h3>Оплата разбивается на <a class="uk-link-heading" href="#payment-in" uk-scroll><span class="uk-label">части</span> </a></h3>
                </div> -->

                

                <!-- column-rule: 1px solid #e5e5e5; -->

                <!-- Так же интересно -->
                <!-- <div class="ed-centered-div">

                    <h3 class="ed-light-text uk-text-bolder" style="font-size: xx-large;  margin-bottom: 100px">{{__('home.fst-program.section_2.title')}}</h3>


                    <div class="uk-column-1-3" style="column-rule: 1px solid #e5e5e5; column-gap: 50px !important;">
                        

                        <div>
                            <h3 class="ed-light-text" style=" font-weight: bold">{{__('home.fst-program.section_2.blocks.block_1.title')}}</h3>
                            <p class="ed-light-text">{{__('home.fst-program.section_2.blocks.block_1.content')}}</p>
                        </div>

                        <div style="text-align: center;">
                            <h3 class="ed-light-text" style="font-weight: bold">{{__('home.fst-program.section_2.blocks.block_2.title')}}</h3>
                            <p class="ed-light-text">{{__('home.fst-program.section_2.blocks.block_2.content')}}</p>
                        </div>

                        <div style="text-align: center;">
                            <h3 class="ed-light-text" style="font-weight: bold">{{__('home.fst-program.section_2.blocks.block_3.title')}}</h3>
                            <p class="ed-light-text">{{__('home.fst-program.section_2.blocks.block_3.content')}}</p>
                        </div>
                    </div>
                </div> -->

                <!-- <hr class="ed-simple-style-vertical-hr uk-divider-vertical"> -->

                <!-- {{__('home.bot_section.title')}} -->

                <hr class="ed-simple-style-vertical-hr uk-divider-vertical">
                <!-- Bot button -->
                <div class="ed-centered-div">
                    <div style="margin-bottom: 50px">
                            <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">{{__('home.bot_section.title')}}</h2>
                            <h3 class="ed-light-text" >{{__('home.bot_section.subtitle')}}</h3>
                    </div>

                    <div>
                        <a href="https://t.me/EduBitTestBot" class="ed-simple-link ed-bot-button uk-text-bolder">
                            <span class="uk-icon" rel="nofollow" title="Telegram" style="padding-right: 5px;">
                                <svg width="22" height="44" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-svg="telegram">
                                    <path d="m21.005697,5.550602l-2.74611,12.950637c-0.207176,0.914021 -0.74748,1.141452 -1.515294,0.710964l-4.184146,-3.083356l-2.018885,1.941824c-0.223392,0.223392 -0.775524,0.536686 -0.751124,-0.033221l0.21082,-3.817906l7.754913,-7.007478c0.337166,-0.300579 -0.073103,-0.467156 -0.524051,-0.16655l-9.586957,6.036571l-4.127295,-1.291786c-0.897769,-0.280315 -0.913985,-0.897805 0.186841,-1.328373l16.143532,-6.219364c0.747399,-0.280279 1.401485,0.166506 1.157757,1.308038z"></path>
                                </svg>
                            </span>
                            <span id="desk-button">
                                {{__('home.bot_section.buttons.telegram_button.title')}}
                            </span>
                            <span id="mobile-button">
                                
                            </span>
                            

                        </a>
                    </div>
                </div>
<!-- 
                <div class=" ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-simple-hr">
                </div> -->
            </div>

            <!-- Vertical Divider -->

            <div class=" ed-center-hr">
                    <!-- <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr"> -->
                    <hr class="ed-style-vertical-hr">
            </div>

            <!-- Second program -->

            <div id="snd-Program" class="ed-snd-program">
                <h3 class="ed-light-text uk-text-bolder ed-largeer-title ed-title-padding-bottom">{{__('home.snd-program.title')}}</h3>
                
                
                <div style="margin-bottom: 50px">
                    <h2 class="ed-light-text uk-text-bolder" style="text-align: center; margin-bottom: 50px">{{__('home.snd-program.section_0.title')}}</h2>

                    <div class="ed-special-list">

                    

                        <div>
                            <h4>{{__('home.snd-program.section_0.subtitle')}}</h4>
                            <ul class="uk-list uk-list-disc">
                                <li>{{__('home.snd-program.section_0.list.0')}}</li>
                                <li>{{__('home.snd-program.section_0.list.1')}}</li>
                                <li>{{__('home.snd-program.section_0.list.2')}}</li>
                                <li>{{__('home.snd-program.section_0.list.3')}}</li>
                            </ul>
                        </div>
                    </div>  
                </div>

                <div style="margin-bottom: 50px">
                <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">{{__('home.snd-program.section_1.title')}}</h3>
                    <div class="ed-special-list">
                        
                    

                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_1.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_1.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_2.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_2.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_3.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_3.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_4.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_4.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_5.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_5.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_6.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_6.content')}}</p>
                                </div>
                            </li>
                            <!--  -->
                            <!--  -->
                            <!--  -->

                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_7.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_7.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_8.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_8.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_9.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_9.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_10.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_10.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_11.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_11.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_12.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_12.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_13.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_13.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_14.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_14.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_15.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_15.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_16.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_16.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_17.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_17.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_18.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_18.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_19.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_19.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_20.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_20.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_21.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_21.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_22.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_22.content')}}</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">{{__('home.snd-program.section_1.professions.profession_23.title')}}</a>
                                <div class="uk-accordion-content">
                                    <p>{{__('home.snd-program.section_1.professions.profession_23.content')}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- <hr class="ed-simple-style-vertical-hr uk-divider-vertical">

                <div class=" " style="margin: 0 auto; width: 40%">
                    <div style="margin-bottom: 100px; text-align: center;">
                        <h2 class="ed-light-text uk-text-bolder" style="font-size: xx-large; text-align: center;">СТОИМОСТЬ ОБУЧЕНИЯ</h2>
                        <h3 class="ed-light-text" >Срок обучения длится: 3 года (шесть семестров). <br>Возможна оплата частями! </h3>
                    </div>

                    <table class="uk-table uk-table-middle uk-table-divider" style="width: 90%; margin: 0 auto;">
                        <thead>

                            <tr>
                                <th class="ed-bolder-text ed-larger-text ed-light-text" >Первый год</th>
                                <th class="ed-larger-text ed-light-text" style="text-align: right;">1600 €</th>
                            </tr>
                            <tr>
                                <th class="ed-bolder-text ed-larger-text ed-light-text">Второй год</th>
                                <th class="ed-larger-text ed-light-text" style="text-align: right;">1100 €</th>
                            </tr>
                            <tr>
                                <th class="ed-bolder-text ed-larger-text ed-light-text">Третий год</th>
                                <th class="ed-larger-text ed-light-text" style="text-align: right;">1100 €</th>
                            </tr>
                            
                        </thead>
                        
                    </table>
                </div> -->

                <!-- <hr class="ed-simple-style-vertical-hr uk-divider-vertical"> -->

                <!-- Bot button -->
                <!-- <div class="ed-centered-div">
                    <div style="margin-bottom: 50px">
                        <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">Условия</h2>
                        <h3 class="ed-light-text" >Все условия, что мы предлогаем находятся ниже</h3>
                    </div>

                    <div>
                        <a href="" class="ed-simple-link ed-bot-button uk-text-bolder">
                            
                            Условия

                        </a>
                    </div>
                </div> -->

                <hr class="ed-simple-style-vertical-hr uk-divider-vertical">
                <!-- Bot button -->
                <div class="ed-centered-div">
                    <div style="margin-bottom: 50px">
                            <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">{{__('home.bot_section.title')}}</h2>
                            <h3 class="ed-light-text" >{{__('home.bot_section.subtitle')}}</h3>
                    </div>

                    <div>
                        <a href="https://t.me/EduBitTestBot" class="ed-simple-link ed-bot-button uk-text-bolder">
                            <span class="uk-icon" rel="nofollow" title="Telegram" style="padding-right: 5px;">
                                <svg width="22" height="44" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-svg="telegram">
                                    <path d="m21.005697,5.550602l-2.74611,12.950637c-0.207176,0.914021 -0.74748,1.141452 -1.515294,0.710964l-4.184146,-3.083356l-2.018885,1.941824c-0.223392,0.223392 -0.775524,0.536686 -0.751124,-0.033221l0.21082,-3.817906l7.754913,-7.007478c0.337166,-0.300579 -0.073103,-0.467156 -0.524051,-0.16655l-9.586957,6.036571l-4.127295,-1.291786c-0.897769,-0.280315 -0.913985,-0.897805 0.186841,-1.328373l16.143532,-6.219364c0.747399,-0.280279 1.401485,0.166506 1.157757,1.308038z"></path>
                                </svg>
                            </span>
                            <span id="desk-button">
                                {{__('home.bot_section.buttons.telegram_button.title')}}
                            </span>
                            <span id="mobile-button">
                                
                            </span>
                            

                        </a>
                    </div>
                </div>

                <!-- Bot button -->
                <!-- <div class="ed-centered-div">
                    <div style="margin-bottom: 50px">
                            <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">{{__('home.bot_section.title')}}</h2>
                            <h3 class="ed-light-text" >{{__('home.bot_section.subtitle')}}</h3>
                    </div>

                    <div>
                        <a href="https://t.me/EduBitTestBot" class="ed-simple-link ed-bot-button uk-text-bolder">
                            <span class="uk-icon" rel="nofollow" title="Telegram" style="padding-right: 5px;">
                                <svg width="22" height="44" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-svg="telegram">
                                    <path d="m21.005697,5.550602l-2.74611,12.950637c-0.207176,0.914021 -0.74748,1.141452 -1.515294,0.710964l-4.184146,-3.083356l-2.018885,1.941824c-0.223392,0.223392 -0.775524,0.536686 -0.751124,-0.033221l0.21082,-3.817906l7.754913,-7.007478c0.337166,-0.300579 -0.073103,-0.467156 -0.524051,-0.16655l-9.586957,6.036571l-4.127295,-1.291786c-0.897769,-0.280315 -0.913985,-0.897805 0.186841,-1.328373l16.143532,-6.219364c0.747399,-0.280279 1.401485,0.166506 1.157757,1.308038z"></path>
                                </svg>
                            </span>
                            {{__('home.bot_section.buttons.telegram_button.title')}}

                        </a>
                    </div>
                </div>

                <div class=" ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-simple-hr">
                </div> -->
            </div>

            <!-- Divider -->
            <!-- <div id="payment-in" class=" ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>
            
            <div class="ed-special-list " >
                <h3 class="ed-dark-text uk-text-bolder ed-largeer-title" style="text-align: center; padding-bottom: 100px">Условия оплаты частями!</h3>
                <dl class="uk-description-list uk-description-list-divider">
                    <dt class="ed-payment-in-title">150 €</dt>
                    <dd>Первая оплата наша гарантия того, что вы будете поступать и мы начинаем оформление ваших документов и приглашение на обучение, эта сумма уже входит в стоимость за обучение</dd>

                    <dt class="ed-payment-in-title">150 €</dt>
                    <dd>Оплачиваете после получения готового приглашения на обучение и мы дальше продолжаем подготовку ваших Документов, эта сумма уже входит в стоимость за обучение</dd>

                    <dt class="ed-payment-in-title">300 €</dt>
                    <dd>После этой оплаты мы вам выдаем квитанцию, которую требуют при получении в консульстве визы, без этой квитанции визу получить невозможно, так как у вас платное обучение</dd>

                    <dt class="ed-payment-in-title">Ежемесячно</dt>
                    <dd>Далее вносите оплату каждый месяц по 450 злотых.</dd>
                </dl>
            </div> -->

            <!-- Divider -->
            <div class=" ed-center-hr">
                <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>

            <div id="thd-Program" class="ed-thd-program">
                <h3 class="ed-light-text uk-text-bolder ed-largeer-title ed-title-padding-bottom">{{__('home.fth-program.title')}}</h3>
                <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">{{__('home.fth-program.section_1.title')}}</h3>
                <div class="ed-special-list">
                    

                    <ul uk-accordion>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_1.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_1.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_2.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_2.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_3.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_3.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_4.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_4.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_5.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_5.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_6.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_6.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_7.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_7.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_8.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_8.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_9.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_9.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_10.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_10.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_11.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_11.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_12.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_12.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_13.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_13.content')}}</p>
                            </div>
                        </li>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#">{{__('home.fth-program.section_1.professions.profession_14.title')}}</a>
                            <div class="uk-accordion-content">
                                <p>{{__('home.fth-program.section_1.professions.profession_14.content')}}</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- <hr class="ed-simple-style-vertical-hr uk-divider-vertical">

                <div class=" " style="margin: 0 auto; width: 40%">
                    <div style="margin-bottom: 100px; text-align: center;">
                        <h2 class="ed-light-text uk-text-bolder" style="font-size: xx-large; text-align: center;">СТОИМОСТЬ ОБУЧЕНИЯ</h2>
                        <h3 class="ed-light-text" >Срок обучения длится: 3 года (шесть семестров). <br>Возможна оплата частями! </h3>
                    </div>

                    <table class="uk-table uk-table-middle uk-table-divider" style="width: 90%; margin: 0 auto;">
                        <thead>

                            <tr>
                                <th class="ed-bolder-text ed-larger-text ed-light-text" >Первый год</th>
                                <th class="ed-larger-text ed-light-text" style="text-align: right;">1600 €</th>
                            </tr>
                            <tr>
                                <th class="ed-bolder-text ed-larger-text ed-light-text">Второй год</th>
                                <th class="ed-larger-text ed-light-text" style="text-align: right;">1100 €</th>
                            </tr>
                            <tr>
                                <th class="ed-bolder-text ed-larger-text ed-light-text">Третий год</th>
                                <th class="ed-larger-text ed-light-text" style="text-align: right;">1100 €</th>
                            </tr>
                            
                        </thead>
                        
                    </table>
                </div> -->

                <!-- <hr class="ed-simple-style-vertical-hr uk-divider-vertical"> -->

                <!-- Bot button -->
                <!-- <div class="ed-centered-div">
                    <div style="margin-bottom: 50px">
                        <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">Условия</h2>
                        <h3 class="ed-light-text" >Все условия, что мы предлогаем находятся ниже</h3>
                    </div>

                    <div>
                        <a href="" class="ed-simple-link ed-bot-button uk-text-bolder">
                            
                            Условия

                        </a>
                    </div>
                </div> -->

                <hr class="ed-simple-style-vertical-hr uk-divider-vertical">
                <!-- Bot button -->
                <div class="ed-centered-div">
                    <div style="margin-bottom: 50px">
                            <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">{{__('home.bot_section.title')}}</h2>
                            <h3 class="ed-light-text" >{{__('home.bot_section.subtitle')}}</h3>
                    </div>

                    <div>
                        <a href="https://t.me/EduBitTestBot" class="ed-simple-link ed-bot-button uk-text-bolder">
                            <span class="uk-icon" rel="nofollow" title="Telegram" style="padding-right: 5px;">
                                <svg width="22" height="44" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-svg="telegram">
                                    <path d="m21.005697,5.550602l-2.74611,12.950637c-0.207176,0.914021 -0.74748,1.141452 -1.515294,0.710964l-4.184146,-3.083356l-2.018885,1.941824c-0.223392,0.223392 -0.775524,0.536686 -0.751124,-0.033221l0.21082,-3.817906l7.754913,-7.007478c0.337166,-0.300579 -0.073103,-0.467156 -0.524051,-0.16655l-9.586957,6.036571l-4.127295,-1.291786c-0.897769,-0.280315 -0.913985,-0.897805 0.186841,-1.328373l16.143532,-6.219364c0.747399,-0.280279 1.401485,0.166506 1.157757,1.308038z"></path>
                                </svg>
                            </span>
                            <span id="desk-button">
                                {{__('home.bot_section.buttons.telegram_button.title')}}
                            </span>
                            <span id="mobile-button">
                                
                            </span>
                            

                        </a>
                    </div>
                </div>

                <!-- Bot button -->
                <!-- <div class="ed-centered-div">
                    <div style="margin-bottom: 50px">
                            <h2 class="ed-light-text uk-text-bolder" style="text-align: center;">{{__('home.bot_section.title')}}</h2>
                            <h3 class="ed-light-text" >{{__('home.bot_section.subtitle')}}</h3>
                    </div>

                    <div>
                        <a href="https://t.me/EduBitTestBot" class="ed-simple-link ed-bot-button uk-text-bolder">
                            <span class="uk-icon" rel="nofollow" title="Telegram" style="padding-right: 5px;">
                                <svg width="22" height="44" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-svg="telegram">
                                    <path d="m21.005697,5.550602l-2.74611,12.950637c-0.207176,0.914021 -0.74748,1.141452 -1.515294,0.710964l-4.184146,-3.083356l-2.018885,1.941824c-0.223392,0.223392 -0.775524,0.536686 -0.751124,-0.033221l0.21082,-3.817906l7.754913,-7.007478c0.337166,-0.300579 -0.073103,-0.467156 -0.524051,-0.16655l-9.586957,6.036571l-4.127295,-1.291786c-0.897769,-0.280315 -0.913985,-0.897805 0.186841,-1.328373l16.143532,-6.219364c0.747399,-0.280279 1.401485,0.166506 1.157757,1.308038z"></path>
                                </svg>
                            </span>
                            {{__('home.bot_section.buttons.telegram_button.title')}}

                        </a>
                    </div>
                </div>

                <div class=" ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-simple-hr">
                </div> -->
            </div>

            <div class=" ed-center-hr">
                <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>


            <!-- УСЛОВИЯ -->
            <div class="ed-white ed-special-list " style="width: 80%">
                <h1 class="uk-text-bolder ed-largeer-title" style="text-align: center; margin-bottom: 50px">{{__('home.conditions.title')}}</h1>


                <div class="whole-width"></div>

                <div>
                    <div class="ed-subtitle-margin" style="width: 60%">
                        <h3 class="uk-text-bolder" style="text-align: center;">{{__('home.conditions.section_1.title')}}</h3>
                    </div>

                    <div class="ed-special-list ed-gradient-background ed-light-text uk-text-bolder" style="width: 80%;">
                    <table class="uk-table">
                        <tbody>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_1')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_2')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_3')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_4')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_5')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_6')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_7')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_8')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_9')}}</td>
                                <!-- <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_10')}}</td> -->
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_26')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_11')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_12')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_13')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_14')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_15')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_17')}}</td>
                            </tr>
                            <tr>
                                <!-- <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_18')}}</td> -->
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_24')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_19')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_20')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_21')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_22')}}</td>
                                <!-- <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_23')}}</td> -->
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_25')}}</td>
                            </tr>
                            <tr>
                                <!-- <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_24')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_25')}}</td> -->
                            </tr>
                            <tr>
                                <!-- <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.conditions.section_1.blocks.block_26')}}</td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="ed-mini-vertical-hr ">
                
                </div>

                <div>
                    <div class="ed-subtitle-margin" style="width: 60%">
                        <h3 class="uk-text-bolder" style="text-align: center;">{{__('home.conditions.section_2.title')}}</h3>
                    </div>
                    <div class="ed-special-list ed-gradient-background uk-column-1-2" style="column-rule: 1px solid #e5e5e5; width: 70%; margin: 0 auto">
                        

                        <div>
                            <p class="ed-light-text uk-text-bolder">{{__('home.conditions.section_2.blocks.block_1.content')}}</p>
                        </div>

                        <div style="text-align: center;">
                            <p class="ed-light-text uk-text-bolder">{{__('home.conditions.section_2.blocks.block_2.content')}}</p>
                        </div>

                    </div>
                    
                </div>

                
            </div>

            <!-- Divider -->
            <div class=" ed-center-hr">
                <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>

            <!-- Advantages -->
            <div class="ed-white ed-special-list " style="width: 80%;">
                <div style="margin: 0px auto; width: 60%">
                    <h1 class="uk-text-bolder ed-largeer-title" style="text-align: center;">{{__('home.advantages.title')}}</h2>
                    <h3 class="" style="text-align: center;">{{__('home.advantages.subtitle')}}</h3>
                </div>

                <div class="whole-width"></div>

                <div class="ed-special-list ed-gradient-background ed-light-text uk-text-bolder" style="width: 70%;">
                    <table class="uk-table">
                        <tbody>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_1')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_2')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_8')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_4')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_5')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_6')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_7')}}</td>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_3')}}</td>
                            </tr>
                            <tr>
                                <td><span class="uk-margin-small-right" uk-icon="icon: check; ratio: 1.5"></span>{{__('home.advantages.blocks.block_9')}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Divider -->
            <div class=" ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>

            <!-- Galery -->
            <div id="galery" class="ed-galery ">
                    <!-- <div class="header" style="position: absolute;">
                        <a href="" class="ed-light-text uk-text-bolder logo">{{__('home.galery.title')}}</a>
                        <input class="menu-btn" type="checkbox" id="menu-btn" />
                        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                        <ul class="menu">
                            <li class="btn-li"><a class="btn-main-a btn uk-text-bolder" href="" ><span>{{__('home.galery.buttons.button_1')}}</span></a></li>
                            <li class="btn-li"><a class="btn uk-text-bolder" href="" style="width: 170px;"><span>{{__('home.galery.buttons.button_2')}}</span></a></li>
                            <li class="btn-li"><a class="btn uk-text-bolder" href=""><span>{{__('home.galery.buttons.button_3')}}</span></a></li>
                            <li class="btn-li"><a class="btn uk-text-bolder" href=""><span>{{__('home.galery.buttons.button_4')}}</span></a></li>
                        </ul>
                    </div> -->
             
                    <!-- Desktop version -->
                    <ul id="desk-galery" class="ed-nav-ul uk-navbar-nav" uk-switcher="animation: uk-animation-fade; swiping: false;" style="justify-content: flex-start; align-items: center;">
                        <li class="ed-galery-padding" >
                            <h3 class="ed-light-text uk-text-bolder ed-largeer-title">{{__('home.galery.title')}}</h3>
                        </li>
                        <li>
                            <ul class="ed-nav-ul uk-navbar-nav">
                                <li class="main_nav_li"><a class="btn uk-text-bolder" href="" ><span>{{__('home.navigation_view.about')}}</span></a></li>
                                <li class="main_nav_li"><a class="btn uk-text-bolder" href="" ><span>{{__('home.navigation_view.programs')}}</span></a></li>
                                <li class="main_nav_li"><a class="btn uk-text-bolder" href="" ><span>{{__('home.navigation_view.galery')}}</span></a></li>
                                <li class="main_nav_li"><a class="btn uk-text-bolder" href="" ><span>{{__('home.navigation_view.contacts')}}</span></a></li> 
                            </ul>
                        </li>
                    </ul> 

                    <!-- Mobile version -->
                    <ul id="mobile-galery" class="ed-nav-ul uk-navbar-nav" uk-switcher="animation: uk-animation-fade; swiping: false;" style="justify-content: space-between; align-items: center; display: none">
                        <li>
                            <h3 class="ed-light-text uk-text-bolder ed-largeer-title">{{__('home.galery.title')}}</h3>
                        </li>
                        <li>
                            <div class="header" style="position: relative; width: 1px !important; ">
                                <input class="menu-btn" type="checkbox" id="menu-btn" />
                                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                                <ul class="menu">
                                    <li class="btn-li"><a class="btn-main-a btn uk-text-bolder" href="" ><span>{{__('home.galery.buttons.button_1')}}</span></a></li>
                                    <li class="btn-li"><a class="btn uk-text-bolder" href="" style="width: 170px;"><span>{{__('home.galery.buttons.button_2')}}</span></a></li>
                                    <li class="btn-li"><a class="btn uk-text-bolder" href=""><span>{{__('home.galery.buttons.button_3')}}</span></a></li>
                                    <li class="btn-li"><a class="btn uk-text-bolder" href=""><span>{{__('home.galery.buttons.button_4')}}</span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>    
                    <hr class="ed-style-hr">
                    <ul class="uk-switcher uk-margin">

                        <!-- Заглушка -->
                        <li></li>
                        

                        <!-- Наши студенты -->
                         <li>
                            <div class="uk-position-relative" uk-slideshow="animation: fade">

                            <ul class="ed-slider-corner uk-slideshow-items" >
                                <li>
                                    <img src="assets/galery/our_office/office1.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/galery/our_office/office2.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/galery/our_office/office3.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/galery/our_office/office4.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/galery/our_office/office5.jpg" alt="" >
                                </li>
                                </ul>

                            <div class="uk-position-bottom-center uk-position-small">
                                <ul class="uk-thumbnav">
                                    <li uk-slideshow-item="0"><a href="#"><img src="assets/galery/our_office/office1.jpg" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="1"><a href="#"><img src="assets/galery/our_office/office2.jpg" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="2"><a href="#"><img src="assets/galery/our_office/office3.jpg" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="3"><a href="#"><img src="assets/galery/our_office/office4.jpg" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="4"><a href="#"><img src="assets/galery/our_office/office5.jpg" width="100" alt=""></a></li>

                                </ul>
                            </div>

                            </div>
                        </li> 

                        <!-- Наш офис-->
                         <li>
                            <div class="uk-position-relative" uk-slideshow="animation: fade">

                            <ul class="ed-slider-corner uk-slideshow-items" >
                                <li>
                                    <img src="assets/galery/our_office/office1.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/galery/our_office/office2.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/galery/our_office/office3.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/galery/our_office/office4.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/galery/our_office/office5.jpg" alt="" >
                                </li>
                                </ul>

                            <div class="uk-position-bottom-center uk-position-small">
                                <ul class="uk-thumbnav">
                                    <li uk-slideshow-item="0"><a href="#"><img src="assets/galery/our_office/office1.jpg" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="1"><a href="#"><img src="assets/galery/our_office/office2.jpg" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="2"><a href="#"><img src="assets/galery/our_office/office3.jpg" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="3"><a href="#"><img src="assets/galery/our_office/office4.jpg" width="100" alt=""></a></li>
                                    <li uk-slideshow-item="4"><a href="#"><img src="assets/galery/our_office/office5.jpg" width="100" alt=""></a></li>

                                </ul>
                            </div>

                            </div>
                        </li> 

                        <!-- Cертификация -->

                        <!-- <li>
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

                            <ul class="ed-slider-corner uk-slideshow-items">
                                <li> <img src="assets/galery/сertification/cerf1.jpg" alt="" uk-cover> </li>
                                <li> <img src="assets/galery/сertification/cerf2.jpg" alt="" uk-cover> </li>
                                <li> <img src="assets/galery/сertification/cerf3.jpg" alt="" uk-cover> </li>
                                <li> <img src="assets/galery/сertification/cerf4.jpg" alt="" uk-cover> </li>

                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                            </div>
                        </li> -->

                        <!-- Отзывы -->
                        <!-- <li>
                            <div class="ed-slider-margin-center" uk-slider>
                                <div class="uk-position-relative">

                                    <div class="ed-slider-corner uk-slider-container uk-light">
                                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw1.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw2.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw3.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw4.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw5.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw6.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw7.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw8.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw9.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                            <li class="ed-slider-img-padding">
                                                <img class="ed-slider-corner" src="assets/galery/reviews_img/rw10.jpg" alt="">
                                                <div class="uk-position-center uk-panel"></div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="uk-hidden@s uk-light">
                                        <a class="ed-arrow-color uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="ed-arrow-color uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                    </div>

                                    <div class="uk-visible@s">
                                        <a class="ed-arrow-color uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="ed-arrow-color uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                    </div>

                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                            </div>
                        </li> -->
                    </ul>
                    
                    <div>
                    

                    
                    

                    </div>


            </div>


            <!-- Divider -->
            <div class=" ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>

            <!-- Our team -->
            <div class="ed-white ed-special-list " style="width: 80%;">

                <h1 class="uk-text-bolder" style="text-align: center;">{{__('home.our_team.title')}}</h1>
                <div class="whole-width"></div>
                
                <div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center" uk-grid>
                    <!-- 1-й ряд -->
                    <div>
                        <div class="uk-card uk-card-body">
                            <!-- <div src="assets/leadership/ld_1.jpg" class="uk-border-circle" width="200" height="200"></div> -->
                            <div src="assets/leadership/ld_4.jpg" class="uk-border-circle ed-leadership-icon" style="background-image: url(assets/leadership/ld_1.jpg);"></div>

                            <div>
                                <h3 class="ed-leadership-title">Валерий Царалунга</h3>
                                <h4 class="ed-leadership-subtitle">Директор MCEP</h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body">
                        <div src="assets/leadership/ld_4.jpg" class="uk-border-circle ed-leadership-icon" style="background-image: url(assets/leadership/ld_2.jpg);"></div>

                            <div>
                                <h3 class="ed-leadership-title">Татьяна Ли</h3>
                                <h4 class="ed-leadership-subtitle">Заместитель директора</h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body">
                        <div src="assets/leadership/ld_4.jpg" class="uk-border-circle ed-leadership-icon" style="background-image: url(assets/leadership/ld_3.jpg);"></div>

                            <div>
                                <h3 class="ed-leadership-title">Катерина Апостолова</h3>
                                <h4 class="ed-leadership-subtitle">Старший менеджер</h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body">
                            <!-- <img src="assets/leadership/ld_4.jpg" class="uk-border-pill" width="200" height="200" alt=""> -->
                            <div src="assets/leadership/ld_4.jpg" class="uk-border-circle ed-leadership-icon" style="background-image: url(assets/leadership/ld_4.jpg);"></div>

                            <div>
                                <h3 class="ed-leadership-title">Дарина Филипчук</h3>
                                <h4 class="ed-leadership-subtitle">Менеджер по работе с иностранцами, опекун, репетитор.</h4>
                            </div>
                        </div>
                    </div>

                    <!-- 2-й ряд -->
                    
                </div>
            </div>

            <!-- Divider -->
            <div class=" ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>
            
            <!-- Partners -->
            <div id="partners" class="ed-medium-margin ed-partner ed-white">

                <h1 class="uk-text-bolder">{{__('home.partner.title')}}</h1>

                <div class="whole-width"></div>

                <div>
                    <div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center" uk-grid>
                        
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"><img class="ed-partner-img" href="https://www.morska.edu.pl" src="assets/partners/ptn1.jpg" alt=""></div>
                        </div>
                        
                        
                        <div class="">
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"><img class="ed-partner-img" src="assets/partners/ptn2.jpg" alt=""></div>
                        </div>
                    

                        
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"><img class="ed-partner-img" src="assets/partners/ptn3.jpg" alt=""></div>
                        </div>
                    

                    
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"><img class="ed-partner-img" src="assets/partners/ptn4.jpg" alt=""></div> 
                        </div>
                        



                        <div class="">
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"><img class="ed-partner-img" src="assets/partners/ptn5.jpg" alt=""></div>
                        </div>
                        

                        
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"><img class="ed-partner-img" src="assets/partners/ptn6.jpg" alt=""></div>
                        </div>
                        

                        
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"><img class="ed-partner-img" src="assets/partners/ptn7.jpg" alt=""></div>
                        </div>
                        

                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"><img class="ed-partner-img" src="assets/partners/ptn8.jpg" alt=""></div>
                        </div>
                    
                        
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"> <img class="ed-partner-img" src="assets/partners/ptn9.svg" alt=""></div>
                        </div>
                        
                        
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"> <img class="ed-partner-img" src="assets/partners/ptn10.jpg" alt=""></div>
                        </div>
                        
                        
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"> <img class="ed-partner-img" src="assets/partners/ptn11.svg" alt=""></div>
                        </div>
                        
                        
                        <div>
                            <div class="ed-corner-min uk-card uk-card-hover uk-card-body"> <img class="ed-partner-img" src="assets/partners/ptn12.jpg" alt=""></div>
                        </div>
                        
                    </div>
                </div>

            </div>

            <!-- Divider -->
            <div class="ed-center-hr">
                    <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>

            <!-- Официальный представитель -->
            <div class="ed-white ed-special-list " style="width: 80%;">
                

                <div style="margin-bottom: 100px;">
                    <div style="margin: 0px auto; width: 60%;  margin-bottom:70px">
                        <h1 class="uk-text-bolder ed-largeer-title" style="text-align: center;">{{__('home.official_representative.title')}}</h2>
                    </div>

                    <div class="whole-width"></div>

                    <div class="ed-special-list ed-gradient-background ed-light-text uk-text-bolder" style="width: 50%;">
                        <table class="uk-table">
                            <tbody>
                            <!-- requisites_person -->
                                <tr class="mobile-tr">
                                    <td>{{__('home.requisites.person')}}</td>
                                    <td>{{__('home.requisites_person.person')}}</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>{{__('home.requisites.NKEPP')}}</td>
                                    <td>3505403904</td>
                                </tr>
                                <!-- <tr class="mobile-tr">
                                    <td>JPRPOU:</td>
                                    <td>2009180000000001867</td>
                                </tr> -->
                                <tr class="mobile-tr">
                                    <td>{{__('home.requisites.bank_account')}}</td>
                                    <td>UA523206490000026073052825876</td>
                                    
                                </tr>
                                <tr class="mobile-tr">
                                    <td>{{__('home.requisites.phoneNumber')}}</td>
                                    <td>+380985909044, +48574567102</td>
                                    
                                </tr>
                                <tr class="mobile-tr">
                                <td>{{__('home.requisites.email')}}</td>
                                <td>cdu.ua.eu@gmail.com</td>
                                    
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="whole-width"></div>

                <div>
                    <div style="margin: 0px auto; width: 60%;  margin-bottom:70px">
                        <h1 class="uk-text-bolder ed-largeer-title" style="text-align: center;">{{__('home.requisites.title')}}</h2>
                    </div>

                    
                    <div class="ed-special-list ed-gradient-background ed-light-text uk-text-bolder" style="width: 70%;">
                        <table class="uk-table">
                            <tbody>
                            <tr >
                                <td>MIĘDZYNARODOWE CENTRUM EDUKACJI I PRAKTYKI SP.Z.O.O.</td>
                            </tr>
                                <tr class="mobile-tr">
                                    <td>NIP:</td>
                                    <td>6751748825</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>REGON:</td>
                                    <td>388641557</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>{{__('home.requisites.addres')}}</td>
                                    <td>{{__('home.requisites_person.addres')}}</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>{{__('home.requisites.email')}}</td>
                                    <td>cdu.ua.eu@gmail.com</td>
                                    
                                </tr>
                                <tr class="mobile-tr">
                                    <td>{{__('home.requisites.phoneNumber')}}</td>
                                    <td>+380985909044, +48574567102</td>
                                    
                                </tr>
                                <tr class="mobile-tr">
                                    <td>Santander bank</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>ZI Nr Konta:</td>
                                    <td>17 1090 2053 0000 0001 4795 9925</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>ZI IBAN:</td>
                                    <td>17 1090 2053 0000 0001 4795 9925</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>€ Nr Konta:</td>
                                    <td>54 1090 2053 0000 0001 4796 0035</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>€ IBAN:</td>
                                    <td>54 1090 2053 0000 0001 4796 0035</td>
                                </tr>
                                <tr class="mobile-tr">
                                    <td>BIC/SWIFT:</td>
                                    <td>WBKPPLPP</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                
            </div>


            <!-- Divider -->
            <!-- <div  class="ed-center-hr">
                <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div> -->


            <!-- Реквизиты
             <div class="ed-white ed-special-list " style="width: 80%;">
                <div style="margin: 0px auto; width: 60%">
                    <h1 class="uk-text-bolder ed-largeer-title" style="text-align: center;">{{__('home.requisites.title')}}</h2>
                    
                </div>

                

                <div class="ed-special-list ed-gradient-background ed-light-text uk-text-bolder" style="width: 70%;">
                    <table class="uk-table">
                        <tbody>
                        <tr >
                            <td>MIĘDZYNARODOWE CENTRUM EDUKACJI I PRAKTYKI SP.Z.O.O.</td>
                        </tr>
                            <tr class="mobile-tr">
                                <td>NIP:</td>
                                <td>6751748825</td>
                            </tr>
                            <tr class="mobile-tr">
                                <td>REGON:</td>
                                <td>388641557</td>
                            </tr>
                            <tr class="mobile-tr">
                                <td>Adres siedziba:</td>
                                <td>ul. Mogilska, nr 40, lok. 26, miejsc. Kraków, kod 31-546, poczta Kraków, kraj Polska</td>
                            </tr>
                            <tr class="mobile-tr">
                                <td>Email:</td>
                                <td>cdu.ua.eu@gmail.com</td>
                                
                            </tr>
                            <tr class="mobile-tr">
                                <td>Tel.</td>
                                <td>+380985909044, +48574567102</td>
                                
                            </tr>
                            <tr class="mobile-tr">
                                <td>Santander bank</td>
                            </tr>
                            <tr class="mobile-tr">
                                <td>ZI Nr Konta:</td>
                                <td>17 1090 2053 0000 0001 4795 9925</td>
                            </tr>
                            <tr class="mobile-tr">
                                <td>ZI IBAN:</td>
                                <td>17 1090 2053 0000 0001 4795 9925</td>
                            </tr>
                            <tr class="mobile-tr">
                                <td>€ Nr Konta:</td>
                                <td>54 1090 2053 0000 0001 4796 0035</td>
                            </tr>
                            <tr class="mobile-tr">
                                <td>€ IBAN:</td>
                                <td>54 1090 2053 0000 0001 4796 0035</td>
                            </tr>
                            <tr class="mobile-tr">
                                <td>BIC/SWIFT:</td>
                                <td>WBKPPLPP</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>  -->

            <!-- Contact Divider -->
            <div id="contacts"  class="ed-center-hr">
                <hr style="width: 10%; margin: 0 auto;" class="ed-style-hr">
            </div>

            <footer class="ed-contact">

                <h1 class="uk-text-bolder ed-light-text">{{__('home.contact.title')}}</h1>

                <div class="uk-section ed-light-text">

                    <h3 class="ed-light-text ed-center-text uk-text-bolder" style="padding-bottom: 50px;font-size: xx-large;">{{__('home.contact.section.title')}}</h3>
                    <div class="uk-container">

                        <div class="uk-grid-match uk-child-width-1-3@m " uk-grid>
                            <div>
                                <p>+38 098 590 90 44 <br>+48 574 567 102 <br>+48 167 334 136</p>
                            </div>
                            <div>
                                <p> <b>Privat Bank</b>: 5168 7456 0252 3166 - Valerii Tsaralunha <br> <b>Millenium Bank</b>: 4874 7420 9281 5812 - Valerii Tsaralunha</p>
                            </div>
                            <div>
                                <p> <b>{{__('home.contact.section.blocks.block_3.title')}}</b> {{__('home.contact.section.blocks.block_3.content')}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            
            </footer>
        </article>
    </body>
</html>