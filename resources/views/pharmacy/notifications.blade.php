@extends('layouts.pharmacymain')
@section('main-container')
    
<div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <div class="position-relative mb-3">
				    <div class="row g-3 justify-content-between">
						<div class="p-4 bg-white rounded">

					    <div class="col-auto">
					        <h1 class="app-page-title mb-0">Notifications</h1>
					    </div>
						</div>
					    
				    </div>
			    </div>
			    
                <div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <h4 class="notification-title mb-1">You have 1 new order</h4>
						        
						        <ul class="notification-meta list-inline mb-0">
							        <li class="list-inline-item">2 hrs ago</li>
							        <li class="list-inline-item">|</li>
							        <li class="list-inline-item">Faisal Majeed</li>
						        </ul>
						   
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <div class="notification-content">Order From Faisal Majeed, Details are ......</div>
				    </div><!--//app-card-body-->
				    
				</div><!--//app-card-->
				
				<div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <h4 class="notification-title mb-1">You have 1 new order</h4>
						        
						        <ul class="notification-meta list-inline mb-0">
							        <li class="list-inline-item">4 hrs ago</li>
							        <li class="list-inline-item">|</li>
							        <li class="list-inline-item">Khurram Majeed</li>
						        </ul>
						   
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <div class="notification-content">Order From Khurram Majeed, Details are ......</div>
				    </div><!--//app-card-body-->
				    
				</div><!--//app-card-->
			
				<div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <h4 class="notification-title mb-1">You have 1 new message</h4>
						        
						        <ul class="notification-meta list-inline mb-0">
							        <li class="list-inline-item">7 hrs ago</li>
							        <li class="list-inline-item">|</li>
							        <li class="list-inline-item">Sumaima</li>
						        </ul>
						   
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <div class="notification-content">Message From Sumaima, Details are ......</div>
				    </div><!--//app-card-body-->
				    
				</div><!--//app-card-->
			
				<div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <h4 class="notification-title mb-1">Order Delivered</h4>
						        
						        <ul class="notification-meta list-inline mb-0">
							        <li class="list-inline-item">12 hrs ago</li>
							        <li class="list-inline-item">|</li>
							        <li class="list-inline-item">Kareem</li>
						        </ul>
						   
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <div class="notification-content">Order From Kareem Is Delivered, Details are ......</div>
				    </div><!--//app-card-body-->
				    
				</div><!--//app-card-->

				<div class="app-card app-card-notification shadow-sm mb-4">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <h4 class="notification-title mb-1">10000 Deposited in Your Account</h4>
						        
						        <ul class="notification-meta list-inline mb-0">
							        <li class="list-inline-item">23 hrs ago</li>
							        <li class="list-inline-item">|</li>
							        <li class="list-inline-item">Subhan Saeed</li>
						        </ul>
						   
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <div class="notification-content">Payment From Subhan Saeed, Details are ......</div>
				    </div><!--//app-card-body-->
				    
				</div><!--//app-card-->

			</div>
				
				
				
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    
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