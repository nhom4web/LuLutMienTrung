<?php
	$query2 = mysqli_query($con,"select * from tblposts where tblposts.Is_Active=1 order by id desc limit 9"); 
?>

<div id="content1">
	<?php while($row2 = mysqli_fetch_array($query2)){ ?>
    	<div class="ct1">
    		<a href="news_details.php?nid=<?php echo $row2['id']?>">
    		<div class="frame">
    		<img src="img/<?php echo $row2['PostImage'] ?>">
    		</div>
    		<div class="frame2">
    		    <h4><?php echo $row2['PostTitle'] ?></h4>
    	    </div>
    	    <p>Đọc thêm →</p>
    		</a>
    	</div>
    <?php } ?>    	
 </div>