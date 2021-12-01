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
	<title>Tin tức</title>
	<link rel="stylesheet" type="text/css" href="css/Trangchu.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,300;1,400;1,500&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
	<?php
		if($_GET['catid']!=''){
		$_SESSION['catid']=intval($_GET['catid']);
		}
		if($_GET['scid']!=''){
		$_SESSION['scid']=intval($_GET['scid']);
		$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId='".$_SESSION['catid']."' and tblposts.Is_Active=1 and tblposts.SubCategoryId = '".$_SESSION['scid']."'");
		}
		else
		$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId='".$_SESSION['catid']."' and tblposts.Is_Active=1 ");
		$query1 = mysqli_query($con,"select * from tblcategory where id = '$_GET[catid]' LIMIT 1");
		$row1=mysqli_fetch_array($query1);
		$query2 = mysqli_query($con,"select * from tblposts where tblposts.Is_Active=1 order by id desc limit 9")
	?>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="bannertintuc">
    <img src="img/bannertintuc2.png">
    <p><?php echo $row1['CategoryName'] ?></p>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
   
    <div id="danhmuctintuc" style="margin-top: 170px;">
    	<ul>
    		<?php
    			while($row=mysqli_fetch_array($query)){ 
    		?>
    		<li>
    			<div class="ct1">
		    		<a href="news_details.php?nid=<?php echo htmlentities($row['pid'])?>">
		    		<div class="frame1">
		    			<img src="img/<?php echo $row['PostImage'] ?>">
		    		</div>
		    		<div class="frame2">
			    		<p><?php echo $row['subcategory'] ?></p>
			    		<h4><?php echo $row['posttitle'] ?></h4>
			    		<a href="news_details.php?nid=<?php echo htmlentities($row['pid'])?>"><span>Đọc thêm →</span></a>
			    	</a>
		    		</div>
    			</div>
    	    </li>

    	<?php } ?>
    	</ul>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="title" style="margin-top: 170px;">
    	<h2>TIN TỨC MỚI NHẤT</h2>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->

<?php
	include('hot_news.php');
	include('includes/footer.php');
?>
</body>
</html>