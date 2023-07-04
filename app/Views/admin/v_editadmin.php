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

                <i class="fa fa-arrow-left"></i><a href="javascript:window.history.go(-1);"> Kembali</a>

                <!-- Navbar -->
                <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                    <a href="/logout" type="button" onclick="return confirm('Apakah anda yakin ingin Logout ?');"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div id="container" style="padding: 20px;">
                    <h1>Edit Data Admin <br></br></h1>

                    <center>
                        <div id="body">
                            <div class="card" style="width: 45rem; border-radius: 20px">
                                <div class="card-body">
                                    <?php if ($row['role'] != "validator") : ?>
                                        <form action="/updateadmin/<?= $row['id'] ?>" method="post">
                                            <table border="0" cellpadding="12" cellspacing="5">
                                                <tr>
                                                    <td>Id</td>
                                                    <td><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" value="<?php echo strtoupper($row['id']) ?>" disabled></td>
                                                    <td><input type="hidden" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="id" value="<?php echo $row['id'] ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Username</td>
                                                    <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="username" autocomplete="off" required value="<?php echo $row['username'] ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="password" autocomplete="off" required value="<?php echo $row['password'] ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="nama" autocomplete="off" required value="<?php echo $row['nama'] ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Role</td>
                                                    <td class="col-sm-6">
                                                        <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="admin" id="admin" required>
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
                                                    <td><input class="btn btn-primary btn-md" style="float:right" type="submit" value="          Save          "></td>
                                                </tr>
                                            </table>
                                        </form>
                                    <?php else : ?>
                                        <form action="/updatevalid/<?= $row['id'] ?>" method="post">
                                            <table border="0" cellpadding="12" cellspacing="5">
                                                <tr>
                                                    <td>Id</td>
                                                    <td><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" value="<?php echo strtoupper($row['id']) ?>" disabled></td>
                                                    <td><input type="hidden" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="id" value="<?php echo $row['id'] ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Username</td>
                                                    <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="username" autocomplete="off" required value="<?php echo $row['username'] ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="password" autocomplete="off" required value="<?php echo $row['password'] ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="nama" autocomplete="off" required value="<?php echo $row['nama'] ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Role</td>
                                                    <td class="col-sm-6">
                                                        <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="admin" id="admin" required>
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
                                                    <td><input class="btn btn-primary btn-md" style="float:right" type="submit" value="          Save          "></td>
                                                </tr>
                                            </table>
                                        </form>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>

        <script src="<?= base_url('vendor/simple-datatables/simple-datatables.js') ?>"></script>
        <script>
            document.getElementById('admin').onchange = function() {
                if (this.value == 'AdminModel') {
                    document.getElementById('role').value = "admin";
                } else {
                    document.getElementById('role').value = "validator";
                }
            }
        </script>
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<?php $this->endSection(); ?>