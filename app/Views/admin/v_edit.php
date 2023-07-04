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
            <li class="nav-item ">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
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

                    <i class="fa fa-arrow-left"></i><a href="javascript:window.history.go(-1);">Kembali</a>

                    <!-- Navbar -->
                    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <a href="/logout" type="button" onclick="return confirm('Apakah anda yakin ingin Logout ?');"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                       
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="container">

                        <h1 style="padding-top: 20px;">Edit Data <br></h1>

                        <div id="body">

                            <form action="/update/<?= $row['no_registrasi'] ?>/<?= $row['instruktur'] ?>" enctype="multipart/form-data" method="post">
                                <center>
                                    <table border="0" cellpadding="12" cellspacing="5">
                                        <tr>
                                            <td style="font-size: 20px;">Kehadiran<br>
                                                <div class="absen">
                                                    <?php if ($row['paket'] == 'a') : ?>
                                                        <input type="number" name="kehadiran" id="absen" 
                                                        style="border: none;" value="<?= $row['kehadiran'] ?>" max="10" min="0">
                                                    <?php elseif ($row['paket'] == 'b') : ?>
                                                        <input type="number" name="kehadiran" id="absen" 
                                                        style="border: none;" value="<?= $row['kehadiran'] ?>" max="15" min="0">
                                                    <?php else : ?>
                                                        <input type="number" name="kehadiran" id="absen" 
                                                        style="border: none;" value="<?= $row['kehadiran'] ?>" max="20" min="0">
                                                    <?php endif ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </center>

                                <br><br>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold">Tanggal-Daftar : <?php echo $row['created_at'] ?>"</h6>
                                            </div>
                                            <div class="card-body">
                                                <table border="0" cellpadding="15" cellspacing="5">
                                                    <tr>
                                                        <td>No.Registrasi</td>
                                                        <td><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" value="<?php echo strtoupper($row['no_registrasi']) ?>" disabled></td>
                                                        <input type="hidden" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="no_registrasi" value="<?php echo $row['no_registrasi'] ?>">
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="nama" autocomplete="off" required value="<?php echo $row['nama'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="ttl" autocomplete="off" required value="<?php echo $row['ttl'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pekerjaan</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="pekerjaan" autocomplete="off" required value="<?php echo $row['pekerjaan'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="alamat" autocomplete="off" required value="<?php echo $row['alamat'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>WhatsApp</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="telpon" autocomplete="off" required value="<?php echo $row['telpon'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kendaraan</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="jenis_kendaraan" id="jenis_kendaraan" autocomplete="off" required value="<?php echo $row['jenis_kendaraan'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Kendaraan</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="kode_kendaraan" id="kode_kendaraan" autocomplete="off" required value="<?php echo $row['kode_kendaraan'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Instruktur</td>
                                                        <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="instruktur" id="instruktur" autocomplete="off" required value="<?php echo $row['instruktur'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paket</td>
                                                        <td><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" value="<?php echo strtoupper($row['paket']) ?>" disabled></td>
                                                        <input type="hidden" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="paket" id="paket" value="<?php echo $row['paket'] ?>">
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="status" id="status" required value="<?php echo $row['status'] ?>">
                                                                    <option selected="true" value=" ">Status</option>
                                                                    <option value="siswa" <?= ($row['status'] == 'siswa') ? 'selected' : '' ?>>Siswa</option>
                                                                    <option value="alumni" <?= ($row['status'] == 'alumni') ? 'selected' : '' ?>>Alumni</option>
                                                                    <option value="tidak diterima" <?= ($row['status'] == 'tidak diterima') ? 'selected' : '' ?>>Tidak Diterima</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold">Jadwal Siswa Kursus</h6>
                                            </div>
                                            <div class="card-body">
                                                <center>
                                                    <table id="jadwal" cellpadding="3" cellspacing="3">
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

                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold">Transaksi</h6>
                                            </div>
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <table>
                                                        <tr>
                                                            <td>an. </td>
                                                            <td><input type="text" class="form-control" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" name="anTransfer" id="anTransfer" autocomplete="off" required value="<?= $row['anTransfer'] ?>" readonly></td>
                                                        </tr>
                                                    </table>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="buktiTF" id="buktiTF" onchange="gambar()">
                                                                <label class="custom-file-label" for="customFile"><?= $row['buktiTF']; ?></label>
                                                                <input type="hidden" name="buktiTFLama" value="<?= $row['buktiTF'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="<?= base_url("./assets/transfer/" . $row['buktiTF']) ?>" class="img-preview" style="height:80px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pembayaran">Pembayaran</label><br>
                                                    <div>
                                                        <input type="radio" name="pembayaran" value="DP" id="dp" onchange="Hitung('dp')" <?= ($row['pembayaran'] == 'DP') ? 'checked' : '' ?>> DP
                                                        <input type="radio" name="pembayaran" value="Lunas" id="lunas" onchange="Hitung('lunas')" <?= ($row['pembayaran'] == 'Lunas') ? 'checked' : '' ?>> Lunas
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="harga">Harga</label>
                                                            <input type="text" class="form-control" name="harga" id="harga" value="<?= $row['harga'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="modal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                </div>

                                <center>

                                    <input class="btn btn-primary btn-md" type="submit" id="save" value="          Save          ">
                                </center>
                                <br>
                            </form>
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


    <script>
        function jadwalOrang() {
            var jadwal_orang = <?= ($jadwal_orang != null) ? json_encode($jadwal_orang) : 'null' ?>;
            for (var i = 0; i < 54; i++) {
                for (var jo of jadwal_orang) {
                    var arr = jo.split("; ");
                    for (var nilai of arr) {
                        if (document.getElementById(i).value == nilai) {
                            document.getElementById(i).setAttribute('checked', true);
                            // document.getElementById(i).setAttribute('disabled', true);
                        }
                    }
                }
            }
        }

        function pilihSatu(event) {
            var nilai = event.value;
            nilai = nilai.split(" ")
            var jam = nilai[1]
            var tabel = document.getElementById("jadwal");
            var cekbokses = tabel.querySelectorAll('input[type=checkbox]');
            for (var cekboks of cekbokses) {
                var val = cekboks.value
                if (event.checked) {
                    if (cekboks != event && !val.includes(jam)) {
                        // cekboks.setAttribute('disabled', true);
                        document.getElementById("save").disabled = false;
                    }
                } else {
                    for (var cek of cekbokses) {
                        var cval = cek.value
                        if (cval.includes(jam) && cek.checked && !cek.disabled) {
                            var Stop = true;
                        }
                    }
                    if (!Stop) {
                        document.getElementById("save").disabled = true;
                        $('#formDaDir').hide();
                        cekboks.removeAttribute("disabled");
                        <?php if (isset($jadwal_orang)) { ?> jadwalOrang() <?php } ?>
                    }
                }
            }
        }
        window.addEventListener('load', () => {
            <?php if ($row['status'] == 'alumni') : ?>
                document.getElementById("save").disabled = true;
            <?php else : ?>
                document.getElementById("save").disabled = false;
            <?php endif ?>

            <?php if (isset($jadwal_orang)) { ?>
                jadwalOrang()
            <?php } ?>
        })


        function gambar() {
            var inputFile = document.getElementById('buktiTF');
            var pathFile = inputFile.value;
            var ekstensi = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            const gambar = document.querySelector('.custom-file-input');
            const gambarLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');
            const fileGambar = new FileReader();

            if (!ekstensi.exec(pathFile)) {
                alert("Silakan upload file yang dengan ekstensi .jpeg/.jpg/.png/.gif");
                inputFile.value = '';
                return false;
            } else if (inputFile.files[0].size > 1000000) {
                alert("Ukuran File Terlalu Besar. Maksimal Upload 1 MB");
                inputFile.value = '';
                return false;
            } else {
                gambarLabel.textContent = gambar.files[0].name;

                fileGambar.readAsDataURL(gambar.files[0]);

                fileGambar.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        }
    </script>
    <script>
        // Get the modal
        var modal = document.querySelector(".modal");
        var modalImg = document.querySelector(".modal-content");
        Array.from(document.querySelectorAll(".img-preview")).forEach(item => {
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
    <script>
        function Hitung(x) {
            let harga = document.getElementById('harga');
            let jk = document.getElementById('jenis_kendaraan').value;
            let kk = document.getElementById('kode_kendaraan').value;
            let paket = document.getElementById('paket').value;
            let byr = document.getElementById(x);
            if (byr.checked) {
                byr = byr.value;
            } else {
                byr = null;
            }
            console.log(byr)
            if (jk == "Manual") {
                if (kk == "NAB" || kk == "NAS") {
                    if (paket == "a") {
                        var price = 770000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 770.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    } else if (paket == "b") {
                        var price = 1135000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 1.135.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    } else if (paket == "c") {
                        var price = 1530000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 1.530.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    } else {
                        harga.value = " ";
                        $('#kurang-text').hide();
                    }
                } else if (kk == "AVNEW") {
                    if (paket == "a") {
                        var price = 820000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 820.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    } else if (paket == "b") {
                        var price = 1210000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 1.210.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    } else {
                        var price = 1600000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 1.600.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    }
                }
            } else if (jk == "Matic") {
                if (kk == "GMB" || kk == "GMM") {
                    if (paket == "a") {
                        var price = 900000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 900.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    } else if (paket == "b") {
                        var price = 1330000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 1.330.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    } else {
                        var price = 1760000;
                        var min = 100000;
                        if (byr == "DP") {
                            harga.value = "Rp. 100.000";
                            kurang = price - min;
                            minus.innerText = String(kurang);
                            $('#kurang-text').show();
                        } else if (byr == "Lunas") {
                            harga.value = "Rp. 1.760.000";
                            $('#kurang-text').hide();
                            // txt.classList.add('d-none');
                        }
                    }
                }
            }
        }
    </script>
</body>

<?php $this->endSection(); ?>