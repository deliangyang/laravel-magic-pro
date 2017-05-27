<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="wap-font-scale" content="no">
    <meta name="format-detection" content="telephone=no">
    <title>支付宝充值即时到账</title>
    <link rel="stylesheet" href="/public/statics/app.css">
    <script src="/public/statics/libs/jquery/dist/jquery.min.js"></script>
</head>
<body ontouchstart>
<body>
<?php
$qrlink = "HTTPS://QR.ALIPAY.COM/FKX019029BPR2WBVY26L9D";//您的支付宝二维码链接

$title = isset($_POST['title'])?$_POST['title']:'';
$payAmount = isset($_POST['payAmount'])?$_POST['payAmount']:'';
$balance = isset($_POST['balance'])?$_POST['balance']:'';

?>
<script>
$(document).ready(function() {
		setInterval(function(){
		  $.ajax({
			url:"../alidirect/check",
			type: "post",
			data: {act:"check",user:"<?php echo $title;?>",balance:"<?php echo $balance;?>"},
			success: function(d){
				if(d == "success" ){
					
					alert("支付成功！");
					location.href = "/objects";
					
				}
			}
		  });
		},3000);

	})
</script>
    <div class="hd1">
<a href="<?php echo $qrlink;?>" target="_blank"><img src="qr.png" width="344" height="344" /></a>
    </div>

    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary" style="text-align: center;">
                <p>扫描或点击上方二维码付款。</p>
            </div>
            <div class="weui_cell_ft"></div>
        </div>
    </div>
	<div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary" style="text-align: center;">
                <p>付款金额填写<span style="color:#ff0000;font-weight:bold"><?php echo $payAmount;?></span></p>
            </div>
            <div class="weui_cell_ft"></div>
        </div>
    </div>
    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary" style="text-align: center;">
                <p>付款说明填写您的用户名：<span style="color:#ff0000;font-weight:bold"><?php echo $title;?></span></p>
            </div>
            <div class="weui_cell_ft"></div>
        </div>
    </div>
    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary" style="text-align: center;">
                <p>付款后10秒内系统自动到账</p>
            </div>
            <div class="weui_cell_ft"></div>
        </div>
    </div>

</body>
</html>