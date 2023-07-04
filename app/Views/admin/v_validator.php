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
            <li class="nav-item active">
                <a class="nav-link" href="/validasisiswa">
                    <i class="fa fa-book"></i>
                    <span>Data Pendaftar Kursus</span></a>
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

                    <div id="container" style="padding: 30px;">
                        <h1>Data Pendaftar Kursus <br></br></h1>

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
                                        <td scope="col">Bukti Transfer</td>
                                        <td scope="col">Status</td>
                                        <td scope="col">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($allMem as $row) :
                                    ?>
                                        <tr>
                                            <td scope="row"><?= strtoupper($row['no_registrasi']) ?></td>
                                            <td scope="row"><?= ucwords($row['nama']) ?></td>
                                            <td scope="row"><?= $row['kode_kendaraan'] ?></td>
                                            <td scope="row"><?= $row['instruktur'] ?></td>
                                            <td scope="row"><?= $row['paket'] ?></td>
                                            <td scope="row"><?= $row['telpon'] ?></td>
                                            <td scope="row"><img class="buktiTF" src="<?= base_url("./assets/transfer/" . $row['buktiTF']) ?>" 
                                            style="width:100px;"></td>
                                            <td scope="row"><?= $row['status'] ?></td>
                                            <td scope="row" style="text-align:center">
                                                <?php if ($row['status'] != " ") : ?>
                                                    <button class="btn btn-secondary" type="button" s
                                                    tyle="font: 13px/20px normal Helvetica, Arial, sans-serif;" disabled>
                                                        Accepted
                                                    </button>
                                                    <button class="btn btn-secondary" type="button" 
                                                    style="font: 13px/20px normal Helvetica, Arial, sans-serif;" disabled>
                                                        Rejected
                                                    </button>
                                                <?php else : ?>
                                                    <form action="accepted/<?= $row['no_registrasi'] ?>" method="post" class="d-inline">
                                                        <button type="submit" class="btn btn-success" 
                                                        style="font: 13px/20px normal Helvetica, Arial, sans-serif;">
                                                            Accepted
                                                        </button>
                                                    </form>
                                                    <form action="rejected/<?= $row['no_registrasi'] ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                        <button type="submit" class="btn btn-danger" 
                                                        style="font: 13px/20px normal Helvetica, Arial, sans-serif;" 
                                                        onclick="return confirm('Apakah anda yakin me-reject siswa ini ?'); ">
                                                            Rejected
                                                        </button>
                                                    </form>
                                                <?php endif ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div id="modal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>

            <!-- <script src="<?= base_url('vendor/simple-datatables/simple-datatables.js') ?>"></script>
            <script>
                // Simple Datatable
                let table1 = document.querySelector('#table1');
                let dataTable = new simpleDatatables.DataTable(table1);
            </script> -->
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

    <script>
        // Get the modal
        var modal = document.querySelector(".modal");
        var modalImg = document.querySelector(".modal-content");
        Array.from(document.querySelectorAll(".buktiTF")).forEach(item => {
            item.addEventListener("click", event => {
                modal.style.display = "block";
                modalImg.src = event.target.src;
            });
        });

        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

</body>
<?php $this->endSection(); ?>