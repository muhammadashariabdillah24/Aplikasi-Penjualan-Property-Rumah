<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
					$data['v_admin']   = $this->Mcrud->get_data('tbl_admin');
					$data['v_member']  = $this->Mcrud->get_data('tbl_member');
					$data['v_barang']  = $this->Mcrud->get_data('tbl_barang');
					$data['v_artikel'] = $this->Mcrud->get_data('tbl_artikel');

					$data_web = $this->db->get_where('tbl_web', "id_web='1'")->row();

					$data['data_web']  = $data_web;

					$this->load->view('admin/header', $data);
					$this->load->view('admin/beranda', $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnsimpan'])) {
						$nama_web 			= htmlentities(strip_tags($this->input->post('nama_web')));
						$telp 					= htmlentities(strip_tags($this->input->post('telp')));
						$twitter 				= htmlentities(strip_tags($this->input->post('twitter')));
						$fb 						= htmlentities(strip_tags($this->input->post('fb')));
						$google_plus 		= htmlentities(strip_tags($this->input->post('google_plus')));
						$email 					= htmlentities(strip_tags($this->input->post('email')));
						$alamat 				= htmlentities(strip_tags($this->input->post('alamat')));
						$embed_lokasi 	= htmlentities(strip_tags($this->input->post('embed_lokasi')));

								$data = array(
									'nama_web'			=> $nama_web,
									'telp'					=> $telp,
									'twitter'				=> $twitter,
									'fb'						=> $fb,
									'google_plus'		=> $google_plus,
									'email'					=> $email,
									'alamat'				=> $alamat,
									'embed_lokasi'	=> $embed_lokasi
								);
								$this->Mcrud->update_data('tbl_web', array('id_web' => '1'), $data);

								$this->session->set_flashdata('msg',
									'
									<div class="alert alert-success alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times; &nbsp;</span>
										 </button>
										 <strong>Sukses!</strong> Berhasil disimpan.
									</div>'
								);

						redirect('admin');
					}

		}
	}


	public function login()
	{
		$ceks = $this->session->userdata('username@wp');
		if(isset($ceks)) {
			redirect('');
		}else{
			$this->load->view('admin/login/header');
			$this->load->view('admin/login/login');
			$this->load->view('admin/login/footer');

				if (isset($_POST['btnlogin'])){
						 $username = htmlentities(strip_tags($_POST['username']));
						 $pass	   = htmlentities(strip_tags(md5($_POST['password'])));

						 $query  = $this->Mcrud->get_data_by_pk('tbl_admin', 'username', $username);
						 $cek    = $query->result();
						 $cekun  = $cek[0]->username;
						 $jumlah = $query->num_rows();

						 if($jumlah == 0) {
								 $this->session->set_flashdata('msg',
									 '
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times; &nbsp;</span>
											</button>
											<strong>Username "'.$username.'"</strong> belum terdaftar.
									 </div>'
								 );
								 redirect('admin/login');
						 } else {
										 $row = $query->row();
										 $cekpass = $row->password;
										 if($cekpass <> $pass) {
												$this->session->set_flashdata('msg',
													 '<div class="alert alert-warning alert-dismissible" role="alert">
													 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times; &nbsp;</span>
															</button>
															<strong>Username atau Password Salah!</strong>.
													 </div>'
												);
												redirect('admin/login');
										 } else {

																$this->session->set_userdata('username@wp', "$cekun");

																redirect('admin');
										 }
						 }
				}
		}
	}


	public function logout() {
     if ($this->session->has_userdata('username@wp')) {
         $this->session->sess_destroy();
         redirect('');
     }
     redirect('');
  }


	public function lupa_password()
	{
		$ceks = $this->session->userdata('username@2017');
		if(isset($ceks)) {
			$this->load->view('404_content');
		}else{
			$this->load->view('admin/login/header');
			$this->load->view('admin/login/lupa_password');
			$this->load->view('admin/login/footer');
		}
	}


	public function profile()
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
				$data['v_admin']   = $this->Mcrud->get_data('tbl_admin');

					$this->load->view('admin/header', $data);
					$this->load->view('admin/profile', $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnupdate'])) {

								$lokasi = 'img/profile';

								$file_size = 1024 * 3; // 3 MB
								$this->upload->initialize(array(
									"file_type"     => "image/jpeg",
									"upload_path"   => "./$lokasi",
									"allowed_types" => "jpg|jpeg|png|gif|bmp",
									"max_size" => "$file_size"
								));

								if ( ! $this->upload->do_upload('avatar-1'))
								{
											$foto = $data['v_admin']->row()->foto;
								}
								 else
								{
									if ($data['v_admin']->row()->foto != 'default.png') {
											unlink("$lokasi/".$data['v_admin']->row()->foto);
									}
											$gbr = $this->upload->data();

											$filename = $gbr['file_name'];
											$foto = preg_replace('/ /', '_', $filename);
								}


						$username	    	= htmlentities(strip_tags($this->input->post('username')));
						$nama_lengkap	 	= htmlentities(strip_tags($this->input->post('nama_lengkap')));
						$no_hp					= htmlentities(strip_tags($this->input->post('no_hp')));
						$alamat	 		    = htmlentities(strip_tags($this->input->post('alamat')));
						$tentang	 		  = htmlentities(strip_tags($this->input->post('tentang')));

					if ($ceks != $username) {
							$cek_un    = $this->db->get_where('tbl_admin', "username='$username'");
							if ($cek_un->num_rows() != 0) {
								 $query  = 'gagal';
								 $pesan  = "Username '$username'";
							}else {
									$query = "";
									$pesan = "";
							}

							if ($query == 'gagal') {
								$this->session->set_flashdata('msg',
									'
									<div class="alert alert-warning alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
										 </button>
										 <strong>Gagal!</strong> '.$pesan.' sudah ada.
									</div>'
								);
								redirect('admin/profile');
							}
					}

									$data = array(
										'username'	    => $username,
										'nama_lengkap'	=> $nama_lengkap,
										'no_hp'				  => $no_hp,
										'alamat'				=> $alamat,
										'foto'				  => $foto,
										'tentang'			  => $tentang
									);
									$this->db->update('tbl_admin', $data, array('username' => $ceks));

							$this->session->has_userdata('username@wp');
							$this->session->set_userdata('username@wp', "$username");

									$this->session->set_flashdata('msg',
										'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Profile berhasil diperbarui.
										</div>'
									);
									redirect('admin/profile');
					}


					if (isset($_POST['btnupdate2'])) {
						$password 	= htmlentities(strip_tags($this->input->post('password')));
						$password2 	= htmlentities(strip_tags($this->input->post('password2')));

						if ($password != $password2) {
								$this->session->set_flashdata('msg2',
									'
									<div class="alert alert-warning alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
										 </button>
										 <strong>Gagal!</strong> Password tidak cocok.
									</div>'
								);
						}else{
									$data = array(
										'password'	=> md5($password)
									);
									$this->db->update('tbl_admin', $data, array('username' => $ceks));

									$this->session->set_flashdata('msg2',
										'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Password berhasil diperbarui.
										</div>'
									);
						}
									redirect('admin/profile');
					}

		}
	}


	public function barang()
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
			$data['v_admin']  	= $this->Mcrud->get_data_by_pk('tbl_admin', 'username', $ceks);

			$this->db->join('tbl_kat','tbl_kat.id_kat=tbl_barang.id_kat');
			$this->db->order_by('id_barang', 'DESC');
			$data['v_barang'] 			= $this->Mcrud->get_data('tbl_barang');

			$this->db->order_by('id_kat', 'ASC');
			$data['v_kat'] 			= $this->Mcrud->get_data('tbl_kat');

					$this->load->view('admin/header', $data);
					$this->load->view('admin/barang/barang', $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnsimpan'])) {
							$judul        	= htmlentities(strip_tags($_POST['judul']));
							$id_kat       	= htmlentities(strip_tags($_POST['id_kat']));
							$status       	= htmlentities(strip_tags($_POST['status']));
							$lokasi       	= htmlentities(strip_tags($_POST['lokasi']));
							$luas_tanah     = htmlentities(strip_tags($_POST['luas_tanah']));
							$luas_bangunan  = htmlentities(strip_tags($_POST['luas_bangunan']));
							$kamar_tidur    = htmlentities(strip_tags($_POST['kamar_tidur']));
							$lantai       	= htmlentities(strip_tags($_POST['lantai']));
							$kamar_mandi    = htmlentities(strip_tags($_POST['kamar_mandi']));
							$sertifikat     = htmlentities(strip_tags($_POST['sertifikat']));
							$listrik 			  = htmlentities(strip_tags($_POST['listrik']));
							$deskripsi 			= htmlentities(strip_tags($_POST['deskripsi']));
							$harga         	= htmlentities(strip_tags($_POST['harga']));
							$ket          	= htmlentities(strip_tags($_POST['ket']));

							$file_size = 5500; //5 MB
			        $this->upload->initialize(array(
			          "upload_path"   => "./img/barang/",
			          "allowed_types" => "jpg|jpeg|png|gif",
			          "max_size" => "$file_size"
			        ));

			        if ( ! $this->upload->do_upload('foto'))
			        {
									 $error = $this->upload->display_errors('<p>', '</p>');
									 $simpan = '';
			        }
			         else
			        {
								$gbr = $this->upload->data();
								$simpan = 'yes';
							}

							if ( ! $this->upload->do_upload('foto2'))
							{
								 $error = $this->upload->display_errors('<p>', '</p>');
								 unlink($gbr);
								 $simpan = '';
							}
							 else
							{
							   $gbr2 = $this->upload->data();
								 $simpan = 'yes';
							}

							if ( ! $this->upload->do_upload('foto3'))
							{
								 $error = $this->upload->display_errors('<p>', '</p>');
								 unlink($gbr2);
								 $simpan = '';
							}
							 else
							{
								$gbr3 = $this->upload->data();
								$simpan = 'yes';
							}

							if ( ! $this->upload->do_upload('foto4'))
							{
							  $error = $this->upload->display_errors('<p>', '</p>');
								unlink($gbr3);
								$simpan = '';
							}
							 else
							{
								$gbr4 = $this->upload->data();
								$simpan == 'ya';
							}

							if ($simpan == '') {
									$this->session->set_flashdata('msg',
										 '
										 <div class="alert alert-warning alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times; &nbsp;</span>
												</button>
												<strong>Gagal!</strong> '.$error.'.
										 </div>'
									 );
							}else{

								$filename = $gbr['file_name'];
								$filename = "img/barang/".$filename;
								$foto 		= preg_replace('/ /', '_', $filename);

								$filename2 = $gbr2['file_name'];
								$filename2 = "img/barang/".$filename2;
								$foto2 		 = preg_replace('/ /', '_', $filename2);

								$filename3 = $gbr3['file_name'];
								$filename3 = "img/barang/".$filename3;
								$foto3 		 = preg_replace('/ /', '_', $filename3);

								$filename4 = $gbr4['file_name'];
								$filename4 = "img/barang/".$filename4;
								$foto4 		 = preg_replace('/ /', '_', $filename4);

									date_default_timezone_set('Asia/Jakarta');
									$tgl = date('d-m-Y');

									$data = array(
										'judul'    	  	=> $judul,
										'id_kat'    		=> $id_kat,
										'status'    		=> $status,
										'lokasi'    		=> $lokasi,
										'luas_tanah'    => $luas_tanah,
										'luas_bangunan' => $luas_bangunan,
										'kamar_tidur'   => $kamar_tidur,
										'lantai'    		=> $lantai,
										'kamar_mandi'   => $kamar_mandi,
										'sertifikat'    => $sertifikat,
										'listrik'  		  => $listrik,
										'deskripsi'     => $deskripsi,
										'harga'    			=> $harga,
										'gambar'   			=> $foto,
										'gambar2'  			=> $foto2,
										'gambar3'  			=> $foto3,
										'gambar4'  			=> $foto4,
										'ket'   		 		=> $ket,
										'view'    			=> 0,
										'tgl_barang'		=> $tgl
									);
									$this->Mcrud->save_data('tbl_barang', $data);

									$this->session->set_flashdata('msg',
										 '
										 <div class="alert alert-success alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times; &nbsp;</span>
												</button>
												<strong>Sukses!</strong> Barang berhasil ditambahkan.
										 </div>'
									 );
							}

							redirect('admin/barang');
					}

		}
	}



	public function barang_edit($id='')
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
			$data['v_admin']  	= $this->Mcrud->get_data_by_pk('tbl_admin', 'username', $ceks);
			$data['v_barang']  		= $this->Mcrud->get_data_by_pk('tbl_barang', 'id_barang', $id)->row();

			$this->db->order_by('id_kat', 'ASC');
			$data['v_kat'] 			= $this->Mcrud->get_data('tbl_kat');

					$this->load->view('admin/header', $data);
					$this->load->view('admin/barang/barang_edit', $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnsimpan'])) {
						$judul        	= htmlentities(strip_tags($_POST['judul']));
						$id_kat       	= htmlentities(strip_tags($_POST['id_kat']));
						$status       	= htmlentities(strip_tags($_POST['status']));
						$lokasi       	= htmlentities(strip_tags($_POST['lokasi']));
						$luas_tanah     = htmlentities(strip_tags($_POST['luas_tanah']));
						$luas_bangunan  = htmlentities(strip_tags($_POST['luas_bangunan']));
						$kamar_tidur    = htmlentities(strip_tags($_POST['kamar_tidur']));
						$lantai       	= htmlentities(strip_tags($_POST['lantai']));
						$kamar_mandi    = htmlentities(strip_tags($_POST['kamar_mandi']));
						$sertifikat     = htmlentities(strip_tags($_POST['sertifikat']));
						$listrik 			  = htmlentities(strip_tags($_POST['listrik']));
						$deskripsi 			= htmlentities(strip_tags($_POST['deskripsi']));
						$harga         	= htmlentities(strip_tags($_POST['harga']));
						$ket          	= htmlentities(strip_tags($_POST['ket']));

							$file_size = 5500; //5 MB
			        $this->upload->initialize(array(
			          "upload_path"   => "./img/barang/",
			          "allowed_types" => "jpg|jpeg|png|gif",
			          "max_size" => "$file_size"
			        ));

							$cek_foto  = $data['v_barang']->gambar;
							$cek_foto2 = $data['v_barang']->gambar2;
							$cek_foto3 = $data['v_barang']->gambar3;
							$cek_foto4 = $data['v_barang']->gambar4;

					if ($_FILES['foto']['error'] <> 4) {
			        if ( ! $this->upload->do_upload('foto'))
			        {
									$error = $this->upload->display_errors('<p>', '</p>');
									$update = "";
							}
			         else
			        {
										unlink("$cek_foto");
			              $gbr = $this->upload->data();
			              $filename = $gbr['file_name'];
			              $filename = "img/barang/".$filename;
										$foto 		= preg_replace('/ /', '_', $filename);

										$update = "yes";
			        }
					}else{
						$foto   = $cek_foto;
						$update = "yes";
					}

					if ($_FILES['foto2']['error'] <> 4) {
			        if ( ! $this->upload->do_upload('foto2'))
			        {
									$error = $this->upload->display_errors('<p>', '</p>');
									$update = "";
							}
			         else
			        {
										unlink("$cek_foto2");
			              $gbr2 = $this->upload->data();
			              $filename2 = $gbr2['file_name'];
			              $filename2 = "img/barang/".$filename2;
										$foto2 		 = preg_replace('/ /', '_', $filename2);

										$update = "yes";
			        }
					}else{
						$foto2   = $cek_foto2;
						$update = "yes";
					}

					if ($_FILES['foto3']['error'] <> 4) {
					    if ( ! $this->upload->do_upload('foto3'))
					    {
					        $error = $this->upload->display_errors('<p>', '</p>');
					        $update = "";
					    }
					     else
					    {
					          unlink("$cek_foto3");
					          $gbr3 = $this->upload->data();
					          $filename3 = $gbr3['file_name'];
					          $filename3 = "img/barang/".$filename3;
					          $foto3 		 = preg_replace('/ /', '_', $filename3);

					          $update = "yes";
					    }
					}else{
					  $foto3   = $cek_foto3;
					  $update = "yes";
					}

					if ($_FILES['foto4']['error'] <> 4) {
					    if ( ! $this->upload->do_upload('foto4'))
					    {
					        $error = $this->upload->display_errors('<p>', '</p>');
					        $update = "";
					    }
					     else
					    {
					          unlink("$cek_foto4");
					          $gbr4 = $this->upload->data();
					          $filename4 = $gbr4['file_name'];
					          $filename4 = "img/barang/".$filename4;
					          $foto4 		 = preg_replace('/ /', '_', $filename4);

					          $update = "yes";
					    }
					}else{
					  $foto4   = $cek_foto4;
					  $update = "yes";
					}

							if ($update = "yes") {
									$data = array(
										'judul'    	  	=> $judul,
										'id_kat'    		=> $id_kat,
										'status'    		=> $status,
										'lokasi'    		=> $lokasi,
										'luas_tanah'    => $luas_tanah,
										'luas_bangunan' => $luas_bangunan,
										'kamar_tidur'   => $kamar_tidur,
										'lantai'    		=> $lantai,
										'kamar_mandi'   => $kamar_mandi,
										'sertifikat'    => $sertifikat,
										'listrik'  		  => $listrik,
										'deskripsi'     => $deskripsi,
										'harga'    			=> $harga,
										'gambar'   			=> $foto,
										'gambar2'   		=> $foto2,
										'gambar3'   		=> $foto3,
										'gambar4'   		=> $foto4,
										'ket'   		 		=> $ket,
										'view'    			=> 0
									);
									$this->Mcrud->update_data('tbl_barang', array('id_barang' => $id), $data);

									$this->session->set_flashdata('msg',
										 '
										 <div class="alert alert-success alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times; &nbsp;</span>
												</button>
												<strong>Sukses!</strong> Barang berhasil diperbarui.
										 </div>'
									 );
							}else{
									$this->session->set_flashdata('msg',
										 '
										 <div class="alert alert-warning alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times; &nbsp;</span>
												</button>
												<strong>Gagal!</strong> '.$error.'.
										 </div>'
									 );
							}
							redirect('admin/barang');
					}

		}
	}


	public function barang_hapus($id='')
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
					$cek_data = $this->Mcrud->get_data_by_pk('tbl_barang', 'id_barang', $id)->row();

					unlink("$cek_data->gambar");
					unlink("$cek_data->gambar2");
					unlink("$cek_data->gambar3");
					unlink("$cek_data->gambar4");
					$this->Mcrud->delete_data_by_pk('tbl_barang', 'id_barang', $id);

					$this->session->set_flashdata('msg',
						 '
						 <div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times; &nbsp;</span>
								</button>
								<strong>Sukses!</strong> Barang berhasil dihapus.
						 </div>'
					 );
					 redirect('admin/barang');

		}
	}


	public function artikel()
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
			$data['v_admin']  	= $this->Mcrud->get_data_by_pk('tbl_admin', 'username', $ceks);
			$this->db->order_by('id_artikel', 'DESC');
			$data['v_artikel'] 			= $this->Mcrud->get_data('tbl_artikel');

					$this->load->view('admin/header', $data);
					$this->load->view('admin/artikel/artikel', $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnsimpan'])) {
							$judul 					= htmlentities(strip_tags($_POST['judul']));
							$url 					  = htmlentities(strip_tags($_POST['url']));
							$isi			 			= $_POST['isi'];

							$file_size = 5500; //5 MB
			        $this->upload->initialize(array(
			          "upload_path"   => "./img/artikel/",
			          "allowed_types" => "jpg|jpeg|png|gif",
			          "max_size" => "$file_size"
			        ));

			        if ( ! $this->upload->do_upload('foto'))
			        {
									$error = $this->upload->display_errors('<p>', '</p>');
									$this->session->set_flashdata('msg',
										 '
										 <div class="alert alert-warning alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times; &nbsp;</span>
												</button>
												<strong>Gagal!</strong> '.$error.'.
										 </div>'
									 );
			        }
			         else
			        {
			              $gbr = $this->upload->data();
			              $filename = $gbr['file_name'];
			              $filename = "img/artikel/".$filename;
										$foto 		= preg_replace('/ /', '_', $filename);

										date_default_timezone_set('Asia/Jakarta');
										$tgl = date('d-m-Y');

										$data = array(
											'judul'				=> $judul,
											'isi'	  			=> $isi,
											'gambar'			=> $foto,
											'url'					=> $url,
											'view'				=> 0,
											'tgl_artikel'	=> $tgl
										);
										$this->Mcrud->save_data('tbl_artikel', $data);

										$this->session->set_flashdata('msg',
											 '
											 <div class="alert alert-success alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times; &nbsp;</span>
													</button>
													<strong>Sukses!</strong> Artikel berhasil ditambahkan.
											 </div>'
										 );
			        }

							redirect('admin/artikel');
					}

		}
	}



	public function artikel_edit($id='')
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
			$data['v_admin']  	= $this->Mcrud->get_data_by_pk('tbl_admin', 'username', $ceks);
			$data['v_artikel']  = $this->Mcrud->get_data_by_pk('tbl_artikel', 'id_artikel', $id)->row();

					$this->load->view('admin/header', $data);
					$this->load->view('admin/artikel/artikel_edit', $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnsimpan'])) {
							$judul 					= htmlentities(strip_tags($_POST['judul']));
							$url 					  = htmlentities(strip_tags($_POST['url']));
							$isi			 			= $_POST['isi'];

							$file_size = 5500; //5 MB
			        $this->upload->initialize(array(
			          "upload_path"   => "./img/artikel/",
			          "allowed_types" => "jpg|jpeg|png|gif",
			          "max_size" => "$file_size"
			        ));

							$cek_foto = $data['v_artikel']->gambar;

					if ($_FILES['foto']['error'] <> 4) {
			        if ( ! $this->upload->do_upload('foto'))
			        {
									$error = $this->upload->display_errors('<p>', '</p>');
									$update = "";
							}
			         else
			        {
										unlink("$cek_foto");
			              $gbr = $this->upload->data();
			              $filename = $gbr['file_name'];
			              $filename = "img/artikel/".$filename;
										$foto 		= preg_replace('/ /', '_', $filename);

										$update = "yes";
			        }
					}else{
						$foto   = $cek_foto;
						$update = "yes";
					}

							if ($update = "yes") {
									$data = array(
										'judul'			=> $judul,
										'isi'	  		=> $isi,
										'gambar'		=> $foto,
										'url'			  => $url
									);
									$this->Mcrud->update_data('tbl_artikel', array('id_artikel' => $id), $data);

									$this->session->set_flashdata('msg',
										 '
										 <div class="alert alert-success alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times; &nbsp;</span>
												</button>
												<strong>Sukses!</strong> Artikel berhasil diperbarui.
										 </div>'
									 );
							}else{
									$this->session->set_flashdata('msg',
										 '
										 <div class="alert alert-warning alert-dismissible" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times; &nbsp;</span>
												</button>
												<strong>Gagal!</strong> '.$error.'.
										 </div>'
									 );
							}
							redirect('admin/artikel');
					}

		}
	}


	public function artikel_hapus($id='')
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
					$cek_data = $this->Mcrud->get_data_by_pk('tbl_artikel', 'id_artikel', $id)->row();

					unlink("$cek_data->gambar");
					$this->Mcrud->delete_data_by_pk('tbl_artikel', 'id_artikel', $id);

					$this->session->set_flashdata('msg',
						 '
						 <div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times; &nbsp;</span>
								</button>
								<strong>Sukses!</strong> Artikel berhasil dihapus.
						 </div>'
					 );
					 redirect('admin/artikel');

		}
	}




	public function kontak()
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
			$data['v_admin']  	= $this->Mcrud->get_data_by_pk('tbl_admin', 'username', $ceks);
			$this->db->order_by('id_kontak', 'DESC');
			$data['v_kontak'] 		= $this->Mcrud->get_data('tbl_kontak');

					$this->load->view('admin/header', $data);
					$this->load->view('admin/kontak/kontak', $data);
					$this->load->view('admin/footer');

		}
	}

	public function kontak_hapus($id='')
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{

					$this->Mcrud->delete_data_by_pk('tbl_kontak', 'id_kontak', $id);

					$this->session->set_flashdata('msg',
						 '
						 <div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times; &nbsp;</span>
								</button>
								<strong>Sukses!</strong> Kontak berhasil dihapus.
						 </div>'
					 );
					 redirect('admin/kontak');

		}
	}


	public function member()
	{
		$ceks = $this->session->userdata('username@wp');
		if(!isset($ceks)) {
			redirect('admin/login');
		}else{
			$data['v_admin']  	= $this->Mcrud->get_data_by_pk('tbl_admin', 'username', $ceks);
			$this->db->order_by('id_member', 'DESC');
			$data['v_member'] 		= $this->Mcrud->get_data('tbl_member');

					$this->load->view('admin/header', $data);
					$this->load->view('admin/member/member', $data);
					$this->load->view('admin/footer');

		}
	}

}
