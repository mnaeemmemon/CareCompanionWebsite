@extends('layouts.pharmacymain');
@section('main-container');
<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
	<div class="container-xl">
		<div class="p-4 bg-white rounded">
		<div class="row g-3 mb-4 align-items-center justify-content-between">
			<div class="col-auto">
				<h1 class="app-page-title mb-0">Update Product</h1>
			</div>

			<form>
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-6">
					  <input type="name" class="form-control" id="name" placeholder="Medicine name">
					</div>
				  </div>
				  <br>
				  <div class="form-group row">
					<label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
					<div class="col-sm-6">
					  <input type="number" class="form-control" id="quantity" placeholder="add quantity">
					</div>
				  </div>
				  <br>
				  <div class="form-group row">
					<label for="category" class="col-sm-2 col-form-label">Category</label>
					<div class="col-sm-6">
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Capsule</option>
							<option>Syrup</option>
							<option>Insuline</option>
							<option>Injection</option>
							<option>Bandage</option>
						  </select>
					</div>
				  </div>
				  <br>
				  <div class="form-group row">
					<label for="Price" class="col-sm-2 col-form-label">Price</label>
					<div class="col-sm-6">
					  <input type="number" class="form-control" min="0" max="1500" id="Price" placeholder="add Price">
					</div>
				  </div>
				  <br>
				  <div class="form-group">
					<label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Select Image</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				  </div>
				  <br>
				  <div class="text-left">
					  <div class="btn text-white but">Update</div>
				  </div>

		  </form>

			
			
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