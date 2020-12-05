<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}

	public function index()
	{
		if ($this->uri->segment(4) == 'view') {
			$kd_produk = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere1('tbl_produk', 'kd_produk', $kd_produk, 'DESC', 'kd_produk')->row();
			$data['kd_jenis'] = $this->MSudi->GetData('tbl_jenis_produk');
			$data['jenis_produk'] = $this->MSudi->GetData('tbl_jenis_produk');
			$data['detail']['kd_produk'] = $tampil->kd_produk;
			$data['detail']['kd_jenis_produk'] = $tampil->kd_jenis_produk;
			$data['detail']['nama_produk'] = $tampil->nama_produk;
			$data['detail']['foto'] = $tampil->foto;
			$data['detail']['keterangan'] = $tampil->keterangan;
			$data['content'] = 'VFormUpdateProduk';
		} else {
			if (isset($_GET['kd_kategori'])) {
				$data['DataJenis'] = $this->MSudi->GetDataWhere('tbl_jenis_produk', 'kd_kategori', $_GET['kd_kategori'])->result();
				$join = "tbl_jenis_produk.kd_jenis = tbl_produk.kd_jenis_produk";

				$data['DataProduk'] = $this->MSudi->GetDataJoinWhere('tbl_produk', 'tbl_jenis_produk', $join, 'tbl_jenis_produk.kd_kategori', $_GET['kd_kategori'])->result();
			} else {
				$data['DataJenis'] = $this->MSudi->GetData('tbl_jenis_produk');
				$join = "tbl_jenis_produk.kd_jenis = tbl_produk.kd_jenis_produk";

				$data['DataProduk'] = $this->MSudi->GetDataJoinWithOrder('tbl_produk', 'tbl_jenis_produk', $join, 'kd_produk', 'desc')->result();
			}


			$data['DataKategori'] = $this->MSudi->GetData('tbl_kategori');


			$data['DataJenisProduk'] = $this->MSudi->GetData('tbl_jenis_produk');
			$data['DataKategori'] = $this->MSudi->GetData('tbl_kategori');
			$data['content'] = 'VHome';
			// if ($this->uri->segment(4) == 'view') {
			// $kd_slide = $this->uri->segment(3);
			$data['slide'] = $this->MSudi->GetData('tbl_slide');
			// } else {
			// 	$data['DataSlide'] = $this->MSudi->GetData('tbl_slide');
			// }
			// $data['content'] = 'VSlide';
		}


		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VAbout()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['DataJenisProduk'] = $this->MSudi->GetData('tbl_jenis_produk');
		$data['DataKategori'] = $this->MSudi->GetData('tbl_kategori');
		$data['slide'] = $this->MSudi->GetData('tbl_slide');
		$data['content'] = 'VAbout';
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function VProduct()
	{
		if ($this->uri->segment(4) == 'view') {
			$kd_produk = $this->uri->segment(3);
			$tampil = $this->MSudi->GetDataWhere('tbl_produk', 'kd_produk', $kd_produk)->row();
			$data['kd_jenis'] = $this->MSudi->GetData('tbl_jenis_produk');
			$data['jenis_produk'] = $this->MSudi->GetData('tbl_jenis_produk');
			$data['detail']['kd_produk'] = $tampil->kd_produk;
			$data['detail']['kd_jenis_produk'] = $tampil->kd_jenis_produk;
			$data['detail']['nama_produk'] = $tampil->nama_produk;
			$data['detail']['foto'] = $tampil->foto;
			$data['detail']['keterangan'] = $tampil->keterangan;
			$data['content'] = 'VFormUpdateProduk';
		} else {
			if (isset($_GET['kd_kategori'])) {
				$data['DataJenis'] = $this->MSudi->GetDataWhere('tbl_jenis_produk', 'kd_kategori', $_GET['kd_kategori'])->result();
				$join = "tbl_jenis_produk.kd_jenis = tbl_produk.kd_jenis_produk";

				$data['DataProduk'] = $this->MSudi->GetDataJoinWhere('tbl_produk', 'tbl_jenis_produk', $join, 'tbl_jenis_produk.kd_kategori', $_GET['kd_kategori'])->result();
			} else {
				$data['DataJenis'] = $this->MSudi->GetData('tbl_jenis_produk');
				$join = "tbl_jenis_produk.kd_jenis = tbl_produk.kd_jenis_produk";

				$data['DataProduk'] = $this->MSudi->GetDataJoin('tbl_produk', 'tbl_jenis_produk', $join)->result();
			}


			$data['DataKategori'] = $this->MSudi->GetData('tbl_kategori');
			$data['slide'] = $this->MSudi->GetData('tbl_slide');
			$data['content'] = 'VProduct';
		}


		$this->load->view('welcome_message', $data);
	}



	public function VContact()
	{
		// if ($this->session->userdata('Login')) {
		// 	$data['nama'] = $this->session->userdata('nama');
		// 	$data['level'] = $this->session->userdata('level');

		$data['content'] = 'VContact';
		$data['DataKategori'] = $this->MSudi->GetData('tbl_kategori');
		$data['slide'] = $this->MSudi->GetData('tbl_slide');
		if (isset($_GET['success'])) {
			$data['success'] = 'asdasd';
		}
		$this->load->view('welcome_message', $data);
		// } else {
		// 	redirect(site_url('Login'));
		// }
	}

	public function AddDataContact()
	{
		$add['nama'] = $this->input->post('nama');
		$add['perusahaan'] = $this->input->post('perusahaan');
		$add['email'] = $this->input->post('email');
		$add['number'] = $this->input->post('number');
		$add['subject'] = $this->input->post('subject');
		$add['message'] = $this->input->post('message');
		$this->MSudi->AddData('tbl_quotation', $add);
		redirect(site_url('Welcome/VContact') . '?success=true');
	}
	public function VProductDetail()
	{
		$id = $_GET['id'];
		$data['DataKategori'] = $this->MSudi->GetData('tbl_kategori');
		$join = "tbl_jenis_produk.kd_jenis = tbl_produk.kd_jenis_produk";
		$data['DetailProduk'] = $this->MSudi->GetDataJoinWhere('tbl_produk', 'tbl_jenis_produk', $join, 'tbl_produk.kd_produk', $id)->row();
		$kdKategori = $data['DetailProduk']->kd_kategori;
		$data['DetailKategori'] = $this->MSudi->GetDataWhere('tbl_kategori', 'kd_kategori', $kdKategori)->row();
		$this->load->view('VProductDetail', $data);
	}
}
