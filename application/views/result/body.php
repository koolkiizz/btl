<script>
$(document).ready(function() {
    new WOW().init();
})
</script>

<!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        	<div class="logo wow fadeInDown">
                        		<h1>
                        			<a href="#">CƠ SỞ AN TOÀN THÔNG TIN - L03</a>
                        		</h1>
                        	</div>
                            <div id="exercises">
                                <h2 class="wow fadeInLeftBig subtitle">Danh sách đã đăng ký</h2>
                                <div class="timer wow fadeInUp clearfix">
                                    <?php $i = 0;
                                    foreach($datas as $data): ?>
                                        <?php if($data['gr_name'] != ''): ?>
                                            <h5>Nhóm <?php echo $data['gr_name']; endif;?></h5>
                                            <?php if($data['gr_des'] != ''): ?>
                                            <h6><?php echo $data['gr_des']; endif;?></h6>
                                        <?php 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>