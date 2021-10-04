

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <title>User Login</title>
    
    
    <style> 
    
    .card {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
    </style>
    
  </head>
  <body style="background:#EBCAFE">
   <div class="container">  
   <br/><br/><br/>
   
   
   

<div class="container pt-3">
   
  <div class="row justify-content-sm-center">
		<?php echo validation_errors(); ?>
    <div class="col-sm-10 col-md-6">
      <div class="card border-info">
        <div class="card-header">Application User Login</div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4 text-center">
              <img src="<?php echo base_url('assets/company_info/logo.png')?>" width="125px" > <br/><br/>
              <italic><italic>
            </div>
            <div class="col-md-8">
			<?php  
			if($this->session->userdata('logged_in')==TRUE)
			{
				$redir_url=$this->session->userdata('redir_url');
			}
			?>
<?php if($this->session->flashdata('success')){?>
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $this->session->flashdata('success');?>
   <script>
         setTimeout(function(){
            window.location.href = '<?php echo$redir_url; ?>';
         }, 5000);
    </script>
</div>
<?php } else if($this->session->flashdata('error')){?>
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $this->session->flashdata('error');?>
</div>
<?php 
}
?>
			
			
                
           <?php echo form_open('login'); ?>
		
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Username" required>
				
					
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password" required>
				
                </div>

                    <input type="submit" name="login" value="Login" class="btn btn-info btn-sm  float-left">
               
                    &nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" class="btn btn-danger btn-sm   ">
                 

         
                
               
             
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </div>
</div>
   

   
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" ></script>
	<script> 
	Swal.fire({
	  position: 'bottom-end',
	  toast:true,
	  icon: 'success',
	  title: 'Your work has been saved',
	  showConfirmButton: false,
	  timer: 3000
	})
	</script>
  </body>
</html>





