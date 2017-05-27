<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理后台</title>
    <link href="/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="/public/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="/public/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
    <script src="/public/layer/layer.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/administrator">管理后台</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="/administrator/users/export">
                    导出所有用户
                </a>
            </li>
            <li>
                <a href="/administrator/orders/export">
                    导出所有订单
                </a>
            </li>
            <li>
                <a href="/administrator/records/export">
                    导出所有资金
                </a>
            </li>
            <li>
                <a href="/administrator/payRequests/export">
                    导出所有充值
                </a>
            </li>
            <li>
                <a href="/administrator/withdrawRequests/export">
                    导出所有提现
                </a>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <form method="get" action="/administrator/users">
                            <div class="input-group custom-search-form">
                                <input name="body_phone" type="text" class="form-control" placeholder="根据手机号搜索用户...">
                <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                            </div>
                        </form>
                    </li>
                    <li>
                        <a class="<?php echo ($active == 'users') ? 'active' : ''; ?>" href="/administrator/users"><i
                                class="fa fa-user fa-fw"></i> 用户</a>
                    </li>
                    <li>
                        <a class="<?php echo ($active == 'orders') ? 'active' : ''; ?>" href="/administrator/orders"><i
                                class="fa fa-table fa-fw"></i> 订单</a>
                    </li>
                    <li>
                        <a class="<?php echo ($active == 'records') ? 'active' : ''; ?>"
                           href="/administrator/records"><i
                                class="fa fa-list-alt fa-fw"></i> 资金</a>
                    </li>
                    <li>
                        <a class="<?php echo ($active == 'payRequests') ? 'active' : ''; ?>"
                           href="/administrator/payRequests"><i
                                class="fa fa-rmb fa-fw"></i> 充值</a>
                    </li>
                    <li>
                        <a class="<?php echo ($active == 'withdrawRequests') ? 'active' : ''; ?>"
                           href="/administrator/withdrawRequests"><i class="fa fa-briefcase fa-fw"></i> 提现</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>