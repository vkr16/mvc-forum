<div class="row mx-4 mt-4">
	<div class="col-md-3">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-center">
					<img class="rounded-circle" width="120px" height="120px" src="<?= ROOTURL ?>/public/assets/img/profile-img/<?=$data['user']['photo']?>">
				</div>
				<!-- Button trigger modal -->
				<div class="d-flex justify-content-center mt-3">
					<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
					  Change Profile Picture
					</button>
				</div>
				<h5 class="card-title text-primary text-center mt-3"><?=$data['user']['username']?></h5>
				<p class="text-center "><?=$data['user']['fullname']?></p>


				<div class="row d-flex justify-content-between text-center mt-3">
					<div class="col-md-5">
						<h6><?= $data['postCount'] ?></h6> Posts
					</div>
					<div class="col-md-2">
						|
					</div>
					<div class="col-md-5">
						<h6><?= $data['totalComment'] ?></h6> Comments
					</div>
				</div>
				<table class="table mt-3">
					<tr>
						<td class="text-left"><small>Member since</small></td>
						<td class="text-right"><small><?=$data['user']['register_date']?></small></td>
					</tr>
					<tr>
						<td class="text-left"><small>Rank</small></td>
						<td class="text-right text-info"><small><?=$data['user']['peringkat']?></small></td>
					</tr>
					<tr>
						<td class="text-left"><small>Points</small></td>
						<td class="text-right"><small><?=$data['user']['points']?> pts</small></td>
					</tr>
				</table>
			</div>
		</div>
		
	</div>
