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

                    </li>
                    <li><a class="nav-link scrollto fw-bold" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->