<?php 

class About extends Controller{
	public function index()
	{
		$this->view('about/index');
	}

	public function page($nama='Fikri', $pekerjaan='Mahasiswa')
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$this->view('about/page',$data );
	}

}