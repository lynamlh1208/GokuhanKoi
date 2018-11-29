<?php 

require_once __DIR__. "/autoload/autoload.php"; 


?>
<?php  require_once __DIR__. "/layouts/header.php"; ?>
<style type="text/css">
 
.w3l_banner_nav_right{
    float:right;
    width:70%;
}
/*-- mail --*/
.agileinfo_mail_grid_left ul li{
    display:inline-block;
    font-size:1em;
    color:#212121;
    text-transform:uppercase;
    font-weight: bold;
}
.agileinfo_mail_grid_left ul li i{
    font-size:2em;
    color:#FA1818;
}
.agileinfo_mail_grid_left ul li span{
    display: block;
    font-weight: 300;
    font-size: 0.9em;
    letter-spacing: 1px;
}
.agileinfo_mail_grid_left ul li:first-child{
    padding-right:1.5em;
}
.agileinfo_mail_grid_left ul li:last-child{
    padding-left:1.5em;
    border-left:1px solid #999;
}
.agileinfo_mail_grids {
    margin: 3em 0 0;
}
.agileinfo_mail_grid_left ul:nth-child(2){
    margin:3em 0;
}
.agileinfo_mail_grid_left ul li a{
    text-decoration:none;
    color:#212121;
}
.agileinfo_mail_grid_left ul li a:hover{
    color:#FA1818;
}
.agileinfo_mail_grid_right input[type="text"],.agileinfo_mail_grid_right input[type="email"],.agileinfo_mail_grid_right textarea{
    outline:none;
    padding:10px;
    font-size:14px;
    color:#212121;
    background:#f5f5f5;
    width:100%;
    border:1px solid #E6E6E6;
}
.agileinfo_mail_grid_right input[type="text"]:nth-child(2),.agileinfo_mail_grid_right input[type="email"]{
    margin:1em 0 0;
}
.agileinfo_mail_grid_right textarea{
    min-height: 200px;
    margin: 1em 1.1em;
    width: 95.9% !important;
}
.agileinfo_mail_grid_right input[type="submit"],.agileinfo_mail_grid_right input[type="reset"]{
    outline: none;
    padding: 10px 0;
    font-size: 14px;
    color: #fff;
    background: #84C639;
    width: 46.6%;
    border: none;
    text-transform: uppercase;
    margin-left: 1.1em;
}
.agileinfo_mail_grid_right input[type="submit"]:hover,.agileinfo_mail_grid_right input[type="reset"]:hover{
    background:#212121;
}
</style>
<div class="w3l_banner_nav_right">
<!-- mail -->
        <div class="mail">
            <h3>Liên Hệ</h3>
<!---728x90--->

            <div class="agileinfo_mail_grids">
                <div class="col-md-4 agileinfo_mail_grid_left">
                    <ul>
                        <li><i class="fa fa-home" aria-hidden="true"></i></li>
                        <li>Địa chỉ<span>Suối Tiên,Quế Sơn.</span></li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                        <li>Email<span>abc@fpt.edu.vn</a></span></li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                        <li>Số Điện Thoại<span>0971 717 989</span></li>
                    </ul>
                </div>
                <div class="col-md-8 agileinfo_mail_grid_right">
                    <form action="#" method="post">
                        <div class="col-md-6 wthree_contact_left_grid">
                            <input type="text" name="Name" value="Họ và Tên*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="">
                            <input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                        </div>
                        <div class="col-md-6 wthree_contact_left_grid">
                            <input type="text" name="Telephone" value="Số Điện Thoại*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="">
                            <input type="text" name="Subject" value="Tiêu Đề*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="">
                        </div>
                        <div class="clearfix"> </div>
                        <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Lời Nhắn...';}" required="">Nội Dung...</textarea>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Clear">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
<!-- //mail -->
        </div>
<!-- nội dung -->
</section>
</div>
<?php require_once __DIR__. "/layouts/footer.php"; ?> ?>

