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

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top bg-light-1 text-light">
        <div class="container d-flex justify-content-center">
            <div class="contact-info d-flex align-items-center">
                <h3 class="fw-bold">Barasat Government Medical College &amp; Hospital</h3>
            </div>
            <!-- <div class="d-none d-lg-flex social-links fw-bold align-items-center">
        <i class="bi bi-envelope"></i> 
        &nbsp;&nbsp;<i class="bi bi-phone"></i> +91 8998989898
      </div> -->
        </div>
    </div>

    <!-- ======= Header ======= -->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0 ms-auto">
                <ul>
                    <li><a class="nav-link scrollto fw-bold" href="index.php#hero">Home</a></li>
                    <li class="dropdown"><a href="#counts"><span class="fw-bold">College</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="index.php#faq"><span>Departments</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="department-group.php?group=prec">Pre-clinical</a></li>
                                    <li><a href="department-group.php?group=parc">Para-clinical</a></li>
                                    <li><a href="department-group.php?group=clin">Clinical</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="index.php#faq"><span>Department wise Faculty & Publications
                                        Details</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="assets/documents/Physiology_Faculty Details.pdf"
                                            target="_blank">Physiology</a></li>
                                    <li><a href="assets/documents/FMT_Faculty Details.pdf" target="_blank">FMT</a></li>
                                    <li><a href="assets/documents/Community Medicine_Faculty Details.pdf"
                                            target="_blank">Community Medicine</a></li>
                                    <li><a href="assets/documents/Pathology_ Website.pdf" target="_blank">Pathology</a>
                                    </li>
                                    <li><a href="assets/documents/microbilogy_Details Required for College Website-final.pdf"
                                            target="_blank">Microbilogy</a></li>
                                    <li><a href="assets/documents/General Medicine_Faculty Details.pdf"
                                            target="_blank">General Medicine</a></li>
                                    <li><a href="assets/documents/Gayene&Obs_Faculty Details.pdf" target="_blank">Gayene
                                            & Obs</a></li>
                                    <li><a href="assets/documents/Bio_Details_Required_for_College_Website.pdf"
                                            target="_blank">Biochemistry</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="assets/documents/BGMCH_Annual_Discloser_Report_2023.pdf"
                                    target="_blank"><span>BGMCH Annual Discloser Report 2023</span> </a>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)"><span class="fw-bold">Hospital</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="index.php#why-us">About the Hospital</a></li>
                            <li><a class="nav-link scrollto fw-bold cursor-pointer" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3" href="javascript:void(0)"><span>History of
                                        Barasat</span></a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)"><span class="fw-bold">Students' Section</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href=""></a></li>
                            <li class="dropdown"><a href="#"><span>List of Students'</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="./assets/documents/MBBS Seats Information of BGMCH of Batch 2023-24_rotated.pdf"
                                            target="_blank">Session - 2023-28</a></li>
                                    <li><a href="./assets/documents/students_list_Adm_2022.pdf" target="_blank">Session
                                            - 2022-27</a></li>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Forms</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="./assets/documents/Admission_form_2023.pdf" target="_blank">Admission
                                            Form 2023</a></li>
                                    <li><a href="./assets/documents/AIQ_Checklist.pdf" target="_blank">AIQ Checklist</a>
                                    </li>
                                    <li><a href="./assets/documents/Bond_Proforma.pdf" target="_blank">Bond Proforma</a>
                                    </li>
                                    <li><a href="./assets/documents/Check_List_SQ.pdf" target="_blank">Check List SQ</a>
                                    </li>
                                    <li><a href="./assets/documents/Document_Receipt.pdf" target="_blank">Document
                                            Receipt</a></li>
                                    <li><a href="./assets/documents/Fee_Payment_2023.pdf" target="_blank">Fee
                                            Payment</a></li>
                                    <li><a href="./assets/documents/Medical_Certificate.pdf" target="_blank">Medical
                                            Certificate</a></li>
                                    <li><a href="./assets/documents/Undertaking.pdf" target="_blank">Undertaking</a>
                                    </li>
                                    <li><a href="./assets/documents/Willingness.pdf" target="_blank">Willingness</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Student Notice</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="./assets/documents/2nd phase class routine_rotated.pdf"
                                            target="_blank">2nd phase class routine</a></li>
                                    <li><a href="./assets/documents/1st Phase MBBS Weekly Schedule_rotated.pdf"
                                            target="_blank">1st Phase MBBS Weekly Schedule</a></li>
                                    <li><a href="./assets/documents/Foundation Course Details of MBBS 2023-24_rotated.pdf"
                                            target="_blank">Foundation Course Details of MBBS 2023-24</a></li>
                                    <li><a href="./assets/documents/NOTICE_for_admission_of_SQ_students.pdf"
                                            target="_blank">NOTICE for admission of SQ students</a></li>
                                    <li><a href="./assets/documents/Notice_for_AIQ_students.pdf" target="_blank">Notice
                                            for AIQ students</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto" href="./assets/documents/Fees_structure.pdf">Fees
                                    Structure</a></li>
                        </ul>
                    </li>
                    <!--<li><a class="nav-link scrollto fw-bold" href="#faq">Departments</a></li>-->
                    <li><a class="nav-link scrollto fw-bold" href="index.php#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto fw-bold cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" href="javascript:void(0)"><span>Citizens Charter</span></a>
                        <!-- <ul>
              <li><a class="nav-link scrollto" href="#counts">OPD Department</a></li>
              <li><a target="_blank" href="./documents/bed-distribution.pdf">IPD Department</a></li>
              <li><a target="_blank" href="./documents/List-of-faculties.pdf">Special Clinic</a></li>
              <li><a target="_blank" href="./documents/WBUHS-officials.pdf">Other Services</a></li>
              <li><a target="_blank" href="./documents/WBUHS-officials.pdf">Ongoing National Program</a></li>
              <li><a target="_blank" href="./documents/WBUHS-officials.pdf">Diagnostic Services</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul> -->
                    </li>
                    <li><a class="nav-link scrollto fw-bold" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

        </div>
    </header>
    <!-- End Header -->
    <!-- End Header -->

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
                        <p><span class="fs-6 fw-bold">Institute Name:</span> Barasat Government Medical College &
                            Hospital</p>
                        <hr>
                        <p><span class="fs-6 fw-bold">Affiliated To:</span> West Bengal University Of Health Sciences
                        </p>
                        <p><span class="fs-6 fw-bold">Vice Chancellor: </span> Prof. (Dr.) Suhrita Paul</p>
                        <p><span class="fs-6 fw-bold">Registrar: </span> Prof. (Dr.) Indrajit Gupta</p>
                        <hr>
                        <p><span class="fs-6 fw-bold">Year of Registration:</span> 2021</p>
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
                                <img src="./assets/img/attention.gif" alt="" style="width: 100%;height: 100px;" />
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
                                        <hr>
                                        <p class="">
                                            The earlier stages of development of this district hospital may be traced to
                                            its inception as Hatkhola Dispensary a long time back on 1854. Passing
                                            through as the Barasat Cottage Hospital run by the local municipal authority
                                            on 1908 it started running with15 indoor beds on 1930. Ultimately it was
                                            taken over by the Government in 1945 and shifted to its present location in
                                            1961. The present bed strength of this hospital is 600...
                                        </p>
                                        <!--<p>This hospital runs with 600 indoor beds including 12 CCU and 37 SNCU beds and expanding its’ patient care services in different fields... </p>-->
                                        <div class="text-center">
                                            <a class="nav-link scrollto fw-bold text-info float-end mt-1"
                                                data-bs-toggle="modal" data-bs-target="#hospital"
                                                href="javascript:void(0)"><span>Read more...</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-4 shadow bg-light">
                        <div class="icon-box p-3 rounded height-300">

                            <video poster="./assets/img/barasat-video-overlay.png" controls
                                class="w-100 cursor-pointer">
                                <source src="./assets/video/video.mp4" type="video/mp4">
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
                                    <p>
                                        Barasat Government Medical College and Hospital is a newly developed medical
                                        college under CSS II. This Medical College is situated on a 20.53 acres land in
                                        the existing campus of Barasat District Hospital, Barasat, Mouza-Banamalipur (JL
                                        No:- 80) & Uttarhat (JL No:-78) North 24 parganas, West Bengal. PIN-700124. As
                                        at present North 24 Parganas is the most populous District in India so the
                                        establishment of this Medical Institution will cater patients care service to a
                                        large population.
                                    </p>
                                    <p class="">

                                        Directorate of Medical Education, Government of West Bengal is the regulatory
                                        authority.100 MBBS students. Students will be admitted annually through
                                        NEET(NATIONAL ELIGIBILITY CUM ENTRANCE TEST) (UG) from 2022-23 session after
                                        obtaining from letter of permission from National Medical Council.
                                    </p>
                                    <p>
                                        DNB courses on different disciplines with a total of 16 seats allotted by NBE
                                        are already running in this Institution.
                                    </p>
                                    <p>The foundation stone of this Medical College was laid by Honbl’e Chief Minister
                                        of West Bengal Smt Mamata Banerjee on 22nd February, 2019.</p>
                                    <p>
                                        The Barasat Government Medical College and Hospital College is comprising of
                                        teaching block, administrative block, a new OPD complex, Students’ hostel,
                                        residents’ doctors’ quarters, Nurses’ quarters, Teaching staffs’ quarters and
                                        Non-Teaching staffs’ quarters.
                                    </p>
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

                            <div class="col-lg-12  bg-light-1 mt-1 shadow-sm border">
                                <div class="icon-box text-light p-2 rounded">
                                    <!-- <div class="icon"><i class="fas fa-2x fa-pills"></i></div>
                        <hr> -->
                                    <h4>Institute Committees</h4>
                                    <hr>
                                    <ul>
                                        <li> <a class="text-light" target="_blank"
                                                href="./assets/documents/anti-committee.pdf">Anti Ragging
                                                Committee,BGMCH</a> </li>
                                        <!--<hr>-->
                                        <li> <a class="text-light" target="_blank"
                                                href="./assets/documents/gender.pdf">Gender Harrassment
                                                Committee,BGMCH</a> </li>
                                        <li> <a class="text-light" target="_blank"
                                                href="./assets/documents/College_Council_committee.pdf">College Council
                                                Committee,BGMCH</a> </li>
                                        <li> <a class="text-light" target="_blank"
                                                href="./assets/documents/curriculum_committee.pdf">Curriculum
                                                Committee,BGMCH</a> </li>
                                        <li> <a class="text-light" target="_blank"
                                                href="./assets/documents/hostel_committee.jpg">Hostel
                                                Committee,BGMCH</a> </li>
                                        <!--<li> <a class="text-light" target="_blank"-->
                                        <!--        href="./assets/documents/Faculty_list_of_MEU_rotated.pdf">Faculty list-->
                                        <!--        of MEU,BGMCH</a> </li>-->
                                        <li> <a class="text-light" target="_blank"
                                                href="./assets/documents/Hospital_Infection_Control_Committee.pdf">Hospital
                                                Infection Control Committee,BGMCH</a> </li>
                                        <li> <a class="text-light" target="_blank"
                                                href="./assets/documents/Medical Education Unit of Barasat Government Medical College.pdf">Medical
                                                Education Committee reformed, BGMCH</a> </li>
                                        <!--<li> <a class="text-light" target="_blank"-->
                                        <!--        href="./assets/documents/Phasewise_Curriculum_Sub_Committee_ATI.pdf">Phasewise-->
                                        <!--        Curriculum Sub Committee and ATI, BGMCH</a> </li>-->
                                        <li> <a class="text-light" target="_blank"
                                                href="./assets/documents/Technical_Advisory_Committee.pdf">Technical
                                                Advisory Committee,BGMCH</a> </li>
                                        <hr>
                                        <!-- <hr> -->
                                    </ul>
                                </div>
                            </div>

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
                                            <!-- <a class="text-white float-end fs-6 fw-light fst-italic text-decoration-underline"
                                                href="archive.php?q=tender">Archive</a> -->
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
                                            <!-- <a class="text-white float-end fs-6 fw-light fst-italic text-decoration-underline"
                                                href="archive.php?q=g_notices">Archive</a> -->
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
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Doctors Section ======= -->
        <!-- <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-4.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
        <!-- End Doctors Section -->



        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpeg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpeg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpeg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpeg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpeg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->


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
                            <p>Phone: 033-25523228 <br> For admission related queries please contact: Dean of Students'
                                affair ( 7003955245); Admission dealing staff (80016 11612)</p>
                            <i class="bi bi-envelope"></i>
                            <p>Mail: info@barasatgmch.ac.in / support@barasatgmch.ac.in</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- <small class="d-block text-end fst-italic">Probable google link below</small> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.140616546162!2d88.49010701496232!3d22.723014285105567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8a33e5afdde31%3A0x4ec9f678ec80a363!2sBarasat%20government%20medical%20college%20%26%20hospital!5e0!3m2!1sen!2sin!4v1645535999509!5m2!1sen!2sin"
                            height="450" style="border:0;width:100%" allowfullscreen="" loading="lazy"></iframe>
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

    <!-- ======= Footer ======= -->
    <footer id="footer" class="bg-light-1">

        <div class="container d-md-flex py-4">

            <div class="row w-100">
                <div class="copyright text-start col-md-6 text-white">
                    &copy; Copyright <strong><span>B.G.M.C.H.</span></strong>. All Rights Reserved
                </div>
                <div class="credits text-end col-md-6 text-white">
                    With Gratitude From | <a target="_blank" href="https://sketchmeglobal.com">Sketch Me Global</a>
                </div>
            </div>
            <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->

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
            <div class="modal fade" id="showHospitalHeadModalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <div class="modal-body">
                            <p class="">
                                The earlier stages of development of this district hospital may be traced to its
                                inception as Hatkhola Dispensary a long time back on 1854. Passing through as the
                                Barasat Cottage Hospital run by the local municipal authority on 1908 it started running
                                with15 indoor beds on 1930. Ultimately it was taken over by the Government in 1945 and
                                shifted to its present location in 1961. The present bed strength of this hospital is
                                600.
                            </p>
                            <p>This hospital runs with 600 indoor beds including 12 CCU and 37 SNCU beds and expanding
                                its’ patient care services in different fields as per the needs of the current era.
                                Average no OPD patients attended per day is about 3000. In 2021 total OPD patients’
                                turnover was 960088. </p>
                            <p>Average number of delivery per day is 20 with total of 7427 deliveries in 2021. </p>
                            <p>Different kinds of diagnostic laboratory tests are done for 24 hours with on an average
                                2200 tests performed per day.</p>
                            <p>5 bedded dialysis unit and a well-equipped blood bank with component separation
                                facilities are available with this hospital. Total number of blood unit issued in 2021
                                is 14076.</p>
                            <p>This hospital participates in all Government programs whichever applicable with
                                successful implementation and playing a significant role in combating and controlling
                                the ongoing COVID-19 pandemic.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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


    function showHospitalHeadModal(key){ 
        var modalData = $('#modalData_' + key).html();
        var modalLabel = $('#modalLabel_' + key).html();
        $("#showHospitalHeadModalBody").html(modalData);
        $("#showHospitalHeadModalLabel").html(modalLabel);
        $('#showHospitalHeadModalModal').modal('show'); // Show modal

    }
    </script>


    <!-- <script type="text/javascript" href="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script> -->

</body>

</html>