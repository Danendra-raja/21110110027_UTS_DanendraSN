<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center left-content-between mb-4">
        <img src="assets/paswir.png" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <h1 class="h1 mb-0 text-dark">Dashboard Admin PASWA 2022</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php
        include_once("connection.php");
        $result_peserta = mysqli_query($mysqli, "select count(nim) as total_peserta from tab_peserta");
        $total_peserta = mysqli_fetch_assoc($result_peserta);
        if (empty($total_peserta)) {
            $t_peserta = "0";
        } else {
            $t_peserta = $total_peserta['total_peserta'];
        }

        $result_panitia = mysqli_query($mysqli, "select count(nim) as total_panitia from tab_panitia");
        $total_panitia = mysqli_fetch_assoc($result_panitia);
        if (empty($total_panitia)) {
            $t_panitia = "0";
        } else {
            $t_panitia = $total_panitia['total_panitia'];
        }

        $result_kegiatan = mysqli_query($mysqli, "select count(id) as total_kegiatan from tab_kegiatan");
        $total_kegiatan = mysqli_fetch_assoc($result_kegiatan);
        if (empty($total_kegiatan)) {
            $t_kegiatan = "0";
        } else {
            $t_kegiatan = $total_kegiatan['total_kegiatan'];
        }

        $result_kelompok = mysqli_query($mysqli, "select count(id) as total_kelompok from tab_kelompok");
        $total_kelompok = mysqli_fetch_assoc($result_kelompok);
        if (empty($total_kelompok)) {
            $t_kelompok = "0";
        } else {
            $t_kelompok = $total_kelompok['total_kelompok'];
        }

        $result_tamu = mysqli_query($mysqli, "select count(id) as total_tamu from tab_tamu");
        $total_tamu = mysqli_fetch_assoc($result_tamu);
        if (empty($total_tamu)) {
            $t_tamu = "0";
        } else {
            $t_tamu = $total_tamu['total_tamu'];
        }

        $result_perlengkapan = mysqli_query($mysqli, "select count(id) as total_perlengkapan from tab_perlengkapan");
        $total_perlengkapan = mysqli_fetch_assoc($result_perlengkapan);
        if (empty($total_perlengkapan)) {
            $t_perlengkapan = "0";
        } else {
            $t_perlengkapan = $total_perlengkapan['total_perlengkapan'];
        }

        ?>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Peserta</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_peserta; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-card fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Kelompok</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_kelompok; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-mendeley fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Total Panitia</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_panitia; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fist-raised fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Kegiatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_kegiatan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-check fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Tamu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_tamu; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-restroom fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Perlengkapan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t_perlengkapan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-gavel fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <br>
    <h1 class="text-dark">Tata Tertib PASWA 2022</h1>
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="datatable">
            <thead>
                <tr class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">
                    <th class="min-w-15px">No.</th>
                    <th class="min-w-225px">Nama Tata Tertib</th>

                </tr>
            </thead>
            <tbody class="fw-bold text-danger">
                <?php

                include_once("connection.php");
                $no = 0;
                $result = mysqli_query($mysqli, "SELECT * FROM tab_tata_tertib");
                while ($row = mysqli_fetch_array($result)) {
                    $no++;
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row['tata_tertib'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <!-- End of Main Content -->
</div>
<?php include('footer.php'); ?>