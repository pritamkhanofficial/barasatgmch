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
            <h5 class="header-style"><?=$label?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($docArchive as $key=>$row){ ?>
                        <tr>
                        <th scope="row">1</th>
                        <td><?=$row->title?></td>
                        <td><a href="<?=base_url('get-file/' . $row->file)?>" target="_blank">Link</a></td>
                        <td>-</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

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