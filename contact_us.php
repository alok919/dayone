

<?php include 'inc/header.php' ; ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="commom_pages">
					<h3>Contact Us</h3>
				</div>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>

	<div class="container bodypage">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8 myform">
				<form>

					<div class="form-group">
						<label >Name:</label>
						<input type="text" class="form-control" id="fname" aria-describedby="emailHelp" placeholder="Enter Name">

					</div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    
				  </div>
				  <div class="form-group">
				    <label >Message</label>
				    <textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>

<?php include 'inc/footer.php' ; ?>


