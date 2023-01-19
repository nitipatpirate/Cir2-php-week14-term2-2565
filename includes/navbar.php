<nav class="navbar navbar-expand-lg bg-body-secondary shadow stickeytop">
  <div class="container">
    <!-- <a class="navbar-brand" href="index.php">Dev</a> -->
    <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-fill"></i> หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php"><i class="bi bi-safe-fill"></i> เกียวกับเรา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php"><i class="bi bi-hdd-stack-fill"></i> ลงทะเบียน</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> เข้าสู่ระบบ</a>
        </li>
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-fill"></i> Dropdown
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person-circle"></i> ประวัติส่วนตัว</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a></li>
          </ul>
        </div>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>