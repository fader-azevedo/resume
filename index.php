<?php
namespace Phppot;

require_once("./model/Core.php");

use Phppot\DataSource;

$core_model = new Core();
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'pt';
$nav = $core_model->get_by_lang('nav', $lang);
$main = $core_model->get_by_lang('main', $lang);
$about = $core_model->get_by_lang('about', $lang);
$jobs = $core_model->get_all('job');
$project = $core_model->get_by_lang('project', $lang);
$contact = $core_model->get_by_lang('contact', $lang);
$link = $core_model->get_all('link');

require_once("./view/Language/lang." . $lang . ".php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $main['first_name'] ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="">

<div class="div-media-icons d-sm-none d-none d-lg-block">
    <ul class="media-icons">
        <li><a href="<?= $link['github'] ?>" aria-label="GitHub" target="_blank" rel="noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                    <title>
                        GitHub</title>
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg>
            </a></li>
        <li><a href="<?= $link['instagram'] ?>" aria-label="Instagram" target="_blank" rel="noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                    <title>
                        Instagram</title>
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
            </a></li>
        <li class="d-none"><a href="https://twitter.com/FaderAzevedo1" aria-label="Twitter" target="_blank"
                              rel="noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                    <title>
                        Twitter</title>
                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                </svg>
            </a></li>
        <li><a href="<?= $link['linkedin'] ?>" aria-label="Linkedin" target="_blank"
               rel="noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                    <title>
                        LinkedIn</title>
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                </svg>
            </a></li>
        <li><a href="<?= $link['codepen'] ?>" aria-label="Codepen" target="_blank" rel="noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codepen">
                    <title>
                        CodePen</title>
                    <polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon>
                    <line x1="12" y1="22" x2="12" y2="15.5"></line>
                    <polyline points="22 8.5 12 15.5 2 8.5"></polyline>
                    <polyline points="2 15.5 12 8.5 22 15.5"></polyline>
                    <line x1="12" y1="2" x2="12" y2="8.5"></line>
                </svg>
            </a>
        </li>
    </ul>
</div>
<div class="div-vertical-email d-sm-none d-none d-lg-block">
    <a href="mailto:fadermacuvele383@gmail.com">fadermacuvele383@gmail.com</a>
</div>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex  align-items-center">
        <a href="" id="logo" class="me-auto position-relative" style="width: 50px; height: 50px">
            <span class="position-absolute h2 fw-bold" style="top: 10px; left: 15px">F</span>
            <svg id="logo-svg" viewBox="0 0 84 96"><title>Logo</title>
                <g transform="translate(-8.000000, -3.000000)">
                    <g transform="translate(11.000000, 5.000000)">
                        <path d="" fill="currentColor"/>
                        <polygon id="Shape" stroke="currentColor" stroke-width="5" stroke-linecap="round"
                                 stroke-linejoin="round" points="39 0 0 22 0 67 39 90 78 68 78 23"></polygon>
                    </g>
                </g>
            </svg>
        </a>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="#about"><?= $nav['about'] ?></a></li>
                <li><a class="nav-link scrollto " href="#jobs"><?= $nav['job'] ?></a></li>
                <li><a class="nav-link scrollto " href="#projects"><?= $nav['project'] ?></a></li>
                <li><a class="nav-link scrollto " href="#contact"><?= $nav['contact'] ?></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <a href="#contact" class="get-started-btn scrollto"><?= $nav['resume'] ?></a>
        <div class="d-flex ps-0 ps-sm-0 ps-lg-3 pe-lg-0 pe-3">
            <a class="language <?= $lang == 'pt' ? 'active' : '' ?>" href="index.php?lang=pt">PT</a>
            <span class="mx-1">|</span><a class="language <?= $lang == 'en' ? 'active' : '' ?>"
                                          href="index.php?lang=en">EN</a>
        </div>
    </div>
</header>

<section id="hero" class="banner-home pt-0">
    <div class="opa">
        <div class="dot">
            <div class="main-container w-100 h-100">
                <div class="container h-100 d-flex flex-column justify-content-between  pb-lg-5">
                    <div style="border-left: #64ffda solid 5px" class="ps-3">
                        <p class="text-start text-active h6 mb-3 mb-lg-4"><?= $main['hi'] ?></p>

                        <h1 class="fancy text-start">
                            <?= $main['first_name'] . ' ' . $main['last_name'] ?>
                        </h1>
                        <div class="row pt-lg-5" data-aos="fade-down" data-aos-delay="250">
                            <div class="col-lg-6 text-white-50 text-start">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-end">
                        <div class="col-md-4 float-end">
                            <div class="text-end">
                                <p>
                                    <a href="#projects" class="outline-white"><?= $nav['project'] ?></a>
                                </p>
                                <p class="text-white-50 h6 mt-5"><?= $main['let_work_together'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="main">
    <section id="about" class="about bg-main">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2><?= $about['title'] ?></h2>
            </div>

            <div class="row">
                <div class="col-md-8 ps-0">
                    <div class="card bg-transparent border-0">
                        <div class="card-body">
                            <p class="text-white-50 text-start text-justify mb-3">
                                <?= $about['description'] ?>
                            </p>
                            <ul class="skills-list">
                                <?php foreach (explode(',', $about['technologies']) as $item): ?>
                                    <li><?= $item ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-sm-none d-none d-lg-flex justify-content-lg-end">
                    <div class="rounded position-relative image-box">
                        <img src="assets/img/fader-face.jpg" class="rounded position-absolute w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="jobs" class="jobs bg-main">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-sm-12">

                    <div class="section-title">
                        <h2><?= $nav['job'] ?></h2>
                    </div>

                    <div class="inner">
                        <div role="tablist" id="pills-tab" class="nav companies">
                            <button class="job-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home"
                                    type="button" role="tab" aria-controls="pills-home" aria-selected="false">Green
                                Revolution
                            </button>
                            <button class="job-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile"
                                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Eizy
                                Technology
                            </button>
                            <button class="job-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact"
                                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Classic
                                Security Systems
                            </button>
                        </div>

                        <div class="tab-content ps-lg-5" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <span class="text-white">Desenvolvedor Web</span>
                                <label class="text-active">&nbsp;@&nbsp;
                                    <a href="https://www.bigbazar.com/" rel="noopener noreferrer" target="_blank">
                                        Green Revolution
                                    </a>
                                </label>
                                <p class="range text-white-50">Agosto 2020 - Presente</p>
                                <div class="text-white-50">
                                    <ul class="desc">
                                        <li>
                                            Colaborou com uma pequena equipe de design para criar e liderar uma
                                            nova marca, que resultou em <a href="https://bigbazar.co.mz/"
                                                                           rel="noopener noreferrer" target="_blank">Big
                                                Bazar</a>
                                        </li>
                                        <li>Desenvolvimento de sitemas com códigos modernos, de alto desempenho e
                                            sustentável para projetos internos e externos;
                                        </li>
                                        <li>
                                            Trabalho com uma variedade de diferentes linguagens, plataformas, estruturas
                                            e sistemas de gerenciamento de
                                            conteúdo, tendo muito foco no framework codeigniter;
                                        </li>
                                        <li>
                                            Comunicação com equipes multidisciplinares de engenheiros, designers e
                                            clientes diariamente.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">
                                <span class="text-white">IT Consultant</span>
                                <label class="text-active">&nbsp;@&nbsp;
                                    <a href="https://www.eiztec.com/" rel="noopener noreferrer" target="_blank">
                                        Eizy technology
                                    </a>
                                </label>
                                <p class="range text-white-50">Junho 2019 - Agosto 2020</p>
                                <div class="text-white-50">
                                    <ul class="desc">
                                        <li>
                                            Suporte, recomendações para tecnologias de informação existentes para
                                            melhoria
                                        </li>
                                        <li>
                                            Montagem e manutenção de redes de computadores
                                        </li>
                                        <li>
                                            Código desenvolvido e mantido para sites internos e de clientes
                                            principalmente usando HTML, CSS, Sass, JavaScript e jQuery
                                        </li>
                                        <li>
                                            Colaboração com designers e equipe de gerenciamento para desenvolver,
                                            documentar e gerenciar o site de marketing digital disignada <a
                                                    href="https://www.superentidades.co.mz/" rel="noopener noreferrer"
                                                    target="_blank">Super Entidades</a>
                                        </li>
                                        <li>
                                            Testes manuais em navegadores diferentes e dispositivos móveis para
                                            garantir compatibilidade e capacidade de resposta entre navegadores
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                 aria-labelledby="pills-contact-tab">
                                <span class="text-white">Operador de câmeras</span>
                                <label class="text-active">&nbsp;@&nbsp;
                                    <a href="https://www.eiztec.com/" rel="noopener noreferrer" target="_blank">
                                        Classic Security System
                                    </a>
                                </label>
                                <p class="range text-white-50">Julho 2017 - Fevereiro 2019</p>
                                <div class="text-white-50">
                                    <ul class="desc">
                                        <li>
                                            Garantir backups de filmagens antigas no computador;
                                        </li>
                                        <li>
                                            Registrar ocorrências estranhas e relatar para segurança, se necessário.
                                        </li>
                                        <li>
                                            Controlar a operação do equipamento de segurança como câmeras desligadas e
                                            falta de iluminação no prédio;
                                        </li>
                                        <li>
                                            Manter os equipamentos usados na sala de controle
                                        </li>
                                        <li>
                                            Elaborar um relatório mensal sobre os incidentes, desafios e problemas
                                            identificados.
                                        </li>
                                        <li>
                                            visualização e gravação de imagens capturadas
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= projects Section ======= -->
    <section id="projects" class="project bg-main">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2><?= $nav['project'] ?></h2>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <ul class="project-list">
                        <li class="eeeRej">
                            <div class="project-content">
                                <div>
                                    <p class="project-overline"></p>
                                    <h3 class="project-title">
                                        <a href="https://bigbsoft.com/" target="_blank" class="link-default">
                                            BigB Soft
                                        </a>
                                    </h3>
                                    <div class="project-description">
                                        <p>
                                            BigB Soft foi desenvolvido com o objetivo facilitar todo o processo de
                                            vendas e facturação
                                        </p>
                                        <p class="text-end pt-lg-3 mb-lg-1">
                                            <a href="https://bigbsoft.com/" target="_blank" class="outline-white sm"
                                               title="BigB Soft">Visitar</a>
                                            <a href="javascript:void(0)" class="outline-white sm">Imagens</a>
                                        </p>
                                    </div>
                                    <ul class="project-tech-list">
                                        <li>Codeigniter 3</li>
                                        <li>Bootstrap 4</li>
                                        <li>React</li>
                                        <li>Mysql</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="project-image">
                                <a href="javascript:void(0)" class="bg-success">
                                    <div class="gatsby-image-wrapper">
                                        <img alt=""
                                             src="data:image/svg+xml;charset=utf-8,%3Csvg height='300' width='700' xmlns='http://www.w3.org/2000/svg' version='1.1'%3E%3C/svg%3E"
                                             style="max-width: 100%; display: block; position: static;">

                                        <img sizes="(min-width: 700px) 700px, 100vw" decoding="async"
                                             src="./assets/img/projects/02.jpg" alt="">
                                    </div>
                                </a>
                                <div class="overlay"></div>
                            </div>
                        </li>
                        <li class="eeeRej">
                            <div class="project-content">
                                <div>
                                    <p class="project-overline"></p>
                                    <h3 class="project-title">
                                        <a href="https://bigbsoft.com/" target="_blank" class="link-default">
                                            BigB Soft
                                        </a>
                                    </h3>
                                    <div class="project-description">
                                        <p>
                                            BigB Soft foi desenvolvido com o objetivo facilitar todo o processo de
                                            vendas e facturação
                                        </p>
                                        <p class="text-end pt-lg-3 mb-lg-1">
                                            <a href="https://bigbsoft.com/" target="_blank" class="outline-white sm"
                                               title="BigB Soft">Visitar</a>
                                            <a href="javascript:void(0)" class="outline-white sm">Imagens</a>
                                        </p>
                                    </div>
                                    <ul class="project-tech-list">
                                        <li>Codeigniter 3</li>
                                        <li>Bootstrap 4</li>
                                        <li>React</li>
                                        <li>Mysql</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="project-image">
                                <a href="javascript:void(0)" class="bg-success">
                                    <div class="gatsby-image-wrapper">
                                        <img alt=""
                                             src="data:image/svg+xml;charset=utf-8,%3Csvg height='300' width='700' xmlns='http://www.w3.org/2000/svg' version='1.1'%3E%3C/svg%3E"
                                             style="max-width: 100%; display: block; position: static;">

                                        <img sizes="(min-width: 700px) 700px, 100vw" decoding="async"
                                             src="./assets/img/projects/02.jpg" alt="">
                                    </div>
                                </a>
                                <div class="overlay"></div>
                            </div>
                        </li>
                        <li class="eeeRej">
                            <div class="project-content">
                                <div>
                                    <p class="project-overline"></p>
                                    <h3 class="project-title">
                                        <a href="https://bigbsoft.com/" target="_blank" class="link-default">
                                            BigB Soft
                                        </a>
                                    </h3>
                                    <div class="project-description">
                                        <p>
                                            BigB Soft foi desenvolvido com o objetivo facilitar todo o processo de
                                            vendas e facturação
                                        </p>
                                        <p class="text-end pt-lg-3 mb-lg-1">
                                            <a href="https://bigbsoft.com/" target="_blank" class="outline-white sm"
                                               title="BigB Soft">Visitar</a>
                                            <a href="javascript:void(0)" class="outline-white sm">Imagens</a>
                                        </p>
                                    </div>
                                    <ul class="project-tech-list">
                                        <li>Codeigniter 3</li>
                                        <li>Bootstrap 4</li>
                                        <li>React</li>
                                        <li>Mysql</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="project-image">
                                <a href="javascript:void(0)" class="bg-success">
                                    <div class="gatsby-image-wrapper">
                                        <img alt=""
                                             src="data:image/svg+xml;charset=utf-8,%3Csvg height='300' width='700' xmlns='http://www.w3.org/2000/svg' version='1.1'%3E%3C/svg%3E"
                                             style="max-width: 100%; display: block; position: static;">

                                        <img sizes="(min-width: 700px) 700px, 100vw" decoding="async"
                                             src="./assets/img/projects/02.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <p class="text-center">
                <a href="javascript:void(0)" class="outline-white"><?= $project['more_project'] ?></a>
            </p>
        </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact bg-main">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2><?= $nav['contact'] ?></h2>
            </div>

            <div class="row g-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <div class="info-box">
                        <div class="row">
                            <div class="col-3">
                                <i class="bx bx-map"></i>
                            </div>
                            <div class="col-9">
                                <p class="text-start text-white"><?= $contact['address_value'] ?></p>
                                <p class="text-start text-white-50"><?= $contact['address_label'] ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="info-box my-4">
                        <div class="row">
                            <div class="col-3">
                                <i class="bx bx-envelope"></i>
                            </div>
                            <div class="col-9">
                                <p class="text-start text-white"><?= $contact['email_value'] ?></p>
                                <p class="text-start text-white-50"><?= $contact['email_label'] ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="info-box">
                        <div class="row">
                            <div class="col-3">
                                <i class="bx bx-phone-call"></i>
                            </div>
                            <div class="col-9">
                                <p class="text-start text-white"><?= $contact['call_value'] ?></p>
                                <p class="text-start text-white-50"><?= $contact['call_label'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="d-none"></label>
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="<?= $contact['form_name'] ?>" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="d-none"></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="<?= $contact['form_email'] ?>" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <label for="message" class="d-none"></label>
                                <textarea style="resize: none" class="form-control" id="message" name="message" rows="5"
                                          placeholder="<?= $contact['form_message'] ?>" required=""></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="outline-white"><i
                                        class="bx bx-send me-lg-2"></i><?= $contact['form_send'] ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 footer-contact">
                    <h3 class="text-white"><?= $main['first_name'] ?><span>.</span></h3>
                    <p class="text-white-50">
                        <?= $main['quote'] ?>
                    </p>
                </div>
                <div class="col-lg-5 col-md-4">
                    <a href="#" class="outline-white float-end"><?= $nav['resume'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright text-white">
                <?= $main['designed_by'] ?> <a href="javascript:void(0)"><?= $main['first_name'] ?></a>
            </div>
        </div>
        <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="<?= $link['github'] ?>" target="_blank" rel="noreferrer" class="github"><i
                        class="bx bxl-github"></i></a>
            <a href="<?= $link['instagram'] ?>" target="_blank" rel="noreferrer" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
            <a href="<?= $link['linkedin'] ?>" target="_blank" rel="noreferrer" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            <a href="<?= $link['codepen'] ?>" target="_blank" rel="noreferrer" class="codepen"><i
                        class="bx bxl-codepen"></i></a>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center active">
    <i class="bi bi-arrow-up-short"></i>
</a>
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/vanilla-tilt.min.js"></script>
<script type="text/javascript">
    VanillaTilt.init(document.querySelectorAll(".icon-box, .info-box"), {
        max: 25,
        speed: 400
    });

    function fancy(text) {
        const str = text.textContent;
        const splitText = str.split("");
        text.textContent = "";
        for (let i = 0; i < splitText.length; i++) {
            text.innerHTML += "<span>" + splitText[i] + "</span>";
        }

        let char = 0;
        let timer = setInterval(onTick, 50);

        function onTick() {
            const span = text.querySelectorAll('span')[char];
            span.classList.add('fade')
            char++;
            if (char === splitText.length) {
                complete();
                return;
            }
        }

        function complete() {
            clearInterval(timer);
            timer = null;
        }
    }

    const text = document.querySelector('.fancy');
    fancy(text);
    $(document).ready(function () {


    })
</script>
</body>

</html>

