<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="../../favicon.ico">

        <title>{{config('app.name')}} | {{config('app.title')}}</title>

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/easyui/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>

        <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="/fa/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/easyui/themes/metro-orange/easyui.css">
        <link rel="stylesheet" type="text/css" href="/easyui/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="/easyui/themes/color.css">
        <link href="/css/app1.css" rel="stylesheet">
    </head>

    <body>

        <div class="easyui-layout" style="height:600px;">
            <div data-options="region:'north',border:false" style="height:70px;padding:0 20px;">
                <h1>PSB Online</h1>
            </div>
            <!-- <div data-options="region:'south',split:false,border:false" style="padding:10px;text-align:center;">
                &copy; {{date('Y')}} - udibagas@gmail.com
            </div> -->
            <!-- <div data-options="region:'east',split:true" title="East" style="width:100px;"></div> -->
            <div data-options="region:'west',split:true" title="Navigation" style="width:200px;">
                @include('layouts.nav')
            </div>
            <div data-options="region:'center',split:true,border:false">
                <div id="tt" class="easyui-tabs" style="height:100%">
                    <!-- content will be here -->
                </div>
            </div>
        </div>

    </body>

</html>
