<img src="./assets/img/logo.png" style="float: left; height: 65px; margin-right: 20px">

<div>
    <div style="font-size: 18px;">Data Pendaftaran Siswa Baru | Tahun <?= date('Y') ?></div>
    <div style="font-size: 20px;">SMK WIRAKARYA 2 CIPARAY</div>
    <div style="font-size: 15px;">Jl. Raya Andir No. 17 Kec. Ciparay Kab. Bandung 40381</div>
</div>

<hr>

<div style="margin-bottom: 5px;">Tanggal CETAK : <?= tanggal() ?> </div>
<table>
    <tr>
        <th valign="top">
            <div align="left" style="margin-top: 5px;">
                <img src="./assets/img/foto/<?= $profil['image']; ?>" class="img-thumbnail" style="max-width: 150px;">
            </div>
        </th>
        <th>
            <div>
                <table style=" font-weight: normal;">
                    <tbody align="left" valign="top">
                        <tr>
                            <th><label>No. Pendaftaran</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['no_pendaftaran']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>NISN</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['nisn']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>No. SKHUN</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['skhun']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Nama Lengkap</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['nama']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Nama Sekolah Asal</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['sekolah_asal']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Tempat Tanggal Lahir</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['tempat_lahir']; ?>, <?= $user['tgl_lahir']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Jenis Kelamin</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['jenis_kelamin']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Alamat</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['alamat']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>No Hp / Telepon</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['hp']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Email</label></th>
                            <td><label>:</label></td>
                            <td><label id="email"><?= $user['email']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Agama</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['agama']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Bid.Studi Keahlian Yang Dipilih</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['jurusan']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Status Dalam Keluarga</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['status']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Anak ke</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['anak_ke']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Kewarganegaraan</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['kewarganegaraan']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Nama Ayah</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['nama_ayah']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Pekerjaan Ayah</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['pekerjaan_ayah']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Nama Ibu</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['nama_ibu']; ?></label></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Pekerjaan Ibu</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['pekerjaan_ibu']; ?></label></td>
                        </tr>
                        <tr>
                            <th><label>No. Hp / Telepon</label></th>
                            <td><label>:</label></td>
                            <td><label><?= $user['hp_ortu']; ?></label></td>
                        </tr>
                </table>
            </div>
        </th>
    </tr>
    <table>
        <tr>
            <th align="left" style="margin-top: 20px;"><label>Lampiran</label></th>
        </tr>
        <tr>
            <td><label>1. Foto 3 x 4</label></td>
            <td><img src="./assets/img/success.png" style="max-width: 20px; margin-left: 15px;"></td>
        </tr>
        <tr>
            <td><label>2. Scan Ijazah SMP/MTs/N/Sederajat</label></td>
            <td><img src="./assets/img/success.png" style="max-width: 20px; margin-left: 15px;"></td>
        </tr>
        <tr>
            <td><label>3. Scan SKHUN</label></td>
            <td><img src="./assets/img/success.png" style="max-width: 20px; margin-left: 15px;"></td>
        </tr>
        <tr>
            <td><label>4. Bukti Pembayaran </label></td>
            <td><img src="./assets/img/success.png" style="max-width: 20px; margin-left: 15px;"></td>
        </tr>
    </table>
</table>