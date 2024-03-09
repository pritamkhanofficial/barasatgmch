<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Barasat | BGMCH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://barasatgmch.ac.in/assets/img/favicon.png" rel="icon">
    <link href="https://barasatgmch.ac.in/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://barasatgmch.ac.in/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://barasatgmch.ac.in/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="https://barasatgmch.ac.in/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://barasatgmch.ac.in/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://barasatgmch.ac.in/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://barasatgmch.ac.in/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://barasatgmch.ac.in/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="https://barasatgmch.ac.in/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.4/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="https://barasatgmch.ac.in/assets/css/style.css" rel="stylesheet">
    <style>
    #main {
        min-height: 1000px;
    }

    .header-style {
        background: #373e50;
        color: #fff;
        padding: 5px;
        text-align: center;
        font-weight: bold;
    }
    </style>


</head>

<body>

    <?=view('component/front/header')?>

    <!-- ======= Hero Section ======= -->

    <main id="main" style="margin-top:10rem" class="container-md">

        <div class="row">
            <!-- <h5 class="header-style">< ?=$label?></h5> -->
            <div class="col-lg-12">
                <?=$content->content?>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?=base_url('get-file/' . $content->file_1) ?>"><?=$content->title_1?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?=base_url('get-file/' . $content->file_2) ?>"><?=$content->title_2?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?=base_url('get-file/' . $content->file_3) ?>"><?=$content->title_3?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?=base_url('get-file/' . $content->file_4) ?>"><?=$content->title_4?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?=base_url('get-file/' . $content->file_5) ?>"><?=$content->title_5?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?=base_url('get-file/' . $content->file_6) ?>"><?=$content->title_6?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?=base_url('get-file/' . $content->file_7) ?>"><?=$content->title_7?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?=base_url('get-file/' . $content->file_8) ?>"><?=$content->title_8   ?></a>
                    </div>
                </div>
            </div>



        </div>

    </main>

    <?=view('component/front/footer')?>

    <!-- Vendor JS Files -->
    <script src="https://barasatgmch.ac.in/assets/vendor/purecounter/purecounter.js"></script>
    <script src="https://barasatgmch.ac.in/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://barasatgmch.ac.in/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://barasatgmch.ac.in/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://barasatgmch.ac.in/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="https://barasatgmch.ac.in/assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://barasatgmch.ac.in/assets/js/jquery.easy-ticker.min.js"></script>


    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.4/datatables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('table').DataTable();
    })
    </script>
</body>

</html>