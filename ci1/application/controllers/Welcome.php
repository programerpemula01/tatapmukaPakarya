<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	// public function blog()
	// {
	// 	$data = [];

	// 	$data = [
	// 		'judul' => 'Judul saya',
	// 		'deskripsi' => 'Deskripsi tentang saya',
	// 		'tags' => ['html','css','javascript'],
	// 		'comment' =>[
	// 			'id' => 1,
	// 			'content' => 'Comment Saya'
	// 		]
	// 	];

	// 	$data['author'] = "Penulis saya";

	// 	$this->load->view('pages/index', $data);
	// }

	// public function show($slug)
	// {
	// 	echo $slug;
	// }
	public $dataList = [];

	public function __construct(){
		parent::__construct();
		$this->dataList = [
			['id' => 1, 'title' => 'html', 'complete' => false],
			['id' => 2, 'title' => 'css', 'complete' => true],
			['id' => 3, 'title' => 'js', 'complete' => false]		
		];
	}

	public function lists()
	{
		$dataList['posts'] = $this->dataList;
		$this->load->view('pages/index', $dataList);
	}

	public function show()
	{
		$id = $this->uri->segment(3);
		foreach($this->dataList as $tampil){
			if($id == $tampil['id']){
				echo $id. " - ". $tampil['title'];
			}
		}
	}

	public function create()
	{	
		if(isset($_POST['submit'])){
			$title = $this->input->post('title');
			
			array_push($this->dataList, ['id' => count($this->dataList)+1, 'title' => $title, 'complete' => false]);

			print_r($this->dataList);
		}
		
		$this->load->view('pages/create');

	}
}
