<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mahasiswa Terdaftar :</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Terdaftar</h6>
            <br>
            <a href="peserta_add.php" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIM</td>
                            <td>Nama</td>
                            <td>Program Studi</td>
                            <td>Semester</td>
                            <td>Kelas</td>
                            <td>No Handphone</td>
                            <td>Email</td>
                            <td>Alamat</td>
                            <td>Jenis Kelamin</td>
                            <td>Foto</td>
                            <td>Agama</td>
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connection.php");
                        $no = 0;
                        // $result = mysqli_query($mysqli, "SELECT * FROM tab_peserta");
                        // while ($row = mysqli_fetch_array($result))
                        $sql = "SELECT * FROM tab_peserta";
                        $result = mysqli_query($mysqli,$sql);

                        if(mysqli_num_rows($result)>0) {
                            while($row = mysqli_fetch_assoc($result)){
                            $no++;
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $row['nim'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['prodi'] . "</td>";
                            echo "<td>" . $row['semester'] . "</td>";
                            echo "<td>" . $row['kelas'] . "</td>";
                            echo "<td>" . $row['no_hp'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['alamat'] . "</td>";
                            echo "<td>" . $row['jenis_kelamin'] . "</td>";
                            echo "<td class='text-dark'> <img src='gambar/".$row['foto']."' width='80px'> </td>";
                            echo "<td>" . $row['agama'] . "</td>";
                            echo "<td>" . $row['tempat_lahir'] . "</td>";
                            echo "<td>" . $row['tanggal_lahir'] . "</td>";
                            
                            echo "<td><a href=\"peserta_edit.php?nim=". $row['nim'] . "\">Edit</a> | 
                            <a href=\"peserta_pro_delete.php?nim=". $row['nim'] . "\" onClick=\"return confirm('Yakin ingin menghapus ?')\">Delete</a></td>";
                            echo "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }

                        mysqli_close($mysqli);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>