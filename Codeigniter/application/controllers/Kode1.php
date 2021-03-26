<?php
class Kode1 extends CI_Controller{
	//cara memanggil Kode1/$
public function index(){
		$this->load->view('phpview');
	}
	public function hello_python(){
		$this->load->view('pythonview');
	}
	public function hello_cpp(){
		$this->load->view('cppview');
	}
	public function hello_java(){
		$this->load->view('javaview');
	}
	public function _remap($var){
		if(isset($var)){
			switch(strtolower($var)){
			case'php':
				$this->load->view('phpview');
				break;
			case'python':
				$this->load->view('pythonview');
				break;
			case'cpp':
				$this->load->view('cppview');
				break;
			case'java':
				$this->load->view('javaview');
				break;
			default:
				echo 'Input URL salah';
			}
		}else{
			echo'Input URL salah';
		}
	}
	}
?>