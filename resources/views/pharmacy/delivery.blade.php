@extends('layouts.pharmacymain')
@section('main-container')
    
<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
	<div class="container-xl">
		
		<div class="row g-3 mb-4 align-items-center justify-content-between">
			<div class="p-3 text-center bg-white rounded">

			<div class="col-auto">
				<h1 class="app-page-title mb-0">Delivery</h1>
			</div>
			</div>
			
		</div><!--//row-->
	   
		
		<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
			<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
			<a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
			<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
			<a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
		</nav>
		
		
		<div class="tab-content" id="orders-table-tab-content">
			<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
				<div class="app-card app-card-orders-table shadow-sm mb-5">
					<div class="app-card-body">
						<div class="table-responsive">
							<table class="table app-table-hover mb-0 text-left">
								<thead>
									<tr>
										<th class="cell">Order</th>
										<th class="cell">Product</th>
										<th class="cell">Customer</th>
										<th class="cell">Date</th>
										<th class="cell">Status</th>
										<th class="cell">Total</th>
										<th class="cell"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="cell">#15346</td>
										<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
										<td class="cell">John Sanders</td>
										<td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
										<td class="cell"><span class="badge bg-success">Paid</span></td>
										<td class="cell">$259.35</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
									<tr>
										<td class="cell">#15345</td>
										<td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
										<td class="cell">Dylan Ambrose</td>
										<td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
										<td class="cell"><span class="badge bg-warning">Pending</span></td>
										<td class="cell">$96.20</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
									<tr>
										<td class="cell">#15344</td>
										<td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
										<td class="cell">Teresa Holland</td>
										<td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
										<td class="cell"><span class="badge bg-success">Paid</span></td>
										<td class="cell">$123.00</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
									
									<tr>
										<td class="cell">#15343</td>
										<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
										<td class="cell">Jayden Massey</td>
										<td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
										<td class="cell"><span class="badge bg-success">Paid</span></td>
										<td class="cell">$199.00</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
									
									<tr>
										<td class="cell">#15342</td>
										<td class="cell"><span class="truncate">Justo feugiat neque</span></td>
										<td class="cell">Reina Brooks</td>
										<td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
										<td class="cell"><span class="badge bg-danger">Cancelled</span></td>
										<td class="cell">$59.00</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
									
									<tr>
										<td class="cell">#15341</td>
										<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
										<td class="cell">Raymond Atkins</td>
										<td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
										<td class="cell"><span class="badge bg-success">Paid</span></td>
										<td class="cell">$678.26</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>

								</tbody>
							</table>
						</div><!--//table-responsive-->
					   
					</div><!--//app-card-body-->		
				</div><!--//app-card-->
				
			</div><!--//tab-pane-->
			
			<div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
				<div class="app-card app-card-orders-table mb-5">
					<div class="app-card-body">
						<div class="table-responsive">
							
							<table class="table mb-0 text-left">
								<thead>
									<tr>
										<th class="cell">Order</th>
										<th class="cell">Product</th>
										<th class="cell">Customer</th>
										<th class="cell">Date</th>
										<th class="cell">Status</th>
										<th class="cell">Total</th>
										<th class="cell"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="cell">#15346</td>
										<td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
										<td class="cell">John Sanders</td>
										<td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
										<td class="cell"><span class="badge bg-success">Paid</span></td>
										<td class="cell">$259.35</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
									
									<tr>
										<td class="cell">#15344</td>
										<td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
										<td class="cell">Teresa Holland</td>
										<td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
										<td class="cell"><span class="badge bg-success">Paid</span></td>
										<td class="cell">$123.00</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
									
									<tr>
										<td class="cell">#15343</td>
										<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
										<td class="cell">Jayden Massey</td>
										<td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
										<td class="cell"><span class="badge bg-success">Paid</span></td>
										<td class="cell">$199.00</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
								
									
									<tr>
										<td class="cell">#15341</td>
										<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
										<td class="cell">Raymond Atkins</td>
										<td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
										<td class="cell"><span class="badge bg-success">Paid</span></td>
										<td class="cell">$678.26</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>

								</tbody>
							</table>
						</div><!--//table-responsive-->
					</div><!--//app-card-body-->		
				</div><!--//app-card-->
			</div><!--//tab-pane-->
			
			<div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
				<div class="app-card app-card-orders-table mb-5">
					<div class="app-card-body">
						<div class="table-responsive">
							<table class="table mb-0 text-left">
								<thead>
									<tr>
										<th class="cell">Order</th>
										<th class="cell">Product</th>
										<th class="cell">Customer</th>
										<th class="cell">Date</th>
										<th class="cell">Status</th>
										<th class="cell">Total</th>
										<th class="cell"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="cell">#15345</td>
										<td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
										<td class="cell">Dylan Ambrose</td>
										<td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
										<td class="cell"><span class="badge bg-warning">Pending</span></td>
										<td class="cell">$96.20</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
								</tbody>
							</table>
						</div><!--//table-responsive-->
					</div><!--//app-card-body-->		
				</div><!--//app-card-->
			</div><!--//tab-pane-->
			<div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
				<div class="app-card app-card-orders-table mb-5">
					<div class="app-card-body">
						<div class="table-responsive">
							<table class="table mb-0 text-left">
								<thead>
									<tr>
										<th class="cell">Order</th>
										<th class="cell">Product</th>
										<th class="cell">Customer</th>
										<th class="cell">Date</th>
										<th class="cell">Status</th>
										<th class="cell">Total</th>
										<th class="cell"></th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td class="cell">#15342</td>
										<td class="cell"><span class="truncate">Justo feugiat neque</span></td>
										<td class="cell">Reina Brooks</td>
										<td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
										<td class="cell"><span class="badge bg-danger">Cancelled</span></td>
										<td class="cell">$59.00</td>
										<td class="cell"><a class="btn-sm app-btn-secondary" href="{{url('/orderdetails2')}}">View</a></td>
									</tr>
									
								</tbody>
							</table>
						</div><!--//table-responsive-->
					</div><!--//app-card-body-->		
				</div><!--//app-card-->
			</div><!--//tab-pane-->
		</div><!--//tab-content-->
		
		
		
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