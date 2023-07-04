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
                    <h1 style="padding-top: 20px;">Jadwal Siswa Kursus <br></h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold">Jadwal Siswa</h6>
                        </div>
                        <div class="card-body">
                            <center>
                                <table id="jadwal" cellpadding="8" cellspacing="5">
                                    <tr>
                                        <th>Jam/Hari</th>
                                        <th>Senin</th>
                                        <th>Selasa</th>
                                        <th>Rabu</th>
                                        <th>Kamis</th>
                                        <th>Jum'at</th>
                                        <th>Sabtu</th>
                                    </tr>

                                    <tr>
                                        <td>08.00-09.00</td>
                                        <td><label><input type="checkbox" id="0" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 08.00-09.00"></label></td>
                                        <td><label><input type="checkbox" id="1" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 08.00-09.00"></label></td>
                                        <td><label><input type="checkbox" id="2" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 08.00-09.00"></label></td>
                                        <td><label><input type="checkbox" id="3" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 08.00-09.00"></label></td>
                                        <td><label><input type="checkbox" id="4" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 08.00-09.00"></label></td>
                                        <td><label><input type="checkbox" id="5" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 08.00-09.00"></label></td>
                                    </tr>

                                    <tr>
                                        <td>09.00-10.00</td>
                                        <td><label><input type="checkbox" id="6" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 09.00-10.00"></label></td>
                                        <td><label><input type="checkbox" id="7" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 09.00-10.00"></label></td>
                                        <td><label><input type="checkbox" id="8" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 09.00-10.00"></label></td>
                                        <td><label><input type="checkbox" id="9" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 09.00-10.00"></label></td>
                                        <td><label><input type="checkbox" id="10" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 09.00-10.00"></label></td>
                                        <td><label><input type="checkbox" id="11" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 09.00-10.00"></label></td>
                                    </tr>

                                    <tr>
                                        <td>10.00-11.00</td>
                                        <td><label><input type="checkbox" id="12" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 10.00-11.00"></label></td>
                                        <td><label><input type="checkbox" id="13" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 10.00-11.00"></label></td>
                                        <td><label><input type="checkbox" id="14" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 10.00-11.00"></label></td>
                                        <td><label><input type="checkbox" id="15" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 10.00-11.00"></label></td>
                                        <td><label><input type="checkbox" id="16" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 10.00-11.00"></label></td>
                                        <td><label><input type="checkbox" id="17" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 10.00-11.00"></label></td>
                                    </tr>

                                    <tr>
                                        <td>11.00-12.00</td>
                                        <td><label><input type="checkbox" id="18" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 11.00-12.00"></label></td>
                                        <td><label><input type="checkbox" id="19" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 11.00-12.00"></label></td>
                                        <td><label><input type="checkbox" id="20" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 11.00-12.00"></label></td>
                                        <td><label><input type="checkbox" id="21" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 11.00-12.00"></label></td>
                                        <td><label><input type="checkbox" id="22" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 11.00-12.00"></label></td>
                                        <td><label><input type="checkbox" id="23" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 11.00-12.00"></label></td>
                                    </tr>

                                    <tr>
                                        <td>12.00-13.00</td>
                                        <td><label><input type="checkbox" id="24" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 12.00-13.00"></label></td>
                                        <td><label><input type="checkbox" id="25" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 12.00-13.00"></label></td>
                                        <td><label><input type="checkbox" id="26" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 12.00-13.00"></label></td>
                                        <td><label><input type="checkbox" id="27" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 12.00-13.00"></label></td>
                                        <td><label><input type="checkbox" id="28" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 12.00-13.00"></label></td>
                                        <td><label><input type="checkbox" id="29" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 12.00-13.00"></label></td>
                                    </tr>

                                    <tr>
                                        <td>13.00-14.00</td>
                                        <td><label><input type="checkbox" id="30" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 13.00-14.00"></label></td>
                                        <td><label><input type="checkbox" id="31" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 13.00-14.00"></label></td>
                                        <td><label><input type="checkbox" id="32" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 13.00-14.00"></label></td>
                                        <td><label><input type="checkbox" id="33" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 13.00-14.00"></label></td>
                                        <td><label><input type="checkbox" id="34" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 13.00-14.00"></label></td>
                                        <td><label><input type="checkbox" id="35" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 13.00-14.00"></label></td>
                                    </tr>

                                    <tr>
                                        <td>14.00-15.00</td>
                                        <td><label><input type="checkbox" id="36" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 14.00-15.00"></label></td>
                                        <td><label><input type="checkbox" id="37" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 14.00-15.00"></label></td>
                                        <td><label><input type="checkbox" id="38" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 14.00-15.00"></label></td>
                                        <td><label><input type="checkbox" id="39" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 14.00-15.00"></label></td>
                                        <td><label><input type="checkbox" id="40" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 14.00-15.00"></label></td>
                                        <td><label><input type="checkbox" id="41" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 14.00-15.00"></label></td>
                                    </tr>

                                    <tr>
                                        <td>15.00-16.00</td>
                                        <td><label><input type="checkbox" id="42" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 15.00-16.00"></label></td>
                                        <td><label><input type="checkbox" id="43" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 15.00-16.00"></label></td>
                                        <td><label><input type="checkbox" id="44" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 15.00-16.00"></label></td>
                                        <td><label><input type="checkbox" id="45" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 15.00-16.00"></label></td>
                                        <td><label><input type="checkbox" id="46" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 15.00-16.00"></label></td>
                                        <td><label><input type="checkbox" id="47" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 15.00-16.00"></label></td>
                                    </tr>

                                    <tr>
                                        <td>16.00-17.00</td>
                                        <td><label><input type="checkbox" id="48" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 16.00-17.00"></label></td>
                                        <td><label><input type="checkbox" id="49" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 16.00-17.00"></label></td>
                                        <td><label><input type="checkbox" id="50" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 16.00-17.00"></label></td>
                                        <td><label><input type="checkbox" id="51" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 16.00-17.00"></label></td>
                                        <td><label><input type="checkbox" id="52" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 16.00-17.00"></label></td>
                                        <td><label><input type="checkbox" id="53" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 16.00-17.00"></label></td>
                                    </tr>
                                </table>
                            </center>
                        </div>
                    </div>


                </div>

                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div><br><br><br>
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

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="/login">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function jadwalOrang() {
                var jadwal_orang = <?= ($jadwal_orang != null) ? json_encode($jadwal_orang) : 'null' ?>;
                for (var i = 0; i < 54; i++) {
                    for (var jo of jadwal_orang) {
                        var arr = jo.split("; ");
                        for (var nilai of arr) {
                            if (document.getElementById(i).value == nilai) {
                                document.getElementById(i).setAttribute('checked', true);
                                document.getElementById(i).setAttribute('disabled', true);
                            }
                        }
                    }
                }
            }

            function pilihSatu(event) {
                var nilai = event.value;
                nilai = nilai.split(" ")
                var jam = nilai[1]
                var tabel = document.getElementById(" jadwal");
                var cekbokses = tabel.querySelectorAll('input[type=checkbox]');
                for (var cekboks of cekbokses) {
                    var val = cekboks.value
                    if (event.checked) {
                        if (cekboks != event && !val.includes(jam)) {
                            cekboks.setAttribute('disabled', true);
                        }
                    } else {
                        for (var cek of cekbokses) {
                            var cval = cek.value
                            if (cval.includes(jam) && cek.checked && !cek.disabled) {
                                var Stop = true;
                            }
                        }
                        if (!Stop) {
                            cekboks.removeAttribute("disabled");
                            <?php if (isset($jadwal_orang)) { ?> jadwalOrang() <?php } ?>
                        }
                    }
                }
            }
            window.addEventListener('load', () => {
                <?php if (isset($jadwal_orang)) { ?>
                    jadwalOrang()
                <?php } ?>
            })
        </script>
</body>
<?php $this->endSection(); ?>