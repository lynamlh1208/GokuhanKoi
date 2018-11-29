<?php 

require_once __DIR__. "/autoload/autoload.php";
$user = $db->fetchID("users",intval($_SESSION['name_id']));

if($_SERVER["REQUEST_METHOD"] == "POST")

{
	$data=
	[
		'amount' => $_SESSION['total'],
		'users_id' => $_SESSION['name_id'],
		'note' => postInput("note")
	];

	$idtran = $db->insert("transaction",$data);
	if($idtran > 0)
	{
		foreach ($_SESSION['cart'] as $key => $value) {
			$data2 = 
			[
				'transaction_id' 	=> $idtran,
				'product_id' 		=> $key,
				'qty' 				=> $value['qty'],
				'price' 			=> $value['price']
			];

			$id_insert = $db->insert("orders",$data2);
		}

		$_SESSION['success'] = " Lưu thông tin đơn hàng thành công";
		header("location: thong-bao.php");
	}
}
?>	
<?php  require_once __DIR__. "/layouts/header.php"; ?>
<div class="col-md-9 ">

	<section class="box-main1">
		<h3 class="title-main"><a href=""> Thanh toán đơn hàng</a> </h3>
		<form action="" method="POST"  class="form-horizontal formcustome" role="form" style="margin-top: 20px">
			<div class="form-group">
				<label class="col-md-2 col-md-offset-1" style="margin-top: 10px;">Tên thành viên</label>
				<div class="col-md-8">
					<input type="text" readonly=""name="name" placeholder="Nguyễn Thanh Tâm" class="form-control" value="<?php echo $user['name'] ?>">

				</div>	
			</div>
			<div class="form-group">
				<label class="col-md-2 col-md-offset-1">Email</label>
				<div class="col-md-8">
					<input type="email" readonly=""name="email" placeholder="tamntpd01916@fpt.edu.vn" class="form-control" value="<?php echo $user['email'] ?>">

				</div>	
			</div>
			<div class="form-group">
				<label class="col-md-2  col-md-offset-1">Số điện thoại</label>
				<div class="col-md-8">
					<input type="number" readonly="" name="phone" placeholder="0964614231" class="form-control" value="<?php echo $user['phone'] ?>">
				</div>	
			</div>
			<div class="form-group">
				<label class="col-md-2 col-md-offset-1">Địa chỉ</label>
				<div class="col-md-8">
					<input type="text" readonly=""name="address" placeholder="25 Phú lộc 7 , Đà Nẵng" class="form-control" value="<?php echo $user['address'] ?>">
					
				</div>	
			</div>
			<div class="form-group">
				<label class="col-md-2 col-md-offset-1">Số tiền thanh toán</label>
				<div class="col-md-8">
					<input type="text" readonly=""name="total"  class="form-control" value="<?php echo formatPrice($_SESSION['total']) ?>">
					
				</div>	
			</div>
			<div class="form-group">
				<label class="col-md-2 col-md-offset-1">Ghi chú </label>
				<div class="col-md-8">
					<input type="text" name="note" placeholder="..." class="form-control" value="">
					
				</div>				
			</div>
			<div class="form-group" style="margin-left: 58px;">
				<a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=cuhanh110890@gmail.com&product_name=(Mã đơn đặt hàng)&price=100000&return_url=http://localhost:8089/GokuhanKoi/thanh-toan.php&comments=Thanks"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
			</div>


			<button class="btn btn-success col-md-2 col-md-offset-5" style="margin-bottom: 20px;"> Xác Nhận</button>
		</form> 
		<!-- nội dung -->
	</section>
</div>
<?php require_once __DIR__. "/layouts/footer.php"; ?> ?>

