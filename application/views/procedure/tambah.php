<?php echo form_open(site_url('procedure/tambah')) ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php if( empty($pengaturan) ){ ?>
<div class="form-group row">
  <label for="project_id" class="col-sm-3 text-right">Pilih Proyek</label>
  <div class="col-sm-9">
    <select name="project_id" class="form-control select2" required>
      <option value="">Pilih Proyek .....</option>
      <!-- Ambil data project dari Controller -->
      <?php foreach ($project as $project) { ?>
        <option value="<?php echo $project->project_id ?>">
         <?php echo $project->project_id ?> - <?php echo $project->project_name ?> 
        </option>
      <?php } ?>
      }
    </select>
  </div>
</div>

<div class="form-group row">
  <label for="stakeholder_id" class="col-sm-3 text-right">Pilih Stakeholder</label>
  <div class="col-sm-9">
    <select name="stakeholder_id" class="form-control select2" required>
      <option value="">Pilih Stakeholder .....</option>
      <!-- Ambil data stakeholder dari Controller -->
      <?php foreach ($stakeholder as $stakeholder) { ?>
        <option value="<?php echo $stakeholder->stakeholder_id ?>">
         <?php echo $stakeholder->stakeholder_id ?> - <?php echo $stakeholder->stakeholder_name ?> 
        </option>
      <?php } ?>
      }
    </select>
  </div>
</div>
<?php } elseif ($pengaturan && $pengaturan->project_id != null) { ?>
  <div class="form-group row">
    <label for="project_id" class="col-sm-3 text-right">Pilih Proyek</label>
    <div class="col-sm-9">
   
      <input type="text" name="project_id" class="form-control" value="<?php echo $pengaturan->project_id ?> - <?php echo $pengaturan->project_name ?>"  readonly>
      
   
    </div>
  </div>

  <div class="form-group row">
    <label for="stakeholder_id" class="col-sm-3 text-right">Pilih Stakeholder</label>
    <div class="col-sm-9">
      <input type="text" name="stakeholder_id" class="form-control" value="<?php echo $pengaturan->stakeholder_id ?> - <?php echo $pengaturan->stakeholder_name ?>"  readonly>
    </div>
  </div>
  
<?php }?>

<div class="form-group row">
  <label for="activities" class="col-sm-3 text-right">ID Aktifitas</label>
  <div class="col-sm-9">
    <select name="activities_id" class="form-control select2" >
      <option value="">Pilih ID Aktifitas...</option>
      <!-- Ambil data activities dari Controller -->
      <?php  foreach ($activities as $activities) {  ?>
        <option value="<?php echo $activities->activities_id ?>">
            <?php echo $activities->activities_id ?> - <?php echo $activities->activities_desc ?>
        </option> 
      <?php } ?>
      }
    </select>
  </div>
</div>

<div class="form-group row">
  <label for="actor" class="col-sm-3 text-right">Aktor</label>
  <div class="col-sm-9">
    <input type="text" name="actor" class="form-control" placeholder="actor" required>
  </div>
</div>

<div class="form-group row">
  <label for="procedure_resources" class="col-sm-3 text-right">Sumber Daya Prosedur</label>
  <div class="col-sm-9">
    <input type="text" name="procedure_resources" class="form-control" placeholder="Sumber Daya Prosedur">
  </div>
</div>

<div class="form-group row">
  <label for="procedure" class="col-sm-3 text-right">Deskripsi Prosedur</label>
  <div class="col-sm-9">
    <div class="input-group-append mb-2">
          <input type="text" name="procedure_desc[]" class="form-control" placeholder="Deskripsi Prosedur" required>
    </div>
    <div class="container1">
    </div>
    <button style="width:100px;float:right" type="button" class="add_form_field btn btn-success btn-sm mt-3" data-toggle="tooltip" data-placement="bottom" title="Tambah Form Deskripsi">Tambah +</button>
  </div>
</div>

<div class="form-group row">
  <label for="procedure" class="col-sm-3 text-right"></label>
  <div class="col-sm-9">
     <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Simpan Data
     </button>
    <button type="reset" class="btn btn-info">
                <i class="fa fa-times"></i> Reset
    </button>
    
  </div>
</div>

<a href="<?php echo site_url('procedure') ?>" class="btn btn-success">
        <i class = "fa fa-backward"></i> Kembali
</a>
<script>
    $(document).ready(function () {
      var max_fields = 10;
      var wrapper = $(".container1");
      var add_button = $(".add_form_field");
      var x = 1;

      $(add_button).click(function(e) {
          e.preventDefault();
          if (x < max_fields) {
              x++;
              $(wrapper).append('<div class="input-group-append mb-2"><input type="text" name="procedure_desc[]" class="form-control" placeholder="Deskripsi Prosedur" required><button style="width:100px" class="delete btn btn-danger btn-sm ml-1">Hapus</button></div>'); //add input box
          } else {
              alert('You Reached the limits')
          }
      });

      $(wrapper).on("click", ".delete", function(e) {
          e.preventDefault();
          $(this).parent('div').remove();
          x--;
      })
    });
</script>
<?php echo form_close(); ?>
