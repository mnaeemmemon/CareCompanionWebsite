@extends('layouts.pharmacymain')
@section('main-container')
    
<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
	<div class="container-xl">
		<div class="p-4 bg-white rounded">
		<div class="row g-3 mb-4 align-items-center justify-content-between">
			<div class="col-auto">
				<h1 class="app-page-title mb-0">Add Product</h1>
			</div>
			<hr>

			<form>
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-6">
					  <input type="name" class="form-control" id="name" placeholder="Medicine name">
					</div>
				  </div>
				  <br>
				  <div class="form-group row">
					<label for="gram" class="col-sm-2 col-form-label">Gram</label>
					<div class="col-sm-6">
					  <input type="number" class="form-control" id="Gram" placeholder="add Gram">
					</div>
				  </div>
				  <br>
				  <div class="form-group row">
					<label for="Manufacturer" class="col-sm-2 col-form-label">Manufacturer</label>
					<div class="col-sm-6">
					  <input type="name" class="form-control" id="Gram" placeholder="Enter name">
					</div>
				  </div>
				  <br>
				  <div class="form-group row">
					<label for="formula" class="col-sm-2 col-form-label">Formula</label>
					<div class="col-sm-6">
					  <input type="number" class="form-control" id="Gram" placeholder="add Formula">
					</div>
				  </div>
				  <br>
				  <div class="form-group row">
					<label for="Manufacturing date" class="col-sm-2 col-form-label">Manufacturing Date</label>
					<div class="col-sm-6">
					  <input type="date" class="form-control"  placeholder="Insert date">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="expiry date" class="col-sm-2 col-form-label">Expiry Date</label>
					<div class="col-sm-6">
					  <input type="date" class="form-control" placeholder="Insert Date">
					</div>
				  </div>
				  <br>
				  <div class="form-group">
					<label for="exampleFormControlTextarea1">Side Effects</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Headache, fever" rows="3"></textarea>
				  </div>
				  <br>
				  <div class="form-group row">
					<label for="category" class="col-sm-2 col-form-label">Product Type</label>
					<div class="col-sm-6">
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Headache</option>
							<option>Homeopathic</option>
							<option>Diabetes Medicine</option>
							<option>Stomache ache</option>
							<option>Fever</option>
							<option>Joint Pain</option>

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
				  <div class="form-group row">
					<label for="category" class="col-sm-2 col-form-label">Prescription Needed</label>
					<div class="col-sm-6">
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Yes</option>
							<option>No</option>
							

						  </select>
					</div>
				  </div>
				  <br>
				  <div class="text-left">
					  <div class="btn text-white but">Add</div>
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