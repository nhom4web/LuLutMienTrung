<?php
	 $query1=mysqli_query($con,"select * from tblcategory where tblcategory.id = 8 ");
	 $row1 = mysqli_fetch_array($query1);
?>

    <div id="title">
    	<h2><?php echo $row1['CategoryName'] ?></h2>
    	<p><?php echo $row1['Description'] ?></p>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="content1-active">
    	<div class="ct1">
    		<a href="category.php?catid=8">
    		<img src="img/ic11.png">
    		<h4>CHƯƠNG TRÌNH HẠNH PHÚC XANH</h4>
    		<p>Ra mắt năm 2018, Hạnh Phúc Xanh là chương trình thúc đẩy cộng đồng trồng cây nhằm tăng mật độ cây xanh; tăng sự kết nối giữa con người và tự nhiên và giữa con người với con người, từ đó được bảo vệ và sống hạnh phúc hơn.</p></a>
    	</div>
    	<div class="ct1">
    		<a href="category.php?catid=8">
    		<img src="img/ic12.png">
    		<h4>CHƯƠNG TRÌNH NHÀ CHỐNG LŨ</h4>
    		<p>Khởi xướng năm 2013, Nhà Chống Lũ là dự án phát triển cộng đồng với mục đích xây nhà an toàn và phát triển sinh kế bền vững cho người dân nghèo tại các vùng chịu ảnh hưởng bởi thiên tai và biến đổi khí hậu.</p></a>
    	</div>
    	<div class="ct1">
    		<a href="category.php?catid=8">
    		<img src="img/ic13.png">
    		<h4>CHƯƠNG TRÌNH RIVER ƠI</h4>
    		<p>Chương trình River Ơi lấy trọng tâm là các dự án nâng cao năng lực, thúc đẩy đầu tư cho đề tài nghiên cứu về phát triển bền vững, đưa nghệ thuật vào các hoạt động cộng đồng để mở rộng đối thoại, truyền thông về các góc nhìn mới, từ đó đề xuất những sáng kiến tới chính quyền và cộng đồng.</p></a>
    	</div>

    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="title" style="margin-top: 0px;">
    	<h2>CHIẾN DỊCH GÂY QUỸ</h2>
    	<p>Quỹ Sống vận động và báo cáo sử dụng nguồn quỹ một cách minh bạch, tiết kiệm và khoa học; với sự tham gia của các tập đoàn đa quốc gia và địa phương, các tổ chức phi chính phủ, các doanh nghiệp vừa và nhỏ, rất nhiều cá nhân hảo tâm... Hãy cùng tham gia các chiến dịch của chúng tôi vì một tương lai bền vững hơn cho các thế hệ sau!</p>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="bannerspace">
    <img src="img/bannerspace2.png">
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="title" style="margin-top: 70px;">
    	<h2>TIN TỨC & SỰ KIỆN</h2>
    	<p>Tin tức | Sự kiện | Thông cáo Báo chí | Tài liệu | Báo cáo Tài trợ</p>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<?php
    $querybaiviet = mysqli_query($con,"select * from tblcategory, tblposts where tblcategory.id= tblposts.CategoryId and tblcategory.id = 10")
?>

<div id="content1">
	<?php while($row_tintuc = mysqli_fetch_array($querybaiviet)){ ?>
    	<div class="ct1">
    		<a href="news_details.php?nid=<?php echo htmlentities($row_tintuc['id'])?>" class="btn btn-primary">
	    		<div class="frame">
	    			<img src="img/<?php echo $row_tintuc['PostImage'] ?>">
	    		</div>
                <div class="frame2">
	    		    <h4><?php echo $row_tintuc['PostTitle'] ?></h4>
                </div>
                <p>Đọc thêm →</p>
    		</a>
    	</div>
    <?php } ?>	
    </div>