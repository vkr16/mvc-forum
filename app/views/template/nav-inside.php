<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="<?= ROOTURL ?>/dashboard">
    <img width="30" height="30" src="<?= ROOTURL ?>/public/assets/img/discuss.png">
    &nbsp;OpenForum
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= ROOTURL ?>/dashboard">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $_SESSION['UserLoggedIn'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= ROOTURL ?>/profile">Profile</a>
          <a class="dropdown-item" href="<?= ROOTURL ?>/logout">Logout</a>
        </div>
      </li>
    </ul>
    <div class="dropdown">
      <a href id="dropdownMenuButton" class="mx-5 text-info" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell fa-fw"></i></a>

      <div class="dropdown-menu p-2 text-muted dropdown-menu-lg-right" id="notification-slot">
        Notification
        <hr>

        <?php for ($i = 0; $i < $data['ntfCount']; $i++) { ?>
          <!-- sample notification -->
          <a href="<?= ROOTURL ?>/post/<?= $data['pstId'][$i] . '#' . $data['ntf'][$i]['comment_id'] ?>" class="deco-none text-dark">
            <div class="alert alert-info p-1">
              <div class="row mx-1 d-flex justify-content-left align-items-center">
                <div>
                  <img width="40px" height="40px" class="rounded-circle mx-2" src="<?= ROOTURL ?>/public/assets/img/profile-img/<?= $data['notifPhoto'][$i] ?>">&nbsp;
                </div>
                <div class="col-md-10">
                  <small><strong><?= $data['notifUsername'][$i] ?></strong> </small><br>
                  <small>commented on your post</small>
                  <small class="text-muted">"<?= $data['postContent'][$i] ?>"</small><br>
                  <small><i class="far fa-comment-alt"></i>&nbsp;"<?= $data['cmt'][$i] ?>"</small><br>
                </div>
              </div>
              <div class="col-md-12 d-flex justify-content-end align-items-center">
                <small class="text-primary"><?= $data['date'][$i] . ' ' .  $data['hour'][$i] ?></small>
              </div>
            </div>
          </a>
          <!-- sample notification end -->
        <?php } ?>

      </div>
    </div>
    <form class="form-inline mt-2 mt-md-0" action="<?= ROOTURL ?>/search" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>