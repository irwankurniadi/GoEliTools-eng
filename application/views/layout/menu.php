<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('dashboard') ?>" class="brand-link">
      <img src="<?php echo base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AREM MODEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/admin/dist/img/logo_arem.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo site_url ('profil')?>" class="d-block">
            <?php echo $this->session->userdata('nama'); ?>
            <br> <small> (<?php echo $this->session->userdata('akses_level'); ?>) </small>
            <!-- <br> <small> (<?php echo $this->session->userdata('id_user'); ?>) </small> -->
            <!-- <br> <small> (<?php echo $this->session->userdata('email'); ?>) </small> -->
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- Dashboar Page -->
          <li class="nav-item">
            
            <a href="<?php echo site_url('dashboard')?>" class="nav-link <?php if($this->uri->segment(1) == 'dashboard' ){echo 'active';}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
                <span class="right badge badge-danger">New</span>
              </p>
            </a>

          </li>

          <!-- Menu Project  -->
          <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'project' ){echo 'menu-open';}?>">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                PROJECT DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
    
                <a href="<?php echo site_url('project')?>" class="nav-link <?php if($this->uri->segment(1) == 'project' ){echo 'active';}?>">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Project Data</p>
                </a>
                
              </li>

            </ul>
          </li>

          <!-- Menu Stakeholder  -->
          <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'stakeholder' ){echo 'menu-open';}?>">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                STAKEHOLDER DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('stakeholder')?>" class="nav-link <?php if($this->uri->segment(1) == 'stakeholder' ){echo 'active';}?>">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Stakeholder Data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('pengaturan')?>" class="nav-link <?php if($this->uri->segment(1) == 'pengaturan' ){echo 'active';}?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                SETTINGS
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <!-- Menu Project Goal  -->
          <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'goal' || $this->uri->segment(1) == 'goal_fitur' ){echo 'menu-open';}?>">
            <a href="#" class="nav-link ">
             <i class="nav-icon fas fa-bullseye"></i>
              <p>
                GOAL & FEATURE SYSTEM
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('goal')?>" class="nav-link <?php if($this->uri->segment(1) == 'goal' ){echo 'active';}?>">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Goal Data</p>
                </a>
              </li>

               <li class="nav-item">
                  <a href="<?php echo site_url('goal_fitur')?>" class="nav-link <?php if($this->uri->segment(1) == 'goal_fitur' ){echo 'active';}?>">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Goal Feature Data</p>
                </a>
              </li>

            </ul>
          </li>

          <!-- Menu GOAL ACTIVITIES  -->
          <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'activities' || $this->uri->segment(1) == 'activities_resources')  {echo 'menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                ACTIVITIES DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('activities')?>" class="nav-link <?php if($this->uri->segment(1) == 'activities' ){echo 'active';}?> ">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Activities Data</p>
                </a>
              </li>

               <li class="nav-item">
                  <a href="<?php echo site_url('activities_resources') ?>" class="nav-link <?php if($this->uri->segment(1) == 'activities_resources' ){echo 'active';}?>">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Activities Resource Data</p>
                </a>
              </li>
              
              <!--
              <li class="nav-item">
                  <a href="<?php echo site_url('activities_obstacle') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Obstacle Aktifitas</p>
                </a>
              </li>

              <li class="nav-item">
                  <a href="<?php echo site_url('activities_actor') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Aktor Aktifitas</p>
                </a>
              </li>
              -->
             

            </ul>
          </li>


           <!-- Menu Procedure Activities  -->
          <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'procedure' || $this->uri->segment(1) == 'procedure_detail')  {echo 'menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                PROCEDURE DATA 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('procedure')?>" class="nav-link <?php if($this->uri->segment(1) == 'procedure' ){echo 'active';}?>">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Procedure Activitites Data</p>
                </a>
              </li>

              <li class="nav-item">
                  <a href="<?php echo site_url('procedure_detail')?>" class="nav-link <?php if($this->uri->segment(1) == 'procedure_detail' ){echo 'active';}?>">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Procedure Detail Data</p>
                </a>
              </li>

              <!--
              <li class="nav-item">
                  <a href="<?php echo site_url('procedure_actor') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Aktor Prosedur</p>
                </a>
              </li>

              <li class="nav-item">
                  <a href="<?php echo site_url('procedure_resources') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Data Sumber Daya Prosedur</p>
                </a>
              </li>
              -->

            </ul>
          </li>

          <!-- Menu Project Stakeholder  -->
          <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'project_stakeholder' )  {echo 'menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                PROJECT STAKEHOLDER 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('project_stakeholder')?>" class="nav-link <?php if($this->uri->segment(1) == 'project_stakeholder' ){echo 'active';}?>">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Project Stakeholder Data</p>
                </a>
              </li>
            </ul>
          </li>

          <?php if($this->session->userdata('akses_level')=="Admin") { ?>
           <!-- Data User menu -->
          <li class="nav-item has-treeview <?php if($this->uri->segment(1) == 'user' ){echo 'menu-open';}?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                ADMIN SYSTEM DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('user')?>" class="nav-link <?php if($this->uri->segment(1) == 'user' ){echo 'active';}?>"" >
                  <i class="fas fa-users nav-icon"></i>
                  <p>Administrator Data System</p>
                </a>
              </li>
            </ul>
          </li>

          <?php } ?>
          <!-- Panduan Sistem -->
              <li class="nav-item">
                <a href="<?php echo site_url('panduan')?>" class="nav-link <?php if($this->uri->segment(1) == 'panduan' ){echo 'active';}?>"">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    GUIDE BOOK
                  </p>
                </a>
              </li>
            <!-- Laporan -->
            <li class="nav-item">
                <a href="<?php echo site_url('laporan'); unset($_SESSION['sukses']);?>" class="nav-link <?php if($this->uri->segment(1) == 'laporan' ){echo 'active';}?>">
                  <i class="nav-icon fas fa-book-open"></i>
                  <p>
                    REPORT
                  </p>
                </a>
              </li>
          <!-- Logout -->
              <li class="nav-item">
            <a href="<?php echo site_url('login/logout')?>" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                LOG OUT
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></li>
              <li class="breadcrumb-item active"><?php echo $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-md-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo $title ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

            <?php
            if($this->session->flashdata('berhasil')) {
             ?>
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-check"></i> 
                  <?php echo $this->session->flashdata('berhasil'); ?>
                </div>
            <?php }else if($this->session->flashdata('gagal')) {
             ?>
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-check"></i> 
                  <?php echo $this->session->flashdata('gagal'); ?>
                </div>
            <?php }else if($this->session->flashdata('hapus')) {
              ?>
               <div class="alert alert-danger alert-dismissible">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                   <i class="icon fas fa-check"></i> 
                   <?php echo $this->session->flashdata('hapus'); ?>
                 </div>
             <?php }else if($this->session->flashdata('add')) {
              ?>
               <div class="alert alert-light alert-dismissible">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                   <i class="icon fas fa-check"></i> 
                   <?php echo $this->session->flashdata('add'); ?>
                 </div>
             <?php
            }
            ?>

            <!-- Validasi error -->
            <?php echo validation_errors('<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-check"></i>','</div>') ?>

