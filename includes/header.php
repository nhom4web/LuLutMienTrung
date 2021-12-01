<div id="header">
		<div class="header_left"><a href="index.php"><img src="img/logo3.png" style="max-height: 50px;"></a></div>
		<div class="header_menu">
			<ul>
				<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory where id>10");
						$querysubcat1 = mysqli_query($con,"select * from tblsubcategory,tblcategory where tblcategory.id = tblsubcategory.CategoryId and tblcategory.id = 8 ");
						$querysubcat2 = mysqli_query($con,"select * from tblsubcategory,tblcategory where tblcategory.id = tblsubcategory.CategoryId and tblcategory.id = 10");
						$query1 = mysqli_query($con,"select * from tblsubcategory,tblcategory where tblcategory.id = tblsubcategory.CategoryId and tblcategory.id >10");
				?>
				<li class="dropdown"><a href="category.php?catid=8">Chương trình hành động</a>
					<div class="dropdown-content" style="left:0;">
						
						<?php while($row_sc1 = mysqli_fetch_array($querysubcat1)){ ?>
						<a href="category.php?catid=<?php echo $row_sc1['id'] ?>&scid=<?php echo $row_sc1['SubCategoryId'] ?>"><?php echo $row_sc1['Subcategory'] ?></a>
					<?php } ?>
					</div>
				</li>
				<li class="dropdown-tintuc"><a href="category.php?catid=10">Tin tức</a>
					<div class="dropdown-content" style="left:0;">
						<?php while($row_sc2 = mysqli_fetch_array($querysubcat2)){ ?>
						<a href="category.php?catid=<?php echo $row_sc2['id'] ?>&scid=<?php echo $row_sc2['SubCategoryId'] ?>"><?php echo $row_sc2['Subcategory'] ?></a>
					<?php } ?>
					</div>
				</li>
				<?php while($row=mysqli_fetch_array($query)){?>
				<li class="dropdown-lichsu">
					<a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
				</li>
				<?php } ?>
				<li class="login"><a href="info.php">Liên hệ</a></li>
				<li class="login"><a href="admin/index.php">Đăng nhập</a></li>
			</ul>
		</div>
		<div class="header_right">
			<form action="search.php" method="post" style="margin-top: 6px;">
			<input type="text" name="keyword" placeholder="Tìm kiếm...">
			<input type="submit" name="search" value="&nbsp;"> 
			<!-- <a href="" class="ic"><i class="fas fa-search"></i></a>ICON TÌM KIẾM -->
		    </form>
		</div>
	</div>