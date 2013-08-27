<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑视频信息</title>
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

<script type="text/javascript"
	src="<?php echo base_url()?>js/jconfirmaction.jquery.js"></script>
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
			<div class="logo">
				<a href="#"><img src="<?php echo base_url()?>images/logo.png" alt="" style="width:180px;" title="" border="0" /></a>
			</div>
			<div class="right_header">
				Welcome <?php echo $account;?>, <a href="#">访问 页面</a> | <a href="#" class="logout">注销</a>
			</div>
		</div>

		<div class="main_content">
			<div class="menu">
				<ul>

				</ul>
			</div>
			
			<div class="center_content">
				<div class="left_content">
					<div class="sidebarmenu">
						<a class="menuitem_green" href="<?php echo site_url().'/video/managePage'?>">视频管理</a>
						<a class="menuitem_green" href="<?php echo site_url().'/videoType/managePage'?>">分类管理</a>
					</div>

				</div>

				<div class="right_content">
					<h2>编辑视频</h2>
					<div class="form">
						<form action="<?php echo site_url().'video/addVideo'?>" method="post" class="niceform" onsubmit="check()">
							<fieldset>
								<dl>
									<dt>
										<label for="email">标题:</label>
									</dt>
									<dd>
										<input type="text" name="" id="" size="54"  value="<?php echo $video->title;?>"/>
									</dd>
								</dl>
								<dl>
									<dt>
										<label for="email">视频源:</label>
									</dt>
									<dd>
										<input type="text" name="" id="" size="54"  value="<?php echo $video->src;?>"/>
									</dd>
								</dl>
								<dl>
									<dt>
										<label for="password">上传时间:</label>
									</dt>
									<dd>
										<input type="text" name="" id="" size="54" value="<?php echo $video->publish_date;?>" />
									</dd>
								</dl>
								<dl>
									<dt>
										<label for="gender">分类:</label>
									</dt>
									<dd>
										<select size="1" name="gender" id="">
											<option value="">Select option 1</option>
											<option value="">Select option 2</option>
											<option value="">Select option 3</option>
											<option value="">Select option 4</option>
											<option value="">Select option 5</option>
										</select>
									</dd>
								</dl>
								<dl>
									<dt>
										<label for="interests">状态:</label>
									</dt>
									<dd>
										<input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">推荐</label>
									</dd>
								</dl>
								<dl>
									<dt>
										<label for="upload">封面图:</label>
									</dt>
									<dd>
										<input type="file" name="upload" id="upload" />
									</dd>
								</dl>
								<dl>
									<dt>
										<label></label>
									</dt>
									<dd>
										<img src="<?php $video->post_img;?>"></img>
									</dd>
								</dl>
								<dl>
									<dt>
										<label for="describ">描述:</label>
									</dt>
									<dd>
										<textarea name="describ" id="describ" rows="5" cols="36"><?php echo $video->describ;?></textarea>
									</dd>
								</dl>
								<dl class="submit">
									<input type="submit" name="submit" id="submit" value="保存" />
								</dl>
							</fieldset>
						</form>
					</div>
				</div>
				<!-- end of right content-->


			</div>
			<!--end of center content -->
			<div class="clear"></div>
		</div>
		<!--end of main content-->

		<div class="footer">
			<div class="left_footer">
				Powered by <a href="http://">Qixiaodian</a>
			</div>
		</div>

	</div>
</body>
<script type="text/javascript">
	function check(){
		//验证title不能为空
		
		
		//验证验证视频源不能为空
		
		
		return true;
	}
</script>
</html>