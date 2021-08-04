<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcrud extends CI_Model {

	public static function tgl_id($date)
	{
			$str = explode('-', $date);
			$bulan = array(
				'01' => 'Januari',
				'02' => 'Februari',
				'03' => 'Maret',
				'04' => 'April',
				'05' => 'Mei',
				'06' => 'Juni',
				'07' => 'Juli',
				'08' => 'Agustus',
				'09' => 'September',
				'10' => 'Oktober',
				'11' => 'November',
				'12' => 'Desember',
			);
			return $str['2'] . " " . $bulan[$str[1]] . " " .$str[0];
	}

	public function get_data($tbl)
	{
			$this->db->from($tbl);
			$query = $this->db->get();

			return $query;
	}

	public function get_data_by_pk($tbl, $where, $id)
	{
				$this->db->from($tbl);
				$this->db->where($where,$id);
				$query = $this->db->get();

				return $query;
	}

	public function get_data_join($tbl, $tbl2, $join)
	{
			$this->db->from($tbl);
			$this->db->join($tbl2, "$tbl2.$join=$tbl.$join");
			$query = $this->db->get();

			return $query;
	}

	public function get_data_join_order_limit($tbl, $tbl2, $join, $id, $order, $limit)
	{
			$this->db->from($tbl);
			$this->db->join($tbl2, "$tbl2.$join=$tbl.$join");
			$this->db->order_by("$tbl.$id", "$order");
			$this->db->limit($limit);
			$query = $this->db->get();

			return $query;
	}

	public function get_slide()
	{
			$this->db->from('tbl_slide');
			$this->db->order_by('id_slide', 'ASC');
			$query = $this->db->get();

			return $query;
	}

	public function save_data($tbl, $data)
	{
		$this->db->insert($tbl, $data);
		return $this->db->insert_id();
	}

	public function update_data($tbl, $where, $data)
	{
		$this->db->update($tbl, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_data_by_pk($tbl, $where, $id)
	{
		$this->db->where($where, $id);
		$this->db->delete($tbl);
	}


	function view_perdata($tbl, $desc, $num, $offset)
	{
		$this->db->order_by($desc, 'DESC');
		$query = $this->db->get($tbl, $num, $offset);
		return $query;
	}

	function view_barang_cari($num, $offset, $cari)
	{
		$query =$this->db->query("SELECT * FROM tbl_barang
															WHERE judul like '%$cari%'
															ORDER BY id_barang DESC Limit $num $offset");
		return $query;
	}


}
