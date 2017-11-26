<!DOCTYPE html>
<html>
<head>
	<title>詳細資料</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }} "></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a class="navbar-brand" href="/">HelloLaravel</a>
			<ul class="nav navbar-nav">
				<li>
					<a href="#">排行榜</a>
				</li>
			</ul>
		</div>
	</nav>
	<div style="padding-top: 70px;"></div>
	<div class="container">
		<div class="page-header">
			<h1>排名</h1>
		</div>
		<div class="row">
			<table class="table table-hover">
				<thead>
				<tr>
					<th>名次</th>
					<th>學號</th>
					<th>姓名</th>
					<th>國文</th>
					<th>英文</th>
					<th>數學</th>
					<th>總分</th>
					<th>動作</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>s1234567890</td>
					<td>小明</td>
					<td>60</td>
					<td>60</td>
					<td>60</td>
					<td>180</td>
					<td>
						<a class="btn btn-default btn-sm" href="#">查看學生資料</a>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>