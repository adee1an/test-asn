<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datatable - Search By Column</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-8">
				<div class="text-muted">
					Advanced Search
				</div>
				<div class="row">
					<div class="col-md-5">
						<select class="form-control" id="select-column">
							<option value="3">Transaction Status</option>
							<option value="5">Barcode</option>


						</select>
					</div>
					<div class="col-md-7">
						<input class="form-control" type="text" id="search-by-column" placeholder="Search By Column">
					</div>
				</div>
			</div>
		</div>
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Request Unique</th>
					<th scope="col">Transaction Id</th>
					<th scope="col">Transaction Status</th>
					<th scope="col">Description</th>
					<th scope="col">Barcode</th>
					<th scope="col">Balance</th>
					<th scope="col">Create Date</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				@foreach ($test as $key =>$value)

					<td>{{$key++}}</td>
					<td>{{$value->Request_Unique}}</td>
					<td>{{$value->Transaction_Id}}</td>
					<td>{{$value->Transaction_Status}}</td>
					<td>{{$value->Description}}</td>
					<td>{{$value->Barcode}}</td>
					<td>{{$value->Balance}}</td>
					<td>{{$value->Create_Date}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			function searchByColumn(table) {
				var defaultSearch = 3 //Name
				$(document).on('change', '#select-column', function() {
					defaultSearch = this.value;
				});
				$(document).on('change', '#search-by-column', function() {
					table.search('').columns().search('').draw();
					table.column(defaultSearch).search(this.value).draw();
				});
			}
		    var table = $('#example').DataTable();
		    searchByColumn(table);
		} );
	</script>
</body>
</html>