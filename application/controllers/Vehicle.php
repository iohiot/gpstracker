<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vehicle extends CI_Controller
{
	#Indosat Head Office - gambir
	private $longlat = [
		0 => ['lat' => -6.295163, 'long' => 106.696924],
		1 => ['lat' => -6.295196, 'long' => 106.696944],
		2 => ['lat' => -6.295250, 'long' => 106.696952],
		3 => ['lat' => -6.295309, 'long' => 106.696949],
		4 => ['lat' => -6.295366, 'long' => 106.696895],
		5 => ['lat' => -6.295338, 'long' => 106.696822],
		6 => ['lat' => -6.295260, 'long' => 106.696788],
		7 => ['lat' => -6.295183, 'long' => 106.696810],
		8 => ['lat' => -6.295168, 'long' => 106.696892],
		9 => ['lat' => -6.295212, 'long' => 106.696949],
		
	];

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('api_model');
		$this->load->model('vehicle_model');
		$this->load->model('incomexpense_model');
		$this->load->model('geofence_model');
		$this->load->helper(array('form', 'url', 'string'));
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data['vehiclelist'] = $this->vehicle_model->getall_vehicle();
		$this->template->template_render('vehicle_management', $data);
	}
	public function addvehicle()
	{
		$data['v_group'] = $this->vehicle_model->get_vehiclegroup();
		$data['driverlist'] = $this->vehicle_model->getall_driverlist();
		$this->template->template_render('vehicle_add', $data);
	}
	public function insertvehicle()
	{
		$this->form_validation->set_rules('v_registration_no', 'Registration Number', 'required|trim|is_unique[vehicles.v_registration_no]');
		$this->form_validation->set_message('is_unique', '%s is already exist');
		// $this->form_validation->set_rules('v_model', 'Model', 'required|trim');
	//	$this->form_validation->set_rules('v_chassis_no', 'Chassis No', 'required|trim');
	//	$this->form_validation->set_rules('v_engine_no', 'Engine No', 'required|trim');
	//	$this->form_validation->set_rules('v_manufactured_by', 'Manufactured By', 'required|trim');
	//	$this->form_validation->set_rules('v_type', 'Vehicle Type', 'required|trim');
		$this->form_validation->set_rules('v_color', 'Vehicle Color', 'required|trim');
		$testxss = xssclean($_POST);
		if ($this->form_validation->run() == TRUE && $testxss) {
			$response = $this->vehicle_model->add_vehicle($this->input->post());
			if ($response) {
				$this->session->set_flashdata('successmessage', 'New vehicle added successfully..');
				redirect('vehicle');
			}
		} else {
			$errormsg = validation_errors();
			if (!$testxss) {
				$errormsg = 'Error! Your input are not allowed.Please try again';
			}
			$this->session->set_flashdata('warningmessage', $errormsg);
			redirect('vehicle/addvehicle');
		}
	}
	public function panic()
	{
		$vid = $this->uri->segment(3);
		if ($_POST) {
			$this->db->select("p.*");
			$this->db->from('positions p');
			$this->db->where('p.v_id', $vid);
			$this->db->where('`id` IN (SELECT MAX(id) FROM positions where v_id = ' . $vid . '  GROUP BY `v_id`)', NULL, FALSE);
			$query = $this->db->get();
			$data = $query->result_array();
			$latest = 0;
			if (count($data) >= 1) {
				$tmpLatest = $data[0]["latest"] + 1;
				$latest = (isset($this->longlat[$tmpLatest]["lat"]) ? $tmpLatest : 0);
			}

			$lat = isset($lang["lat"]) ? $_REQUEST["lat"] : -6.37168;
			$lat = isset($this->longlat[$latest]["lat"]) ? $this->longlat[$latest]["lat"] : $this->longlat[0]["lat"];
			$lon = isset($this->longlat[$latest]["long"]) ? $this->longlat[$latest]["long"] : $this->longlat[0]["long"];
			$altitude = NULL;
			$speed =  NULL;
			$bearing = NULL;
			$accuracy =  NULL;
			$comment =  NULL;
			$postarray = array('v_id' => $vid, 'latitude' => $lat, 'longitude' => $lon, 'time' => date('Y-m-d h:i:s'), 'altitude' => $altitude, 'speed' => $speed, 'bearing' => $bearing, 'accuracy' => $accuracy, 'comment' => $comment, 'is_panic' => $_POST['panicinput'], 'latest' => $latest);
			$this->api_model->add_postion($postarray);

		$vgeofence = $this->geofence_model->getvechicle_geofence($vid);
        if(!empty($vgeofence)) {
            $points = array("$lat $lon");
            foreach($vgeofence as $geofencedata) {
                $lastgeo = explode(" ,",$geofencedata['geo_area']);
                $polygon = $geofencedata['geo_area'].$lastgeo[0];
                $polygondata = explode(' , ',$polygon);
                foreach($polygondata as $polygoncln) {
                    $geopolygondata[] = str_replace("," , ' ',$polygoncln); 
                }
                foreach($points as $key => $point) {
                    $geocheck = pointInPolygon($point, $geopolygondata,false);
                    if($geocheck=='outside' || $geocheck=='boundary' || $geocheck=='inside') {
                        $wharray = array('ge_v_id' => $vid, 'ge_geo_id' => $geofencedata['geo_id'], 'ge_event' => $geocheck,
                            'DATE(ge_timestamp)'=>date('Y-m-d'));
                        $geofence_events = $this->db->select('*')->from('geofence_events')->where($wharray)->get()->result_array();
                       
                        if(count($geofence_events)==0) {
                            $insertarray = array('ge_v_id'=>$vid,'ge_geo_id'=>$geofencedata['geo_id'],'ge_event'=>$geocheck,'ge_timestamp'=>
                                       date('Y-m-d h:i:s'));
                            $this->db->insert('geofence_events',$insertarray);
                        } 
                    }
                }
            }
        }
		}

		$this->template->template_render('panic');
	}

	public function editvehicle()
	{
		$v_id = $this->uri->segment(3);
		$data['v_group'] = $this->vehicle_model->get_vehiclegroup();
		$data['vehicledetails'] = $this->vehicle_model->get_vehicledetails($v_id);
		$data['driverlist'] = $this->vehicle_model->getall_driverlist();
		$this->template->template_render('vehicle_add', $data);
	}

	public function updatevehicle()
	{
		$testxss = xssclean($_POST);
		if ($testxss) {
			$response = $this->vehicle_model->edit_vehicle($this->input->post());
			if ($response) {
				$this->session->set_flashdata('successmessage', 'Vehicle updated successfully..');
				redirect('vehicle');
			} else {
				$this->session->set_flashdata('warningmessage', 'Something went wrong..Try again');
				redirect('vehicle');
			}
		} else {
			$this->session->set_flashdata('warningmessage', 'Error! Your input are not allowed.Please try again');
			redirect('vehicle');
		}
	}
	public function viewvehicle()
	{
		$v_id = $this->uri->segment(3);
		$vehicledetails = $this->vehicle_model->get_vehicledetails($v_id);
		$bookings = $this->vehicle_model->getall_bookings($v_id);
		$vgeofence = $this->geofence_model->getvechicle_geofence($v_id);
		$vincomexpense = $this->incomexpense_model->getvechicle_incomexpense($v_id);
		$geofence_events = $this->geofence_model->countvehiclengeofence_events($v_id);
		if (isset($vehicledetails[0]['v_id'])) {
			$data['vehicledetails'] = $vehicledetails[0];
			$data['bookings'] = $bookings;
			$data['vechicle_geofence'] = $vgeofence;
			$data['vechicle_incomexpense'] = $vincomexpense;
			$data['geofence_events'] = $geofence_events;
			$this->template->template_render('vehicle_view', $data);
		} else {
			$this->template->template_render('pagenotfound');
		}
	}
	public function vehiclegroup()
	{
		$data['vehiclegroup'] = $this->vehicle_model->get_vehiclegroup();
		$this->template->template_render('vehicle_group', $data);
	}
	public function vehiclegroup_delete()
	{
		$gr_id = $this->uri->segment(3);
		$returndata = $this->vehicle_model->vehiclegroup_delete($gr_id);
		if ($returndata) {
			$this->session->set_flashdata('successmessage', 'Group deleted successfully..');
			redirect('vehicle/vehiclegroup');
		} else {
			$this->session->set_flashdata('warningmessage', 'Error..! Some vechicle are mapped with this group. Please remove from vechicle management');
			redirect('vehicle/vehiclegroup');
		}
	}
	public function addgroup()
	{
		$response = $this->db->insert('vehicle_group', $this->input->post());
		if ($response) {
			$this->session->set_flashdata('successmessage', 'Group added successfully..');
			redirect('vehicle/vehiclegroup');
		} else {
			$this->session->set_flashdata('warningmessage', 'Something went wrong..Try again');
			redirect('vehicle/vehiclegroup');
		}
	}
}
