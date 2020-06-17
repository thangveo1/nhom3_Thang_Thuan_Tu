<?php 
	class Database {

	private $conn;
	private $result;

	public function connect() {
		$this->conn = mysqli_connect( 'localhost', 'root' , '' , 'qly_phongkham' );

		if(!$this->conn) {
			echo 'Không thể kết nối Database';
		} else {
			mysqli_set_charset( $this->conn, 'utf8' );
			date_default_timezone_set('Asia/Ho_Chi_Minh');
		}
		return $this->conn;
	}
	public function query($sql)
	{
		if(!$this->result = mysqli_query($this->conn,$sql))
		{
			echo "error query";
		}
		return $this->result; 
	}
	public function numrow()
	{
		return mysqli_num_rows($this->result);
	}
	public function selectall_cf()
	{
		if($this->numrow()>0)
			{
				while($row = mysqli_fetch_assoc($this->result))
				{
					$data[]=$row;
				}
			}else
			{
				$data=0;
			}
			return $data;

		}


	public function select_cf()
	{
		if($this->numrow()>0)
			{
				return mysqli_fetch_assoc($this->result);
			}else
			{
				return 0;
			}
	}

	public function login($name,$pass)
	{
		$sql="SELECT * FROM nhanvien WHERE name='".$name."' AND pass='".$pass."'";
		$this->query($sql);
		return $this->select_cf();
	}

	public function benh_nhan()
	{
		$sql = "SELECT * FROM benhnhan ORDER BY id DESC";
		$this->query($sql);
		return $this->selectall_cf();
	}
	public function nhan_vien()
	{
		$sql = "SELECT * FROM nhanvien ORDER BY id DESC";
		$this->query($sql);
		return $this->selectall_cf();
	}

	public function check_phone($phone)
	{
		$sql = "SELECT * FROM benhnhan WHERE phone = '".$phone."'";
		$this->result = $this->query($sql);
		return $this->select_cf();
	}

	public function add_benhnhan($name,$phone,$diachi,$cmnd,$ngay_sinh,$gioi_tinh,$ngay_taikham,$ghi_chu,$ngay_kham)
	{
		$sql = "INSERT INTO benhnhan (id, name, phone, diachi, cmnd, ngay_sinh, gioi_tinh, ngay_kham, ngay_taikham, ghi_chu) 
		VALUES 
		(NULL, '".$name."', '".$phone."','".$diachi."', '".$cmnd."', '".$ngay_sinh."', '".$gioi_tinh."', '".$ngay_kham."', '".$ngay_taikham."', '".$ghi_chu."')";
		return $this->query($sql);
	}

	public function add_thuoc($name, $soluong, $donvitinh, $gianhap, $giaban, $tacdung){
		$sql = "INSERT INTO thuoc (id, name, soluong, donvitinh, gianhap, giaban, tacdung) VALUES (NULL, '".$name."', '".$soluong."', '".$donvitinh."', '".$gianhap."', '".$giaban."', '".$tacdung."');";
		return $this->query($sql);
	}
	public function thongtinbenhnhan($id){
		$sql = "SELECT * FROM thuoc WHERE id ='".$id."'";
		$this->result = $this->query($sql);
		return $this->select_cf();
	}
	public function editbenhnhan($id, $name, $phone, $diachi, $cmnd, $ngay_sinh, $gioi_tinh, $ngay_kham, $ngay_taikham, $ghi_chu){
		$sql="UPDATE benhnhan SET name = '".$name."', phone = '".$phone."', diachi = '".$diachi."', cmnd = '".$cmnd."', ngay_sinh = '".$ngay_sinh."',gioi_tinh = '".$gioi_tinh."',ngay_kham = '".$ngay_kham."',  ngay_taikham = '".$ngay_taikham."' WHERE benhnhan.id = '".$id."'";
		return  $this->query($sql);
	}

	public function xemkhothuoc($page, $count){
		$sql ="SELECT * FROM thuoc LIMIT ".($page-1)*$count.", $count";
		$this->result = $this->query($sql);
		return $this->selectall_cf();
	}
	public function demtongthuoc(){
		$sql ="SELECT * FROM thuoc";
		$this->result = $this->query($sql);
		return $this->numrow();
	}

	public function thongtinthuoc($id){
		$sql = "SELECT * FROM thuoc WHERE id ='".$id."'";
		$this->result = $this->query($sql);
		return $this->select_cf();
	}

	public function editthuoc($id,$name, $soluong, $donvitinh, $gianhap, $giaban, $tacdung){
		$sql ="UPDATE thuoc SET name = '".$name."', soluong = '".$soluong."', donvitinh = '".$donvitinh."', gianhap = '".$gianhap."', giaban = '".$giaban."', tacdung = '".$tacdung."' WHERE thuoc.id = '".$id."'";
		return  $this->query($sql);
	}
	public function tim_benhnhan($id){
		$sql="SELECT *FROM benhnhan WHERE phone='".$id."'or cmnd='".$id."'";
		$this->result = $this->query($sql);
		return $this->select_cf();
	}
	public function xuat_dichvu()
	{
		$sql = "SELECT * FROM dichvu ";
		$this->result = $this->query($sql);
		return $this->selectall_cf();
	}
	public function xuat_dichvu_con($id)
	{
		$sql = "SELECT * FROM dichvu_con WHERE id_dichvu = '".$id."'";
		$this->result = $this->query($sql);
		return $this->selectall_cf();
	}
	public function select_bn_id($id)
	{
		$sql = "SELECT * FROM benhnhan WHERE id = '".$id."'";
		$this->result = $this->query($sql);
		return $this->select_cf();
	}
	public function select_thuoc_goiy($name)
	{
		$sql = "SELECT * FROM thuoc WHERE name like '%".$name."%'";
		$this->result = $this->query($sql);
		return $this->selectall_cf();
	}

	public function insert_donkham($id_benhnhan,$id_nhanvien,$name,$ghichu,$ngay_kham,$tai_kham,$id_dichvu,$tenthuoc,$soluong,$uudai)
	{
		$sql = "INSERT INTO donthuoc_tong(id, id_benhnhan, id_nhanvien, name, ghichu, ngay_kham, tai_kham, id_dichvu, tientruoc_uudai, tiensau_uudai, uudai) VALUES (NULL,'".$id_benhnhan."','".$id_nhanvien."','".$name."','".$ghichu."','".$ngay_kham."','".$tai_kham."','".$id_dichvu."',0,0,'".$uudai."')";
		 $this->query($sql);

		 $sql = "SELECT id from donthuoc_tong WHERE id_benhnhan = $id_benhnhan AND id_nhanvien = $id_nhanvien AND ngay_kham = '".$ngay_kham."'";
		 $this->result = $this->query($sql);
		$id =  $this->select_cf();



		$sql = "INSERT INTO donthuoc_chitiet (id, id_donthuoc, id_thuoc, soluong, gia)VALUES";
		// foreach ($tenthuoc as $value) {
		// 	$sql = $sql.' (NULL, "1", "'.$value.'","'.$soluong[$value].'" , "2"),';
		// }


		for ($i=0; $i < count($tenthuoc); $i++) { 
			if($i==count($tenthuoc)-1){
				$sql = $sql.' (NULL, '.$id['id'].', "'.$tenthuoc[$i].'","'.$soluong[$tenthuoc[$i]].'" , (SELECT giaban FROM thuoc WHERE id = "'.$tenthuoc[$i].'") )';
			}else{
				$sql = $sql.' (NULL, '.$id['id'].', "'.$tenthuoc[$i].'","'.$soluong[$tenthuoc[$i]].'" , (SELECT giaban FROM thuoc WHERE id = "'.$tenthuoc[$i].'") ),';
			}
		}
		  $this->query($sql);

		$sql = 'UPDATE donthuoc_tong SET tientruoc_uudai=(SELECT SUM(gia*soluong) FROM donthuoc_chitiet WHERE id_donthuoc="'.$id['id'].'"),tiensau_uudai=(((SELECT SUM(gia*soluong) FROM donthuoc_chitiet WHERE id_donthuoc="'.$id['id'].'")/100)*(100-'.$uudai.')) WHERE id="'.$id['id'].'"';
		echo $sql;
		return  $this->query($sql);

	}
		public function thongke_thuoc($ngaybd,$ngaykt){
		$sql="SELECT ROW_NUMBER() OVER (order By B.id_thuoc) as stt, B.id_thuoc, SUM(B.soluong) as soluong, C.name FROM donthuoc_tong A inner join donthuoc_chitiet B on B.id_donthuoc=A.id inner join thuoc C on C.id = B.id_thuoc WHERE ngay_kham BETWEEN '".$ngaybd."' and '".$ngaykt."' GROUP BY B.id_thuoc, C.name";
			$this->result = $this->query($sql);
			return $this->selectall_cf();

	}
	public function thongke_donthuoc($ngaybd,$ngaykt){
		$sql="SELECT ROW_NUMBER() OVER (order By ngay_kham) as stt, SUBSTRING(ngay_kham,1,10) as ngay_kham, COUNT(*) as soluong FROM donthuoc_tong WHERE ngay_kham  BETWEEN '".$ngaybd."' and '".$ngaykt."' GROUP BY SUBSTRING(ngay_kham,1,10)";
			$this->result = $this->query($sql);
			return $this->selectall_cf();

	}
}
 ?>
