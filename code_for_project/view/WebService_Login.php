
<?php
if(isset($_GET['email'],$_GET['pass'])){
	$email =  $_GET['email'];       
	$pass = $_GET['pass'];
	
        //tạo mạng users để lưu thông tin toàn bộ user trong db
	$users = array();
	require_once("connectMysql.php");
	//truy vấn lấy toàn bộ thông tin trong bảng users
	$sql = "SELECT * FROM account as acc WHERE acc.Account_Pass = '".md5($pass)."' and acc.Account_Email = '".$email."' ";
	$query = mysqli_query($conn,$sql);
	if(mysqli_num_rows($query)>0)
	{
		while ($user = mysqli_fetch_assoc($query) ){
			$user['Account_Pass'] = '';
			$users[] = array('account' => $user);
		}
        // trả ra dữ liệu dưới dạng json

		header('Content-type: application/json; charset=utf-8');
		echo json_encode(array('Accounts'=>$users),JSON_UNESCAPED_UNICODE);
	}
	else{
		echo "Không có dữ liệu trả về";
	}

}else{
	echo "Không có dữ liệu trả về";
}
?>
