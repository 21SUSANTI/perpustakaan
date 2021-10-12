<?php
include "../koneksi.php";

?>
<link rel="stylesheet" type="text/css" href="../style.css">
<h3>Data Anggota</h3></div>
<div id="content">
<table border="1" id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>ID Buku</th>
			<th>Judul</th>
			<th>Foto</th>
			<th>Jenis</th>
			<th>Pengarang</th>
		</tr>
		
		<?php		
		$nomor=1;
		$query="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_buku)>0)
		{
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
			if(empty($r_tampil_buku['foto'])or($r_tampil_buku['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_buku['foto'];
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['judul']; ?></td>
			<td><img src="../images/<?php echo $foto; ?>" width=70px height=70px></td>
			<td><?php echo $r_tampil_buku['jenis']; ?></td>
			<td><?php echo $r_tampil_buku['pengarang']; ?></td>		
		</tr>		
		<?php $nomor++; } 
		}?>		
	</table>
	<script>
		window.print();
	</script>
</div>
