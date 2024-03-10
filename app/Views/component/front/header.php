 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-flex align-items-center fixed-top bg-light-1 text-light">
        <div class="container d-flex justify-content-center">
            <div class="contact-info d-flex align-items-center">
                <h3 class="fw-bold"><?=getHospitalSettings()->institute_name?></h3>
            </div>
            <!-- <div class="d-none d-lg-flex social-links fw-bold align-items-center">
        <i class="bi bi-envelope"></i> 
        &nbsp;&nbsp;<i class="bi bi-phone"></i> +91 8998989898
      </div> -->
        </div>
    </div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <nav id="navbar" class="navbar order-last order-lg-0 ms-auto">
                <ul>
                    <li><a class="nav-link scrollto fw-bold" href="index.php#hero">Home</a></li>
                    <li class="dropdown"><a href="#counts"><span class="fw-bold">College</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="index.php#faq"><span>Departments</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?=base_url('department?type=preclinical')?>">Pre-clinical</a></li>
                                    <li><a href="<?=base_url('department?type=paraclinical')?>">Para-clinical</a></li>
                                    <li><a href="<?=base_url('department?type=clinical')?>">Clinical</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="index.php#faq"><span>Department wise Faculty & Publications
                                        Details</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?=base_url('inner-page?id=2')?>"
                                            target="_blank">Physiology</a></li>
                                    <li><a href="<?=base_url('inner-page?id=3')?>" target="_blank">FMT</a></li>
                                    <li><a href="<?=base_url('inner-page?id=4')?>"
                                            target="_blank">Community Medicine</a></li>
                                    <li><a href="<?=base_url('inner-page?id=5')?>" target="_blank">Pathology</a>
                                    </li>
                                    <li><a href="<?=base_url('inner-page?id=6')?>"
                                            target="_blank">Microbilogy</a></li>
                                    <li><a href="<?=base_url('inner-page?id=7')?>"
                                            target="_blank">General Medicine</a></li>
                                    <li><a href="<?=base_url('inner-page?id=8')?>" target="_blank">Gayene & Obs</a></li>
                                    <li><a href="<?=base_url('inner-page?id=9')?>"
                                            target="_blank">Biochemistry</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="<?=base_url('inner-page?id=10')?>"
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
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:void(0)"><span class="fw-bold">Students' Section</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href=""></a></li>
                            <li class="dropdown"><a href="#"><span>List of Students'</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?=base_url('inner-page?id=11')?>"
                                            target="_blank">Session - 2023-28</a></li>
                                    <li><a href="<?=base_url('inner-page?id=12')?>" target="_blank">Session - 2022-27</a></li>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Forms</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?=base_url('inner-page?id=13')?>" target="_blank">Admission Form 2023</a></li>
                                    <li><a href="<?=base_url('inner-page?id=14')?>" target="_blank">AIQ Checklist</a>
                                    </li>
                                    <li><a href="<?=base_url('inner-page?id=15')?>" target="_blank">Bond Proforma</a>
                                    </li>
                                    <li><a href="<?=base_url('inner-page?id=16')?>" target="_blank">Check List SQ</a>
                                    </li>
                                    <li><a href="<?=base_url('inner-page?id=17')?>" target="_blank">Document Receipt</a></li>
                                    <li><a href="<?=base_url('inner-page?id=18')?>" target="_blank">Fee Payment</a></li>
                                    <li><a href="<?=base_url('inner-page?id=19')?>" target="_blank">Medical Certificate</a></li>
                                    <li><a href="<?=base_url('inner-page?id=20')?>" target="_blank">Undertaking</a>
                                    </li>
                                    <li><a href="<?=base_url('inner-page?id=21')?>" target="_blank">Willingness</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Student Notice</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="<?=base_url('inner-page?id=22')?>"
                                            target="_blank">2nd phase class routine</a></li>
                                    <li><a href="<?=base_url('inner-page?id=23')?>"
                                            target="_blank">1st Phase MBBS Weekly Schedule</a></li>
                                    <li><a href="<?=base_url('inner-page?id=24')?>"
                                            target="_blank">Foundation Course Details of MBBS 2023-24</a></li>
                                    <li><a href="<?=base_url('inner-page?id=25')?>"
                                            target="_blank">NOTICE for admission of SQ students</a></li>
                                    <li><a href="<?=base_url('inner-page?id=26')?>" target="_blank">Notice for AIQ students</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto" href="<?=base_url('inner-page?id=27')?>">Fees Structure</a></li>
                        </ul>
                    </li>
                    <!--<li><a class="nav-link scrollto fw-bold" href="#faq">Departments</a></li>-->
                    <li><a class="nav-link scrollto fw-bold" href="index.php#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto fw-bold cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" href="javascript:void(0)"><span>Citizens Charter</span></a>

                    </li>
                    <li><a class="nav-link scrollto fw-bold" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->