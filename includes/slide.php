<div id="space1" style="height: 900px;">
    	<div id="slider">
    		<div class="slider-item" number="0">
    			<img src="img/banner1_2.png">
    			<p>Nhóm 4 <br> Lũ Lụt Miền Trung</p>
    		</div>
    		<div class="slider-item" number="1" style="display: none;"><img src="img/banner3.png"></div>
    		<div class="slider-item" number="2" style="display: none;"><img src="img/banner2.png"></div>
    		<a href="#" class="next"><i class="fas fa-chevron-right"></i></a>
		    <a href="#" class="prev"><i class="fas fa-chevron-left"></i></a>
    	</div>
    </div>
    <!-- SCRIPT CHUYỂN ẢNH -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
	<script>
		$(() => {
			$('.next').click(function(){
				changeImage('next');
			})
			$('.prev').click(function(){
				changeImage('prev');
			})
		})
            function changeImage(type){
                        let imgSelectVisible = $('div.slider-item:visible');
                            let imgVisible= parseInt(imgSelectVisible.attr('number'));
                            let eqNumber=0;
                            if(type=='next'){
                                 eqNumber = imgVisible+1;
                                 if(eqNumber>=$('div.slider-item').length)
                                 eqNumber=0;
                            }
                            else{
                                 eqNumber = imgVisible-1;
                            }
                            $('div.slider-item').eq(eqNumber).fadeIn();
                            imgSelectVisible.fadeOut();
                    }
	</script>