<?php ob_start(); ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thông tin cá nhân</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
	<tbody>
		<tr>
			<td>MSSV</td>
			<td>Họ Tên</td>
			<td>Ngày Sinh</td>
			<td>Địa chỉ</td>
			<td>SĐT</td>
			<td>Mã Khoa</td>
		</tr>
	<?php
		$query = "select * from SINHVIEN where MaSV='".$_SESSION["masv"]."'";
		$con=mysqli_connect("localhost","root","","qlsinhvien") or die("Khong the ket noi den Server");
		mysqli_set_charset($con,'utf8'); 
		$result=mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		echo '<tr><td>'.$row["MaSV"].'</td><td>'.$row["HoSV"].' '.$row["TenSV"].'</td><td>'.$row["NgaySinh"].'</td><td>'.$row["DiaChi"].'</td><td>'.$row["SDT"].'</td><td>'.$row["MaKH"].'</td></tr>';


	?>
	</tbody>
</table>
</body>
</html>
<?php ob_flush(); ?>