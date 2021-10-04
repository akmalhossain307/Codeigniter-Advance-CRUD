<div class="container">
  <h2>List - Users</h2> 
<br/>
 <a href="<?php echo base_url('create-user');?>" class="btn btn-outline-primary btn btn-sm">Create New User</a>
 
 <a href="<?php echo base_url();?>" class="btn btn-outline-danger btn btn-sm">Home</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SL No.</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Assigned Role</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$sl=0;
	if($users)
	{
	foreach($users as $user)
	{
	$sl++;
	?>
	
      <tr>
        <td><?php echo$sl;?></td>
        <td><?php echo$user['name'];?></td>
        <td><?php echo$user['mobile_number'];?></td>
        <td><?php echo$user['user_role'];?></td>
        <td><?php 
		$sts=$user['status'];
		if($sts==1)
		{
		echo"<span class='alert alert-success'>Active</span>";
		}
		else 
		{
		echo"<span class='alert alert-danger'>Inactive</span>";
		}
		?></td>
      </tr>
	<?php 
	}
	}
	?>  
    </tbody>
  </table>
</div>
