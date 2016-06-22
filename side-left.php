<div class="left">
    <img src="images/5-37.png" class="logo" />
    <h1 id="shop-name"></h1>
    <p class="branch" id="shop-branch"></p>
    <p class="loc" id="shop-address"></p>
    <p class="tel" id="shop-tel"></p>
    <img src="" class="code" id="shop-qrcode" />
</div>
<script>
	// 获取门店信息
	$.ajax({
        url: 'remote.php',
        cache: false,
        data: {data: 'shop', identifier: '<?php echo $_COOKIE['identifier'] ?>'}
    }).done(function(response) {
        // 数据读完，从头开始读
        if(response.err == 0) {
            $('#shop-name').html(response.data.name);
            $('#shop-branch').html(response.data.branch);
            $('#shop-tel').html(response.data.tel);
            $('#shop-address').html(response.data.address);
            $('#shop-qrcode').attr('src', response.data.qrcode);
        }
    }).always(function() {
        
    });
</script>
