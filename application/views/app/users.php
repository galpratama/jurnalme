<div class="container notebook-container">
	<h1>	
      <span id="judul-jurnal">
       	<i class="fa fa-user"></i> 
          <b> Manajemen </b> Pengguna        
      </span>
      <span class="pull-right">
        <a class="btn btn-warning btn-small" href="#" data-toggle="modal" data-target="#add">
          <i class="fa fa-plus icon-white"></i> Tambah Pengguna
      </a>
      </span>
  	</h1>
	<hr>
	<table class="table table-bordered table-responsive table-stripped table-hover datatable">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $numbering = 1; ?>
			<?php foreach ($users->result() as $users_list) { ?>

			<tr>
				<td width="5%"><?php echo $numbering;?></td>
				<td><b><?php echo $users_list->users_name;?></b></td>
				<td><?php echo $users_list->users_mail;?></td>
				<td>
					<?php 
						if ($users_list->users_role == 'user') {
							echo "Users";
						}
						else if ($users_list->users_role == 'admin') {
							echo "Administrator";
						}
					?>
				</td>
				<td width="16%">
					<a href="#" data-toggle="modal" data-target="#edit<?php echo $users_list->users_id;?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Sunting</a>
					<a href="#" data-toggle="modal" data-target="#delete<?php echo $users_list->users_id;?>"class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
				</td>
			</tr>

			<?php $numbering++; ?>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php foreach ($users->result() as $users_edit) { ?>
<div class="modal fade" id="edit<?php echo $users_edit->users_id;?>" role="dialog" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><b>Sunting</b> <?php echo $users_edit->users_name;?></h4>
      </div>
      <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>app/users_update/<?php echo $users_edit->users_id;?>">
	      <div class="modal-body">
			  <div class="form-group">
			    <label for="input_name" class="col-sm-2 control-label">Nama</label>
			    <div class="col-sm-10">
			      <input required name="users_name" type="text" class="form-control" id="input_name" placeholder="Nama" value="<?php echo $users_edit->users_name;?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="input_email" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input required name="users_mail" type="email" class="form-control" id="input_email" placeholder="Email" value="<?php echo $users_edit->users_mail;?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="input_password" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input required name="users_pass" type="password" class="form-control" id="input_password" placeholder="Password" value="<?php echo $users_edit->users_pass;?>">
			    </div>
			  </div>
			  <div class="form-group pull-right">
			    <div class="col-sm-10">
			      <select required name="users_role">
			      	<option value="user" <?php if ($users_edit->users_role == 'user') echo 'selected'?>>User</option>
			      	<option value="admin" <?php if ($users_edit->users_role == 'admin') echo 'selected'?>>Administrator</option>
			      	option
			      </select>
			    </div>
			  </div>
	     </div>
	     <div class="modal-footer">
			<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
	     </div>
     </form>
     </div>
    </div>
</div>
<div class="modal fade" id="delete<?php echo $users_edit->users_id;?>" role="dialog" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-center" id="myModalLabel">Hapus Pengguna <b><?php echo $users_edit->users_name;?> ?</b></h3>
        <p class="text-center">Apakah kamu yakin ingin menghapus <b><?php echo $users_edit->users_name;?></b> <br><strong class="text-danger">Aksi ini tidak bisa dibatalkan!</strong></p>
        <a href="<?php echo base_url();?>app/users_delete/<?php echo $users_edit->users_id;?>" class="btn btn-danger btn-block btn-lg">Hapus</a>
      </div>
     </div>
    </div>
</div>
<?php } ?>

<div class="modal fade" id="add" role="dialog" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tambah Pengguna</h4>
      </div>
      <form class="form-horizontal" role="form">
	      <div class="modal-body">
			  <div class="form-group">
			    <label for="input_name" class="col-sm-2 control-label">Nama</label>
			    <div class="col-sm-10">
			      <input required type="text" class="form-control" id="input_name" placeholder="Nama">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="input_email" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input required type="email" class="form-control" id="input_email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="input_password" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input required type="password" class="form-control" id="input_password" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group pull-right">
			    <div class="col-sm-10">
			      <select required name="users_role">
			      	<option value="user">User</option>
			      	<option value="admin">Administrator</option>
			      	option
			      </select>
			    </div>
			  </div>
	     </div>
	     <div class="modal-footer">
			<button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
	     </div>
     </form>
     </div>
    </div>
</div>
