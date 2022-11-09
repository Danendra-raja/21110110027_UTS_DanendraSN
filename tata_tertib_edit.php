<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Tata Tertib</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Tata Tertib</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="tata_tertib_pro_edit.php">
                <?php
                $id = $_GET['id'];
                include 'connection.php';
                $res = mysqli_fetch_array(mysqli_query($mysqli,"SELECT * FROM tab_tata_tertib WHERE id = $id"));
                $tata_tertib = $res['tata_tertib'];
                ?>
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="row">
                    <div class="col-lg-12">
                        <label>Tata Tertib</label>
                        <input type="text" name="tata_tertib" class="form-control" value="<?=$tata_tertib?>" required>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="tata_tertib.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>