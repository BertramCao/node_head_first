<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css" scoped>
	*{
		margin-top: 0;
		padding-top: 0;
	}
	ul,li,p,span,ol,h1,h2,h3,h4,h5,h6{
	  margin:0;
	  padding:0;
	  list-style:none;
	}
	a {
		color: #333;
		text-decoration: none;
	}
	a:link {
		color: #f85;
		text-decoration: none;
	}
	a:hover {
		color: #f85;
		text-decoration: none;
	}
	.setting-index {
		width: 100%;
		height: 100%;
	}
	.top-pic img{
		position: relative;
		width: 100%;
		height: 214px;
	}
	.index_input{
		position: absolute;
		top: 140px;
		width: 21%;
		left: 44%;
		height: 32px;
		background-color: #fff;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		opacity: 0.8;
		border: none;
	}
	select {
		appearance: none;
	    -webkit-appearance: none;
	    -moz-appearance: none;  
  		background: url("./img/index/icon18.png") no-repeat scroll right center transparent;
	}
	.index_select{
		position: absolute;
		top: 140px;
		width: 4%;
		left: 40%;
		height: 32px;
		background-color: #fff;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
		opacity: 0.8;
		border: none;
	}
	.index_o {
		position: absolute;
		top: 146px;
		left: 41%;
		font-size: 14px;
		color: #666;
	}
	.index_t {
		position: absolute;
		top: 150px;
		left: 43.5%;
	}
	.index_th {
		position: absolute;
		top: 148px;
		left: 63%;
		font-size: 18px;
		color: #666;
	}
	.top-pic ul{
		margin-left: 5%;
		width: auto;
		height: 60px;
	}
	.top-pic ul li {
		float: left;
		width: 200px;
		text-align: center;
		margin-top: 7px;
		padding: 0px;
	}
	.top-pic ul li p:nth-child(1){
		font-size: 22px;
		font-weight: bold;
		color: #c02020;
	}
	.top-pic ul li p:nth-child(2){
		color: #3d3d3d;
		font-size: 13px;
		margin-top: 3px;
	}
	.main-center {
		display: flex;
		flex-direction: column;
		justify-content: center;
		height: 100%;
		width: 100%;
		margin-top: 20px;
	}
	.main-center-one{
		width: 1200px;
		margin: 0 auto;
	}
	.main-center-one .center-title {
		height: 40px;
		margin-bottom: 12px;
		border-bottom: 1px solid #eee;
	}
	.main-center-one .center-title  span {
		float: left;
		line-height: 40px;
		margin-left: 10px;
		color: #f85;
		font-size: 18px;
	}
	.main-center-one .center-title  h3 {
		float: left;
		line-height: 40px;
		font-weight: 600;
		margin-left: 10px;
		font-size: 18px;
	}
	.main-center-one .center-title  a {
		float: right;
		line-height: 40px;
		/*color: #333;*/
		margin-right: 15px;
	}
	.news_content {
	    margin: 20px 0 30px 0;
	    height: 90px;
	    overflow: hidden;
	}
	.content-list{
		float: left;
		width: 32%;
		height: 100px;
		margin-left: 10px;
	}
	.list-t {
		padding-top: 10px;
		float: left;
		width: 70px;
		height: 70px;
		background: #f85;
		border-radius: 6px;	
	}
	.list-t p:nth-child(1){
		font-size: 18px;
		color: #fff;
		font-weight: bold;
		text-align: center;
	}
	.list-t p:nth-child(3){
		color: #fff;
		font-weight: bold;
		text-align: center;
	}
	.list-r{
		float: left;
		width: 280px;
		margin-left: 15px;
	}
	.news_content .content-list .list-r h3{
		line-height: 30px;
		font-size: 15px;
		font-weight: bold;
		width: 280px;
		/*white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;*/
	}
	.main-center-two{
		width: 1200px;
		margin: 0 auto;
	}
	.main-center-two .center-left {
		float: left;
		width: 65%;
		height: 530px;
	}

	.main-center-two .center-left .left-title span{
		float: left;
		line-height: 40px;
		margin-left: 10px;
		color: #f85;
		font-size: 18px;
	}
	.main-center-two .center-left .left-title h3{
		float: left;
		line-height: 40px;
		font-weight: 600;
		margin-left: 10px;
		font-size: 18px;
	}
	.main-center-two .center-left .left-title a{
		float: right;
		margin-right: 25px;
		margin-top: 10px;
	}
	.main-center-two .center-left .left-title{
		height: 40px;
		margin-bottom: 12px;
		border-bottom: 1px solid #eee;
	}
	.main-center-two .center-left .list-img{
		height: 455px;
		width: 100%;
		overflow: hidden;
	}
	.main-center-two .center-left .list-img ul{
		padding-left: 8px;
	}
	.main-center-two .center-left .list-img ul li{
		width: 138px;
		float: left;
		margin-top: 15px;
		margin-left: 15px;
	}
	.main-center-two .center-left .list-img ul li a{
		float: left;
		margin-bottom: 5px;
		display: block;
		border: 1px solid #eee;
		border-radius: 3px;
	}
	.main-center-two .center-left .list-img ul li a img{
		width: 130px;
		height: 158px;
		border-radius: 3px;
	}

	.main-center-two .center-left .list-img ul li p{
		line-height: 20px;
		text-align: center;
		width: 100px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		margin: 0 auto;
	}
	.main-center-two .center-right {
		float: left;
		width: 34%;
		margin-left: 0.5%;
		height: 530px;
	}
	.main-center-two .center-right .right-title{
		height: 40px;
		margin-bottom: 12px;
		border-bottom: 1px solid #eee;
	}
	.main-center-two .center-right .right-title a:nth-child(1){
		color: #f70;
		font-size: 18px;
		font-weight: bold;
	}
	.main-center-two .center-right .right-title a:nth-child(2){
		line-height: 40px;
		color: #333;
		margin-left: 15px;
		font-size: 18px;
		font-weight: bold;
	}
	.main-center-two .center-right .right-title a:nth-child(3){
		float: right;
		line-height: 40px;
		/*color: #333;*/
		margin-right: 15px;
	}
	.right-ul{
		border-left: 1px solid #eee;
		height: 420px;
	}
	.right-ul li{
		width: 100%;
		height: 28px;
		margin: 25px 0;
	}
	.right-ul li a{
		float: left;
		margin-left: 25px;
		padding-left: 10px;
		display: block;
		height: 28px;
		line-height: 28px;
		/*color: #333;*/
		font-size: 14px;
		width: 69%;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}
	.right-ul li p{
		float: left;
		line-height: 28px;
		margin-left: 16px;
		font-size: 14px;
	}
	.mian-footer {
		display: flex;
		flex-direction: column;
		justify-content: center;
		width: 100%;
		margin-top: 20px;
	}
	.mian-footer .mian-footer-inner {
		width: 1200px;
		margin: 0 auto;
		/*border: 1px solid black;*/
	}
	.mian-footer .mian-footer-inner .footer_one{
		width: 380px;
		float: left; 
		min-height: 216px;
		border-right: 1px solid #eee;
	}
	.mian-footer .mian-footer-inner .footer_one .icon{
		float: left;
		color: #f85;
		margin-right: 10px;
	}
	.mian-footer .mian-footer-inner .footer_one .footer-title {
		font-size: 15px !important;
		padding-left: 30px !important;
		line-height: 24px !important;
		border-bottom: none !important;
	}
	.mian-footer .mian-footer-inner .footer_one .footer-title h3 {
		float: left;
		font-size: 16px;
		font-weight: bold;
	}
	.mian-footer .mian-footer-inner .footer_one .footer-title a {
		float: right;
		/*color: #333;*/
		margin-right: 10px;
		font-size: 14px;
	}
	.footer-ul {
		padding-left: 25px;
	}
	.footer-ul .list_conter:nth-child(1) {
		margin-bottom: 8px;
		margin-top: 30px;
	}
	.footer-ul .list_conter {
		margin-bottom: 8px;
		margin-top: 10px;
	}
	.footer-ul .list_conter a{
		line-height: 24px;
		width: 340px;
	}
	.footer-ul .list_conter a span:nth-child(1){
		max-width: 250px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		padding-left: 10px;
		/*color: #333;*/
	}
	.footer-ul .list_conter a span:nth-child(2){
		display: block;
		float: right !important;
		margin-right: 10px;
		color: #333;
	}
</style>
<body>
	<?php
		require('header.php');
	?>
	<div class="setting-index">
		<div class="top-pic">
			<img src="./img/index/top-pic.jpg">
			<input type="text" class="index_input" name="">
			<select class="index_select">
				<option>成果</option>
				<option>部门</option>
				<option>学者</option>
			</select>
			<!-- <span class="index_o">成果</span> -->
			<!-- <span class="glyphicon glyphicon-chevron-down index_t"></span> -->
			<span class="glyphicon glyphicon-zoom-in index_th"></span>
			<!-- 统计 -->
			<ul>
				<a href="./Result.php">
					<li>
						<p>1450</p>
						<p>成果总量</p>
					</li>
				</a>
				<a href="./Result.php">
					<li>
						<p>1354</p>
						<p>全文总量</p>
					</li>
				</a>
				<a href="./Research.php">
					<li>
						<p>2828</p>
						<p>科研项目总量</p>
					</li>
				</a>
				<a href="./actor.php">
					<li>
						<p>10</p>
						<p>学者总量</p>
					</li>
				</a>
				<li>
					<p>8915</p>
					<p>成果浏览量</p>
				</li>
				<li>
					<p>3569</p>
					<p>成果下载量</p>
				</li>
			</ul>
		</div>
		<!-- 中甲内容 -->
		<div class="main-center">
		<!-- 第一个div -->
			<div class="main-center-one">
				<div class="center-title">
					<span class="glyphicon glyphicon-list-alt"></span>
					<h3>学术快报</h3>
					<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKJ" target="_blank">更多丨more</a>
				</div>
				<div class="news_content">
					<div class="content-list">
						<div class="list-t">
							<p>15</p>
							<p></p>
							<p>2018-03</p>
						</div>
						<div class="list-r">
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CDMH" target="_blank"><h3> EI发表成果</h3></a>
							<p> 北京典型灌区土壤和农产品多氯联苯污染风险评估</p>
						</div>
					</div>
					<div class="content-list">
						<div class="list-t">
							<p>15</p>
							<p></p>
							<p>2018-03</p>
						</div>
						<div class="list-r">
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CDMH" target="_blank"><h3> SCI(E)发表成果</h3></a>
							<p> 黄河中游1978-2010年间土壤侵蚀风险的动态监测研究（英文）</p>
						</div>
					</div>
					<div class="content-list">
						<div class="list-t">
							<p>15</p>
							<p></p>
							<p>2018-03</p>
						</div>
						<div class="list-r">
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CDMH" target="_blank"><h3> EI发表成果</h3></a>
							<p> 岸坡崩塌条件下弯道环流与水流剪切力的变化特征</p>
						</div>
					</div>
				</div>
			</div>
			<!--  第二个div-->
			<div class="main-center-two">
				<div class="center-left">
					<div class="left-title">
						<span class="glyphicon glyphicon-user"></span>
						<h3>学者</h3>
						<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP" target="_blank">更多丨more</a>
					</div>
					<div class="list-img">
						<ul>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
							<li>
								<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKP"><img src="./img/index/p_1.jpg"></a>
								<p>李其军</p>
								<p>院领导</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="center-right">
					<div class="right-title">
						<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKN" target="_blank">最新提交</a>
						<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKN" target="_blank">最新成果</a>
						<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=CHKN" target="_blank">更多丨more</a>
					</div>
					<ul class="right-ul">
						<li>
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSAD" target="_blank"> 1.城镇污水处理及再生利用工艺手册城镇污水处理及再生利用工艺手册</a>
							<p>2018-06-22</p>
						</li>
						<li>
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSAD" target="_blank"> 1.城镇污水处理及再生利用工艺手册</a>
							<p>2018-06-22</p>
						</li>
						<li>
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSAD" target="_blank"> 1.城镇污水处理及再生利用工艺手册</a>
							<p>2018-06-22</p>
						</li>
						<li>
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSAD" target="_blank"> 1.城镇污水处理及再生利用工艺手册</a>
							<p>2018-06-22</p>
						</li>
						<li>
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSAD" target="_blank"> 1.城镇污水处理及再生利用工艺手册</a>
							<p>2018-06-22</p>
						</li>
						<li>
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSAD" target="_blank"> 1.城镇污水处理及再生利用工艺手册</a>
							<p>2018-06-22</p>
						</li>
						<li>
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSAD" target="_blank"> 1.城镇污水处理及再生利用工艺手册</a>
							<p>2018-06-22</p>
						</li>
						<li>
							<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSAD" target="_blank"> 1.城镇污水处理及再生利用工艺手册</a>
							<p>2018-06-22</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- 底部内容 -->
		<div class="mian-footer">
			<div class="mian-footer-inner">
				<div class="footer_one">
					<div class="footer-title">
						<span class="glyphicon glyphicon-book icon"></span>
						<h3>部门成果</h3>
						<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSFD">更多丨more</a>
					</div>
					<ul class="footer-ul">
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href=""><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href=""><span>院领导</span><span>483</span></a></li>
					</ul>
				</div>
				<div class="footer_one">
					<div class="footer-title">
						<span class="glyphicon glyphicon-th-list icon"></span>
						<h3>成果收录</h3>
						<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSFD">更多丨more</a>
					</div>
					<ul class="footer-ul">
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
					</ul>
				</div>
				<div class="footer_one">
					<div class="footer-title">
						<span class="glyphicon glyphicon-folder-close icon"></span>
						<h3>成果类型</h3>
						<a href="http://search.chkd.cnki.net/kns/brief/result.aspx?dbPrefix=BSFD">更多丨more</a>
					</div>
					<ul class="footer-ul">
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href="./Result.php"><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href=""><span>院领导</span><span>483</span></a></li>
						<li class="list_conter"><a href=""><span>院领导</span><span>483</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<?php
		require('footer.php');
	?>
</body>
</html>

<!-- 外层布局为margin，内层宽度一定  margin为auto  凝胶布局 -->