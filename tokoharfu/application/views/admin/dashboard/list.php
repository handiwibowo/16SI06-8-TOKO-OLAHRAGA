<table class="table table-responsive-sm table-hover table-outline mb-0">
    <thead class="thead-light">
    <tr>
      <th class="text-center">
        <i class="icon-people"></i>
      </th>
      <th>User</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Address</th>
      <th>Activity</th>
    </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach($user as $user) { ?>
    <tr>
      <td class="text-center">
        <div class="avatar">
          <img class="img-avatar" src="<?php echo base_url(); ?>assets/admin/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
          <span class="avatar-status badge-success"></span>
        </div>
      </td>
      <td><?php echo $user->nama_admin ?></td>
      <td><?php echo $user->email_admin ?></td>
      <td><?php echo $user->telp_admin ?></td>
      <td><?php echo $user->alamat_admin ?></td>
      <td>
      </td>
    </tr>
  <?php } ?>

  </tbody>
</table>