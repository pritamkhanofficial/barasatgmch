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
            <h5 class="header-style"><?=$label?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($department as $key=>$row){ ?>
                        <tr>
                        <th scope="row"><?=++$key?></th>
                        <td><?=$row->label?></td>
                        <td><a href="<?=base_url('staff?id=' . $row->id)?>" target="_blank">Link</a></td>
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
    
    <?=view('component/front/script')?>
    <script type="text/javascript">
    $(document).ready(function() {
        $('table').DataTable();
    })
    </script>
</body>

</html>