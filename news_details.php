<?php 
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='1';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('Bình luận thành công !!! ');</script>";
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  
endif;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Chi tiết bài viết</title>
  <link rel="stylesheet" type="text/css" href="css/Trangchu.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,300;1,400;1,500&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('includes/header.php'); ?>
<!--  ////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="bannertintuc">
    <img src="img/bannertintuc2.png">
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->

<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

  <div id="chitiet">
    <div class="tieude">
      <h2><?php echo htmlentities($row['posttitle']);?></h2>
      <h3>Đăng bởi <a href="">Admin: </a> <?php echo htmlentities($row['postingdate']);?></h3>
    </div>
    <!-- ////////////////////////// -->
    <div class="noidung">
        <div class="hinhanh">
          <img src="img/<?php echo htmlentities($row['PostImage']);?>">
          <p><?php $pt=$row['postdetails'];
                  echo  (substr($pt,0));?></p>
        </div>
        <div class="tag">
            <p>Danh mục: </p><span><?php echo htmlentities($row['category']);?></span>
        </div>
    </div>
  <?php } ?>
    <!-- ////////////////////////// -->


<?php 
 $sts=1;
 $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
?>



    <div class="binhluan">
      <h4 class="active">Bình luận</h4>
      <?php while ($row=mysqli_fetch_array($query)) { ?>
      <div class="cmt">
        <h4><?php echo htmlentities($row['name']);?></h4>
        <p><?php echo htmlentities($row['comment']);?></p>
        <p style="font-size: 13px; font-style: oblique;"><?php echo htmlentities($row['postingDate']);?></p>
      </div>
    <?php } ?>
      <!-- <div class="cmt">
        <h4>Duy Lam</h4>
        <p>Giá như mình có thể tham gia thì vui biết mấy :3</p> 
      </div>
      <div class="cmt">
        <h4>Linh Lùn</h4>
        <p>Hoạt động thật ý nghĩa !</p>
      </div>
      <div class="cmt">
        <h4>Hải Anh</h4>
        <p>Nên có nhiều hoạt động như thế này hơn</p>
      </div> -->
      <form action="" method="post" name="Comment">
        <!-- <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" /> -->
        <input type="text" name="name" placeholder="Họ tên"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="comment" placeholder="Viết bình luận..." style="min-height: 60px;"><br>
        <input type="submit" name="submit" value="Bình luận">
      </form>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
    <div id="title" style="margin-top: 70px;">
      <h2>TIN TỨC LIÊN QUAN</h2>
    </div>
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////// -->
  </div>
  <?php
    include('hot_news.php');
    include('includes/footer.php'); 
  ?>
</body>
</html>