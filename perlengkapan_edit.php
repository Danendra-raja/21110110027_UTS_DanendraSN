<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Perlengkapan</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Perlengkapan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="perlengkapan_pro_edit.php">
                <?php
                $id = $_GET['id'];
                include 'connection.php';
                $result = mysqli_query($mysqli, "SELECT * FROM tab_perlengkapan WHERE id=$id");

                $res = mysqli_fetch_array($result);

                $perlengkapan = $res['perlengkapan'];
                $kategori = $res['kategori'];
                ?>
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="row">
                    <div class="col-lg-6">
                        <label>Perlengkapan</label>
                        <input type="text" name="perlengkapan" class="form-control" value="<?=$perlengkapan?>" required>
                    </div>

                    <div class="col-lg-6">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="<?=$kategori?>" required>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="perlengkapan.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>