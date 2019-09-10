 <?php
$menu_active = '';
if (isset($_GET['menu'])) {
    $menu_active = $_GET['menu'];
}
?>

 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
         <li <?php echo ($menu_active == 'home') ? "class='active'" : ""; ?> >
          <a href="home.php?menu=home">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
         <li class="treeview <?php if($menu_active == 'data_buku'){echo 'active';} if($menu_active == 'data_kategori'){echo 'active';}if($menu_active == 'data_penulis'){echo 'active';}if($menu_active == 'data_penerbit'){echo 'active';}?> ">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Data Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php echo ($menu_active == 'data_buku') ? "class='active'" : ""; ?> ><a href="data_buku.php?menu=data_buku"><i class="fa fa-circle-o"></i> Buku</a></li>
            <li <?php echo ($menu_active == 'data_kategori') ? "class='active'" : ""; ?> ><a href="data_kategori.php?menu=data_kategori"><i class="fa fa-circle-o"></i> Kategori</a></li>
            <li <?php echo ($menu_active == 'data_penulis') ? "class='active'" : ""; ?> ><a href="data_penulis.php?menu=data_penulis"><i class="fa fa-circle-o"></i> Penulis</a></li>
            <li <?php echo ($menu_active == 'data_penerbit') ? "class='active'" : ""; ?> ><a href="data_penerbit.php?menu=data_penerbit"><i class="fa fa-circle-o"></i> Penerbit</a></li>
          </ul>
        </li>
          <li <?php echo ($menu_active == 'data_transaksi') ? "class='active'" : ""; ?> >
          <a href="data_transaksi.php?menu=data_transaksi">
            <i class="fa fa-table"></i> <span>Data Transaksi</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
       <li <?php echo ($menu_active == 'proses_apriori') ? "class='active'" : ""; ?> >
          <a href="apriori.php?menu=proses_apriori">
            <i class="fa fa-random"></i> <span>Proses Apriori</span>
          </a>
        </li>
                <li>
          <a href="logout.php">
            <i class="fa fa-mail-forward"></i> <span>Log Out</span>
          </a>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

 