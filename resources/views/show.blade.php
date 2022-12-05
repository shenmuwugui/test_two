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
        <h1 class="page-title">文章新增</h1>
    </div>

    <!-- add form -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="add" method="post" id="tab" enctype="multipart/form-data">
        @csrf
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#basic" data-toggle="tab">基本信息</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="basic">
                <div class="well">
                    <label>文章标题：</label>
                    <input type="text" name="title" value="" class="input-xlarge">
                    <label>作者：</label>
                    <input type="text" name="author" value="" class="input-xlarge">
                    <label>分类：</label>
                    <select name="tid" class="input-xlarge">
                        @foreach($type as $val)
                            <option value="{{$val['tid']}}">{{$val['tname']}}</option>
                        @endforeach
                    </select>
                    <label>文章图片：</label>
                    <input type="file" name="img" value="" class="input-xlarge">
                    <label>商品简介：</label>
                    <textarea value="Smith" name="content" rows="3" class="input-xlarge"></textarea>
                    <label>发布状态：</label>
                    <select name="status" class="input-xlarge">
                        <option value="1">发布</option>
                        <option value="0">不发布</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">保存</button>
        </div>
    </form>
    <!-- footer -->
    <footer>
        <hr>
    </footer>
</div>
</body>
</html>
