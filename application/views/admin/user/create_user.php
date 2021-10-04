<div class="container">
<?php if($this->session->flashdata('success')){?>
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $this->session->flashdata('success');?>
</div>
<?php } else if($this->session->flashdata('error')){?>
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $this->session->flashdata('error');?>
</div>
<?php 
}
?>

<?php echo form_open('save-user'); ?>
	<div class="form-group">
		<label for="email">Name:</label>
		<input type="text"name="name" class="form-control" value="<?php echo set_value('name'); ?>">
		<?php echo form_error('name'); ?>
	</div>
	<div class="form-group">
		<label for="email">Mobile:</label>
		<input type="number"name="mobile_number" class="form-control" value="<?php echo set_value('mobile_number'); ?>">
		<?php echo form_error('mobile_number'); ?>
	</div>
	<div class="form-group">
   <label for="sel1">User Role:</label>
	  <select class="form-control" name="user_role">
		  <?php if($roles)
		  {
		  foreach($roles as $role)
		  {
		 ?>
		 <option value="<?php echo $role['userRole'];?>" > <?php echo $role['userRole'];?></option>
		 <?php 
		  }
		  }
		  ?>
	  </select>
	</div>
	<div class="form-group">
   <label for="sel1">Status:</label>
	  <select class="form-control" name="status">
		<option value="1" selected>Active</option>
		<option value="0">Inactive</option>
	  </select>
	</div>
	
	<div class="form-group">
		<label for="email">Password:</label>
		<input type="password"name="password" class="form-control" value="<?php echo set_value('password'); ?>">
		<?php echo form_error('password'); ?>
	</div>
	<div class="form-group">
		<label for="email">Re-type Password:</label>
		<input type="password"name="cpassword" class="form-control" value="<?php echo set_value('cpassword'); ?>">
		<?php echo form_error('cpassword'); ?>
	</div>
 
  <button type="submit" class="btn btn-primary btn-sm btn-block">Save</button>
  <button type="reset" class="btn btn-warning btn-sm btn-block">Reset Data</button>
   <a href="<?php echo base_url();?>" class="btn btn-danger btn-sm btn-block">Back</a>


 
</div>