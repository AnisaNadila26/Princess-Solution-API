<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img class="img-profile rounded-circle" src="/assets/images/logop.png" width=50px;>
                </div>
                <div class="sidebar-brand-text mx-3"> Princess Solution <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-book"></i>
                    <span>Data Kursus</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Keseluruhan:</h6>
                        <a class="collapse-item" href="/seluruhsiswa">Data Seluruh Siswa</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Data per Instruktur:</h6>
                        <a class="collapse-item" href="/Hendri">Siswa Hendri</a>
                        <a class="collapse-item" href="/Suhadi">Siswa Suhadi</a>
                        <a class="collapse-item" href="/Yono">Siswa Yono</a>
                        <a class="collapse-item" href="/Eko">Siswa Eko</a>
                        <h6 class="collapse-header">Data Tidak Lengkap:</h6>
                        <a class="collapse-item" href="/tidak-diterima">Data Tidak Diterima</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Admin</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Admin:</h6>
                        <a class="collapse-item" href="/inputadmin">Tambah Data Admin</a>
                        <a class="collapse-item" href="/lihatadmin">Lihat Data Admin</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Jadwal</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jadwal per Instruktur:</h6>
                        <a class="collapse-item" href="/lihatjadwal/Hendri">Jadwal Hendri</a>
                        <a class="collapse-item" href="/lihatjadwal/Suhadi">Jadwal Suhadi</a>
                        <a class="collapse-item" href="/lihatjadwal/Yono">Jadwal Yono</a>
                        <a class="collapse-item" href="/lihatjadwal/Eko">Jadwal Eko</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mr-auto static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-5">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Navbar -->
                    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <a href="/logout" type="button" onclick="return confirm('Apakah anda yakin ingin Logout ?');"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="container" style="padding: 20px;">
                        <h1>Data Admin <br></br></h1>

                        <div id="body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-admin" role="tab">Admin</a>
                                    <a class="nav-item nav-link" id="nav-kontak-tab" data-toggle="tab" href="#nav-validator" role="tab">Validator</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-admin" role="tabpanel">
                                    <table style="text-align:center" class="table table-striped" width="1200px" id="table1">
                                        <thead>
                                            <tr>
                                                <td scope="col">Username</td>
                                                <td scope="col">Password</td>
                                                <td scope="col">Nama</td>
                                                <td scope="col">Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($admin as $row) :
                                            ?>
                                                <tr>
                                                    <td scope="row"><?= $row['username'] ?></td>
                                                    <td scope="row"><?= $row['password'] ?></td>
                                                    <td scope="row"><?= $row['nama'] ?></td>
                                                    <td scope="row" style="text-align:center">
                                                        <a href="<?= base_url("editadmin/" . $row['id']) ?>" class="btn btn-primary" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" role="button"><i class="fas fa-pencil-alt"></i></a>
                                                        <form action="deleteadmin/<?= $row['id'] ?>" method="post" class="d-inline">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="Delete">
                                                            <button type="submit" class="btn btn-danger" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" onclick="return confirm('Apakah anda yakin menghapus Post ini ?'); "><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-validator" role="tabpanel">
                                    <table style="text-align:center" class="table table-striped" width="1200px" id="table1">
                                        <thead>
                                            <tr>
                                                <td scope="col">Username</td>
                                                <td scope="col">Password</td>
                                                <td scope="col">Nama</td>
                                                <td scope="col">Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($validator as $row) :
                                            ?>
                                                <tr>
                                                    <td scope="row"><?= $row['username'] ?></td>
                                                    <td scope="row"><?= $row['password'] ?></td>
                                                    <td scope="row"><?= $row['nama'] ?></td>
                                                    <td scope="row" style="text-align:center">
                                                        <a href="<?= base_url("editvalid/" . $row['id']) ?>" class="btn btn-primary" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" role="button"><i class="fas fa-pencil-alt"></i></a>
                                                        <form action="deletevalid/<?= $row['id'] ?>" method="post" class="d-inline">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="Delete">
                                                            <button type="submit" class="btn btn-danger" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" onclick="return confirm('Apakah anda yakin menghapus Post ini ?'); "><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>
<?php $this->endSection(); ?>