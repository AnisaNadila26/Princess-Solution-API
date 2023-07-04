<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<body class="bg-gradient-muted">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-20 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="/assets/images/login.jpg" width="450" alt="logo">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN ADMIN</h1>
                                    </div>
                                    <?php
                                    if (session()->getFlashdata('gagal')) : ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('gagal') ?> </div>
                                    <?php endif; ?>
                                    <form method="POST" action="<?= base_url('/login_action'); ?>">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td><i class="fa fa-user"></i></td>
                                                    <td class="col-sm-12"><input type="username" name="username" class="form-control form-control-user" id="username" placeholder="Masukkan Username" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3)
                                                         center bottom 5px /calc(100% - 10px) 1px no-repeat;" autocomplete="off"></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td><i class="fa fa-key"></i></td>
                                                    <td class="col-sm-12">
                                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Masukkan Password" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat; margin-right:10px;">
                                                    </td>
                                                    <td onclick="hide()">
                                                        <i id="icon1" style="display: none;" class="fa fa-eye"></i>
                                                        <i id="icon2" class="fa fa-eye-slash"></i>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

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