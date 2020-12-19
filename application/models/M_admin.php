<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function getviewData_Product()
	{
		$result = $this->db->get('tb_barang');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function tampil_data()
	{
		return $this->db->get('tb_barang');
	}

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tambah_barang($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_barang($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function detail_product($kode_barang)
	{
		$result = $this->db->where('kode_barang', $kode_barang)->get('tb_barang');

		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	//menampilkan invoice atau detail pesanan di admin
	public function invoice()
	{
		date_default_timezone_set('Asia/Makassar');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$kode_pos = $this->input->post('kode_pos');
		$email = $this->input->post('email');
		$nophone = $this->input->post('nophone');
		$comment = $this->input->post('comment');
		$shipping = $this->input->post('shipping');
		$payment = $this->input->post('payment');

		$invoice = array(
			'name' 			=> $name,
			'address' 		=> $address,
			'city' 			=> $city,
			'kode_pos'		=> $kode_pos,
			'email' 		=> $email,
			'nophone' 		=> $nophone,
			'comment' 		=> $comment,
			'shipping'		=> $shipping,
			'payment'		=> $payment,
			'tgl_pesan' 	=> date('Y-m-d H:i:s'),
			'batas_bayar'	=> date(
				'Y-m-d H:i:s',
				mktime(
					date('H'),
					date('i'),
					date('s'),
					date('m'),
					date('d') + 1,
					date('Y')
				)
			),
		);

		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_invoice'		=> $id_invoice,
				'kode_barang'		=> $item['id'],
				'nama_barang'		=> $item['name'],
				'jumlah'			=> $item['qty'],
				'harga'				=> $item['price'],
			);
			$this->db->insert('tb_pesanan', $data);
		}
		return true;
	}

	// public function getInvoice_Id($id_invoice)
	// {
	// 	$result = $this->db->where('id_invoice', $id_invoice)->get('tb_invoice');
	// 	if ($result->num_rows() > 0) {
	// 		return $result->row();
	// 	} else {
	// 		return false;
	// 	}
	// }

	public function getviewPesanan_Id($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function getviewData()
	{
		$result = $this->db->get('tb_invoice');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function getviewData_User()
	{
		$result = $this->db->get('tb_user');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}
}
