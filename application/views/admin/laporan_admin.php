<img src="./assets/img/logo.png" style="float: left; height: 65px; margin-right: 20px">

<div>
    <div style="font-size: 18px;">Data Pendaftaran Siswa Baru | Tahun <?= date('Y') ?></div>
    <div style="font-size: 20px;">SMK WIRAKARYA 2 CIPARAY</div>
    <div style="font-size: 15px;">Jl. Raya Andir No. 17 Kec. Ciparay Kab. Bandung 40381</div>
</div>

<hr>

<div style="margin-bottom: 5px;">Tanggal CETAK : <?= tanggal() ?> </div>

<div>
    <table>
        <tbody align="left" valign="top">
            <tr>
                <td>
                    <h4>Data Pendaftar</h4>
                </td>
            </tr>
            <tr>
                <td>Jumlah Siswa Yang Mendaftar</td>
                <td align="center" style="padding-left: 100px;"><?= $user ?></td>
            </tr>
            <tr>
                <td>Mengundurkan Diri</td>
                <td align="center" style="padding-left: 100px;"><?= $resign ?></td>
            </tr>
            <tr>
                <th>
                    <h4>Bid. Studi</h4>
                </th>
            </tr>
            <tr>
                <td>Bid. Studi Farmasi Industri</td>
                <td align="center" style="padding-left: 100px;"><?= $farmasi ?></td>
            </tr>
            <tr>
                <td>Bid. Studi Jasaboga</td>
                <td align="center" style="padding-left: 100px;"><?= $jasaboga ?></td>
            </tr>
            <tr>
                <td>Bid. Studi Administrasi Perkantoran</td>
                <td align="center" style="padding-left: 100px;"><?= $administrasi ?></td>
            </tr>
            <tr>
                <td>Bid. Studi Pemasaran</td>
                <td align="center" style="padding-left: 100px;"><?= $pemasaran ?></td>
            </tr>
        </tbody>
    </table>
</div>