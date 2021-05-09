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
												<small><i class="fas fa-comment-alt fa-fw"></i> <?= $myPost['comments'] ?> Comments</small>
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
				  	<?php for ($i=0; $i < $data['totalComment']; $i++) { ?>
				  	<!-- sample comment -->
				  	<div class="card mb-3 border border-info">
						<div class="card-body">
							<div>
								<div class="row mx-1">
									<img src="<?=ROOTURL ?>/public/assets/img/profile-img/<?=$data['user']['photo']?>" height="30px" width="30px" class="rounded-circle">&emsp;
									<div>
										<span class="mb-0 pb-0"><?= $_SESSION['UserLoggedIn'] ?> &bull; <small><?= $data['myComments']['thisPost'][$i][0]['category']?>  <span class="text-muted"> <i class="fas fa-reply"></i> in <a class="text-muted" href="<?= ROOTURL ?>/post/<?= $data['myComments']['thisPost'][$i][0]['id']?>">"<?= $data['myComments']['thisPost'][$i][0]['content']?>"</a></span></small></span><br>
										<small class="text-muted mt-0"><?= $data['myComments'][$i]['date'].' at '.$data['myComments'][$i]['hour']   ?></small>
									</div>
								</div>
								<div class="mx-5 mt-3">  
									<span class="card-text deco-none">
										<p class="text-muted"><?= $data['myComments'][$i]['content'] ?></p>
									</span>
								</div>
							</div>
						</div>
					</div>
				  	<!-- sample comment end -->
			  		<?php } ?>
				  	
				  <!-- 	<div class="d-flex justify-content-center">
					  	<a href="#MoreComment" class="deco-none text-muted"><i class="fas fa-long-arrow-alt-down"></i> &nbsp;Load more&nbsp; <i class="fas fa-long-arrow-alt-down"></i> </a>
				  	</div> -->
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload New Profile Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" action="<?=ROOTURL ?>/profile/uploadPhoto" method="POST">
      	<p>Upload your file</p>
      	<small class="text-danger mb-3">&bull; Any image extensions are allowed <br> &bull; it's better if you upload an image in a square ratio</small>
	    <!-- <input type="file" name="uploaded_file"></input><br /> -->


	    <div class="input-group mb-3 mt-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="inputGroupFileAddon01">New Image : </span>
		  </div>
		  <div class="custom-file">
		    <input type="file" name="uploaded_file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
		    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
		  </div>
		</div>
	    <input type="submit" value="Upload" class="btn btn-info"></input>


      </form>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
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