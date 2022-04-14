// Detail Modal Kelola Siswa
$(function () {
	$(".detailSiswa").on("click", function () {
		const no_pendaftaran = $(this).data("no_pendaftaran");

		$.ajax({
			url: "http://localhost/ppdb/kelola_siswa/detailSiswa",
			data: { no_pendaftaran: no_pendaftaran },
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#foto").attr("src", "assets/img/foto/" + data.image);
				$("#no_pendaftaran").html(data.no_pendaftaran);
				$("#nisn").html(data.nisn);
				$("#skhun").html(data.skhun);
				$("#nama").html(data.nama);
				$("#sekolah_asal").html(data.sekolah_asal);
				$("#tempat_lahir").html(data.tempat_lahir);
				$("#tgl_lahir").html(data.tgl_lahir);
				$("#jenis_kelamin").html(data.jenis_kelamin);
				$("#alamat").html(data.alamat);
				$("#hp").html(data.hp);
				$("#email").html(data.email);
				$("#agama").html(data.agama);
				$("#jurusan").html(data.jurusan);
				$("#status").html(data.status);
				$("#anak_ke").html(data.anak_ke);
				$("#kewarganegaraan").html(data.kewarganegaraan);
				$("#nama_ayah").html(data.nama_ayah);
				$("#pekerjaan_ayah").html(data.pekerjaan_ayah);
				$("#nama_ibu").html(data.nama_ibu);
				$("#pekerjaan_ibu").html(data.pekerjaan_ibu);
				$("#hp_ortu").html(data.hp_ortu);
				$("#gambar").html(data.image);
				$("#s_ijazah").html(data.file_ijazah);
				$("#s_skhun").html(data.file_skhun);
				$("#foto_pembayaran").html(data.image_pembayaran);
			},
		});
	});
});

// Update Modal Kelola Siswa
$(function () {
	$(".editSiswa").on("click", function () {
		const no_pendaftaran = $(this).data("no_pendaftaran");

		$.ajax({
			url: "http://localhost/ppdb/kelola_siswa/detail",
			data: { no_pendaftaran: no_pendaftaran },
			method: "post",
			dataType: "json",
			success: function (data) {
				$("#no_pendaftaran1").val(data.no_pendaftaran);
				$("#nisn1").val(data.nisn);
				$("#skhun1").val(data.skhun);
				$("#nama1").val(data.nama);
				$("#sekolah_asal1").val(data.sekolah_asal);
				$("#tempat_lahir1").val(data.tempat_lahir);
				$("#tgl_lahir1").val(data.tgl_lahir);
				$("#jenis_kelamin1").val(data.jenis_kelamin);
				$("#alamat1").val(data.alamat);
				$("#hp1").val(data.hp);
				$("#email1").val(data.email);
				$("#agama1").val(data.agama);
				$("#jurusan1").val(data.jurusan);
				$("#status1").val(data.status);
				$("#anak_ke1").val(data.anak_ke);
				$("#kewarganegaraan1").val(data.kewarganegaraan);
				$("#nama_ayah1").val(data.nama_ayah);
				$("#pekerjaan_ayah1").val(data.pekerjaan_ayah);
				$("#nama_ibu1").val(data.nama_ibu);
				$("#pekerjaan_ibu1").val(data.pekerjaan_ibu);
				$("#hp_ortu1").val(data.hp_ortu);
			},
		});
	});
});
