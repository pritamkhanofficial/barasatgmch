<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Barasat || BGMCH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="http://barasatgmch.ac.in/assets/img/favicon.png" rel="icon">
    <link href="http://barasatgmch.ac.in/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="http://barasatgmch.ac.in/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="http://barasatgmch.ac.in/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="http://barasatgmch.ac.in/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://barasatgmch.ac.in/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="http://barasatgmch.ac.in/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="http://barasatgmch.ac.in/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="http://barasatgmch.ac.in/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="http://barasatgmch.ac.in/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.4/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="http://barasatgmch.ac.in/assets/css/style.css" rel="stylesheet">

    <style>
    .info-box {
        color: #444444;
        text-align: center;
        box-shadow: 0 0 20px rgb(214 215 216 / 50%);
        padding: 20px 0 30px 0;
    }

    .marquee {
        height: 30px;
        overflow: hidden;
        position: relative;
    }

    .marquee div {
        display: block;
        position: absolute;
        overflow: hidden;
        animation: marquee 15s linear infinite;
        z-index: 1234;
    }



    @keyframes marquee {
        0% {
            left: 0;
        }

        100% {
            left: -100%;
        }
    }

    .marquee div:hover,
    .marquee div p:hover {
        animation-play-state: paused;
    }

    .h-80 {
        height: 80px
    }
    </style>

</head>

<body>
    <?=view('component/front/header')?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-xl-9 bg-slider-back">

                    <div id="carouselExampleInterval" class="carousel slide p-0" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- <div class="carousel-item active" data-bs-interval="5000">
                                <img src="./assets/img/slider/slider-1.jpg" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p class="float-start">Some representative placeholder content for the third slide.
                                    </p>
                                    <p class="float-end">Some representative placeholder content for the third slide.
                                    </p>
                                </div>
                            </div> -->
                            <?php foreach($sliders as $key=>$row){ ?>
                            <div class="carousel-item <?=($key == 0) ? 'active':''?>" data-bs-interval="5000">
                                <img src="<?=base_url('get-file/' . $row->image)?>" class="d-block w-100" alt="">
                            </div>
                            <?php } ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                    <div class="marquee">
                        <div></div>
                    </div>
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" class="fw-bold text-danger py-2"
                        style="font-size: 14px">
                        1st professional MBBS classes are going to start from 1st September, 2023 as per NMC Schedule .
                        For details check the students-section
                    </marquee>

                </div>

                <div class="col-lg-4 col-xl-3 bg-light-1">

                    <div class="w-100 p-2 text-light">
                        <p><span class="fs-6 fw-bold">Institute Name:</span> <?=getHospitalSettings()->institute_name?>
                        </p>
                        <hr>
                        <p><span class="fs-6 fw-bold">Affiliated To:</span> <?=getHospitalSettings()->affiliated_to?>
                        </p>
                        <p><span class="fs-6 fw-bold">Vice Chancellor: </span>
                            <?=getHospitalSettings()->vice_chancellor?></p>
                        <p><span class="fs-6 fw-bold">Registrar: </span> <?=getHospitalSettings()->registrar?></p>
                        <hr>
                        <p><span class="fs-6 fw-bold">Year of Registration:</span>
                            <?=getHospitalSettings()->year_of_affiliation?></p>
                        <!--<hr>-->
                        <!--<p><span class="fs-6 fw-bold">Proposed Session:</span> 2022-23</p>-->
                    </div>

                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mt-4 shadow bg-light">
                        <div class="icon-box rounded height-300" style="overflow: hidden;">
                            <div class="panel-header" style="margin-top: -25px;">
                                <img src="https://barasatgmch.ac.in/assets/img/attention.gif" alt=""
                                    style="width: 100%;height: 100px;" />
                            </div>
                            <div class="panel-body">
                                <ul class="list-group text-justify" style="font-size: 14px">
                                    <!--<li class="list-group-item">UG MBBS admission (2023-24) is to be started on 31 July, as per the Govt. schedule. For details view the student section menu.</li>-->
                                    <li class="list-group-item mb-3">Received the first Letter of Renewal (LOR) for
                                        admitting 2nd batch of 100 MBBS students for the academic year of 2023-24</li>
                                    <li class="list-group-item">Received the Letter of Permission (LOP) from NMC for
                                        admitting 100 MBBS students for the academic year of 2022-23</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-stretch mx-auto">
                        <div class="row">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="col-lg-12 d-flex align-items-stretch">
                                    <div class="icon-box mt-4">
                                        <h5 class="text-center">About the Hospital</h5>
                                        <span id="history_and_heritage" class="d-none">
                                            <?=getHospitalSettings()->history_and_heritage?>
                                        </span>
                                        <hr>
                                        <?= word_limiter(getHospitalSettings()->history_and_heritage, 100);?>
                                        <div class="text-center">
                                            <a class="nav-link scrollto fw-bold text-info float-end mt-1"
                                                href="javascript:void(0)" onClick="aboutTheHospital()"><span>Read
                                                    more...</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-4 shadow bg-light">
                        <div class="icon-box p-3 rounded height-300">

                            <video poster="https://barasatgmch.ac.in/assets/img/barasat-video-overlay.png" controls
                                class="w-100 cursor-pointer">
                                <source src="https://barasatgmch.ac.in/assets/video/video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <hr>
                            <p class="text-center fw-bold">Video description of the medical college</p>

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <?php if(!empty($hospital_head)){ ?>
            <div class="container-fluid">
                <div class="row bg-light-1 p-4">
                    <div class="container">
                        <div class="row row-flex">
                            <?php 
                            foreach($hospital_head as $key=>$row){
                            ?>
                            <div class="col-lg-6">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-lg-5 text-center shadow-sm">
                                            <img src="<?=base_url('get-file/' . $row->image)?>"
                                                class="img-fluid d-block mx-auto border-b-m border-secondary" alt="...">
                                            <p class="fw-bold m-0"><?=$row->title_2?></p>
                                            <hr class="m-0">
                                            <p class="mb-0"><?=$row->title_3?></p>
                                            <hr class="m-0">
                                            <h6 class="small"><?=$row->title_4?></h6>
                                            <hr class="m-0">
                                            <p class="mb-0"><?=$row->title_5?></p>
                                            <hr class="m-0">
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="card-body text-justify">
                                                <span class="d-none" id="modalData_<?=$key?>">
                                                    <?=$row->description?>
                                                </span>
                                                <h5 id="modalLabel_<?=$key?>"><?=$row->title_1?></h5>
                                                <hr>
                                                <?= word_limiter($row->description, 60);?>

                                                <a class="nav-link scrollto fw-bold text-info float-end mt-1"
                                                    onClick='showHospitalHeadModal(<?=$key?>)'
                                                    href="javascript:void(0)"><span>Read more...</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>
            <?php } ?>
        </section><!-- End About Section -->

        <!--student section-->

        <!--<section id="students-section" class="student section-bg pb-4">-->
        <!--    <div class="container">-->
        <!--        <div class="row my-4">-->
        <!--            <h3 class="justify-content-center d-flex">Students' Section</h3>-->
        <!--            <hr>-->
        <!--        </div>-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-6">-->
        <!--                <div-->
        <!--                    class="row d-flex justify-content-center align-items-center bg-light-1 hover-theme border border-secondary h-80 mb-2">-->
        <!--                    <a target="_new" href="./assets/documents/Check_List_SQ.pdf"-->
        <!--                        class="p-0 m-0 ps-3 text-white">-->
        <!--                        <span style="letter-spacing: -4px;font-size: 15px;">>></span> &nbsp;&nbsp;Checklist for-->
        <!--                        submission of documents for admission to MBBS-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--                <div-->
        <!--                    class="row d-flex justify-content-center align-items-center bg-light-1 hover-theme border border-secondary h-80 mb-2">-->
        <!--                    <a target="_new" href="./assets/documents/Admission_form_2023.pdf"-->
        <!--                        class="p-0 m-0 ps-3 text-white">-->
        <!--                        <span style="letter-spacing: -4px;font-size: 15px;">>></span> &nbsp;&nbsp;MBBS admission-->
        <!--                        (2023) - college admission form-->
        <!--                    </a>-->
        <!--                </div>-->
        <!--                <div-->
        <!--                    class="row d-flex justify-content-center align-items-center bg-light-1 hover-theme border border-secondary h-80 mb-2">-->
        <!--                    <a target="_new" href="./assets/documents/Fee_Payment_2023.pdf"-->
        <!--                        class="p-0 m-0 ps-3 text-white"><span-->
        <!--                            style="letter-spacing: -4px;font-size: 15px;">>></span> &nbsp;&nbsp;Fee payment-->
        <!--                        declaration from the candidate</a>-->
        <!--                </div>-->
        <!--                <div-->
        <!--                    class="row d-flex justify-content-center align-items-center bg-light-1 hover-theme border border-secondary h-80 mb-2">-->
        <!--                    <a target="_new" href="./assets/documents/Check_List_SQ.pdf"-->
        <!--                        class="p-0 m-0 ps-3 text-white"><span-->
        <!--                            style="letter-spacing: -4px;font-size: 15px;">>></span> &nbsp;&nbsp;Check list for-->
        <!--                        WB State quota</a>-->
        <!--                </div>-->
        <!--            </div>-->


        <!--            <div class="col-lg-6">-->
        <!--                <div-->
        <!--                    class="row d-flex justify-content-center align-items-center bg-light-1 hover-theme border border-secondary h-80 mb-2">-->
        <!--                    <a target="_new" href="./assets/documents/Undertaking.pdf"-->
        <!--                        class="p-0 m-0 ps-3 text-white"><span-->
        <!--                            style="letter-spacing: -4px;font-size: 15px;">>></span> &nbsp;&nbsp;Undertaking-->
        <!--                        regarding responsible conduct</a>-->
        <!--                </div>-->
        <!--                <div-->
        <!--                    class="row d-flex justify-content-center align-items-center bg-light-1 hover-theme border border-secondary h-80 mb-2">-->
        <!--                    <a target="_new" href="./assets/documents/Bond_Proforma.pdf"-->
        <!--                        class="p-0 ps-3 m-0 ps-3 text-white"><span-->
        <!--                            style="letter-spacing: -4px;font-size: 15px;">>></span> &nbsp;&nbsp;Proforma for-->
        <!--                        Execution of Bond by the candidate</a>-->
        <!--                </div>-->
        <!--                <div-->
        <!--                    class="row d-flex justify-content-center align-items-center bg-light-1 hover-theme border border-secondary h-80 mb-2">-->
        <!--                    <a target="_new" href="./assets/documents/Medical_Certificate.pdf"-->
        <!--                        class="p-0 m-0 ps-3 text-white"><span-->
        <!--                            style="letter-spacing: -4px;font-size: 15px;">>></span> &nbsp;&nbsp;Medical Fitness-->
        <!--                        Certificate</a>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--        </div>-->

        <!--    </div>-->
        <!--</section>-->

        <!--Student Section ends-->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <!--         <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-sm-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-sm-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-sm-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>
        </div> -->

                <div class="row">
                    <div class="section-title col-lg-7">

                        <div class="row">

                            <div class="col-lg-11 mx-auto">

                                <div class="bg-white p-3 text-justify shadow-sm border">
                                    <h5 class="text-center">About the College</h5>
                                    <hr>
                                    <?=getHospitalSettings()->description?>
                                </div>
                                <!-- <div class="text-center p-2 bg-base-background shadow">
                  <a href="hospital-inner-page.html" class="btn btn-sm bg-light-1 text-light rounded-0">Read More...</a>
                </div> -->

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">

                        <div class="row">
                            <div class="col-lg-12 bg-light-1 shadow-sm border">
                                <div class="icon-box text-light p-3 rounded">
                                    <!-- <div class="icon"><i class="fas fa-2x fa-heartbeat"></i></div> -->
                                    <!-- <hr> -->
                                    <h4><a class="text-light" href="">Academic &amp; Administrative Information</a></h4>
                                    <hr>
                                    <p class="font-weight-bold m-0"><b>Courses </b></p>
                                    <small>MBBS &amp; DNB session is going to start from 2022-23 session. Waiting for
                                        the approval of NMC.</small>
                                    <hr>
                                    <p class="font-weight-bold m-0" target="_blank"><b>Administrative Heads</b></p>
                                    <a class="small text-info" target="_blank"
                                        href="./assets/documents/admin-heads4.pdf">Administrative Heads</a>
                                    <!--<hr>-->
                                    <p class="font-weight-bold m-0"><b>Publications</b></p>
                                    <a class="text-info small" target="_blank"
                                        href="./assets/documents/publication3.pdf"> Publications of the faculties in the
                                        last 1 year</a>
                                    <!--<br>-->
                                    <!--<a class="text-info small" target="_blank" href="./assets/documents/publication2.pdf"> * Details of Research publications published in Journals of National level Academic Bodies / Journals</a>-->
                                </div>
                            </div>

                            <?php if(!empty($committees)){ ?>
                            <div class="col-lg-12  bg-light-1 mt-1 shadow-sm border">
                                <div class="icon-box text-light p-2 rounded">
                                    <h4>Institute Committees</h4>
                                    <hr>
                                    <ul>
                                        <?php foreach($committees as $row){ ?>
                                        <li> <a class="text-light" target="_blank"
                                                href="<?=base_url('get-file/' . $row->file)?>"><?=$row->title?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>

                            <!--<div class="col-lg-12  bg-light-1 mt-1 shadow-sm border">-->
                            <!--<div class="icon-box text-light p-2 rounded">-->
                            <!-- <div class="icon"><i class="fas fa-2x fa-pills"></i></div>
                        <hr> -->
                            <!--<h4>College Council</h4>-->
                            <!--<hr>-->
                            <!--<ul>-->
                            <!--<li> <a class="text-light" target="_blank" href="./assets/documents/28-10-2022.pdf">College Council BGMCH 26-10-2022</a> </li>-->
                            <!--<hr>-->
                            <!--<li> <a class="text-light" target="_blank" href="./assets/documents/gender-committee.pdf">Gender Harrassment Committee</a> </li>-->
                            <!--<hr>-->
                            <!-- <hr> -->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->

                        </div>


                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <!-- <section id="services" class="services">
      <div class="container">
      </div>
    </section> -->
        <!-- End Services Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="row">
                            <div class="col-12 d-block">
                                <div class="row">
                                    <div class="icon-box p-3 rounded shadow-sm w-100 height-300 border bg-light-1">
                                        <div class="icon">
                                            <a class="text-white float-end fs-6 fw-light fst-italic text-decoration-underline"
                                                href="<?=base_url('archive?type=TQ')?>">Archive</a>
                                        </div>
                                        <h4><a class="text-light" href="">Tender /Quotation</a></h4>
                                        <hr class="text-light">
                                        <div class="myTicker3 w-100">
                                            <ul class="list-group text-light">
                                                <?php foreach($tender as $key=>$row){ ?>
                                                <li>
                                                    <a class="text-white" href="<?=base_url('get-file/' . $row->file)?>"
                                                        target="_blank"><?=++$key?> . <?=$row->title?>
                                                        <!-- <img src="./assets/img/new.gif" class="height-10"> -->
                                                    </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-block">
                                <div class="row mt-lg-4">
                                    <div class="icon-box p-3 rounded shadow-sm w-100 height-300 border bg-light-1">
                                        <div class="icon">
                                            <a class="text-white float-end fs-6 fw-light fst-italic text-decoration-underline"
                                                href="<?=base_url('archive?type=GN')?>">Archive</a>
                                        </div>
                                        <h4><a class="text-light" href="">General Notices</a></h4>
                                        <hr class="text-light">
                                        <div class="myTicker3 w-100">
                                            <ul class="list-group text-light">
                                                <?php foreach($notice as $key=>$row){  ?>
                                                <li>
                                                    <a class="text-white" href="<?=base_url('get-file/' . $row->file)?>"
                                                        target="_blank"><?=++$key?> . <?=$row->title?>
                                                        <!-- <img src="./assets/img/new.gif" class="height-10"> -->
                                                    </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <table class="table table-hovered bg-white w-100">
                                    <thead class="">
                                        <tr class="text-dark text-center border shadow-sm bg-light-1">
                                            <th colspan="4" align="center" class="text-light">List of Departments</th>
                                        </tr>
                                        <tr class="">
                                            <th scope="col">#</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Type</th>
                                            <!-- <th scope="col">View</th> -->
                                        </tr>
                                    </thead>
                                    <tbody class="dept-list">
                                        <?php foreach($department as $key=>$row){ ?>
                                        <tr>
                                            <th scope="row"><?=++$key?></th>
                                            <td><?=$row->label?></td>
                                            <td><?=$row->description?></td>
                                            <td><?=$row->type?></td>
                                            <!-- <td><a href="department.php?dept=anatomy" class="">Click Here</a></td> -->
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row owl-carousel owl-theme">
                    <?php foreach($gallery as $key=>$row){ ?>
                    <div class="item">
                        <a href="<?=base_url('get-file/' . $row->image)?>" class="galelry-lightbox">
                            <img src="<?=base_url('get-file/' . $row->image)?>" alt="" class="img-fluid">
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </section>
        <!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact mb-0 pb-0">
            <div class="container">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <p>Barasat Government Medical College & Hospital, Barasat.<br> North 24 Parganas, Pin-700124
                            </p>
                            <i class="bi bi-phone"></i>
                            <p>
                                Phone: <?=getHospitalSettings()->phone_1?>
                            </p>
                            <p>
                                For admission related queries please contact: Dean of Students'
                                affair ( <?=getHospitalSettings()->phone_2?>);
                            </p>
                            <p>
                                Admission dealing staff (<?=getHospitalSettings()->phone_3?>)
                            </p>
                            <i class="bi bi-envelope"></i>
                            <p>Mail: <?=getHospitalSettings()->mail_1?></p>
                            <p>
                                <?=getHospitalSettings()->mail_2?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- <small class="d-block text-end fst-italic">< ?=getHospitalSettings()->map?></small> -->
                        <iframe src="<?=getHospitalSettings()->map?>" height="450" style="border:0;width:100%"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>

            </div>

            <!-- <div class="container">
        <div class="row mt-sm-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-sm-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div> -->
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <?=view('component/front/footer')?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Citizens Charter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="./assets/documents/citizen-charter.jpg" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="showHospitalHeadModalModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showHospitalHeadModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="showHospitalHeadModalBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">History of Barasat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Barasat, the District Head Quarter of North 24 Parganas, is now being a part of greater
                        Kolkata . The town is situated on an important railway and roadway junction and well
                        connected to the different parts of the State. Several significant roads like National
                        Highway 34 (Krishnanagar Road leading towards North Bengal), Jessore Road (road leading
                        to Jessore in Bangladesh via Bongaon), road leading to Basirhat etc. cross through the
                        town.
                    </p>
                    <p>
                        Netaji Subhas Chandra Bose International Airport, Kolkata is only 8 km from Barasat.
                    </p>
                    <p>
                        Dated early in 1600 during the Mogul period, Sankar Chakraborty (a commander of the
                        zamindar Pratapaditya and king of Jessore in present-day Bangladesh) came to Barasat,
                        and established himself. In 1700, Hazarat Ekdil Shah, a renowned social worker moved to
                        this town. While Maharaj Pratapaditya made his way to Kolkata from Jessore and
                        Sirajudullah went to Kolkata from Murshidabad via Barasat on a road which became these
                        two national highways later on.
                    </p>
                    <p>
                        Warren Hastings built his villa in the heart of Barasat and Bankim Chandra Chatterjee
                        was the town's first Indian deputy magistrate.Titumir, a farmer, fomented a revolution
                        against indigo merchants in Barasat. Iswar Chandra Vidyasagar, Pyari Charan Sarkar and
                        Kalikrishna Mitra were known for social reformation in the town, including women's
                        education and widow remarriage.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="hospital" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">History of Barasat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="showHospitalBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Vendor JS Files -->
    <script src="http://barasatgmch.ac.in/assets/vendor/purecounter/purecounter.js"></script>
    <script src="http://barasatgmch.ac.in/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://barasatgmch.ac.in/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="http://barasatgmch.ac.in/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="http://barasatgmch.ac.in/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="http://barasatgmch.ac.in/assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="http://barasatgmch.ac.in/assets/js/jquery.easy-ticker.min.js"></script>


    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.4/datatables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        $('table').DataTable();

        // ticker area

        var ticker3 = $('.myTicker3').easyTicker().data('easyTicker');
        $('.up3').click(function() {
            ticker3.up();
        });

        $('.down3').click(function() {
            ticker3.down();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

    })


    function showHospitalHeadModal(key) {
        var modalData = $('#modalData_' + key).html();
        var modalLabel = $('#modalLabel_' + key).html();
        $("#showHospitalHeadModalBody").html(modalData);
        $("#showHospitalHeadModalLabel").html(modalLabel);
        $('#showHospitalHeadModalModal').modal('show'); // Show modal

    }

    function aboutTheHospital() {
        var modalData = $('#history_and_heritage').html();
        $("#showHospitalBody").html(modalData);
        $('#hospital').modal('show'); // Show modal

    }
    </script>


    <!-- <script type="text/javascript" href="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> -->

</body>

</html>