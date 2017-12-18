<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>


	<div class="container">
		<br>
		<div class="row">
		    <div class="col-lg-12 margin-tb">					
		        <div class="pull-left">
		            <h2>Admin</h2>
		        </div>
		        <div class="pull-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-product">
					  Create Product
				</button>
		        </div>
		    </div>
		</div>


		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Name</th>
				<th>Category</th>
				<th>Price</th>
				<th>Image URL</th>
				<th width="200px">Action</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>


		<ul id="pagination" class="pagination-sm"></ul>


	    <!-- Create Product Modal -->
		<div class="modal fade" id="create-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Create Product</h4>
		      </div>
		      <div class="modal-body">


		      		<form data-toggle="validator" action="{{ route('product-ajax.store') }}" method="POST">
		      			<div class="form-group">
							<label class="control-label" for="title">Name:</label>
							<input type="text" name="name" class="form-control" data-error="Please enter name." required />
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Category:</label>
							<input name="category" class="form-control" data-error="Please enter category." required></input>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Price:</label>
							<input name="price" class="form-control" data-error="Please enter price." required></input>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Image URL:</label>
							<input name="image_url" class="form-control" data-error="Please enter image url." required></input>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn crud-submit btn-success">Submit</button>
						</div>
		      		</form>
		      </div>
		    </div>
		  </div>
		</div>


		<!-- Edit Product Modal -->
		<div class="modal fade" id="edit-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
		      </div>
		      <div class="modal-body">


		      		<form data-toggle="validator" action="/product-ajax/14" method="put">
		      			<div class="form-group">
							<label class="control-label" for="title">Name:</label>
							<input type="text" name="name" class="form-control" data-error="Please enter name." required />
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Category:</label>
							<input name="category" class="form-control" data-error="Please enter category." required></input>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Price:</label>
							<input name="price" class="form-control" data-error="Please enter price." required></input>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label" for="title">Image URL:</label>
							<input name="image_url" class="form-control" data-error="Please enter image url." required></input>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
						</div>
		      		</form>


		      </div>
		    </div>
		  </div>
		</div>


	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


        <script type="text/javascript">
    	   var url = "<?php echo route('product-ajax.index')?>";
        </script>
        <script src="/js/product-ajax.js"></script> 


</body>
</html>