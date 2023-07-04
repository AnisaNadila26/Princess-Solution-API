<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/" id="dashboard">
            <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>/assets/images/logop.png" width=50px;></i>
            Princess Solution
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link smoothScroll">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link smoothScroll">Paket Kursus</a>
                </li>
                <li class="nav-item">
                    <a href="/daftar" class="nav-link" id="disabled">Daftar</a>
                </li>
                <li class="nav-item">
                    <a href="/login" class="nav-link contact">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<form action="/regis" method="post" enctype="multipart/form-data" id='form-daftar'>
    <?= csrf_field(); ?>
    <center>
        <table id="jadwal">
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
                <td>
                    <input type="checkbox" id="0" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 08.00-09.00">
                </td>
                <td>
                    <input type="checkbox" id="1" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 08.00-09.00">
                </td>
                <td>
                    <input type="checkbox" id="2" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 08.00-09.00">
                </td>
                <td>
                    <input type="checkbox" id="3" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 08.00-09.00">
                </td>
                <td>
                    <input type="checkbox" id="4" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 08.00-09.00">
                </td>
                <td>
                    <input type="checkbox" id="5" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 08.00-09.00">
                </td>
            </tr>
            <tr>
                <td>09.00-10.00</td>
                <td>
                    <input type="checkbox" id="6" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 09.00-10.00">
                </td>
                <td>
                    <input type="checkbox" id="7" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 09.00-10.00">
                </td>
                <td>
                    <input type="checkbox" id="8" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 09.00-10.00">
                </td>
                <td>
                    <input type="checkbox" id="9" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 09.00-10.00">
                </td>
                <td>
                    <input type="checkbox" id="10" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 09.00-10.00">
                </td>
                <td>
                    <input type="checkbox" id="11" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 09.00-10.00">
                </td>
            </tr>
            <tr>
                <td>10.00-11.00</td>
                <td>
                    <input type="checkbox" id="12" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 10.00-11.00">
                </td>
                <td>
                    <input type="checkbox" id="13" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 10.00-11.00">
                </td>
                <td>
                    <input type="checkbox" id="14" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 10.00-11.00">
                </td>
                <td>
                    <input type="checkbox" id="15" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 10.00-11.00">
                </td>
                <td>
                    <input type="checkbox" id="16" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 10.00-11.00">
                </td>
                <td>
                    <input type="checkbox" id="17" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 10.00-11.00">
                </td>
            </tr>
            <tr>
                <td>11.00-12.00</td>
                <td>
                    <input type="checkbox" id="18" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 11.00-12.00">
                </td>
                <td>
                    <input type="checkbox" id="19" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 11.00-12.00">
                </td>
                <td>
                    <input type="checkbox" id="20" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 11.00-12.00">
                </td>
                <td>
                    <input type="checkbox" id="21" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 11.00-12.00">
                </td>
                <td>
                    <input type="checkbox" id="22" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 11.00-12.00">
                </td>
                <td>
                    <input type="checkbox" id="23" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 11.00-12.00">
                </td>
            </tr>
            <tr>
                <td>12.00-13.00</td>
                <td>
                    <input type="checkbox" id="24" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 12.00-13.00">
                </td>
                <td>
                    <input type="checkbox" id="25" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 12.00-13.00">
                </td>
                <td>
                    <input type="checkbox" id="26" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 12.00-13.00">
                </td>
                <td>
                    <input type="checkbox" id="27" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 12.00-13.00">
                </td>
                <td>
                    <input type="checkbox" id="28" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 12.00-13.00">
                </td>
                <td>
                    <input type="checkbox" id="29" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 12.00-13.00">
                </td>
            </tr>
            <tr>
                <td>13.00-14.00</td>
                <td>
                    <input type="checkbox" id="30" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 13.00-14.00">
                </td>
                <td>
                    <input type="checkbox" id="31" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 13.00-14.00">
                </td>
                <td>
                    <input type="checkbox" id="32" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 13.00-14.00">
                </td>
                <td>
                    <input type="checkbox" id="33" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 13.00-14.00">
                </td>
                <td>
                    <input type="checkbox" id="34" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 13.00-14.00">
                </td>
                <td>
                    <input type="checkbox" id="35" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 13.00-14.00">
                </td>
            </tr>
            <tr>
                <td>14.00-15.00</td>
                <td>
                    <input type="checkbox" id="36" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 14.00-15.00">
                </td>
                <td>
                    <input type="checkbox" id="37" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 14.00-15.00">
                </td>
                <td>
                    <input type="checkbox" id="38" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 14.00-15.00">
                </td>
                <td>
                    <input type="checkbox" id="39" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 14.00-15.00">
                </td>
                <td>
                    <input type="checkbox" id="40" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 14.00-15.00">
                </td>
                <td>
                    <input type="checkbox" id="41" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 14.00-15.00">
                </td>
            </tr>
            <tr>
                <td>15.00-16.00</td>
                <td>
                    <input type="checkbox" id="42" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 15.00-16.00">
                </td>
                <td>
                    <input type="checkbox" id="43" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 15.00-16.00">
                </td>
                <td>
                    <input type="checkbox" id="44" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 15.00-16.00">
                </td>
                <td>
                    <input type="checkbox" id="45" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 15.00-16.00">
                </td>
                <td>
                    <input type="checkbox" id="46" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 15.00-16.00">
                </td>
                <td>
                    <input type="checkbox" id="47" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 15.00-16.00">
                </td>
            </tr>
            <tr>
                <td>16.00-17.00</td>
                <td>
                    <input type="checkbox" id="48" name="jadwal[]" onclick="pilihSatu(this)" value="Senin 16.00-17.00">
                </td>
                <td>
                    <input type="checkbox" id="49" name="jadwal[]" onclick="pilihSatu(this)" value="Selasa 16.00-17.00">
                </td>
                <td>
                    <input type="checkbox" id="50" name="jadwal[]" onclick="pilihSatu(this)" value="Rabu 16.00-17.00">
                </td>
                <td>
                    <input type="checkbox" id="51" name="jadwal[]" onclick="pilihSatu(this)" value="Kamis 16.00-17.00">
                </td>
                <td>
                    <input type="checkbox" id="52" name="jadwal[]" onclick="pilihSatu(this)" value="Jum'at 16.00-17.00">
                </td>
                <td>
                    <input type="checkbox" id="53" name="jadwal[]" onclick="pilihSatu(this)" value="Sabtu 16.00-17.00">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btnPilih btn btn-success" id="btnPilih" style="--clr:#c5c9d3">
                        Pilih Jadwal
                    </button>
                </td>

            </tr>
        </table>
    </center>

    <?= csrf_field(); ?>
    <div class="container" id="formDaDir">
        <div class="card1">
            <p class="text-center">Silahkan lanjut mengisi data diri Anda</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="ttl" id="ttl">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="telpon">No. WhatsApp</label>
                        <input type="text" class="form-control" name="telpon" id="telpon">
                    </div>
                    <div class="form-group">
                        <center>
                            <img src="/assets/images/image-default.png" class="img-preview" style="height:200px">
                        </center>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <input type="text" class="form-control" name="jenis_kendaraan" id="jenis_kendaraan" value="" readonly>
                        <script>
                            window.addEventListener('load', () => {
                                document.getElementById('jenis_kendaraan').value = localStorage.getItem('jenis_kendaraan');
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="kode_kendaraan">Kode Kendaraan</label>
                        <input type="text" class="form-control" name="kode_kendaraan" id="kode_kendaraan" value="" readonly>
                        <script>
                            window.addEventListener('load', () => {
                                document.getElementById('kode_kendaraan').value = localStorage.getItem('kode_kendaraan');
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="instruktur">Instruktur</label>
                        <input type="text" class="form-control" name="instruktur" id="instruktur" value="" readonly>
                        <script>
                            window.addEventListener('load', () => {
                                document.getElementById('instruktur').value = localStorage.getItem('instruktur');
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="paket">Paket Kursus</label>
                        <div class="select-list">
                            <select name="paket" id="paket" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option selected="true" value="" disabled>Paket</option>
                                <option value="a" data-toggle="tooltip" data-placement="right" title="Untuk melancarkan mengemudi">A</option>
                                <option value="b" data-toggle="tooltip" data-placement="right" title="Disarankan untuk pemula">B</option>
                                <option value="c" data-toggle="tooltip" data-placement="right" title="Disarankan untuk pemula dengan jam kursus yang lebih lama">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pembayaran">Pembayaran</label><br>
                        <div>
                            <input type="radio" name="pembayaran" value="DP" id="dp" onchange="Hitung('dp')"> DP
                            <input type="radio" name="pembayaran" value="Lunas" id="lunas" onchange="Hitung('lunas')"> Lunas
                            <p id="tujuan-text" style="font-size: 17px;">Silahkan melakukan transfer ke <strong>BCA 0207 400 169 an Muhammad Fario PB</strong> sebesar harga dibawah ini</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga" readonly>
                        </div>
                        <p id="kurang-text" style="font-size: 15px;">Lunasi kekurangan pembayaran sebesar <span id="kurang"></span> pada saat hari pertama kursus</p>
                    </div>

                    <div class="form-group">
                        <label for="buktiTF">Bukti Transfer</label>
                        <table>
                            <tr>
                                <td>an.</td>
                                <td><input type="text" style="border:none; outline:none; background:linear-gradient(#d3d3d3, #d3d3d3) center bottom 5px /calc(100% - 10px) 1px no-repeat;" class="form-control" name="anTransfer" id="anTransfer"></td>
                            </tr>
                        </table>
                        <div class="col-md-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="buktiTF" id="buktiTF" onchange="gambar()">
                                <label class="custom-file-label" for="customFile">Upload Foto Bukti Transfer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaultCheck1" style="width: 15px; height: 15px;">
                    <label class="form-check-label" for="defaultCheck1">
                        Saya telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
                        <a type="button" style="color:blue" onclick="return alert('Syarat dan Ketentuan\n1. Harus hadir di tempat 5 menit sebelum jam yang telah ditentukan, jika terlambat ditunda besok.\n2. Jika dalam 10 hari berturut-turut tidak hadir, maka dianggap berhenti dari Kursus Mengemudi.\n3. Dalam Kursus Mengemudi tidak diperkenankan melebihi kecepatan 40Km/Jam.\n4. Murid Kursus Mengemudi wajib mentaati Instruksi dari instruktur.\n5. Jika paket Kursus Mengemudi telah habis di perkenankan untuk memperpanjang paket berikutnya.\n6. Bagi yang menggunakan Fasilitas antar jemput kursus mengemudi, waktu penjemputan tersebut sudah termasuk dalam waktu belajar.');">
                            <u> Baca Syarat dan Ketentuan </u>
                        </a>
                    </label>
                </div>
            </div>
            <input type="button" style="place-items:right;" class="btn btn-primary" value="Daftar" onclick="validasi()">
        </div>
    </div>
</form>

<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                <h1 class="text-white" data-aos="fade-up" data-aos-delay="100" id="footer">Princess <strong>Solution</strong>.</h1>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="my-4">Contact Info</h4>

                <p class="mb-1">
                    <a href="https://wa.me/6281279572555" target="_blank">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        +62 812-7957-2555
                    </a>
                </p>

                <p class="mb-1">
                    <a href="https://instagram.com/birojasa_princess?igshid=YmMyMTA2M2Y=" target="_blank">
                        <i class="fa fa-instagram mr-2 footer-icon"></i>
                        @birojasa_princess
                    </a>
                </p>

                <p class="mb-1">
                    <a href="https://twitter.com/bjprincess_lpg" target="_blank">
                        <i class="fa fa-twitter mr-2 footer-icon"></i>
                        @bjprincess_lpg
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                <h4 class="my-4">Alamat</h4>

                <p class="mb-1">
                    <i class="fa fa-home mr-2 footer-icon"></i>
                    <a href="https://www.google.com/maps/place/Biro+Jasa+Dan+Kursus+Mengemudi+Princess/@-5.4223805,105.2531808,17z/data=!4m12!1m6!3m5!1s0x2e40da4ed66816dd:0x8ff01b3b16a3e2d8!2sBiro+Jasa+Dan+Kursus+Mengemudi+Princess!8m2!3d-5.4223859!4d105.257408!3m4!1s0x2e40da4ed66816dd:0x8ff01b3b16a3e2d8!8m2!3d-5.4223859!4d105.257408" target="_blank">
                        No.06, Jl.Jenderal Ahmad Yani, Gotong Royong, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119.
                    </a>
                </p>
            </div>

            <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                <p class="copyright-text">Copyright &copy; 2022 DotaAprilLase
                    <br>
                </p>
            </div>
        </div>
    </div>
</footer>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js'></script>

<script>
    $('#kurang-text').hide();
    $('#tujuan-text').hide();
    $('.img-preview').hide();

    function validasi() {
        var nama = document.getElementById("nama").value;
        var ttl = document.getElementById("ttl").value;
        var pekerjaan = document.getElementById("pekerjaan").value;
        var alamat = document.getElementById("alamat").value;
        var jenis_kendaraan = document.getElementById("jenis_kendaraan").value;
        var kode_kendaraan = document.getElementById("kode_kendaraan").value;
        var instruktur = document.getElementById("instruktur").value;
        var telpon = document.getElementById("telpon").value;
        var paket = document.getElementById("paket").value;
        var buktiTF = document.getElementById("buktiTF").value;
        var sk = document.getElementById("defaultCheck1");
        const daftar = document.querySelector('#Daftar');
        if (nama != "" && ttl != "" && pekerjaan != "" && alamat != "" && jenis_kendaraan != "" &&
            kode_kendaraan != "" && instruktur != "" && telpon != "" && paket != "" && buktiTF != ""
            && sk.checked == true) {
            document.getElementById('form-daftar').submit();
        } else if (sk.checked == false) {
            alert('Setujui Syarat dan Ketentuan');
        } else {
            alert('Isi data diri Anda dengan lengkap !');
        }
    }

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
            $('.img-preview').show();
            gambarLabel.textContent = gambar.files[0].name;

            fileGambar.readAsDataURL(gambar.files[0]);

            fileGambar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    }

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
        var tabel = document.getElementById("jadwal");
        var cekbokses = tabel.querySelectorAll('input[type=checkbox]');
        for (var cekboks of cekbokses) {
            var val = cekboks.value
            if (event.checked) {
                if (cekboks != event && !val.includes(jam)) {
                    cekboks.setAttribute('disabled', true);
                    document.getElementById("btnPilih").disabled = false;
                }
            } else {
                for (var cek of cekbokses) {
                    var cval = cek.value
                    if (cval.includes(jam) && cek.checked && !cek.disabled) {
                        var Stop = true;
                    }
                }
                if (!Stop) {
                    document.getElementById("btnPilih").disabled = true;
                    $('#formDaDir').hide();
                    cekboks.removeAttribute("disabled");
                    <?php if (isset($jadwal_orang)) { ?> jadwalOrang() <?php } ?>
                }
            }
        }
    }
    window.addEventListener('load', () => {
        document.getElementById("btnPilih").disabled = true;
        <?php if (isset($jadwal_orang)) { ?>
            jadwalOrang()
        <?php } ?>
    })

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
        let minus = document.getElementById('kurang');
        let txt = document.getElementById('kurang-text');
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
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 770.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else if (paket == "b") {
                    var price = 1135000;
                    var min = 100000;
                    if (byr == "DP") {
                        harga.value = "Rp. 100.000";
                        kurang = price - min;
                        minus.innerText = String(kurang);
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 1.135.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else if (paket == "c") {
                    var price = 1530000;
                    var min = 100000;
                    if (byr == "DP") {
                        harga.value = "Rp. 100.000";
                        kurang = price - min;
                        minus.innerText = String(kurang);
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 1.530.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else {
                    harga.value = "Pilih paket kursus terlebih dahulu";
                }
            } else if (kk == "AVNEW") {
                if (paket == "a") {
                    var price = 820000;
                    var min = 100000;
                    if (byr == "DP") {
                        harga.value = "Rp. 100.000";
                        kurang = price - min;
                        minus.innerText = String(kurang);
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 820.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else if (paket == "b") {
                    var price = 1210000;
                    var min = 100000;
                    if (byr == "DP") {
                        harga.value = "Rp. 100.000";
                        kurang = price - min;
                        minus.innerText = String(kurang);
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 1.210.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else if (paket == "c") {
                    var price = 1600000;
                    var min = 100000;
                    if (byr == "DP") {
                        harga.value = "Rp. 100.000";
                        kurang = price - min;
                        minus.innerText = String(kurang);
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 1.600.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else {
                    harga.value = "Pilih paket kursus terlebih dahulu";
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
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 900.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else if (paket == "b") {
                    var price = 1330000;
                    var min = 100000;
                    if (byr == "DP") {
                        harga.value = "Rp. 100.000";
                        kurang = price - min;
                        minus.innerText = String(kurang);
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 1.330.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else if (paket == "c") {
                    var price = 1760000;
                    var min = 100000;
                    if (byr == "DP") {
                        harga.value = "Rp. 100.000";
                        kurang = price - min;
                        minus.innerText = String(kurang);
                        $('#tujuan-text').show();
                        $('#kurang-text').show();
                    } else if (byr == "Lunas") {
                        harga.value = "Rp. 1.760.000";
                        $('#tujuan-text').show();
                        $('#kurang-text').hide();
                    }
                } else {
                    harga.value = "Pilih paket kursus terlebih dahulu";
                }
            }
        }
    }
</script>
<script>
    $('#formDaDir').hide();
    $(document).ready(function() {
        $('#btnPilih').click(function() {
            $('#formDaDir').toggle();
            var konten = document.getElementById("formDaDir");
            konten.scrollIntoView();

        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#telpon').inputmask("(9999-9999-9999)||(9999-9999-99999)");
    });
</script>

<?php $this->endSection(); ?>