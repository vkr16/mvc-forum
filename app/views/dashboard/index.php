
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
				<small>&nbsp;Category : <span class="text-info"><i class="<?= $data['logo'] ?> fa-fw"></i> <?= $data['category'] ?></span></small>
			</div>
		</div>
		<hr>

		<!-- Sample content start -->
		<?php foreach ($data['post'] as $post): ?>
		<div class="card mb-3">
			<div class="card-body">
				<div>
					<div class="row mx-1">
						<img src="<?=ROOTURL ?>/public/assets/img/profile-img/<?=$post['ppowner'] ?>" height="30px" width="30px" class="rounded-circle">&emsp;
						<div>
							<span class="mb-0 pb-0"><?=$post['ownername'];?> &bull; <small><?= $post['category']  ?></small></span><br>
							<small class="text-muted mt-0"><?=$post['date'].' at '.$post['hour'] ?></small>
						</div>
					</div>
					<div class="mx-5 mt-3">  
						<a href="post" class="card-text deco-none">
							<p class="text-muted"><?= $post['content']?></p>
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
		<?php endforeach ?>
		<!-- Sample content end -->
				
			<div class="d-flex justify-content-center mb-4">
				<button class="btn btn-light btn-lg">
					<small class="text-secondary">
					<i class="fas fa-angle-double-down"></i> Load More <i class="fas fa-angle-double-down"></i>
					</small>
				</button>
			</div>
		

	</div>

