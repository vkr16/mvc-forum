	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item" role="presentation">
				    <a class="nav-link active text-info" id="post-tab" data-toggle="tab" href="#post" role="tab" aria-controls="post" aria-selected="true">Post</a>
				  </li>
				  <li class="nav-item" role="presentation">
				    <a class="nav-link text-info" id="comment-tab" data-toggle="tab" href="#comment" role="tab" aria-controls="comment" aria-selected="false">Comment</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active pt-4" id="post" role="tabpanel" aria-labelledby="post-tab">
				  	
				  	<!-- sample post -->
				  	<?php foreach ($data['userPost'] as $myPost): ?>
				  		<div class="card mb-3 border border-info">
							<div class="card-body">
								<div>
									<div class="row mx-1 d-flex justify-content-between">
										<div class="row mx-1">
											<img src="<?=ROOTURL ?>/public/assets/img/profile-img/<?=$data['user']['photo'] ?>" height="30px" width="30px" class="rounded-circle">&emsp;
											<div>
												<span class="mb-0 pb-0"><?=$data['user']['username'] ?> &bull; <small><?=$myPost['category']?></small></span><br>
												<small class="text-muted mt-0"></small><small><?=$myPost['date'].' at '.$myPost['hour']?></small>
											</div>
										</div>
										<div class="btn-group dropleft">
										  <button class="btn bg-transparent" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  	<i class="fas fa-ellipsis-v text-muted"></i>
										  </button>
										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										    <a class="dropdown-item" href="#" onclick="confirmDelete('<?=ROOTURL ?>','<?=$myPost['id']?>')"><small>Delete post</small></a>
										  </div>
										</div>
									</div>
									<div class="mx-5 mt-3">  
										<a href="post/<?=$myPost['id'] ?>" class="card-text deco-none">
											<p class="text-muted"><?=$myPost['content']?></p>
										</a>
									</div>
									<div class="d-flex justify-content-center mt-4">
										<div class="text-center">
											<a href="post/<?=$myPost['id'] ?>" class="deco-none text-secondary">
												<small><i class="fas fa-comment-alt fa-fw"></i> 4 Comments</small>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
				  	<?php endforeach ?>
				  	
				  	<!-- sample post end -->
				  	
				  	<!-- <div class="d-flex justify-content-center">
					  	<a href="#More" class="deco-none text-muted"><i class="fas fa-long-arrow-alt-down"></i> &nbsp;Load more&nbsp; <i class="fas fa-long-arrow-alt-down"></i> </a>
				  	</div> -->
				  </div>
				  <div class="tab-pane fade pt-4" id="comment" role="tabpanel" aria-labelledby="comment-tab">
				  	<!-- sample comment -->
				  	<div class="card mb-3 border border-info">
						<div class="card-body">
							<div>
								<div class="row mx-1">
									<img src="<?=ROOTURL ?>/public/assets/img/profile-img/user.jpg" height="30px" width="30px" class="rounded-circle">&emsp;
									<div>
										<span class="mb-0 pb-0">PisangBenyek &bull; <small>Python  <span class="text-muted"> <i class="fas fa-reply"></i> in <a class="text-muted" href="post">"My Desktop start freezing everytime I run PyCharm. . ."</a></span></small></span><br>
										<small class="text-muted mt-0">Today at 14:23</small>
									</div>
								</div>
								<div class="mx-5 mt-3">  
									<span class="card-text deco-none">
										<p class="text-muted">if restarting the kernel didn't help you might try to reinstall the library</p>
									</span>
								</div>
							</div>
						</div>
					</div>
				  	<!-- sample comment end -->
				  	<!-- sample comment -->
				  	<div class="card mb-3 border border-info">
						<div class="card-body">
							<div>
								<div class="row mx-1">
									<img src="<?=ROOTURL ?>/public/assets/img/profile-img/user.jpg" height="30px" width="30px" class="rounded-circle">&emsp;
									<div>
										<span class="mb-0 pb-0">PisangBenyek &bull; <small>Python  <span class="text-muted"> <i class="fas fa-reply"></i> in <a class="text-muted" href="post">"My Desktop start freezing everytime I run PyCharm. . ."</a></span></small></span><br>
										<small class="text-muted mt-0">Yesterday at 11:13</small>
									</div>
								</div>
								<div class="mx-5 mt-3">  
									<span class="card-text deco-none">
										<p class="text-muted">You can try to restat the kernel to make it work again... tell me if that work for you</p>
									</span>
								</div>
							</div>
						</div>
					</div>
				  	<!-- sample comment end -->
				  	<div class="d-flex justify-content-center">
					  	<a href="#MoreComment" class="deco-none text-muted"><i class="fas fa-long-arrow-alt-down"></i> &nbsp;Load more&nbsp; <i class="fas fa-long-arrow-alt-down"></i> </a>
				  	</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function confirmDelete(root,i){
		if (confirm("Are you sure want to delete this post?") == true) {
			window.location = root+'/post/delete/'+i;
		}
	}
</script>