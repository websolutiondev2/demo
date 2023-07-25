
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<h2>Example: Filter Search Result with Ajax, PHP & MySQL</h2>
	<br>
	<div class="row">		
        <!-- <from method="POST"> -->
		<div class="form-group col-md-3">
			<input type="text" class="search form-control" id="keywords" name="keywords" placeholder="By customer or item">			
		</div>
		<div class="form-group col-md-2">
			<input type="button" class="btn btn-primary" value="Search" id="search" name="search" />
		</div>
        <!-- </from> -->
		<div class="form-group col-md-4">
			<select class="form-control" id="sortSearch">
			  <option value="">Sort By</option>
			  <option value="new">Newest</option>
			  <option value="asc">Ascending</option>
			  <option value="desc">Descending</option>
			  <option value="Processed">Processed</option>
			  <option value="Pending">Pending</option>
			  <option value="Cancelled">Cancelled</option>
			</select>
		</div>
	</div>
    <div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div></div>
    <table class="table table-striped">
        <thead>
            <tr>
				<th>ID</th>
				<th>Customer Name</th>
				<th>Order Item</th>
				<th>Value</th>
				<th>Date</th>
				<th>Status</th>
            </tr>
        </thead>
        <tbody id="userData">		
			<?php			
			include 'Search.php';
			$search = new Search();
			$allOrders = $search->searchResult(array('order_by'=>'id DESC'));      
			if(!empty($allOrders)) {
				foreach($allOrders as $order) {
					$status = '';
					if($order["status"] == 'Processed') {
						$status = 'btn-success';
					} else if($order["status"] == 'Pending') {
						$status = 'btn-warning';
					} else if($order["status"] == 'Cancelled') {
						$status = 'btn-danger';
					}
					echo '
					<tr>
					<td>'.$order["id"].'</td>
					<td>'.$order["cname"].'</td>
					<td>'.$order["item"].'</td>
					<td>$'.$order["value"].'</td>
					<td>'.$order["date"].'</td>
					<td><button type="button" class="btn '.$status.' btn-xs">'.$order["status"].'</button></td>
					</tr>';
				}
			} else {
			?>            
				<tr><td colspan="5">No user(s) found...</td></tr>
			<?php } ?>
        </tbody>
    </table>	
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>