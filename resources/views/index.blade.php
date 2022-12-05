<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./css/main.css" rel="stylesheet" type="text/css"/>
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="./css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <script src="./js/jquery-1.8.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
<!-- 上 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <ul class="nav pull-right">
                <li id="fat-menu" class="dropdown">
                    <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user icon-white"></i> admin
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="javascript:void(0);">修改密码</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="javascript:void(0);">安全退出</a></li>
                    </ul>
                </li>
            </ul>
            <a class="brand" href="index.html"><span class="first">后台管理系统</span></a>
            <ul class="nav">
                <li class="active"><a href="javascript:void(0);">首页</a></li>
                <li><a href="javascript:void(0);">系统管理</a></li>
                <li><a href="javascript:void(0);">权限管理</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- 左 -->
<div class="sidebar-nav">

    <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-exclamation-sign"></i>文章管理</a>
    <ul id="accounts-menu" class="nav nav-list collapse in">
        <li><a href="index">文章列表</a></li>
        <li><a href="show">文章新增</a></li>
    </ul>
</div>
<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">文章列表</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form action="" method="get" class="form-search">
            <div class="row-fluid" style="text-align: left;">
                <div class="pull-left span4 unstyled">
                    <p> 文章名称：<input class="input-medium" name="ser" type="text"></p>
                </div>
            </div>
            <button type="submit" class="btn">查找</button>
        </form>
    </div>
    <div class="well">
        <!-- table -->
        <table class="table table-bordered table-hover table-condensed">
            <thead>
            <tr>
                <th>编号</th>
                <th>文章标题</th>
                <th>分类</th>
                <th>作者</th>
                <th>是否发布</th>
                <th>文章图片</th>
                <th>添加时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $val)
                <tr class="success">
                    <td>{{$val['id']}}</td>
                    <td><a href="lists?id={{$val['id']}}">{{$val['title']}}</a></td>
                    <td>{{$val['tname']}}</td>
                    <td>{{$val['author']}}</td>
                    <td>
                        @if($val['status']==1)
                            发布
                        @else
                            不发布
                        @endif
                    </td>
                    <td><img src="{{$val['img']}}" width="50px"></td>
                    <td>{{$val['created_at']}}</td>
                    <td>
                        <a href="del?id={{$val['id']}}"> 删除 </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- pagination -->
        <div class="pagination">
            {{$data->links()}}
        </div>
    </div>

    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
</div>
</body>
</html>
