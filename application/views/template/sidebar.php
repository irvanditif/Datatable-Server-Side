  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><center>NAVIGATION</center></li>
        <li class="<?php if(!$this->uri->segment(1) == "dashboard" or $this->uri->segment(1) == "dashboard") echo "active"?>">
          <a href="<?php echo site_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == "sampah") echo "active"?>">
          <a href="">
            <i class="fa fa-newspaper-o"></i> <span>Menu 1</span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == "kategori") echo "active"?>">
          <a href="">
            <i class="fa fa-list"></i> <span>Menu 2</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
