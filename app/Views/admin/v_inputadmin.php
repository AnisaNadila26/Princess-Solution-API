<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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

                        <h1>Tambah Data Admin<br></br></h1>
                        <center>
                            <div id=" body">
                                <div class="card" style="width: 45rem; border-radius: 20px">
                                    <div class="card-body">
                                        <form action="/storeadmin" method="post">
                                            <table border="0" cellpadding="12" cellspacing="5">
                                                <tr>
                                                    <td>Username</td>
                                                    <td class="col-sm-6"><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="username" autocomplete="off" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td class="col-sm-6"><input type="password" id="password" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="password" autocomplete="off" required></td>
                                                    <td onclick="hide()">
                                                        <i id="icon1" style="display: none;" class="fa fa-eye"></i>
                                                        <i id="icon2" class="fa fa-eye-slash"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td class="col-sm-6"><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="nama" autocomplete="off" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Role</td>
                                                    <td class="col-sm-6">
                                                        <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" 
                                                        name="admin" id="admin" required>
                                                            <option selected="true" value="" disabled selected>Pilih...</option>
                                                            <option value="AdminModel" id="Admin">Admin</option>
                                                            <option value="ValidatorModel" id="Validator">Validator</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <input type="hidden" name="role" id="role" value="">
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input class="btn btn-info btn-md" style="float:right" type="submit" value="          Save          "></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <script>
                    document.getElementById('admin').onchange = function() {
                        if (this.value == 'AdminModel') {
                            document.getElementById('role').value = "admin";
                        } else {
                            document.getElementById('role').value = "validator";
                        }
                    }
                </script>
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

    <script>
        function hide() {
            var x = document.getElementById("password");
            var y = document.getElementById("icon1");
            var z = document.getElementById("icon2");

            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            } else {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>


</body>

<?php $this->endSection(); ?>