<?php
if($this->uri->segment(3)) {
	$data = $this->uri->segment(3);
} else {
	$data = 0;
}
?>

<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard
            </h1>
         </div>
         <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Home</a></li>
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
         <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
               <span class="info-box-icon theme-bg-default elevation-1"><i class="fas fa-users text-white"></i></span>
               <div class="info-box-content">
                  <span class="info-box-text">Total Employee's</span>
                  <span class="info-box-number"><?= ($dashboard['tot_vehicles']!='') ? $dashboard['tot_vehicles']:'0' ?>  </span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
               <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user-secret"></i></span>
               <div class="info-box-content">
                  <span class="info-box-text">Total Drivers</span>
                  <span class="info-box-number"><?= ($dashboard['tot_drivers']!='') ? $dashboard['tot_drivers']:'0' ?> </span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <!-- fix for small devices only -->
         <div class="clearfix hidden-md-up"></div>
         <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
               <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-user text-white"></i></span>
               <div class="info-box-content">
                  <span class="info-box-text">Total Customer</span>
                  <span class="info-box-number"><?= ($dashboard['tot_customers']!='') ? $dashboard['tot_customers']:'0' ?> </span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
               <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-id-card"></i></span>
               <div class="info-box-content">
                  <span class="info-box-text">Today Trips</span>
                  <span class="info-box-number"><?= ($dashboard['tot_today_trips']!='') ? $dashboard['tot_today_trips']:'0' ?></span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->
      <div class="row">
         <!-- Left col -->
         <div class="row col-md-12">
            <?php if(userpermission('lr_ie_list')) { ?>
            <div class="col-md-12">
               <!-- TABLE: LATEST ORDERS -->
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title">Live Tracking</h2>
                  </div>
                  <div class="card-header border-transparent">
                     <div class="card-body">
                        <div class="d-flex">
                           <p class="d-flex flex-column">
                           </p>
                           <p class="ml-auto d-flex flex-column text-right">
                              <span class="text-success">
                              </span>
                           </p>
                        </div>
                        <!-- /.d-flex -->
                        <div class="position-relative mb-4">
                        <script id="group" data-name="<?= $data  ?>" src="<?php echo base_url(); ?>assets/livetrack.js"></script>
                        <script src="<?php echo base_url(); ?>assets/fontawesome-markers.min.js"></script>

                        <div class="col-lg-12 col-md-12" id="map_canvas" style="width: 100%; height: 650px"></div>
                        </div>
                        <div class="d-flex flex-row justify-content-end">
                           <span class="mr-2">
                           <i class="fas fa-square text-success"></i> Income
                           </span>
                           <span>
                           <i class="fas fa-square text-danger"></i> Expenses
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php } if(userpermission('lr_reminder_list')) { ?>
            <div class="col-md-6">
               <div class="card">
                  <div class="card-header ui-sortable-handle" style="cursor: move;">
                     <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Reminder
                     </h3>
                     <div class="card-tools">
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <ul class="todo-list ui-sortable" data-widget="todo-list">
                        <?php if(!empty($todayreminder)) { foreach($todayreminder as $reminder) { ?>
                        <li id="<?= $reminder['r_id'] ?>">
                           <span class="text">
                              <?= $reminder['r_message']. ' ';  ?>    
                              <div class="tools"> 
                                 <button type="button" data-id="<?= $reminder['r_id'] ?>" class="todayreminderread btn btn-block btn-outline-primary btn-xs">Mark as Read</button>                 
                              </div>
                           </span>
                        </li>
                        <?php }  } else { echo 'No reminders'; } ?>  
                     </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                     <a href="<?= base_url() ?>reminder/addreminder"><button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add Reminder</button></a>
                  </div>
               </div>
            </div>
         </div>
         <?php } if(userpermission('lr_liveloc')) { ?>
         <div class="col-sm-6 col-lg-6 ">
            <div class="card ">
               <div class="card-header">
                  <h2 class="card-title">Employee Current Location</h2>
               </div>
               <table  class="datatable table card-table table-vcenter">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Current Location</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($vechicle_currentlocation)){  
                        foreach($vechicle_currentlocation as $vech_details){
                        ?>
                     <tr>
                        <td> <?php echo output($vech_details['v_name']); ?></td>
                        <td>  <span class="badge badge-<?php echo ($vech_details['current_location']!='') ? 'success':'warning' ?>"><?php echo ($vech_details['current_location']!='') ?wordwrap($vech_details['current_location'], 60, "<br />\n") :'Location Not Updated' ?></span></td>
                     </tr>
                     <?php } } ?>
                  </tbody>
               </table>
            </div>
         </div>
         <?php } if(userpermission('lr_vech_list')) { ?>
         <div class="col-sm-6 col-lg-6 ">
            <div class="card">
               <div class="card-header">
                  <h2 class="card-title">Employee Running Status</h2>
               </div>
               <table class="datatable table card-table">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($vechicle_status)){ foreach ($vechicle_status as $key => $vechicle_status_arr) {
                        ?>
                     <tr>
                        <td><?php echo output($vechicle_status_arr['v_name']); ?></td>
                        <td>
                           <span class="badge badge-<?php echo ($vechicle_status_arr['t_trip_status']=='Completed') ? 'success':'danger' ?>"><?php echo ($vechicle_status_arr['t_trip_status']=='Completed') ? 'Idle':'In Trip' ?></span>
                        </td>
                     </tr>
                     <?php  }   }  ?>
               </table>
            </div>
         </div>
         <?php } if(userpermission('lr_geofence_list')) { ?>
         <div class="col-md-6">
            <div class="col-sm-12 col-lg-12 ">
               <div class="card">
                  <div class="card-header">
                     <h2 class="card-title">Employee Geofence Status</h2>
                  </div>
                  <table class="datatable table card-table table-vcenter">
                     <thead>
                        <tr>
                           <th>Vehicle</th>
                           <th>Event</th>
                           <th>Time</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($geofenceevents)){  
                           foreach($geofenceevents as $geofence){
                           ?>
                        <tr>
                           <td> <?php echo output($geofence['v_name']); ?></td>
                           <td>  <?php if($geofence['ge_event']=='inside') { echo 'Moving '.output($geofence['ge_event']).' '.$geofence['geo_name']; } else {  echo 'Exiting '.output($geofence['ge_event']) .' ' .$geofence['geo_name']; } ?></td>
                            <td> <?php echo output($geofence['ge_timestamp']); ?></td>
                        </tr>
                        <?php } } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
      <!-- /.card -->
      <!-- /.col -->
      <!-- /.col -->
   </div>
   <!-- /.row -->
   </div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>

<!-- /.content-wrapper -->
<?php if(userpermission('lr_ie_list')) { ?>
  <?php } ?>