<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	include('includes/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tìm kiếm</title>
	<link rel="stylesheet" type="text/css" href="css/Trangchu.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,300;1,400;1,500&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>

<?php 
        if($_POST['search']){
		$st=$_POST['keyword'];
		$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.PostTitle like '%$st%'");
		}

?>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="bannertintuc">
    <img src="img/bannertintuc2.png">
    <p>TÌM KIẾM</p>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="title" style="margin-top: 170px;">
    	<h2>TỪ KHÓA TÌM KIẾM : <?php echo $_POST['keyword']; ?> </h2>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="danhmuctintuc">
    	<ul>
    		<?php
    			while($row=mysqli_fetch_array($query)){ 
    		?>
    		<li>
    			<div class="ct1">
		    		<a href="news_details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">
		    		<div class="frame1">
		    			<img src="img/<?php echo $row['PostImage'] ?>">
		    		</div>
		    		<div class="frame2">
			    		<a href="">Category: <?php echo $row['category'] ?></a>
			    		<h4><?php echo $row['posttitle'] ?></h4>
			    		<a href="news_details.php?nid=<?php echo htmlentities($row['pid'])?>"><span>Đọc thêm →</span></a>
			    	</a>
		    		</div>
    			</div>
    	    </li>

    	<?php } ?>
    	</ul>
    </div>
    	<!-- <li>
    	    <div class="timkiem2">
    		<div class="tk_img">
    			<img src="../img/ct5.jpg">
    		</div>
    		<div class="tk_title">
    			<p>Mưa lớn tới hơn 700 mm, nhiều tỉnh miền Trung, Tây Nguyên ngập nặng, lũ lớn</p>
    		</div>
    	    </div>
    	</li>
    	<li>
    	    <div class="timkiem2">
    		<div class="tk_img">
    			<img src="../img/ct5.jpg">
    		</div>
    		<div class="tk_title">
    			<p>Mưa lớn tới hơn 700 mm, nhiều tỉnh miền Trung, Tây Nguyên ngập nặng, lũ lớn</p>
    		</div>
    	    </div>
    	</li>
    	<li>
    	    <div class="timkiem2">
    		<div class="tk_img">
    			<img src="../img/ct5.jpg">
    		</div>
    		<div class="tk_title">
    			<p>Mưa lớn tới hơn 700 mm, nhiều tỉnh miền Trung, Tây Nguyên ngập nặng, lũ lớn</p>
    		</div>
    	    </div>
    	</li>
    	<li>
    	    <div class="timkiem2">
    		<div class="tk_img">
    			<img src="../img/ct5.jpg">
    		</div>
    		<div class="tk_title">
    			<p>Mưa lớn tới hơn 700 mm, nhiều tỉnh miền Trung, Tây Nguyên ngập nặng, lũ lớn</p>
    		</div>
    	    </div>
    	</li>
    	<li>
    	    <div class="timkiem2">
    		<div class="tk_img">
    			<img src="../img/ct5.jpg">
    		</div>
    		<div class="tk_title">
    			<p>Mưa lớn tới hơn 700 mm, nhiều tỉnh miền Trung, Tây Nguyên ngập nặng, lũ lớn</p>
    		</div>
    	    </div>
    	</li> -->
    	<!-- </ul>
    </div>
    <div id="space_tk" style="width: 80%; height: 1px; clear: left; background: #ccc; margin: 0px auto;"></div> -->
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="title" style="margin-top: 170px;">
    	<h2>TIN TỨC LIÊN QUAN</h2>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<?php
	include('hot_news.php');
	include('includes/footer.php'); 
?>
</body>
</html>