<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<body id="page-top">

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
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
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

            <!-- Nav Item - Tables -->
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

                    <!-- Topbar Search -->
                    <div class="col-4">
                        <ul class="navbar-nav ml-auto">
                            <form action="" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-5 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keyword" autocomplete="off" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" name="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </div>

                    <!-- Navbar -->
                    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <a href="/logout" type="button" onclick="return confirm('Apakah anda yakin ingin Logout ?');"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="container" style="padding: 20px;">
                        <h1>Siswa Eko <br></br></h1>

                        <div id="body">
                            <table style="text-align:center" class="table table-striped" width="1200px" id="table1">
                                <thead>
                                    <tr>
                                        <td scope="col">No.Registrasi</td>
                                        <td scope="col">Nama</td>
                                        <td scope="col">Kode</td>
                                        <td scope="col">Instruktur</td>
                                        <td scope="col">Paket</td>
                                        <td scope="col">WhatsApp</td>
                                        <td scope="col">Kehadiran</td>
                                        <td scope="col">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($eko as $row) :
                                    ?>

                                        <?php if ($row['status'] != "tidak diterima") : ?>
                                            <tr>
                                                <td scope="row"><?= strtoupper($row['no_registrasi']) ?></td>
                                                <td scope="row"><?= ucwords($row['nama']) ?></td>
                                                <td scope="row"><?= $row['kode_kendaraan'] ?></td>
                                                <td scope="row"><?= $row['instruktur'] ?></td>
                                                <td scope="row"><?= $row['paket'] ?></td>
                                                <td scope="row"><?= $row['telpon'] ?></td>
                                                <td scope="row"><?= $row['kehadiran'] ?></td>
                                                <td scope="row" style="text-align:center">
                                                    <a href="https://kirimwa.id/<?= $row['telpon'] ?>" class="btn btn-success" target="_blank"><img src="/assets/images/icon-whatsapp.png" width="20px"></a>
                                                    <?php if ($row['status'] != " ") : ?>
                                                        <a href="<?= base_url("edit/" . $row['no_registrasi']) ?>" class="btn btn-primary" style="width: auto;" role="button"><i class="fas fa-pencil-alt"></i></a>
                                                    <?php else : ?>
                                                        <a href="<?= base_url("edit/" . $row['no_registrasi']) ?>" class="btn btn-secondary" style="width: auto;" role="button" id="disabled"><i class="fas fa-pencil-alt"></i></a>
                                                    <?php endif ?>
                                                    <form action="delete/<?= $row['no_registrasi'] ?>/<?= $row['instruktur'] ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="Delete">
                                                        <button type="submit" class="btn btn-danger" style="width: auto;" onclick="return confirm('Apakah anda yakin menghapus data ini ?'); "><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php else : ?>
                                            <tr style="background-color: #f5deb3;">
                                                <td scope="row"><?= strtoupper($row['no_registrasi']) ?></td>
                                                <td scope="row"><?= ucwords($row['nama']) ?></td>
                                                <td scope="row"><?= $row['kode_kendaraan'] ?></td>
                                                <td scope="row"><?= $row['instruktur'] ?></td>
                                                <td scope="row"><?= $row['paket'] ?></td>
                                                <td scope="row"><?= $row['telpon'] ?></td>
                                                <td scope="row"><?= $row['kehadiran'] ?></td>
                                                <td scope="row" style="text-align:center">
                                                    <a href="https://kirimwa.id/<?= $row['telpon'] ?>" class="btn btn-success" target="_blank"><img src="/assets/images/icon-whatsapp.png" width="20px"></a>
                                                    <?php if ($row['status'] != " ") : ?>
                                                        <a href="<?= base_url("edit/" . $row['no_registrasi']) ?>" class="btn btn-primary" style="width: auto;" role="button"><i class="fas fa-pencil-alt"></i></a>
                                                    <?php else : ?>
                                                        <a href="<?= base_url("edit/" . $row['no_registrasi']) ?>" class="btn btn-secondary" style="width: auto;" role="button" id="disabled"><i class="fas fa-pencil-alt"></i></a>
                                                    <?php endif ?>
                                                    <form action="delete/<?= $row['no_registrasi'] ?>/<?= $row['instruktur'] ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="Delete">
                                                        <button type="submit" class="btn btn-danger" style="width: auto;" onclick="return confirm('Apakah anda yakin menghapus data ini ?'); "><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>

            <script src="<?= base_url('vendor/simple-datatables/simple-datatables.js') ?>"></script>
            <script>
                // Simple Datatable
                let table1 = document.querySelector('#table1');
                let dataTable = new simpleDatatables.DataTable(table1);
            </script>
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