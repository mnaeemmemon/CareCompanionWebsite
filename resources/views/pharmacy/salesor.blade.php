@extends('layouts.pharmacymain')
@section('main-container')
    
<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
	<div class="container-xl">
		<div class="p-4 bg-white rounded">

		<div class="row g-3 mb-4 align-items-center justify-content-between">
			<div class="col-auto">
				<h1 class="app-page-title mb-0">Top Sales</h1>
			</div>
			<div class="col-auto">
				<div class="page-utilities">
					<select class="form-select form-select-sm w-auto" >
					  <option selected value="option-1">All</option>
					  <option value="option-2">Daily</option>
					  <option value="option-3">Weekly</option>
					  <option value="option-4">Monthly</option>
					</select>
				</div><!--//page-utilities-->
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
					  <tr>
						<th scope="col">Name</th>
						<th scope="col">Category</th>
						<th scope="col">Manufactured</th>
						<th scope="col">Expiry</th>
						<th scope="col">City</th>
						<th scope="col">Contact</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						
						<td>Panadol</td>
						<td>Capsule</td>
						<td>20th Nov 2021</td>
						<td>5th Sept 2023</td>
						<td>Lahore</td>
						<td>+92 21 8700320</td>

					  </tr>
					  <tr>
						
						<td>Novidat</td>
						<td>Capsule</td>
						<td>20th Nov 2021</td>
						<td>5th Sept 2023</td>
						<td>Lahore</td>
						<td>+92 21 8700320</td>
					  </tr>
					  
					  
					</tbody>
				  </table>

			</div>
		</div>
	   
			
		</div><!--//row-->

		

		

		
		
		  
		
			
			

		   
		
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