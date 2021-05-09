<div class="row  mx-4 mt-4">
	<div class="col-md-9">
		<div class="card mb-3">
			<div class="card-body">
				<div>
					<div class="row mx-1 d-flex justify-content-between">
						<div class="row mx-1">
							<img src="<?=ROOTURL ?>/public/assets/img/profile-img/<?=$data['owner'][0]['photo']?>" height="30px" width="30px" class="rounded-circle">&emsp;
							<div>
								<span class="mb-0 pb-0"><?= $data['owner'][0]['username']?> &bull; <small><?=$data['post']['category']?></small></span><br>
								<small class="text-muted mt-0"><?= $data['time']['date'] .' at '.$data['time']['hour']?></small>
							</div>
						</div>
						<?php 
							if ($data['owner'][0]['username']==$_SESSION['UserLoggedIn']) {
								 
								echo '<div class="dropdown" >
									  <button class="btn bg-transparent" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  	<i class="fas fa-ellipsis-v text-muted"></i>
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item" id="buttonDelete" href="#" onclick="confirmDelete('.ROOTURL.','.$data['post']['id'].')" href="#">Delete post</a>
									  </div>
									</div>';
							}
						 ?>
					</div>
					<div class="mx-5 mt-3">  
						<span class="card-text deco-none">
							<p class="text-muted"><?=$data['post']['content']?></p>
							<hr class="mt-4">
						</span>
						<form class="row" action="<?=ROOTURL ?>/comment/post/<?=$data['post']['id']?>" method="post">
							<div class="form-group col-md-10">
							    <textarea id="comment-field" class="form-control" id="FormControlTextarea1" name="comment" rows="3" placeholder="Post a comment or answer"></textarea>
							</div>
							<div class="form-group col-md-2">
							    <button type="submit" class="btn btn-info">Comment</button>
							</div>
						</form>
						<div id="comment-section">
							<!-- <small class="text-muted "><a href="#other" class="deco-none text-dark"><i class="fas fa-long-arrow-alt-up"></i>&nbsp; Show more comments</a></small><br> --><br>
							<!-- comment sample -->
							<?php foreach ($data['comments'] as $key => $comment): ?>
							<div class="post-comment mb-4" id="<?=$comment['id']?>">
								<div class="row mx-1">
									<img src="<?=ROOTURL ?>/public/assets/img/profile-img/<?= $comment['photo'] ?>" height="30px" width="30px" class="rounded-circle">&emsp;
									<div>
										<span class="mb-0 pb-0"><?= $comment['username'] ?></span>&emsp;&bull;&emsp;
										<small class="text-muted mt-0"><?= $comment['date'].' at '.$comment['hour'] ?></small>
									</div>
								</div>
								<div class="mx-5 text-secondary">
									<?=$comment['content']; ?>
								</div>
							</div>
							<?php endforeach ?>

							<!-- <div class="post-comment mb-4">
								<div class="row mx-1">
									<img src="<?=ROOTURL ?>/public/assets/img/profile-img/user.jpg" height="30px" width="30px" class="rounded-circle">&emsp;
									<div>
										<span class="mb-0 pb-0">PisangBenyek</span>&emsp;&bull;&emsp;
										<small class="text-muted mt-0">Today at 13:15</small>
									</div>
								</div>
								<div class="mx-5 text-secondary">
									It works! thanks @buGuru69 you're really helpful 😁
								</div>
							</div>

							<div class="post-comment mb-4">
								<div class="row mx-1">
									<img src="<?=ROOTURL ?>/public/assets/img/profile-img/usr10.jpeg" height="30px" width="30px" class="rounded-circle">&emsp;
									<div>
										<span class="mb-0 pb-0">buGuru69</span>&emsp;&bull;&emsp;
										<small class="text-muted mt-0">Today at 13:55</small>
									</div>
								</div>
								<div class="mx-5 text-secondary">
									Hahaha my pleasure to help 😊
								</div>
							</div> -->

							<!-- sample end -->
						</div><!-- comment section end -->
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

