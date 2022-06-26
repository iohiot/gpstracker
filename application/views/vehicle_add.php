    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo (isset($vehicledetails))?'Edit Employee':'Add Employee' ?>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Employee</a></li>
              <li class="breadcrumb-item active"><?php echo (isset($vehicledetails))?'Edit Employee':'Add Employee' ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form method="post" id="vehicle_add" class="card" action="<?php echo base_url();?>vehicle/<?php echo (isset($vehicledetails))?'updatevehicle':'insertvehicle'; ?>">
                <div class="card-body">


                  <div class="row">
                   <input type="hidden" name="v_id" id="v_id" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_id']:'' ?>" >

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label">Employee ID</label>
                      <div class="form-group">
                        <input type="text" name="v_registration_no" id="v_registration_no" class="form-control" placeholder="Employee ID" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_registration_no']:'' ?>">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label">Employee Name</label>
                      <div class="form-group">
                        <input type="text" name="v_name" id="v_name" class="form-control" placeholder="Employee Name" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_name']:'' ?>">
                      </div>
                    </div>
                  
                  
                    <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                     <label class="form-label">Device<span class="form-required">*</span></label>
                     <select id="t_driver"  class="form-control"  name="t_driver">
                       <option value="">Select Device</option>
                        <?php  foreach ($driverlist as $key => $driverlists) { ?>
                        <option <?php if((isset($vehicledetails)) && $vehicledetails[0]['t_driver'] == $driverlists['d_id']){ echo 'selected';} ?> value="<?php echo output($driverlists['d_mobile']) ?>"><?php echo output($driverlists['d_mobile']); ?></option>
                        <?php  } ?>
                     </select>
                  </div>
                </div>

                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label for="v_color" class="form-label">Employee Color<small> (To show in Map)</small></label>
                        <input id="add-device-color" name="v_color" class="jscolor {valueElement:'add-device-color', styleElement:'add-device-color', hash:true, mode:'HSV'} form-control"  value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_color']:'#F399EB' ?>" required>
                      </div>
                    </div>
                    <?php if(isset($vehicledetails[0]['v_is_active'])) { ?>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label for="v_is_active" class="form-label">Employee Status</label>
                        <select id="v_is_active" name="v_is_active" class="form-control " required="">
                          <option value="">Select Employee Status</option> 
                          <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_is_active']==1) ? 'selected':'' ?> value="1">Active</option> 
                          <option <?php echo (isset($vehicledetails) && $vehicledetails[0]['v_is_active']==0) ? 'selected':'' ?> value="0">Inactive</option> 
                        </select>
                      </div>
                    </div>
                  <?php } ?>
                  <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Join Date</label>
                        <input type="text" required="" name="v_reg_exp_date" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_reg_exp_date']:'' ?>" class="form-control datepicker" placeholder="Registration Expiry Date">
                      </div>
                  </div> 
                   <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label for="v_group" class="form-label">Employee Group</label>
                        <select id="v_group" name="v_group" class="form-control " required="">
                          <option value="">Select Employee Group</option> 
                          <?php if(!empty($v_group)) { foreach($v_group as $v_groupdata) { ?>
                          <option <?= (isset($vehicledetails[0]['v_group']) && $vehicledetails[0]['v_group'] == $v_groupdata['gr_id'])?'selected':''?> value="<?= $v_groupdata['gr_id'] ?>"><?= $v_groupdata['gr_name'] ?></option> 
                          <?php } } ?>
                        </select>
                      </div>
                    </div>
                    </div>
                  
                  <input type="hidden" id="v_created_by" name="v_created_by" value="<?php echo output($this->session->userdata['session_data']['u_id']); ?>">
                   <input type="hidden" id="v_created_date" name="v_created_date" value="<?php echo date('Y-m-d h:i:s'); ?>">
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary"> <?php echo (isset($vehicledetails))?'Update Employee':'Add Employee' ?></button>
                </div>
              </form>
             </div>
    </section>
    <!-- /.content -->



