<?php 

class Office extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('madmin');

		$this->form_validation->set_message('required', 'Kolom %s tidak boleh kosong.');
		$this->form_validation->set_message('valid_email', 'Email tidak valid.');
		$this->form_validation->set_message('matches', 'Kolom  %s dan %s Tidak sama.');
		$this->form_validation->set_message('min_length', 'Kolom %s minimal %d karakter.');

	}
	
	function index(){
		if($this->session->userdata('isLoggedIn'))
		{

			$this->load->view('admin/header');
			$this->load->view('admin/main');
			$this->load->view('admin/footer');
		}else{
			redirect('office/login');
		}
	}
	public function login(){

		if(!empty($_POST['username']) && !empty($_POST['password']))
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|min_length[6]');
			if($this->form_validation->run() == true)
			{
				$this->load->helper('security');
				$str = $this->input->post('password');
				$str = do_hash($str, 'md5');
				if($this->madmin->loginAdmin($this->input->post('username'),$str))
				{
					redirect('office');
				}else{
					redirect('office/login');
				}
			}else{
				$this->session->set_flashdata('gagallogin', validation_errors());
				redirect('office/login');
			}
		}

		$this->load->view('admin/login');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('office/login');
	}
	function addnews()
	{

		$data['kategori']=$this->madmin->getAllKategori();
		if(!empty($_POST['judul']) || !empty($_POST['isi']) || !empty($_POST['kategori']))
		{
			
			$this->form_validation->set_rules('judul','Judul Berita','required');
			$this->form_validation->set_rules('isi','Isi Berita','required');
			$this->form_validation->set_rules('kategori','kategori Berita','required');
			if($this->form_validation->run())
			{
				$judul=addslashes($this->input->post('judul'));
				$isi=addslashes($this->input->post('isi'));
				$kategori = $this->input->post('kategori');
				if(is_uploaded_file($_FILES['gambar']['tmp_name']))
				{

					$config['upload_path'] = './content/berita/';
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$this->load->helper('url');
					$gambar=url_title($_FILES['gambar']['name']);
					$config['file_name'] = $gambar;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('gambar')) {
					
						$this->madmin->insertNewsPhoto($judul,$isi,$kategori,$gambar);
						$this->session->set_flashdata('suksesberita','Berita berhasil ditambahkan.');
						redirect('office/addnews');
					}
					else{
						$this->session->set_flashdata('gagalberita',$this->upload->display_errors());
						redirect('office/addnews');
					}
				}else{
					$this->madmin->insertNews($judul,$isi,$kategori);
					$this->session->set_flashdata('suksesberita',"Berita berhasil ditambahkan.");
					redirect('office/addnews');
				}
			}else{
				$this->session->set_flashdata('gagalberita', validation_errors());
				redirect('office/addnews');
			}
		}
		$this->load->view('admin/header');
		$this->load->view('admin/addnews',$data);
		$this->load->view('admin/footer');
	}
	function listnews()
	{
		$data['berita']=$this->madmin->getAllNews();
		$this->load->view('admin/header');
		$this->load->view('admin/listnews',$data);
		$this->load->view('admin/footer');
	}
	function deletenews($id)
	{
		$data=$this->madmin->getNewsById($id)->gambarberita;
		$foto='./content/berita/'.$data;
		unlink($foto);
		$this->madmin->deletenews($id);
		redirect('office/listnews');
	}
	function editnews($id)
	{
		$data['kategori']=$this->madmin->getAllKategori();
		$data['berita']=$this->madmin->getNewsById($id);
		$this->load->view('admin/header');
		$this->load->view('admin/editnews',$data);
		$this->load->view('admin/footer');
	}

	function submiteditnews()
	{
		$this->form_validation->set_rules('judul','Judul Berita','required');
		$this->form_validation->set_rules('isi','Isi Berita','required');
		$this->form_validation->set_rules('kategori','kategori Berita','required');
		$idberita = $this->input->post('idberita');
		if($this->form_validation->run())
		{
			$judul=addslashes($this->input->post('judul'));
			$isi=addslashes($this->input->post('isi'));
			$kategori = $this->input->post('kategori');
			$berita = new Berita($this->madmin->getNewsById($idberita));
			$berita->judulberita=$judul;
			$berita->isiberita=$isi;
			$berita->kategoriberita=$kategori;
			if(is_uploaded_file($_FILES['gambar']['tmp_name']))
			{
				$config['upload_path'] = './content/berita/';
				$config['allowed_types'] = 'jpg';
				$data='./content/berita/'.$berita->gambarberita;
				unlink($data);
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('gambar')) {
					$gambar=$_FILES['gambar']['name'];
					$berita->gambarberita=$gambar;
					$this->db->where('idberita',$berita->idberita);
					$this->db->update('berita',$berita);
					$this->session->set_flashdata('suksesberita','Berita berhasil diperbarui.');
					redirect('office/editnews/'.$idberita);
				}
				else{
					$this->session->set_flashdata('gagalberita',$this->upload->display_errors());
					redirect('office/editnews/'.$idberita);
				}
			}else{
				$this->db->where('idberita',$berita->idberita);
				$this->db->update('berita',$berita);
				$this->session->set_flashdata('suksesberita',"Berita berhasil diperbarui.");
				redirect('office/editnews/'.$idberita);
			}
		}else{
			$this->session->set_flashdata('gagalberita', validation_errors());
			redirect('office/editnews/'.$idberita);
		}
	}

	function category()
	{
		if(!empty($_POST['namakategori']))
		{
			$this->madmin->addcategory($_POST['namakategori']);
		}
		$data['kategori']=$this->madmin->getAllKategori();
		$this->load->view('admin/header');
		$this->load->view('admin/category',$data);
		$this->load->view('admin/footer');	
	}
	function deletecategory($id)
	{
		$this->madmin->deletecategory($id);
		redirect('office/category');
	}
	function listpesan()
	{
		$data['pesan']=$this->madmin->getAllPesan();
		$this->load->view('admin/header');
		$this->load->view('admin/listpesan',$data);
		$this->load->view('admin/footer');
	}
	function deletepesan($id)
	{
		$this->madmin->deletepesan($id);
		redirect('office/listpesan');
	}
	function listgallery()
	{
		$data['gallery']=$this->madmin->getAllGallery();
		$this->load->view('admin/header');
		$this->load->view('admin/listgallery',$data);
		$this->load->view('admin/footer');	
	}
	function addgallery()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/addgallery');
		$this->load->view('admin/footer');	
	}
	function submitaddgallery()
	{
		if(!empty($_POST['jenis']))
		{
			$jenis=$_POST['jenis'];
			$error="";
			if($jenis=='foto')
			{

				if(is_uploaded_file($_FILES['foto']['tmp_name']))
				{
					if(!empty($_POST['judulf']))
					{
						$this->load->helper('url');
						$judul=addslashes($_POST['judulf']);
						$config['upload_path'] = './content/gallery/';
						$config['allowed_types'] = '*';
						$nama=url_title($_FILES['foto']['name']);
						$config['file_name'] = $nama;
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if ($this->upload->do_upload('foto')) {	
							$this->madmin->addgallery($jenis,$judul,$nama);
						}else{
							$error = $error."<p>".$this->upload->display_errors()."</p>";
						}
					}else{
						$error = $error."<p>Judul tidak boleh kosong.</p>";
					}
				}else{
					$error = $error."<p>File belum terupload</p>";
				}

			}else{
				$this->form_validation->set_rules('judulv','','required');
				$this->form_validation->set_rules('link','','required');
				if($this->form_validation->run())
				{
					if(is_uploaded_file($_FILES['fotov']['tmp_name']))
					{
						$judul=addslashes($_POST['judulf']);
						$config['upload_path'] = './content/gallery/';
						$config['allowed_types'] = 'jpg';
						$this->load->helper('url');
						$nama=url_title($_FILES['fotov']['name']);
						$config['file_name'] = $nama;
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if ($this->upload->do_upload('fotov')) {	
							$judul=addslashes($_POST['judulv']);
							$link=addslashes($_POST['link']);
							$this->madmin->addgallery($jenis,$judul,$nama,$link);
						}else{
							$error = $error."<p>".$this->upload->display_errors()."</p>";
						}
					}else{
						$error = $error."<p>File belum terupload</p>";
					}
				}else{
					$error=$error.validation_errors();
				}
			}
			if ($error!="")
			{
				$this->session->set_flashdata('gagal',$error);
			}else{
				$this->session->set_flashdata('sukses',"Gallery berhasil tertambahkan");
			}
		}else{
			redirect('office/addgallery');
		}
		redirect('office/addgallery');
	}
	function deletegallery($id)
	{
		$potong=explode("-potong-", $id);
		$data='./content/gallery/'.$potong[1].'';
		unlink($data);
		$this->madmin->deletegallery($potong[0]);
		redirect('office/listgallery');
	}
	function changepassword()
	{
		$a = $this->input->post('passlama');
		$b = $this->input->post('passbaru');
		$c = $this->input->post('passlama');
		if(!empty($a) || !empty($b) || !empty($c))
		{
			$this->form_validation->set_rules('passlama',"Password Lama",'required|min_length[6]|xss_clean');
			$this->form_validation->set_rules('passbaru',"Password Baru",'required|min_length[6]|xss_clean');
			$this->form_validation->set_rules('cpassbaru',"Konfirmasi Password Baru",'xss_clean|matches[passbaru]');
			if($this->form_validation->run())
			{
				$this->load->helper('security');
				$str = $this->input->post('passlama');
				$str = do_hash($str, 'md5');
				if($str==$this->madmin->getPassword($this->session->userdata('username')))
				{
					$str = $this->input->post('passbaru');
					$str = do_hash($str, 'md5');
					$this->madmin->changepassword($this->session->userdata('username'),$str);
					$this->session->set_flashdata('suksescpassword',"Password anda telah diganti.");
				}else{
					$this->session->set_flashdata('gagalcpassword',"Password lama anda tidak cocok.");
				}
			}else{
				$this->session->set_flashdata('gagalcpassword',validation_errors());
			}
			redirect('office/changepassword');
		}
		$this->load->view('admin/header');
		$this->load->view('admin/changepassword');
		$this->load->view('admin/footer');
	}
	function frontpage()
	{
		$data['front']=$this->madmin->getDataFront()->row();
		$this->load->view('admin/header');
		$this->load->view('admin/frontpage',$data);
		$this->load->view('admin/footer');	
	}
	function submitfront()
	{
		$kt=addslashes($this->input->post('kalimatdepan'));
		$rata=$this->input->post('rata');
		$deskripsi=addslashes($this->input->post('deskripsi'));
		if(is_uploaded_file($_FILES['foto']['tmp_name']))
		{
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg';
			$this->load->helper('url');
			$config['file_name'] = 'slide1.jpg';
			unlink('./assets/img/slide1.jpg');
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('foto')) {
				$this->madmin->changefront($kt,$rata,$deskripsi);
				$this->session->set_flashdata('sukses','Tampilan berhasil diperbarui.');
			}
			else{
				$this->session->set_flashdata('gagal',$this->upload->display_errors());
			}
		}else{
			$this->madmin->changefront($kt,$rata,$deskripsi);
			$this->session->set_flashdata('sukses','Tampilan berhasil diperbarui.');
		}
		redirect('office/frontpage','refresh');
	}
	function newthread()
	{
		if(!empty($_POST['judul']) || !empty($_POST['isi']))
		{
			
			$this->form_validation->set_rules('judul','Judul Thread','required');
			$this->form_validation->set_rules('isi','Isi Thread','required');
			if($this->form_validation->run())
			{
				$judul=addslashes($this->input->post('judul'));
				$isi=addslashes($this->input->post('isi'));
				if(is_uploaded_file($_FILES['gambar']['tmp_name']))
				{

					$config['upload_path'] = './content/berita/';
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$this->load->helper('url');
					$gambar=url_title($_FILES['gambar']['name']);
					$config['file_name'] = $gambar;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('gambar')) {
					
						$this->madmin->addThread($judul,$isi,$gambar);
						$this->session->set_flashdata('suksesthread','Thread ditambahkan.');
						redirect('office/newthread');
					}
					else{
						$this->session->set_flashdata('gagalthread',$this->upload->display_errors());
						redirect('office/newthread');
					}
				}else{
					$gambar = '';
					$this->madmin->addThread($judul,$isi,$gambar);
					$this->session->set_flashdata('suksesthread',"Thread berhasil ditambahkan.");
					redirect('office/newthread');
				}
			}else{
				$this->session->set_flashdata('gagalberita', validation_errors());
				redirect('office/newthread');
			}
		}
		$this->load->view('admin/header');
		$this->load->view('admin/newthread');
		$this->load->view('admin/footer');

	}
	function listthread()
	{
		$data['threads'] = $this->madmin->getAllThread();
		$this->load->view('admin/header');
		$this->load->view('admin/listthread', $data);
		$this->load->view('admin/footer');
	}
	function adduser()
	{
		if(!empty($_POST['nama']) || !empty($_POST['angkatan']) || !empty($_POST['username']) || !empty($_POST['password']))
		{
			
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('angkatan','Angkatan','required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Angkatan','required');
			if($this->form_validation->run())
			{
				$nama=addslashes($this->input->post('nama'));
				$angkatan=addslashes($this->input->post('angkatan'));
				$username=addslashes($this->input->post('username'));
				$password=addslashes($this->input->post('password'));
				if(is_uploaded_file($_FILES['gambar']['tmp_name']))
				{

					$config['upload_path'] = './content/berita/';
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$this->load->helper('url');
					$gambar=url_title($_FILES['gambar']['name']);
					$config['file_name'] = $gambar;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('gambar')) {
					
						$this->madmin->addUser($nama, $angkatan, $username, $password, $gambar);
						$this->session->set_flashdata('suksesuser','User ditambahkan.');
						redirect('office/adduser');
					}
					else{
						$this->session->set_flashdata('gagalthread',$this->upload->display_errors());
						redirect('office/adduser');
					}
				}else{
					$gambar = '';
					$this->madmin->addUser($nama, $angkatan, $username, $password, $gambar);
					$this->session->set_flashdata('suksesuser',"User berhasil ditambahkan.");
					redirect('office/adduser');
				}
			}else{
				$this->session->set_flashdata('gagaluser', validation_errors());
				redirect('office/adduser');
			}
		}
		//else echo "asd";
		$this->load->view('admin/header');
		$this->load->view('admin/adduser');
		$this->load->view('admin/footer');
	}
	function listuser()
	{
		$data['users'] = $this->madmin->getAllUser();
		$this->load->view('admin/header');
		$this->load->view('admin/listuser', $data);
		$this->load->view('admin/footer');
	}
	function changeuserstatus($status, $iduser)
	{
		if($status == 0)
			$status = 1;
		else
			$status = 0;
		$this->madmin->changeuserstatus($status, $iduser);
		$data['users'] = $this->madmin->getAllUser();
		$this->load->view('admin/header');
		$this->load->view('admin/listuser', $data);
		$this->load->view('admin/footer');
	}
}

class Donatur 
{
	public $iddonatur;
	public $namadonatur;
	public $emaildonatur;
	public $telpdonatur;
	public $tglpengiriman;
	public $subjek;
	public $pesan;
	public $status;
	public $bankdonatur;
	public $jumlah;
	public function __construct($row)
	{
		$this->iddonatur=$row->iddonatur;
		$this->namadonatur=$row->namadonatur;
		$this->emaildonatur=$row->emaildonatur;
		$this->telpdonatur=$row->telpdonatur;
		$this->tglpengiriman=$row->tglpengiriman;
		$this->subjek=$row->subjek;
		$this->pesan=$row->pesan;
		$this->status=$row->status;
		$this->bankdonatur=$row->bankdonatur;
		$this->jumlah=$row->jumlah;
	}
}
class Berita
{
	public $idberita;
	public $judulberita;
	public $isiberita;
	public $kategoriberita;
	public $gambarberita;
	public $waktuberita;
	public function __construct($row)
	{
		$this->idberita=$row->idberita;
		$this->judulberita=$row->judulberita;
		$this->isiberita=$row->isiberita;
		$this->kategoriberita=$row->kategoriberita;
		$this->waktuberita=$row->waktuberita;
		$this->gambarberita=$row->gambarberita;
	}
}
class Anak
{
	public $noinduk;
	public $nama;
	public $ttl;
	public $ayah;
	public $ibu;
	public $alamat;
	public $keterangan;
	public $foto;
	public function __construct($row)
	{
		$this->noinduk=$row->noinduk;
		$this->nama=$row->nama;
		$this->ttl=$row->ttl;
		$this->ayah=$row->ayah;
		$this->ibu=$row->ibu;
		$this->alamat=$row->alamat;
		$this->keterangan=$row->keterangan;
		$this->foto=$row->foto;
	}
}
