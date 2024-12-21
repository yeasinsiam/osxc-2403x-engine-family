<?php
class MY_Model extends CI_Model
{
	/*--- FOR WEB SETTING ---*/
	function get_website($fld_id, $tabel)
	{
		$this->db->order_by($fld_id, "desc");
		$this->db->limit(1);
		$query = $this->db->get($tabel);
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	function profiledata($fld_email, $email, $tabel)
	{

		$this->db->where($fld_email, $email);
		$this->db->limit(1);
		$query = $this->db->get($tabel);
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	function get_list($fld_id, $table)
	{
		$this->db->order_by($fld_id, "DESC");
		$query = $this->db->get($table);
		if ($query->num_rows() == '') {
			return false;
		} else {
			return $query->result();
		}
	}

	function get_package_expired($fld_id, $table)
	{
		$this->db->select("act_id,act_expired");
		$this->db->order_by($fld_id, "desc");
		$this->db->where('act_status', '0');
		$query = $this->db->get($table);
		$data = $query->result();
		foreach ($data as $value) {
			$expired = $value->act_expired;
			$id = $value->act_id;
			$date = date('Y-m-d h:i:s');
			if ($expired <= $date) {
				$updatedata = array('act_status' => '1');
				$this->db->where($fld_id, $id);
				$query = $this->db->update($table, $updatedata);
			}
		}
	}

	function get_package_activate($fld_id, $table)
	{
		$date = date('Y-m-d h:i:s');
		$this->db->select("act_id,cust_id,act_expired");
		$this->db->order_by($fld_id, "desc");
		$this->db->where('act_status', '0');
		$this->db->where('act_expired <=', $date);
		$query = $this->db->get($table);

		$data = $query->result();
		foreach ($data as $value) {
			$expired = $value->act_expired;
			$id = $value->act_id;
			$cust_id = $value->cust_id;
			$date = date('Y-m-d h:i:s');
			$pkg_sku = (rand(0, strtotime(date('Y-m-d H:i:s'))));

			$package = $this->package('tbl_packages');
			$customer = $this->customer($cust_id, 'tbl_members');
			$purchage_order = array(
				'reference_no' => $pkg_sku,
				'product_id' => $package->pkg_id,
				'buyer_name' => $customer->cust_fname . ' ' . $customer->cust_lname,
				'buyer_email' => $customer->cust_email,
				'payment_status' => 'succeeded',
				'paid_amount' => '0',
				'paid_amount_currency' => 'usd'
			);
			$order_id = $this->package_order_confirmed($purchage_order, 'tbl_orders');
			$pkgExpired = date('Y-m-d H:i:s', strtotime('+' . $package->pkg_validity . ' days', strtotime($date)));
			$works = $this->get_posts($pkgExpired, $package->pkg_allowed_quantity, $cust_id, 'tbl_posts');
			if (!empty($works)) {
				$countworks = count($works);
				foreach ($works as $worksinfo) {
					$GET_id = $worksinfo->blog_id;
					$worksData = array('blog_expired' => $pkgExpired);
					$workid = $this->update_package_status('blog_id', $GET_id, $worksData, 'tbl_posts');
				}
			} else {
				$countworks = '0';
			}

			$data_activate = array(
				'pkg_id' 	 => $package->pkg_id,
				'cust_id' 	 => $cust_id,
				'act_validity' => $package->pkg_validity,
				'act_post' 	 => $package->pkg_allowed_quantity - $countworks,
				'act_price'  => '0',
				'act_status' => '0',
				'act_created' => $date,
				'act_expired' => $pkgExpired,
			);

			$pkgId = $this->save($data_activate, 'tbl_package_activate');
			$updatedata = array('act_status' => '1');
			$this->db->where($fld_id, $id);
			$query = $this->db->update($table, $updatedata);
		}
	}


	function package($tabel)
	{
		$this->db->select("pkg_id,pkg_name,pkg_allowed_quantity,pkg_validity,pkg_price");
		$this->db->where('pkg_price', '0');
		$this->db->limit(1);
		$query = $this->db->get($tabel);
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	function customer($cust_id, $tabel)
	{
		$this->db->select("cust_fname,cust_lname,cust_email");
		$this->db->where('cust_id', $cust_id);
		$this->db->limit(1);
		$query = $this->db->get($tabel);
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}
	function package_order_confirmed($data, $table)
	{
		$insert = $this->db->insert($table, $data);
		return $insert ? $this->db->insert_id() : false;
	}

	function get_posts($pkgExpired, $limit, $activeMember, $table)
	{
		$date = date('Y-m-d h:i:s');
		$this->db->order_by('blog_id', 'DESC');
		$this->db->where('blog_posted_by', $activeMember);
		$this->db->where('blog_expired <=', $pkgExpired);
		$this->db->limit($limit);
		$query = $this->db->get($table);
		if ($query->num_rows() != 0) return $query->result();
		else return false;
	}
	function update_package_status($fld_oid, $orderid, $status_data, $table)
	{
		$this->db->where($fld_oid, $orderid);
		$query = $this->db->update($table, $status_data);
		if ($query) return true;
		else return false;
	}
	function save($data, $table)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
}
