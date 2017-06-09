@extends('admin.layouts.default')
{{--@section('css')
    <link rel="stylesheet" href="/plugins/iCheck/all.css">
    @endsection--}}
{{--@section('js')
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <script>

        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
    </script>

@endsection--}}
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                   {{--<div class="col-xs-10">
                       <form class="form-inline">
                           <div class="form-group">
                               <label for="exampleInputName2">Name</label>
                               <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                           </div>
                           <div class="form-group">
                               <label for="exampleInputEmail2">Email</label>
                               <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                           </div>
                           <button type="submit" class="btn btn-default">查询</button>
                       </form>
                   </div>--}}
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">新增菜单</h4>
                                </div>
                                <div class="modal-body">

                                        <form class="form-horizontal">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-default" data-dismiss="modal">取消</button>
                                                <button type="submit" class="btn btn-info pull-right">保存</button>
                                            </div>

                                        </form>

                                </div>
                                {{--<div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-10 col-xs-2">
                        <a href="{{route('menu.create')}}" class="btn btn-primary">增加</a>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            增加
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>菜单名</th>
                            <th>路由</th>
                            <th>是否显示</th>
                            <th>图标</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{$menu['name']}}</td>
                                <td>{{$menu['route']}}</td>
                                <td>
                                    @if($menu['ishow']==1)是@else否@endif
                                </td>
                                <td>{{$menu['icon']}}</td>
                                <td>{{$menu['sort']}}</td>
                                <td>
                                    <a class="btn btn-primary">添加子菜单</a><a class="btn btn-primary">修改</a>
                                </td>

                            </tr>
                        @endforeach
                    </table>
                    {{--<div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal-red">批量删除
                        </label>
                    </div>--}}
                </div>

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection