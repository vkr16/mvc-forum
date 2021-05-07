<div class="row mx-4 mt-4">
	<div class="col-md-9">
		<div class="card p-1">
			 <h5 class="card-title mx-3 mt-3 mb-0"><i class="fas fa-search fa-fw"></i> Search Result</h5>
			 <h6 class="card-subtitle text-secondary mx-3 mt-3 mb-0"><?=$data['countResult'] ?> Found</h6>
			 <hr class="mt-3 mb-0 mx-1">
			<div class="card-body">
				<div class="">
					<!-- sample post -->
					<?php for ($i=0; $i < $data['countResult']; $i++) { ?>
				  	<div class="card mb-3">
						<div class="card-body">
							<div>
								<div class="row mx-1">
									<img src="<?=ROOTURL ?>/public/assets/img/profile-img/<?=$data['searchResult']['postOwnerPhoto']?>" height="30px" width="30px" class="rounded-circle">&emsp;
									<div>
										<span class="mb-0 pb-0"><?=$data['searchResult']['postOwnerName']?> &bull; <small><?=$data['searchResult'][$i]['category'] ?></small></span><br>
									</div>
								</div>
								<div class="mx-5 mt-3">  
									<a href="<?=ROOTURL.'/post/'.$data['searchResult'][$i]['id'] ?>" class="card-text deco-none">
										<p class="text-muted"><?=$data['searchResult'][$i]['content'] ?></p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- sample post end -->
				</div>
			</div>
		</div>
	</div>
