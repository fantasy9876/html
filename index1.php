<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Masonry Demo</title>
<script src="masonry.pkgd.min.js"></script>
<script src="js/vendor/modernizr-2.6.2.min.js"></script>   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src=""></script>
<script type="text/javascript">
		$(window).scroll(function(){
		    if($(window).scrollTop() == $(document).height() - $(window).height()){
		    	$('div#loadmoreajaxloader').show();
				$.ajax({
					url: "loadmore.php",
					success: function(html){
						if(html){
							$(".container").append(html);
							$('div#loadmoreajaxloader').hide();
						}else{
							$('div#loadmoreajaxloader').html('<center>No more posts to show.</center>');
						}
					}
				});
		    }
		});
	</script>

<style type="text/css">
#masonry
{
	overflow:hidden;
	width:860;
	padding: 50px 0	
}

#masonry ul
{
	width:90px	
}
#masonry il
{
	float:left;
	list-style:none;
	width:200px;
	margin-right:20px;
	margin-bottom:20px;
	line-height:0;	
}

.box{
    display: inline-block;
    width: 300px;
    margin-bottom: 20px;
    -webkit-transition-property: left,right,top;
    -moz-transition-property: left,right,top;
    -ms-transition-property: left,right,top;
    -o-transition-property: left,right,top;
    transition-property: left,right,top;
    -webkit-transition-duration: 0.6s;
    -moz-transition-duration: 0.6s;
    -ms-transition-duration: 0.6s;
    -o-transition-duration: 0.6s;
    transition-duration: 0.6s;
}

.cols{
    -moz-column-count:3;
    -moz-column-gap: 10px;
    -webkit-column-count:3;
    -webkit-column-gap: 10px;
    column-count: 3;
    column-gap: 10px;
}

.box.1{
    height: 200px;
    
}
.box.2{
    height: 300px;
    
}
.box.3{
    
    height: 400px;
}   
.box.4{
    
    height: 500px;
}
.box.5{
    
    height: 600px;
}
.box.6{
    
    height: 200px;
}
#page-wrap{
    width: 960px;
    margin: 0 auto;
    padding-top: 20px;
    position: relative;
}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}
img {
    vertical-align: middle;
}
#header h2{
    text-align: center;
}
#header a{
    text-decoration: none;
    color: #3D91EC;
    display: block;
    text-align: center;
}
</style>


</head>

<body>


<script type="text/javascript">
    $(document).ready(function(){
	$('.container').masonry({
	  itemSelector: '#masonry ul',
	  columnWidth: 250,
	  gutterWidth: 10,
	  "isOriginLeft": true
	});
});
        </script>

	<div id="page-wrap">
    <div id="header">
                <h2>CSS3 Based Masonry Layout With jQuery Masonry as Fallback</h2>
                <a href="#">&larr; Go Back To Tutorial</a>
    </div>
    <div class="container cols">
        	
            <?php include('loadmore.php'); ?>
            
        </ul>
    </div>
    <div id="loadmoreajaxloader" style="display:none;"><center><img src="ajax-loader.gif" /></center></div>
    <hr/>
    
            
            
    </div>
</body>
</html>
