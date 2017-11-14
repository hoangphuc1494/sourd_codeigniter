<?php
/**
* 
*/
class Demo extends CI_Controller {
	function __construct() {
		parent::__construct();
    // $this->load->helper('url');
    $this->load->helper(array('form', 'url'));
    $this->load->model('demo_model');
    $this->load->library(array('session'));
    // $this->load->model(array('demo_model'));
    $this->load->library('form_validation');
	}

	public function test_function() {
    $ip = "192.206.151.131";
    $getloc = json_decode(file_get_contents("http://ipinfo.io/".$ip));
    echo "<pre>";print_r($getloc);die;

	}

	public function test_localhost_clien() {
		// $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		// echo $ip;die;
		// $ip = $_SERVER['REMOTE_ADDR'];
		// $ip = $_SERVER['SERVER_ADDR'];
			// $ip = "192.206.151.131"; // Toronto, Ontario, Canada
			// $ip = "171.253.179.164"; // Quebec, Canada
			// $location = file_get_contents('http://freegeoip.net/json/'.$ip);
			// echo $location;
		
		$location = file_get_contents('http://ipinfo.io/');
		echo $location;die;
			echo "<pre>";print_r(explode(',', $location));

	}

	function do_khoang_cach_giua_hai_diem() {
		$point1 = array('lat' => 40.770623, 'long' => -73.964367);
$point2 = array('lat' => 40.758224, 'long' => -73.917404);
$distance = $this->getDistanceBetweenPointsNew($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);
foreach ($distance as $unit => $value) {
    echo $unit.': '.number_format($value,4).'<br />';
}
	}
	function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2) {
    $theta = $longitude1 - $longitude2;
    $miles = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
    $miles = acos($miles);
    $miles = rad2deg($miles);
    $miles = $miles * 60 * 1.1515;
    $feet = $miles * 5280;
    $yards = $feet / 3;
    $kilometers = $miles * 1.609344;
    $meters = $kilometers * 1000;
    return compact('miles','feet','yards','kilometers','meters');
}

public function create_password() {

echo $this->passGen(1000,40);
}

function passGen($length,$nums){
	// 	– $length : độ dài của pass cần tạo
// – $num : Số lượng chữ số sẽ xuất hiện trong pass
$lowLet = "abcdefghijklmnopqrstuvwxyz";
$highLet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$numbers = "123456789";
$pass = "";
$i = 1;
While ($i <= $length){
$type = rand(0,1);
if ($type == 0){
if (($length-$i+1) > $nums){
$type2 = rand(0,1);
if ($type2 == 0){
$ran = rand(0,25);
$pass .= $lowLet[$ran];
}else{
$ran = rand(0,25);
$pass .= $highLet[$ran];
}
}else{
$ran = rand(0,8);
$pass .= $numbers[$ran];
$nums--;
}
}else{
if ($nums > 0){
$ran = rand(0,8);
$pass .= $numbers[$ran];
$nums--;
}else{
$type2 = rand(0,1);
if ($type2 == 0){
$ran = rand(0,25);
$pass .= $lowLet[$ran];
}else{
$ran = rand(0,25);
$pass .= $highLet[$ran];
}
}
}
$i++;
}
return $pass;
}

function convert_vi_to_en($str = 'Nguyễn Hoàng Phúc') {
  $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
  $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
  $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
  $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
  $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
  $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
  $str = preg_replace("/(đ)/", 'd', $str);
  $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
  $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
  $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
  $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
  $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
  $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
  $str = preg_replace("/(Đ)/", 'D', $str);
  //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
  echo $str;
  }

  public function get_website_differen(){
  	//case1:
  	$context = array ( 'http' => array ( 'proxy' => 'hostIP:hostPort', 'request_fulluri' => true, ), );
$context = stream_context_create ($context);
$data = file_get_contents("http://www.test.com",0,$context); echo $data;
  }

  public function slide_shows_image() {
    $this->load->view('demo/slide_shows_image');
  }

  public function hieu_ung_quang_cao() {
    $this->load->view('demo/hieu_ung_quang_cao');
  }

  public function shows_sam_pham_nhieu_chi_tiet() {
    $this->load->view('demo/shows_sam_pham_nhieu_chi_tiet');
  }

  public function shows_google_map($value='') {
    $this->load->view('demo/shows_google_map');
  }

  public function shows_question() {
    $this->data['shows_question'] = $this->demo_model->get_question()->result_array();
    $this->load->view('demo/shows_question',$this->data);
  }

  public function ajax() {
   $right_answer=0;
   $wrong_answer=0;
   $unanswered=0;
    $answer = array_column($this->demo_model->get_question()->result_array(), 'answer');
    for ($i=1; $i <= count($answer) ; $i++) { 
      if($answer[$i-1]==$_POST[$i]){
           $right_answer++;
       }else if($_POST[$i]==5){
           $unanswered++;
       }
       else{
           $wrong_answer++;
       }
    }
    echo "<div id='answer'>";
   echo " Số lần đúng  : <span class='highlight'>". $right_answer."</span><br>";

   echo " Số lần sai  : <span class='highlight'>". $wrong_answer."</span><br>";

   echo " Số câu hỏi không trả lời  : <span class='highlight'>". $unanswered."</span><br>";
   echo "</div>";
  }

  public function create_loading() {
    $this->load->view('demo/loading');
  }

  public function responsive_quote_carousel() {
    $this->load->view('demo/responsive_quote_carousel');
  }

  public function shopping_cart() {
    $this->load->view('demo/shopping_cart');
  }

  public function form_send_email() {
    $this->load->view('demo/form_send_email');
  }

  public function slideshow() {
    $this->load->view('demo/slideshow');
  }

  public function create_chu_ky_dien_tu() {
    $this->load->view('demo/create_chu_ky_dien_tu');
  }

  public function edit_table() {
    $this->load->view('demo/edit_table');
  }

  public function template_thevilla() {
    $this->load->view('demo/template_thevilla');
  }

  public function template_project() {
    $this->load->view('demo/template_project');
  }

  public function upload_image(){
    $this->load->view('demo/upload_image', array('error' => ' ' ));
  }

  public function do_upload() {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    // $config['max_size']             = 2000;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('userfile')) {
      $error = array('error' => $this->upload->display_errors());
      echo "<pre>";print_r($error);
      // $this->load->view('upload_form', $error);
    } else {
      $data = array('upload_data' => $this->upload->data());
      echo "<pre>";print_r($data);
      // $this->load->view('upload_success', $data);
    }
  }

  public function check_submit_form() {
    $this->form_validation->set_rules('username', 'Username', 'required');
    // $this->form_validation->set_rules('password', 'Password', 'required');
    // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
    // $this->form_validation->set_rules('email', 'Email', '');
    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('sErrMSGType', 'message-green');
      $this->session->set_flashdata('sErrMSG', 'phúc');
      $this->load->view('demo/check_submit_form');
    } else {
      echo "string";die;
      // $this->load->view('formsuccess');
    }
  }

  public function change_image() {
    $this->load->view('demo/change_image');
  }

  public function auto_upload() {
    $this->data['notification'] = $this->uri->segment(3);
    $this->data['shows_image'] = $this->demo_model->get_image()->result_array();
    $this->load->view('demo/auto_upload',$this->data);
  }

  public function auto_upload_image() {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('file_image')) {
      // $this->data['notification'] = "Upload error!";
      redirect('demo/auto_upload');
    } else {
      $name_image = $this->upload->data('file_name');
      $this->demo_model->simple_insert('images',array('image'=>$name_image));
      // $this->data['notification'] = "Upload success!";
      redirect('demo/auto_upload');
    }
  }

}
?>