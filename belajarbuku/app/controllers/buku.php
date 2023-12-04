<?php
	class Buku extends Controller {
	public function index()
	{
		$data['title'] = 'Data Buku';
		$data['buku'] = $this->model('BukuModel')->getAllBuku();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('buku/index', $data);
		$this->view('templates/footer');
	}
	public function cari()
	{
		$data['title']='Data Buku';
		$data['buku']=$this->model('BukuModel')->cariBuKu();
        $data['key']=$_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('kategori/index', $data);
		$this->view('templates/footer');

	}
	public function edit($id)
	{
		$data['title']='Detail Buku';
		$data['kategori']=$this->model('KategoriModel')->getAllKategori($id);
		$data['buku']=$this->model('BukuModel')->getBukuById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('kategori/edit', $data);
		$this->view('templates/footer');

	}
	public function tambah()
	{
		$data['title'] = 'Tambah Buku';
		$data['kategori']=$this->model('KategoriModel')->getAllKategori($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('kategori/create', $data);
		$this->view('templates/footer');

	}
	public function simpanBuku()
	{
		if($this->model('BukuModel')->tambahBuku($_POST)>0){
			Flasher::setMessage('Berhasil','ditambahkan','success');
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
		}
		   echo'<script>window.location.href="'.base_url.'/kategori";</script>';
			header('location:'.base_url.'/buku');
			exit;
		}

	}
	public function updateBuku()
	{
		if($this->model('BukuModel')->updateDataBuku($_POST)>0){
			Flasher::setMessage('Berhasil','diupdate','success');
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
		}
		    echo'<script>window.location.href="'.base_url.'/kategori";</script>';
			header('location:'.base_url.'/buku');
			exit;
		}

	}
	public function hapus($id)
	{	
		if($this->model('BukuModel')->deletebuku($id)>0){
			Flasher::setMessage('Berhasil','dihapus','success');
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
		}
		     echo'<script>window.location.href="'.base_url.'/kategori";</script>';
			header('location:'.base_url.'/buku');
			exit;
	}
	public function __construct(){
		if($_SESSION['session_login']!='sudah_login'){
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location:'.base_url.'/login');
			exit;
		}
	}
}
