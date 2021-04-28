<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="index">
    <img width="30" height="30" src="<?= ROOTURL ?>/public/assets/img/discuss.png">
    &nbsp;OpenForum
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="dashboard">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $_SESSION['UserLoggedIn'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile">Profile</a>
          <a class="dropdown-item" href="<?=ROOTURL ?>/logout">Logout</a>
        </div>
      </li>
    </ul>
    <div class="dropdown">
      <a href id="dropdownMenuButton" class="mx-5 text-info" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell fa-fw"></i></a>
        
      <div class="dropdown-menu p-2 text-muted dropdown-menu-lg-right" id="notification-slot">
        Notification <hr>
        <!-- sample notification -->
          <a href="#kepostingan" class="deco-none text-dark">
            <div class="alert alert-info p-1">
            <div class="row mx-1 d-flex justify-content-left align-items-center">
              <div>
                <img width="40px" height="40px" class="rounded-circle mx-2" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg">&nbsp;
              </div>
              <div>
                <small><strong>Kaveen99</strong> </small>
                <small>commented on your post <br>"Can you lead me through the installation prog...."</small>
              </div>
            </div>
          </div>
        </a>
        <!-- sample notification end -->
        <!-- sample notification -->
          <a href="#kepostingan" class="deco-none text-dark">
            <div class="alert alert-info p-1">
            <div class="row mx-1 d-flex justify-content-left align-items-center">
              <div>
                <img width="40px" height="40px" class="rounded-circle mx-2" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg">&nbsp;
              </div>
              <div>
                <small><strong>Kaveen99</strong> </small>
                <small>commented on your post <br>"Can you lead me through the installation prog...."</small>
              </div>
            </div>
          </div>
        </a>
        <!-- sample notification end -->
        <!-- sample notification -->
          <a href="#kepostingan" class="deco-none text-dark">
            <div class="alert alert-info p-1">
            <div class="row mx-1 d-flex justify-content-left align-items-center">
              <div>
                <img width="40px" height="40px" class="rounded-circle mx-2" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg">&nbsp;
              </div>
              <div>
                <small><strong>Kaveen99</strong> </small>
                <small>commented on your post <br>"Can you lead me through the installation prog...."</small>
              </div>
            </div>
          </div>
        </a>
        <!-- sample notification end -->
        <!-- sample notification -->
          <a href="#kepostingan" class="deco-none text-dark">
            <div class="alert alert-info p-1">
            <div class="row mx-1 d-flex justify-content-left align-items-center">
              <div>
                <img width="40px" height="40px" class="rounded-circle mx-2" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg">&nbsp;
              </div>
              <div>
                <small><strong>Kaveen99</strong> </small>
                <small>commented on your post <br>"Can you lead me through the installation prog...."</small>
              </div>
            </div>
          </div>
        </a>
        <!-- sample notification end -->
         <!-- sample notification -->
          <a href="#kepostingan" class="deco-none text-dark">
            <div class="alert alert-info p-1">
            <div class="row mx-1 d-flex justify-content-left align-items-center">
              <div>
                <img width="40px" height="40px" class="rounded-circle mx-2" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg">&nbsp;
              </div>
              <div>
                <small><strong>Kaveen99</strong> </small>
                <small>commented on your post <br>"Can you lead me through the installation prog...."</small>
              </div>
            </div>
          </div>
        </a>
        <!-- sample notification end -->
         <!-- sample notification -->
          <a href="#kepostingan" class="deco-none text-dark">
            <div class="alert alert-info p-1">
            <div class="row mx-1 d-flex justify-content-left align-items-center">
              <div>
                <img width="40px" height="40px" class="rounded-circle mx-2" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg">&nbsp;
              </div>
              <div>
                <small><strong>Kaveen99</strong> </small>
                <small>commented on your post <br>"Can you lead me through the installation prog...."</small>
              </div>
            </div>
          </div>
        </a>
        <!-- sample notification end -->
         <!-- sample notification -->
          <a href="#kepostingan" class="deco-none text-dark">
            <div class="alert alert-info p-1">
            <div class="row mx-1 d-flex justify-content-left align-items-center">
              <div>
                <img width="40px" height="40px" class="rounded-circle mx-2" src="<?= ROOTURL ?>/public/assets/img/profile-img/usr6.jpeg">&nbsp;
              </div>
              <div>
                <small><strong>Kaveen99</strong> </small>
                <small>commented on your post <br>"Can you lead me through the installation prog...."</small>
              </div>
            </div>
          </div>
        </a>
        <!-- sample notification end -->
      </div>
    </div>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>