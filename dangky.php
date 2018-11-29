<?php 

require_once __DIR__. "/autoload/autoload.php";
if(isset($_SESSION['name_id']))
{
   echo "<script>alert('Đăng đã có tài khoản nên không thể vào trang này! ');location.href='index.php'</script>";
}
$conn = mysqli_connect("localhost", "root","","gokuhankoi");
mysqli_set_charset($conn,"utf8");
//xử lý
$data = 
[
	'name'  	=> postInput("name"),
	'email' 	=> postInput("email"),
	'password' 	=> (postInput("password")),
	'address' 	=> postInput("address"),
	'phone' 	=> postInput("phone")

];
$error = [];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	//Tiến thành đăng ký
	if($data['name'] == '')
	{
		$error['name'] = " Tên không được để trống !";
	}


	if($data['email'] == '')
	{
		$error['email'] = " Email không được để trống !";
	}
	else
	{
		$is_check = $db->fetchOne("users"," email = '".$data['email']."' ");
		if($is_check != NULL)
		{
			$error['email'] = "Email đã tồn tại , Mời bạn nhập lại!";
		}
	}

	if($data['phone'] == '')
	{
		$error['phone'] = " Phone không được để trống !";
	}
	
	if($data['password'] == '')
	{
		$error['password'] = " Password không được để trống !";
	}
	else{
		$data['password'] = MD5(postInput("password"));
	}

	if($data['address'] == '')
	{
		$error['address'] = " Địa chỉ không được để trống !";
	}

	//kiểm tra mảng error

	if(empty($error))
	{
		$idinert = $db->insert("users",$data);
		if($idinert > 0)
		{
			$_SESSION['success'] = " Đăng ký thành công! Mời bạn đăng nhập !!";
			header("location: dangnhap.php");
		}
		else{
			
		}
	}
}
else
{

}

?>
<?php  require_once __DIR__. "/layouts/header.php"; ?>
<div class="col-md-9 bor">

	<section class="box-main1">
		<h3 class="title-main"><a href=""> Đăng ký thành viên</a> </h3>
		<form action="" method="POST"  class="form-horizontal formcustome" role="form" style="margin-top: 20px">
			<div class="form-group">
				<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Tên thành viên</label>
				<div class="col-md-8">
					<input type="text" name="name" placeholder="Nguyễn Thanh Tâm" class="form-control" value="<?php echo $data['name'] ?>">
					<?php if (isset($error['name'])): ?>
						<p class="text-danger"></p><?php echo $error['name'] ?></p>					
					<?php endif ?>
				</div>	
			</div>
			<div class="form-group">
				<label class="col-md-2 col-md-offset-1">Email</label>
				<div class="col-md-8">
					<input type="email" name="email" placeholder="tamntpd01916@fpt.edu.vn" class="form-control" value="<?php echo $data['email'] ?>">
					<?php if (isset($error['email'])): ?>
						<p class="text-danger"></p><?php echo $error['email'] ?></p>					
					<?php endif ?>
				</div>	
			</div>
			<div class="form-group">
				<label class="col-md-2 col-md-offset-1">Mật Khẩu</label>
				<div class="col-md-8">
					<input type="password" name="password" placeholder="********" class="form-control" value="<?php echo $data['password'] ?>">
					<?php if (isset($error['password'])): ?>
						<p class="text-danger"></p><?php echo $error['password'] ?></p>					
					<?php endif ?>
				</div>	
			</div>

			<div class="form-group">
				<label class="col-md-2 col-md-offset-1">Số điện thoại</label>
				<div class="col-md-8">
					<input type="number" name="phone" placeholder="0964614231" class="form-control" value="<?php echo $data['phone'] ?>">
					<?php if (isset($error['phone'])): ?>
						<p class="text-danger"></p><?php echo $error['phone'] ?></p>					
					<?php endif ?>
				</div>	
			</div>

			<div class="form-group">
				<label class="col-md-2 col-md-offset-1">Địa chỉ</label>
				<div class="col-md-8">
					<input type="text" name="address" placeholder="25 Phú lộc 7 , Đà Nẵng" class="form-control" value="<?php echo $data['address'] ?>">
					<?php if (isset($error['address'])): ?>
						<p class="text-danger"></p><?php echo $error['address'] ?></p>					
					<?php endif ?>
				</div>	
			</div>

			<button class="btn btn-success col-md-2 col-md-offset-5" style="margin-bottom: 20px;"> Đăng Ký</button>
		</form> 
		<!-- nội dung -->
	</section>
</div>
<?php require_once __DIR__. "/layouts/footer.php"; ?> ?>

