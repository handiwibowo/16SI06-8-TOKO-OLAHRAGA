<h1><?php echo $title ?></h1><p>
	<a href="<?php echo base_url('user/tambah') ?>" class="btn btn-success btn-lg" >
		<i class="fa fa-plus"></i> Tambah baru
	</a>
</p>
<!--
<?php 
// Notifikasi
/*if ($this->session->flashdata('sukses'))
 {
	echo "<p class="alert alert-success">";
	echo $this->session->flashdata('sukses');
	echo "</div>";
}*/
?>
-->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php $no=1; foreach($user as $user) { ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $user->nama_admin ?></td>
      <td><?php echo $user->email_admin ?></td>
      <td><?php echo $user->telp_admin ?></td>
      <td><?php echo $user->alamat_admin ?></td>
      <td>
      	<a href="<?php echo base_url('admin/user/edit/'.$user->id_admin) ?>" class="btn btn-info btn-sm">
      		<i class="fa fa-edit"></i> Edit
      	</a>
      	<a href="<?php echo base_url('admin/user/delete/'.$user->id_admin) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah data ini akan dihapus?')" >
      		<i class="fa fa-trash-o"></i> Hapus
      	</a>
      </td>
    </tr>
	<?php } ?>

  </tbody>
</table>
