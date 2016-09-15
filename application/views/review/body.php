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
                                <h2 class="wow fadeInLeftBig subtitle">Danh sách đề tài</h2>
                                <div class="timer wow fadeInUp clearfix">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Chủ đề</th>
                                                <th>Yêu cầu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $i = 1;
                                        foreach($excercises as $excercie): ?>
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $excercie->name;?></td>
                                                <td><?php echo $excercie->requires;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                                <h2 id="require"><u>VUI LÒNG ĐỌC KỸ YÊU CẦU BÀI TẬP LỚN</u></h2>
                            </div>

                            <div class="wow fadeInLeftBig require">
<h2>Yêu cầu bài tập lớn</h2>
<h3>Mục tiêu thực hiện bài tập lớn</h3>
<p>Chủ đề bài tập lớn  được đưa ra nhằm giúp sinh viên tiếp cận bước đầu với một số lĩnh vực công việc  trong an toàn thông tin, qua đó sinh viên có thể nhận biết được lĩnh vực mà  mình đam mê, theo đuổi.<br />
  Bên cạnh đó, việc  thực hiện bài tập lớn cũng giúp sinh viên củng cố:</p>
<ul>
  <li>kỹ  năng tự học và nắm bắt kiến thức mới;</li>
  <li>kỹ  năng trình bày báo cáo dưới dạng văn bản;</li>
  <li>kỹ  năng xây dựng bộ slide thuyết trình cho báo cáo và thực hiện thuyết trình.</li>
</ul>
<h3>Yêu cầu đối với bài tập lớn</h3>
<p>Yêu cầu về hình thức đối với báo cáo</p>
<ul>
  <li>Bản  báo cáo chính phải được soạn thảo bằng MS Word, đáp ứng các yêu cầu tối thiểu  sau:</li>
  <ul>
    <li>Chỉ sử  dụng font chữ Times New Roman với kích thước 14pt.</li>
    <li>Căn lề  đều hai biên (Justified) đối với nội dung chính, căn lề trái (Left) đối với tên  các đề mục.</li>
    <li>Khoảng  cách dòng là 1,3.</li>
  </ul>
  <li>Đặc  biệt lưu ý khi trình bày danh mục tài liệu tham khảo.</li>
  <ul>
    <li>Nếu  là sách, phải chỉ rõ [Tên tác giả,] [Tên sách,] [Tên nhà xuất bản,] [Năm xuất bản]</li>
    <li>Nếu  là bài viết trên Internet phải chỉ rõ [Tên tác giả nếu có,] [Tên bài viết,]  [URL của bài viết,] [(Ngày tham khảo)]</li>
  </ul>
  <li>Trong  báo cáo, phải chỉ rõ nguồn tham khảo khi đưa ra các luận điểm, số liệu mà không  phải là kết quả nghiên cứu của SV (không chỉ rõ nguồn tài liệu tham khảo, trừ 0,5-1  điểm).</li>
  <li>Khi  in bản báo cáo chính, cần ghép 01 tờ giấy trắng vào <strong>ngay  sau tờ bìa</strong> để giảng viên ghi ý kiến nhận xét.</li>
  <li>Kết  quả thực hiện bài tập lớn (gồm báo cáo chính, báo cáo dạng slide, mã nguồn,  file chương trình, công cụ được sử dụng...) được lưu vào trong một thư mục. Tên  thư mục phải có dạng: </li>
</ul>
<blockquote>[Tên lớp]. [Số thứ tự của chủ đề với 2 chữ số]. [Mô tả ngắn gọn chủ đề,  không quá 50 kí tự]<br />
  Ví dụ:<br />
  L03. 07. Tấn công Padding  Oracle<br />
  Còn tên file của bản cáo cáo  chính và báo cáo slide thì có dạng [Tên thư mục].[Phần mở rộng]<br />
  Ví dụ<br />
  L03. 07. Tấn công Padding  Oracle.docx</blockquote>
<h3>Yêu cầu về nội dung</h3>
<ul>
  <li>Các nhóm phải tự làm bài tập, không sao chép từ  bất kỳ nguồn nào.</li>
  <li>Nếu sinh viên sao chép bài/chương trình của nhau  (giữa các nhóm khác nhau trong cùng lớp hoặc ngoài lớp, cùng khóa hoặc khác  khóa) thì sẽ phải nhận 0 điểm, không phân biệt nhóm nào sao chép của nhóm nào  (kể cả trường hợp việc sao chép bị phát hiện sau khi nhóm đã trình bày báo  cáo).</li>
</ul>
<h3>Yêu cầu đối với thuyết trình</h3>
<ul>
  <li>Khi thuyết  trình, sinh viên không  được phép đứng trước màn hình máy tính mà phải đứng trước màn chiếu để trình  bày.</li>
  <li>Nếu bài  tập được thực hiện bởi 2 người trở lên, trong phần thuyết trình phải có phần giới  thiệu phần đóng góp của từng người vào bài tập lớn.</li>
  <li>Mọi sinh viên trong nhóm đều phải nắm được nội  dung mà nhóm mình thực hiện. Nhóm có  quyền xác định người thuyết trình, nhưng giảng viên sẽ chỉ định người sẽ trả lời  các câu hỏi. Một người không trả lời được câu hỏi, trừ điểm cả nhóm.</li>
</ul>
<h2 id="to_excercise"><u>Xem danh sách đề tài<u></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>