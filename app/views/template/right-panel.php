	<div class="col-md-3">
		<div class="card p-3">
			<div class="row">
				<div class="col-md-4">
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/<?=$data['user']['photo']?>" width="80px" height="80px">
				</div>
				<div class="col-md-8">
					<h5 class="text-primary"><?= $_SESSION['UserLoggedIn']?></h5><hr>
					<h6 class="card-subtitle text-muted">Rank : <span class="text-info"><?=$data['user']['peringkat']?></span></h6>
					<small>User points : <?=$data['user']['points']?> pts</small>
				</div>
			</div>
		</div>
		<hr>
		<div class="card px-3 py-2">
			<h5 class="card-title mx-2 mt-2"><i class="fas fa-crown"></i>&nbsp;Top 10 Experts </h5> 
			<!-- <h6 class="card-subtitle text-muted mx-2">(April 2021)</h6> -->
			<hr>

			<!-- candidates -->
			<?php for ($i=0; $i < $data['count'] ; $i++) { ?>
				<div class="d-flex justify-content-between mx-2 mb-2">
					<div>
						<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/<?=$data['top10'][$i]['photo']?>" width="30px" height="30px">
						&nbsp; <small><?=$data['top10'][$i]['username']?></small>
					</div>
					<div>
						<small><?=$data['top10'][$i]['points']?> pts</small>
					</div>
				</div>
			<?php } ?>
<!-- 
			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr2.jpeg" width="30px" height="30px">
					&nbsp; <small>Rojali1677</small>
				</div>
				<div>
					<small>1456 pts</small>
				</div>
			</div>

			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr3.jpeg" width="30px" height="30px">
					&nbsp; <small>rujakbebek</small>
				</div>
				<div>
					<small>1362 pts</small>
				</div>
			</div>

			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr4.jpeg" width="30px" height="30px">
					&nbsp; <small>SitiWardiyah</small>
				</div>
				<div>
					<small>1222 pts</small>
				</div>
			</div>

			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr5.jpeg" width="30px" height="30px">
					&nbsp; <small>kodokterbang</small>
				</div>
				<div>
					<small>1124 pts</small>
				</div>
			</div>

			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg" width="30px" height="30px">
					&nbsp; <small>kaveen99</small>
				</div>
				<div>
					<small>1086 pts</small>
				</div>
			</div>

			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr7.jpeg" width="30px" height="30px">
					&nbsp; <small>RoyG55</small>
				</div>
				<div>
					<small>955 pts</small>
				</div>
			</div>

			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr8.jpeg" width="30px" height="30px">
					&nbsp; <small>MafiaPajak22</small>
				</div>
				<div>
					<small>821 pts</small>
				</div>
			</div>

			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr9.jpeg" width="30px" height="30px">
					&nbsp; <small>kucingGar0ng</small>
				</div>
				<div>
					<small>756 pts</small>
				</div>
			</div>

			<div class="d-flex justify-content-between mx-2 mb-2">
				<div>
					<img class="rounded-circle" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr10.jpeg" width="30px" height="30px">
					&nbsp; <small>buGuru69</small>
				</div>
				<div>
					<small>666 pts</small>
				</div>
			</div> -->

		</div>
	</div>
</div>