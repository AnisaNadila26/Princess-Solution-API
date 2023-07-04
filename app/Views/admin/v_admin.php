<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <img class="img-profile rounded-circle" src="/assets/images/logop.png" width=50px;>
            </div>
            <div class="sidebar-brand-text mx-3"> Princess Solution <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" 
            aria-expanded="true" aria-controls="collapseTwo">
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
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" 
            aria-expanded="true" aria-controls="collapsePages">
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

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" 
            aria-expanded="true" aria-controls="collapseUtilities">
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

                <!-- Page Heading -->
                <div id="container" style="padding: 20px;">
                    <h1>Dashboard <br></br></h1>

                    <div id="body">

                        <div class="row">
                            <?php
                            $count1 = 0;
                            $count2 = 0;
                            $count3 = 0;
                            $count4 = 0;

                            foreach ($hendri as $i => $data['Hendri']) :
                                $count1++;
                            endforeach;
                            foreach ($suhadi as $i => $data['Suhadi']) :
                                $count2++;
                            endforeach;
                            foreach ($yono as $i => $data['Yono']) :
                                $count3++;
                            endforeach;
                            foreach ($eko as $i => $data['Eko']) :
                                $count4++;
                            endforeach;
                            ?>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="<?= base_url('/Hendri') ?>">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                        Hendri</div>
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?= $count1 ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-users" style="font-size:48px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="<?= base_url('/Suhadi') ?>">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Suhadi</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?= $count2 ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-users" style="font-size:48px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="<?= base_url('/Yono') ?>">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                        Yono</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?= $count3 ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-users" style="font-size:48px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <a href="<?= base_url('/Eko') ?>">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        Eko</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?= $count4 ?>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-users" style="font-size:48px"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Bar Chart -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                        </div>
                        <script>
                            var data_bulan = JSON.parse('<?= $data_perbulan ?>');
                        </script>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="myBarChart"></canvas>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Content Wrapper -->

            <!-- End of Main Content -->

        </div>
        <!-- End of Main Content -->


        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; DotaLaseAprila2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
   
</div>

<?php $this->endSection(); ?>