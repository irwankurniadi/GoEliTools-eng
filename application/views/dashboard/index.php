
<!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-project-diagram"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Project Data</span>
        <span class="info-box-number">
          <?php echo $project->total ?>
          <small>Project</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

    <p class="btn btn-group btn-block">
      <a href="<?php echo site_url('project') ?>" class="btn btn-success">
        <i class="fa fa-project-diagram"></i> Project Data
      </a>
      <a href="<?php echo site_url('project') ?>" class="btn btn-info">
        <i class="fa fa-plus"></i> Add New Project
      </a>
    </p>

  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-cog"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Stakeholder Data</span>
        <span class="info-box-number"><?php echo $stakeholder->total ?> <small>people</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

    <p class="btn btn-group btn-block">
      <a href="<?php echo site_url('stakeholder') ?>" class="btn btn-success">
        <i class="fa fa-user-cog"></i> Stakeholder Data
      </a>
      <a href="<?php echo site_url('stakeholder') ?>" class="btn btn-info">
        <i class="fa fa-plus"></i> Add New Stakeholder
      </a>
    </p>

  </div>
  <!-- /.col -->


  
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">User</span>
        <span class="info-box-number"><?php echo $user->total ?> <small>People</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

    <p class="btn btn-group btn-block">
      <a href="<?php echo site_url('user') ?>" class="btn btn-success">
        <i class="fa fa-users"></i> User Data
      <a href="<?php echo site_url('user') ?>" class="btn btn-info">
        <i class="fa fa-plus"></i> Add New User
      </a>
    </p>

  </div>
  <!-- /.col -->

  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-bullseye"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Goal</span>
        <span class="info-box-number"><?php echo $goal->total ?> <small>Goal</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

     <p class="btn btn-group btn-block">
      <a href="<?php echo site_url('goal') ?>" class="btn btn-success">
        <i class="fa fa-bullseye"></i> Goal Data
      <a href="<?php echo site_url('goal/tambah') ?>" class="btn btn-info">
        <i class="fa fa-plus"></i> Add New Goal
      </a>
    </p>

  </div>
  <!-- /.col -->

  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-folder"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Activities</span>
        <span class="info-box-number"><?php echo $activities->total ?> <small>Activities</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

    <p class="btn btn-group btn-block">
      <a href="<?php echo site_url('activities') ?>" class="btn btn-success">
        <i class="fa fa-folder"></i> Activities Data
      <a href="<?php echo site_url('activities/tambah') ?>" class="btn btn-info">
        <i class="fa fa-plus"></i> Add New Activities
      </a>
    </p>

  </div>
  <!-- /.col -->

  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-light elevation-1"><i class="fas fa-tasks"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Procedure</span>
        <span class="info-box-number"><?php echo $procedure->total ?> <small>Procedure</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

    <p class="btn btn-group btn-block">
      <a href="<?php echo site_url('procedure') ?>" class="btn btn-success">
        <i class="fa fa-tasks"></i> Procedure Data
      <a href="<?php echo site_url('procedure/tambah') ?>" class="btn btn-info">
        <i class="fa fa-plus"></i> Add New Procedure
      </a>
    </p>

  </div>
  <!-- /.col -->

  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-light elevation-1"><i class="fa fa-spinner"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Procedure Detail</span>
        <span class="info-box-number"><?php echo $procdet->total ?> <small>Procedure Detail</small></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->

   <p class="btn btn-group btn-block">
      <a href="<?php echo site_url('procedure_detail') ?>" class="btn btn-success">
        <i class="fa fa-spinner"></i> Procedure Detail Data
      <a href="<?php echo site_url('procedure_detail/tambah') ?>" class="btn btn-info">
        <i class="fa fa-plus"></i> Add New Procedure Detail
      </a>
    </p>

  </div>
  <!-- /.col -->
</div>
        <!-- /.row -->
