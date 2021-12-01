<div id="footer">
	<div class="footer1">
		<div class="ft1_lienhe">
			<h3>LIÊN HỆ</h3>
			<ul>
				<li><p>Địa chỉ:</p> Số 218, Lĩnh Nam, Vĩnh Hưng, Hoàng Mai, Hà Nội</li>
				<li><p>Thời gian làm việc:</p> 9h-17h, thứ 2 đến thứ 6.</li>
				<li><p>Số điện thoại:</p> 0912345678</li>
				<li><p>Email:</p> info@song.org.vn</li>
			</ul>
		</div>
		<div class="ft1_lienhe">
			<h3>TRUY CẬP NHANH</h3>
			<ul>
				<li><a href="">Quyết định 2470/QĐ-BNV về việc Cấp giấy phép và Công nhận điều lệ Quỹ</a></li>
				<li><a href="">Quyết định 529/QĐ-BNV về việc Công nhận Quỹ đủ điều kiện hoạt động</a></li>
				<li><a href="">Giấy báo có tài khoản ngân hàng Vietcombank</a></li>
				<li><a href="">Mã số thuế: 0315820969</a></li>
				<li><a href="">Báo cáo thường niên Quỹ Sống 2019</a></li>
				<li><a href="">Báo cáo thường niên Quỹ Sống 2020</a></li>
			</ul>
		</div>
	</div>
	<div class="footer2">
		<ul>
		<?php $query_ft=mysqli_query($con,"select id,CategoryName from tblcategory");
		while($row_footer=mysqli_fetch_array($query_ft))
{
?>
				<li><a href="category.php?catid=<?php echo htmlentities($row_footer['id'])?>"><?php echo htmlentities($row_footer['CategoryName']);?></a>
				</li>
				<?php } ?>
		
		<li><a href="">Liên hệ</a></li>
	</ul>
	<p>NHÓM 4: TRẦN MẠNH CƯỜNG - NGUYỄN THỊ LINH - HÀ HẢI ANH - DƯƠNG DUY LAM</p>
	</div>
</div>