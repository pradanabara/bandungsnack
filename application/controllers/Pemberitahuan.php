<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pemberitahuan extends CI_Controller {
	
	
	function __construct()
	
	{

		parent::__construct();

		$this->load->model('Products_model');
		
		$this->load->model('Sellers_model');
		$this->load->model('Notifikasi_customers_model');

		
	}

	function _render_page($view, $data=null)

	{
		$this->data['data_seller'] = $this->Sellers_model->get_menu()->result();

		$this->data['data_product'] = $this->Products_model;

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$this->load->view('front-end/include/simple_header',$this->viewdata);

		$view_html = $this->load->view($view);

		$this->load->view('front-end/include/footer');

	}

	function index()
	{
		$update_all = $this->Notifikasi_customers_model->update_all();
		$this->data['add_css'] = array(
			base_url('assets/back-end/css/bootstrap.min.css'),

	        base_url('assets/front-end/css/normalize.css'),

			base_url('assets/front-end/css/bootstrap.css'),

			base_url('assets/front-end/css/iview.css'),

			base_url('assets/front-end/css/menu3d.css'),

			base_url('assets/front-end/css/animate.css'),

			base_url('assets/front-end/css/custom.css'),

			base_url('assets/front-end/css/style-switch.css'),

			base_url('assets/front-end/css/color.css'),

		base_url('assets/front-end/css/upload/component.css'),

    		base_url('assets/noty/demo/animate.css'),
			base_url('assets/front-end/css/jquery.dataTables.min.css'),

		);

		$this->data['add_js'] = array(

	        base_url('assets/front-end/js/jquery-1.10.2.min.js'),

  			base_url('assets/front-end/js/jquery.validate.min.js'),

			base_url('assets/front-end/js/bootstrap.min.js'),

			base_url('assets/front-end/js/bootstrap-select.js'),

			base_url('assets/front-end/js/scripts.js'),

			base_url('assets/front-end/js/menu3d.js'),

			base_url('assets/front-end/js/raphael-min.js'),

			base_url('assets/front-end/js/jquery.easing.js'),

			base_url('assets/front-end/js/iview.js'),

			base_url('assets/front-end/js/retina-1.1.0.min.js'),

			base_url('assets/front-end/js/custom-file-input.js'),
			 base_url('assets/noty/jquery.noty.packaged.min.js'),

	    	base_url('assets/noty/js/noty/packaged/jquery.noty.packaged.min.js'),

	    	base_url('assets/noty/demo/notification_html.js'),
			
			base_url('assets/front-end/js/jquery.dataTables.min.js'),



		);
		$id_customers = $this->session->userdata('id_customers');
		$this->data['data_pemberitahuan'] = $this->Notifikasi_customers_model->get_data($id_customers)->result(); 

		$this->_render_page('front-end/pemberitahuan/data-pemberitahuan');

	}
}