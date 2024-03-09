<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Barasat | BGMCH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?=view('component/front/head')?>


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

    <?=view('component/front/script')?>
    <script type="text/javascript">
    $(document).ready(function() {
        $('table').DataTable();
    })
    </script>
</body>

</html>