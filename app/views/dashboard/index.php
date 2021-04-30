
	<div class="col-md-7">
		<div class="card">
			<div class="card-body">
				<form action="dashboard/submitPost" method="post">
					<input type="text" name="ownerid" hidden value="<?=$_SESSION['UserLoggedIn'] ?>"> 
					<div class="form-group">
					    <h3 for="FormControlTextarea1" class="mb-4">#JustAsk</h3>
					    <textarea required="" name="postfield" id="post-field" class="form-control" id="FormControlTextarea1" rows="3" placeholder="Any Question?"></textarea>
					</div>
					<div class="row mx-auto">
						<div class="form-group mt-3 mr-3">
							<select class="custom-select" name="category">
							  <option value="General">Select category&emsp;(Default : General)</option>
							  <option value="Programming">Programming</option>
							  <option value="Gaming">Gaming</option>
							  <option value="Music">Music</option>
							  <option value="Movie">Movie</option>
							  <option value="Book">Book</option>
							  <option value="Art">Art</option>
							</select>
						</div>
						<div class="form-group mt-3">
							<button type="submit" name="post" class="btn btn-info">
								Post &nbsp;<i class="fas fa-paper-plane"></i>
							</button> 
						</div>
					</div>
				</form>
			</div>
		</div>
		<hr>
		<div class="card">
			<div class="card-body">
				<small>&nbsp;Category : <span class="text-info"><i class="fab fa-python fa-fw"></i> Python</span></small>
			</div>
		</div>
		<hr>

		<!-- Sample content start -->
		<div class="card mb-3">
			<div class="card-body">
				<div>
					<div class="row mx-1">
						<img src="<?=ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg" height="30px" width="30px" class="rounded-circle">&emsp;
						<div>
							<span class="mb-0 pb-0">kaveen99 &bull; <small>Python</small></span><br>
							<small class="text-muted mt-0">Today at 12:33</small>
						</div>
					</div>
					<div class="mx-5 mt-3">  
						<a href="post" class="card-text deco-none">
							<p class="text-muted">Anyone know how to fix python IDE keep not responding after initialized?</p>
						</a>
					</div>
					<div class="d-flex justify-content-center mt-4">
						<div class="text-center">
							<a href="post" class="deco-none text-secondary">
								<small><i class="fas fa-comment-alt fa-fw"></i> 3 Comments</small>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sample content end -->
		<!-- Sample content start -->
		<div class="card mb-3">
			<div class="card-body">
				<div>
					<div class="row mx-1">
						<img src="<?=ROOTURL ?>/public/assets/img/profile-img/usr3.jpeg" height="30px" width="30px" class="rounded-circle">&emsp;
						<div>
							<span class="mb-0 pb-0">rujakbebek &bull; <small>Python</small></span><br>
							<small class="text-muted mt-0">Yesterday at 11:13</small>
						</div>
					</div>
					<div class="mx-5 mt-3">  
						<a href="post" class="card-text deco-none">
							<p class="text-muted">My Desktop start freezing everytime I run PyCharm v2020.3 <br> I've tried to reinstall the PyCharm but it doesn't take effect, anyone has the same issue? and how to fix this, it's very annoying:(</p>
						</a>
					</div>
					<div class="d-flex justify-content-center mt-4">
						<div class="text-center">
							<a href="post" class="deco-none text-secondary">
								<small><i class="fas fa-comment-alt fa-fw"></i> 4 Comments</small>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sample content end -->
		<!-- Sample content start -->
		<div class="card mb-3">
			<div class="card-body">
				<div>
					<div class="row mx-1">
						<img src="<?=ROOTURL ?>/public/assets/img/profile-img/usr10.jpeg" height="30px" width="30px" class="rounded-circle">&emsp;
						<div>
							<span class="mb-0 pb-0">buGuru69 &bull; <small>Python</small></span><br>
							<small class="text-muted mt-0">March 15 at 21:18</small>
						</div>
					</div>
					<div class="mx-5 mt-3">  
						<a href="post" class="card-text deco-none">
							<p class="text-muted">Anyone know how to fix python IDE keep not responding after initialized?</p>
						</a>
					</div>
					<div class="d-flex justify-content-center mt-4">
						<div class="text-center">
							<a href="post" class="deco-none text-secondary">
								<small><i class="fas fa-comment-alt fa-fw"></i> 12 Comments</small>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sample content end -->

		
			<div class="d-flex justify-content-center mb-4">
				<button class="btn btn-light btn-lg">
					<small class="text-secondary">
					<i class="fas fa-angle-double-down"></i> Load More <i class="fas fa-angle-double-down"></i>
					</small>
				</button>
			</div>
		

	</div>

