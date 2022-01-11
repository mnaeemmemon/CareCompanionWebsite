@extends('layouts.pharmacymain')
@section('main-container')
    
<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
	<div class="container-xl">
		<div class="p-4 bg-white rounded">
		<h1 class="app-page-title">Account Settings</h1>
			<hr>
		<div class="row g-4 settings-section">
			
			<div class="col-12 col-md-8">
				<div class="app-card app-card-settings p-4">
					
					<div class="app-card-body">
						<form class="settings-form">
							<div class="mb-3">
								<label for="setting-input-1" class="form-label">Name</label>
								<input type="text" class="form-control" id="setting-input-1" placeholder="Louis James" required>
							</div>
							<div class="mb-3">
								<label for="setting-input-2" class="form-label">Contact Number</label>
								<input type="text" class="form-control" id="setting-input-2" placeholder="+509 2222813123" required>
							</div>
							<div class="mb-3">
								<label for="setting-input-3" class="form-label">Email Address</label>
								<input type="email" class="form-control" id="setting-input-3" placeholder="B/75 Street 4, Washington">
							</div>
							<div class="mb-3">
								<label for="setting-input-3" class="form-label">Country</label>
								<input type="email" class="form-control" id="setting-input-3" placeholder="US">
							</div>
							<div class="mb-3">
								<label for="setting-input-3" class="form-label">City</label>
								<input type="email" class="form-control" id="setting-input-3" placeholder="Washington">
							</div>
							
							
							<button type="submit" class="btn app-btn-primary">Update</button>
						</form>
					</div><!--//app-card-body-->
					
				</div><!--//app-card-->
			</div>
		</div><!--//row-->
		</div>

		

		

		
		
		  
		
			
			

		   
		
	</div><!--//container-fluid-->
</div><!--//app-content-->
</div>


				
				


</div><!--//app-wrapper-->    					
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<!-- Javascript -->          
<script src="../assets/plugins/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

<!-- Page Specific JS -->
<script src="../assets/js/app.js"></script> 

</body>
</html> 

@endsection