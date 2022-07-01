<?php
if ($this->uri->segment(2)) {
   $data = $this->uri->segment(2);
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
            <div class="info-box" style="box-shadow: none;">
               <span class="info-box-icon"><svg width="70" height="68.5" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M48.849 97.698C75.8276 97.698 97.698 75.8276 97.698 48.849C97.698 21.8704 75.8276 0 48.849 0C21.8704 0 0 21.8704 0 48.849C0 75.8276 21.8704 97.698 48.849 97.698Z" fill="url(#paint0_linear_703_1719)" />
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M57.2037 28.0052C59.172 29.7547 60.5303 32.2145 60.8992 35.2827C60.9318 35.5537 61.1356 35.7757 61.4038 35.8257C66.9439 36.8586 70.0045 39.005 71.5702 43.0441C71.665 43.2887 71.5791 43.5656 71.3678 43.7211C63.7758 49.3093 56.33 52 49 52C41.67 52 34.2242 49.3093 26.6322 43.7211C26.4209 43.5656 26.335 43.2887 26.4298 43.0441C27.9955 39.005 31.0561 36.8586 36.5962 35.8257C36.8644 35.7757 37.0682 35.5537 37.1008 35.2827C37.4697 32.2145 38.828 29.7547 40.7963 28.0052C43.0823 25.9731 46.0739 25 49 25C51.9261 25 54.9177 25.9731 57.2037 28.0052ZM49 35C46.3745 35 44.023 35.0592 41.9191 35.1985C41.5277 35.2244 41.2124 34.8766 41.3154 34.4981C41.7243 32.9942 42.4995 31.843 43.4537 30.9948C44.9177 29.6935 46.9261 29 49 29C51.0739 29 53.0823 29.6935 54.5463 30.9948C55.5005 31.843 56.2757 32.9942 56.6846 34.4981C56.7876 34.8766 56.4723 35.2244 56.0809 35.1985C53.977 35.0592 51.6255 35 49 35Z" fill="white" />
                     <path d="M26.1501 48.2789C25.776 48.025 25.2632 48.2522 25.2196 48.7022C25.0659 50.2885 25 52.0487 25 54C25 69.6465 29.236 73 49 73C68.764 73 73 69.6465 73 54C73 52.0487 72.9341 50.2885 72.7804 48.7022C72.7368 48.2522 72.224 48.025 71.8499 48.2789C64.3477 53.3722 56.7232 56 49 56C41.2768 56 33.6523 53.3722 26.1501 48.2789Z" fill="white" />
                     <defs>
                        <linearGradient id="paint0_linear_703_1719" x1="0" y1="0" x2="97.698" y2="83.1107" gradientUnits="userSpaceOnUse">
                           <stop stop-color="#FF006B" />
                           <stop offset="0.44527" stop-color="#ED1C24" />
                           <stop offset="1" stop-color="#BA0FB5" />
                        </linearGradient>
                     </defs>
                  </svg>
               </span>
               <a href="<?= base_url(); ?>/vehicle">
                  <div class="info-box-content">
                     <span class="info-box-text"><strong>Total Employee's</strong> </span>
                     <span class="info-box-number" style="font-size: 1.5rem;"><?= ($dashboard['tot_vehicles'] != '') ? $dashboard['tot_vehicles'] : '0' ?> </span>
                  </div>
               </a>

               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3" style="box-shadow: none;">
               <span class="info-box-icon"><svg width="70" height="68.5" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M48.849 97.698C75.8276 97.698 97.698 75.8276 97.698 48.849C97.698 21.8704 75.8276 0 48.849 0C21.8704 0 0 21.8704 0 48.849C0 75.8276 21.8704 97.698 48.849 97.698Z" fill="url(#paint0_linear_703_1735)" />
                     <path d="M44.8182 48C44.8182 50.3012 46.6904 52.1667 49 52.1667C51.3096 52.1667 53.1818 50.3012 53.1818 48C53.1818 45.6988 51.3096 43.8333 49 43.8333C46.6904 43.8333 44.8182 45.6988 44.8182 48Z" fill="white" />
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M55.215 28.055C53.9307 21.315 44.0693 21.315 42.785 28.055C42.0734 31.7897 38.1258 34.0214 34.4667 32.7575C27.8632 30.4764 22.9325 38.8386 28.2518 43.2976C31.1992 45.7683 31.1992 50.2317 28.2518 52.7024C22.9325 57.1614 27.8632 65.5236 34.4667 63.2425C38.1258 61.9786 42.0734 64.2103 42.785 67.945C44.0693 74.685 53.9307 74.685 55.215 67.945C55.9266 64.2103 59.8742 61.9786 63.5333 63.2425C70.1368 65.5236 75.0675 57.1614 69.7482 52.7024C66.8008 50.2317 66.8008 45.7683 69.7482 43.2976C75.0675 38.8386 70.1368 30.4764 63.5333 32.7575C59.8742 34.0214 55.9266 31.7897 55.215 28.055ZM40.6364 48C40.6364 52.6024 44.3809 56.3333 49 56.3333C53.6191 56.3333 57.3636 52.6024 57.3636 48C57.3636 43.3976 53.6191 39.6667 49 39.6667C44.3809 39.6667 40.6364 43.3976 40.6364 48Z" fill="white" />
                     <defs>
                        <linearGradient id="paint0_linear_703_1735" x1="0" y1="0" x2="97.698" y2="83.1107" gradientUnits="userSpaceOnUse">
                           <stop stop-color="#FF006B" />
                           <stop offset="0.44527" stop-color="#ED1C24" />
                           <stop offset="1" stop-color="#BA0FB5" />
                        </linearGradient>
                     </defs>
                  </svg>
               </span>
               <a href="<?= base_url(); ?>/drivers">
                  <div class="info-box-content">
                     <span class="info-box-text"><strong>Total Devices </strong></span>
                     <span class="info-box-number" style="font-size: 1.5rem;"><?= ($dashboard['tot_drivers'] != '') ? $dashboard['tot_drivers'] : '0' ?> </span>
                  </div>
               </a>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <!-- fix for small devices only -->
         <div class="clearfix hidden-md-up"></div>
         <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3" style="box-shadow: none;">
               <span class="info-box-icon"><svg width="70" height="68.5" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M48.849 97.698C75.8276 97.698 97.698 75.8276 97.698 48.849C97.698 21.8704 75.8276 0 48.849 0C21.8704 0 0 21.8704 0 48.849C0 75.8276 21.8704 97.698 48.849 97.698Z" fill="url(#paint0_linear_703_1720)" />
                     <path d="M48.5 49C41.8553 49 36.4688 43.6274 36.4688 37C36.4688 30.3726 41.8553 25 48.5 25C55.1447 25 60.5312 30.3726 60.5312 37C60.5312 43.6274 55.1447 49 48.5 49Z" fill="white" />
                     <path d="M48.5 73C32.6476 73 29.25 71.3056 29.25 63.4C29.25 55.4944 32.6476 53.8 48.5 53.8C64.3524 53.8 67.75 55.4944 67.75 63.4C67.75 71.3056 64.3524 73 48.5 73Z" fill="white" />
                     <path d="M74.9688 39.4C74.9688 34.6332 71.1576 29.8 65.3438 29.8C64.0148 29.8 62.9375 30.8745 62.9375 32.2C62.9375 33.5255 64.0148 34.6 65.3438 34.6C68.1924 34.6 70.1562 36.9668 70.1562 39.4C70.1562 41.8332 68.1924 44.2 65.3438 44.2C64.0148 44.2 62.9375 45.2745 62.9375 46.6C62.9375 47.9255 64.0148 49 65.3438 49C71.1576 49 74.9688 44.1668 74.9688 39.4Z" fill="white" />
                     <path d="M31.6562 29.8C25.8424 29.8 22.0312 34.6332 22.0312 39.4C22.0312 44.1668 25.8424 49 31.6562 49C32.9852 49 34.0625 47.9255 34.0625 46.6C34.0625 45.2745 32.9852 44.2 31.6562 44.2C28.8076 44.2 26.8438 41.8332 26.8438 39.4C26.8438 36.9668 28.8076 34.6 31.6562 34.6C32.9852 34.6 34.0625 33.5255 34.0625 32.2C34.0625 30.8745 32.9852 29.8 31.6562 29.8Z" fill="white" />
                     <path d="M67.75 53.8C67.75 52.4745 68.8273 51.4 70.1562 51.4C72.8271 51.4 75.1525 51.4641 77.1289 51.6702C79.0891 51.8745 80.854 52.2317 82.3348 52.898C83.8727 53.59 85.1224 54.6258 85.9401 56.1238C86.7287 57.5686 87 59.2334 87 61C87 62.7763 86.7252 64.3835 86.0543 65.771C85.3642 67.1985 84.3197 68.2575 83.0204 68.9981C80.5966 70.3795 77.3404 70.6 74.0063 70.6C72.6773 70.6 71.6 69.5255 71.6 68.2C71.6 66.8745 72.6773 65.8 74.0063 65.8C77.4096 65.8 79.4472 65.5062 80.6327 64.8305C81.1381 64.5425 81.4772 64.1872 81.7195 63.6861C81.9811 63.1451 82.1875 62.3094 82.1875 61C82.1875 59.6809 81.9775 58.9029 81.7134 58.419C81.4784 57.9885 81.1038 57.61 80.3558 57.2734C79.5507 56.9111 78.3679 56.6255 76.6285 56.4441C74.9053 56.2645 72.7792 56.2 70.1562 56.2C68.8273 56.2 67.75 55.1255 67.75 53.8Z" fill="white" />
                     <path d="M26.8438 51.4C28.1727 51.4 29.25 52.4745 29.25 53.8C29.25 55.1255 28.1727 56.2 26.8438 56.2C24.2208 56.2 22.0947 56.2645 20.3715 56.4441C18.6321 56.6255 17.4493 56.9111 16.6442 57.2734C15.8962 57.61 15.5216 57.9885 15.2866 58.419C15.0225 58.9029 14.8125 59.6809 14.8125 61C14.8125 62.3094 15.0189 63.1451 15.2805 63.6861C15.5228 64.1872 15.8619 64.5425 16.3673 64.8305C17.5528 65.5062 19.5904 65.8 22.9938 65.8C24.3227 65.8 25.4 66.8745 25.4 68.2C25.4 69.5255 24.3227 70.6 22.9938 70.6C19.6596 70.6 16.4034 70.3795 13.9796 68.9981C12.6803 68.2575 11.6358 67.1985 10.9457 65.771C10.2748 64.3835 10 62.7763 10 61C10 59.2334 10.2713 57.5686 11.0599 56.1238C11.8776 54.6258 13.1273 53.59 14.6652 52.898C16.146 52.2317 17.9109 51.8745 19.8711 51.6702C21.8475 51.4641 24.1729 51.4 26.8438 51.4Z" fill="white" />
                     <defs>
                        <linearGradient id="paint0_linear_703_1720" x1="0" y1="0" x2="97.698" y2="83.1107" gradientUnits="userSpaceOnUse">
                           <stop stop-color="#FF006B" />
                           <stop offset="0.44527" stop-color="#ED1C24" />
                           <stop offset="1" stop-color="#BA0FB5" />
                        </linearGradient>
                     </defs>
                  </svg>
               </span>
               <div class="info-box-content">
                  <span class="info-box-text"><strong>Total Accidents</strong></span>
                  <span class="info-box-number" style="font-size: 1.5rem;"><?= ($dashboard['tot_accident'] != '') ? $dashboard['tot_accident'] : '0' ?> </span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3" style="box-shadow: none;">
               <span class="info-box-icon"><svg width="70" height="68.5" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M48.849 97.698C75.8276 97.698 97.698 75.8276 97.698 48.849C97.698 21.8704 75.8276 0 48.849 0C21.8704 0 0 21.8704 0 48.849C0 75.8276 21.8704 97.698 48.849 97.698Z" fill="url(#paint0_linear_703_1736)" />
                     <path d="M70.7646 27.3018C72.2677 28.8294 72.7173 30.955 72.8877 32.499C73.0779 34.2224 73.0125 36.1995 72.7969 38.2352C72.3635 42.3288 71.2615 47.2086 69.7863 51.9056C68.313 56.5964 66.4065 61.299 64.2802 64.9921C63.2207 66.8322 62.0346 68.5489 60.7278 69.9028C59.4792 71.1965 57.7568 72.5387 55.5865 72.9045L55.5747 72.9065C55.1662 72.9741 54.7681 72.9891 54.6277 72.9944L54.601 72.9955C53.1839 73.053 51.9602 72.5533 51.1248 72.1046C50.2316 71.6248 49.3935 70.9916 48.6461 70.3275C47.1479 68.9964 45.6878 67.2497 44.4996 65.4277C43.8486 64.4294 43.2318 63.3359 42.7277 62.2042C41.9798 60.5255 42.4364 58.618 43.5675 57.168L50.4303 49.0816C50.7816 48.6677 50.756 48.0543 50.3714 47.6709C49.9868 47.2875 49.3716 47.262 48.9565 47.6122L40.8459 54.4546C39.3 55.6534 37.2555 56.1178 35.4874 55.278C34.3569 54.741 33.2669 54.0938 32.2712 53.409C30.391 52.1159 28.5895 50.5117 27.2684 48.8396C26.6092 48.0053 25.9865 47.0496 25.5623 46.0158C25.1525 45.0167 24.7986 43.6248 25.1328 42.1021L25.1333 42.0996C25.5901 40.0204 26.9588 38.3741 28.2561 37.175C29.6222 35.9123 31.3399 34.7531 33.1842 33.7084C36.8848 31.6121 41.5709 29.7113 46.2437 28.2345C50.919 26.7569 55.7711 25.6438 59.8405 25.2055C61.8636 24.9876 63.8351 24.9203 65.5572 25.1152C67.1035 25.2903 69.2426 25.7551 70.7646 27.3018Z" fill="white" />
                     <defs>
                        <linearGradient id="paint0_linear_703_1736" x1="0" y1="0" x2="97.698" y2="83.1107" gradientUnits="userSpaceOnUse">
                           <stop stop-color="#FF006B" />
                           <stop offset="0.44527" stop-color="#ED1C24" />
                           <stop offset="1" stop-color="#BA0FB5" />
                        </linearGradient>
                     </defs>
                  </svg>
               </span>
               <div class="info-box-content">
                  <span class="info-box-text"><strong>Today Trips</strong></span>
                  <span class="info-box-number" style="font-size: 1.5rem;"><?= ($dashboard['tot_today_trips'] != '') ? $dashboard['tot_today_trips'] : '0' ?></span>
               </div>
               <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->

      <!--  <div class="row">
         <img src="<?= base_url(); ?>/assets/uploads/livetracking1.png" alt="" style="width:100%; ">
      </div> -->

      <!-- /.row -->
      <div class="row">
         <!-- Left col -->
         <div class="row col-md-12">
            <?php if (userpermission('lr_ie_list')) { ?>
               <div class="col-md-12">
                  <!-- TABLE: LATEST ORDERS -->
                  <div class="card">
                     <div class="card-header">
                        <span class="info-box-text"><strong>Live Tracking</strong> </span>
                     </div>
                     <div class="position-relative mb-4">
                        <script id="group" data-name="<?= $data  ?>" src="<?php echo base_url(); ?>assets/livetrack.js"></script>
                        <script src="<?php echo base_url(); ?>assets/fontawesome-markers.min.js"></script>

                        <div class="col-lg-12 col-md-12" id="map_canvas" style="width: 100%; height: 500px"></div>
                     </div>
                  </div>
               </div>

            <?php }
            if (userpermission('lr_liveloc')) { ?>
               <div class="col-sm-6 col-lg-6 ">
                  <div class="card ">
                     <div class="card-header">
                        <h2 class="card-title">Employee Current Location</h2>
                     </div>
                     <table class="datatable table card-table table-vcenter">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Current Location</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (!empty($vechicle_currentlocation)) {
                              foreach ($vechicle_currentlocation as $vech_details) {
                           ?>
                                 <tr>
                                    <td> <?php echo output($vech_details['v_name']); ?></td>
                                    <td> <span class="badge badge-<?php echo ($vech_details['current_location'] != '') ? 'success' : 'warning' ?>"><?php echo ($vech_details['current_location'] != '') ? wordwrap($vech_details['current_location'], 60, "<br />\n") : 'Location Not Updated' ?></span></td>
                                 </tr>
                           <?php }
                           } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            <?php }
            if (userpermission('lr_vech_list')) { ?>
               <div class="col-md-6">
                  <!-- TABLE: LATEST ORDERS -->
                  <div class="card">
                     <div class="card-header">
                        <h2 class="card-title">Total Trip by Status</h2>
                     </div>
                     <div class="card-header border-transparent" style="height: 400px;">
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
                              <div class="chartjs-size-monitor">
                                 <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                 </div>
                                 <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                 </div>
                              </div>
                              <canvas id="ie-chart" height="200" width="487" class="chartjs-render-monitor" style="display: block; width: 487px; height: 200px;">

                              </canvas>
                           </div>
                           <div class="d-flex flex-row justify-content-end">
                              <span class="mr-2">
                                 <i class="fas fa-square text-success"></i> Panic Button
                              </span>
                              <span>
                                 <i class="fas fa-square text-danger"></i> Man Down
                              </span>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            <?php }
            if (userpermission('lr_vech_list')) { ?>
               <!--<div class="col-sm-6 col-lg-6 ">
                  <div class="card">
                     <div class="card-header">
                        <h2 class="card-title">Employee Running</h2>
                     </div>
                     <table class="datatable table card-table">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (!empty($vechicle_status)) {
                              foreach ($vechicle_status as $key => $vechicle_status_arr) {
                           ?>
                                 <tr>
                                    <td><?php echo output($vechicle_status_arr['v_name']); ?></td>
                                    <td>
                                       <span class="badge badge-<?php echo ($vechicle_status_arr['t_trip_status'] == 'Completed') ? 'success' : 'danger' ?>"><?php echo ($vechicle_status_arr['t_trip_status'] == 'Completed') ? 'Idle' : 'In Trip' ?></span>
                                    </td>
                                 </tr>
                           <?php  }
                           }  ?>
                     </table>
                  </div>
               </div>
                        -->
            <?php }
            if (userpermission('lr_geofence_list')) { ?>
               <div class="col-md-6">
                  <div class="col-sm-12 col-lg-12 " style="padding: 0;">
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
                              <?php if (!empty($geofenceevents)) {
                                 foreach ($geofenceevents as $geofence) {
                              ?>
                                    <tr>
                                       <td> <?php echo output($geofence['v_name']); ?></td>
                                       <td> <?php if ($geofence['ge_event'] == 'inside') {
                                                echo 'Moving ' . output($geofence['ge_event']) . ' ' . $geofence['geo_name'];
                                             } else {
                                                echo 'Exiting ' . output($geofence['ge_event']) . ' ' . $geofence['geo_name'];
                                             } ?></td>
                                       <td> <?php echo output($geofence['ge_timestamp']); ?></td>
                                    </tr>
                              <?php }
                              } ?>
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
   </div>
   <!--/. container-fluid -->
</section>
<!-- /.content -->
</div>


<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>

<!-- /.content-wrapper -->
<?php if (userpermission('lr_ie_list')) { ?>
   <script>
      // $income = array(1, 1, 2);
      var ticksStyle = {
         fontColor: '#495057',
         fontStyle: 'bold'
      }
      var mode = 'index';
      var intersect = true;
      var $visitorsChart = $('#ie-chart')
      var visitorsChart = new Chart($visitorsChart, {
         data: {
            labels: <?= "['" . implode("', '", array_keys($iechart)) . "']" ?>,
            datasets: [{
                  type: 'line',
                  data: [1, 2, 3, 1, 1, 2],
                  backgroundColor: 'transparent',
                  borderColor: '#28a745',
                  pointBorderColor: '#28a745',
                  pointBackgroundColor: '#28a745',
                  fill: false
                  // pointHoverBackgroundColor: '#007bff',
                  // pointHoverBorderColor    : '#007bff'
               },
               {
                  type: 'line',
                  data: [0, 2, 1, 0, 0, 0],
                  backgroundColor: 'tansparent',
                  borderColor: '#dc3545',
                  pointBorderColor: '#dc3545',
                  pointBackgroundColor: '#dc3545',
                  fill: false
                  // pointHoverBackgroundColor: '#ced4da',
                  // pointHoverBorderColor    : '#ced4da'
               }
            ]
         },
         options: {
            maintainAspectRatio: false,
            tooltips: {
               mode: mode,
               intersect: intersect
            },
            hover: {
               mode: mode,
               intersect: intersect
            },
            legend: {
               display: false
            },
            scales: {
               yAxes: [{
                  // display: false,
                  gridLines: {
                     display: true,
                     lineWidth: '4px',
                     color: 'rgba(0, 0, 0, .2)',
                     zeroLineColor: 'transparent'
                  },
                  ticks: $.extend({
                     beginAtZero: true,
                     suggestedMax: 8
                  }, ticksStyle)
               }],
               xAxes: [{
                  display: true,
                  gridLines: {
                     display: false
                  },
                  ticks: ticksStyle
               }]
            }
         }
      })
   </script> <?php } ?>