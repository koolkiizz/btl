<script>
$(document).ready(function() {
    new WOW().init();
    $("#group-members").select2();
    $("#group-excercise").select2();
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
                            <h2 class="wow fadeInLeftBig subtitle">Đăng ký bài tập lớn</h2>
                            <div class="message">
                                <?php
                                if(isset($message)) {
                                    echo '<div class="alert alert-danger">'.$message.'</div>';
                                }
                                if(isset($success)) {
                                    echo '<div class="alert alert-success">'.$success.'</div>';
                                }
                                ?>
                            </div>
                            <div class="timer wow fadeInUp clearfix">
                                <form role="form" method="post" action="">
                                    <div class="form-left">
                                        <p>Giới thiệu chút đê! (không bắt buộc)</p>
                                        <div class="form-group">
                                            <label for="group-name">Tên nhóm?:</label>
                                            <input class="form-control" name="group-name" id="group-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="group-description">Mô tả?:</label>
                                            <textarea class="form-control" name="group-description" id="group-description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-right">
                                        <p>Đăng ký (Phần bắt buộc)</p>
                                        <div class="form-group">
                                            <label for="group-members">Các thành viên trong nhóm (chọn ít nhất 3):</label>
                                            <select class="form-control" name="group-members[]" id="group-members" multiple="multiple">
                                                <?php
                                                foreach($students as $student):
                                                ?>
                                                    <option value="<?php echo $student->id;?>"><?php echo $student->name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="group-members">Đề tài được chọn:</label>
                                            <select class="form-control" name="group-excercise" id="group-excercise">
                                                <option value="">Chọn đề tài</option>
                                                <?php
                                                foreach($excercises as $excercise):
                                                ?>
                                                    <option value="<?php echo $excercise->id;?>"><?php echo $excercise->name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-info abcde" name="register">Đăng ký ngay</button>
                                </form>
                            </div>
                            <div class="wow fadeInLeftBig">
                            	<p>
                            		Nếu bạn không tìm thấy sinh viên cần tìm -> hoa đã có chủ rồi nhé. <br>
                                    Nếu bạn không tìm thấy chủ đề mình cần tìm -> xin lỗi, đã quá trễ để "tha thu".
                            	</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>