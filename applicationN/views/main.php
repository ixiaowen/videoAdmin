<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>视频管理</title>
<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/style.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='<?php echo base_url();?>images/plus.gif' class='statusicon' />", "<img src='<?php echo base_url();?>images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="<?php echo base_url()?>js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="<?php echo base_url()?>js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>CSS/niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="<?php echo base_url()?>images/logo.png" alt="" style="width:180px;" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome <?php echo $account;?>, <a href="#">浏览页面</a> | <a href="<?php echo site_url().'/user/logOut'?>" class="logout">退出</a></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    
                    </ul>
                    </div>               
    <div class="center_content">  
    <div class="left_content">
            <div class="sidebarmenu">
				<a class="menuitem_green submenuheader" href="javascript:void(0)">视频管理</a>
                <div class="submenu">
                    <ul>
                    <li><a href="<?php echo site_url().'/video/managePage/1'?>">精彩TOP10</a></li>
                    <li><a href="<?php echo site_url().'/video/managePage/2'?>">英雄集锦</a></li>
                    </ul>
                </div>
                <a class="menuitem_green" href="<?php echo site_url().'/videoType/managePage'?>">分类管理</a>
            </div>
    
    </div>  
    
    <div class="right_content">
        
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">标题</th>
            <th scope="col" class="rounded">上传日期</th>
            <th scope="col" class="rounded">描述</th>
            <th scope="col" class="rounded">编辑</th>
            <th scope="col" class="rounded-q4">删除</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="5" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>
        </tr>
    </tfoot>
    <tbody>
		<?php
			foreach($videos as $video){
				?>
				<tr>
					<td><input type="checkbox" name="" /></td>
					<td><?php echo $video->title;?></td>
					<td><?php echo $video->publish_date;?></td>
					<td><?php echo $video->describ;?></td>
					<td><a href="<?php echo site_url().'/video/detailPage/'.$video->g_video_id;?>"><img src="<?php echo base_url()?>images/user_edit.png" alt="" title="" border="0" /></a></td>
					<td><a href="javascript:void(0)" class="ask"><img src="<?php echo base_url()?>images/trash.png" alt="" title="" border="0" /></a></td>
				</tr>
				<?php
			}
		?>
    </tbody>
</table>

	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>添加</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>删除</strong><span class="bt_red_r"></span></a>
     
     
        <div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>…<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div>       
     
     </div><!-- end of right content-->
            
                    
		</div>   <!--end of center content -->
		<div class="clear"></div>
    </div> <!--end of main content-->
	
    <div class="footer">
    	<div class="left_footer">Powered by <a href="http://">Qixiaodian</a></div>
    </div>

</div>		
</body>
</html>