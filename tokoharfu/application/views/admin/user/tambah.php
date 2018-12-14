<h1><?php echo $title ?></h1>

<?php 
//Notifikasi error
	echo validation_errors('<div class="alert alert-warning" >','</div');

	//Form open
	echo form_open(base_url('user/tambah'), ' class="form-horizontal"'); ?>

<form>
	<div class="form-group">
    <label>Nama Pengguna</label>
    <input type="text" class="form-control col-md-10" name="nama" placeholder="Nama pengguna" value="<?php echo set_value('nama_admin')?>"  required >
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control col-md-10" name="email" placeholder="Email pengguna" value="<?php echo set_value('email_admin')?>"  required >
    <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control col-md-10" name="password" placeholder="Password" value="<?php echo set_value('password_admin')?>"  required >
  </div>
  <div class="form-group">
    <label>Nomor telephon</label>
    <input type="text" class="form-control col-md-10" name="telepon" placeholder="Nomor telephon" value="<?php echo set_value('telp_admin')?>"  required >
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control col-md-10" name="alamat" placeholder="Alamat pengguna" value="<?php echo set_value('alamat_admin')?>"  required >
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
	echo form_close();
 ?>