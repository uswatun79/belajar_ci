<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<center><p>Data Berikut Berasal Dari Database Tabel Mahasiswa</p></center>
	<table border="1" cellspacing="0" cellpadding="5" style='border-collapse:collapse;' align="center">
		<thead>
			<th>No</th>
			<th>Nrp</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</thead>
		<tbody> <?php
			//cek kondisi apakaharray $mhs yang berasal dari controller sudah diinisialisasi/sudah terbentuk/sudah ada
			//jika telah diinisialisasi berarti tabel mahasiswa sudah memiliki data
			if(isset($mhs)){
				$no=1;
				//perulangan untuk menampilkan isi dari array $mhs yang selanjutnya ditampung sebuah variabel bernama $value
				//selanjutnya karena data hasil query sebelumnya pada bagian controller Mahasiswa menggunakan result() yaitu dalam
				//bentuk array object maka untuk menampilkan data harus menggunakan object (menggunakan tanda)
				foreach ($mhs as $value) { ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $value->nrp; ?></td>
						<td><?php echo $value->nama; ?></td>
						<td><?php echo $value->email; ?></td>
						<td><?php echo $value->jurusan; ?></td>						
					</tr> <?php
			 		$no++;
			 	}
			}else{ ?>
				<tr>
					<td colspan="5">Data mahasiswa belum ada</td>
				</tr><?php
			} ?>
		</tbody>
	</table>
</body>
</html>