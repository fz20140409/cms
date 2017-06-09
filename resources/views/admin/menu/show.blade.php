@extends('admin.layouts.default')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                @include('admin.layouts._alert_session')

                <form class="form-horizontal" method="post" action="{{route('menu.store')}}">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="pid" class="col-sm-2 control-label">上级菜单</label>
                            <div class="col-sm-8">
                                <select name="pid" id="pid" class="form-control">
                                    <option value="0">作为一级菜单</option>
                                    @foreach($menus as $menu)
                                        <option value="{{$menu['id']}}">{{$menu['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">菜单名</label>
                            <div class="col-sm-8" >
                                <input name="name" type="text" class="form-control" id="name" placeholder="菜单名" value="{{old('name')}}">
                                @if($errors->has('name'))
                                    @component('component._alert',['type'=>'warning'])
                                    {{$errors->first('name')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="route" class="col-sm-2 control-label">路由</label>
                            <div class="col-sm-8">
                                <input name="route" type="text" class="form-control" id="route" placeholder="路由" value="{{old('route')}}">
                                @if($errors->has('route'))
                                    @component('component._alert',['type'=>'warning'])
                                    {{$errors->first('route')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="icon" class="col-sm-2 control-label">图标</label>
                            <div class="col-sm-8">
                                <input name="icon" type="text" class="form-control" id="icon" placeholder="图标" value="{{old('icon')}}">
                                @if($errors->has('icon'))
                                    @component('component._alert',['type'=>'warning'])
                                    {{$errors->first('icon')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label">排序</label>
                            <div class="col-sm-8">
                                <input name="sort" type="text" class="form-control" id="sort" placeholder="排序" value="{{old('sort')}}">
                                @if($errors->has('sort'))
                                    @component('component._alert',['type'=>'warning'])
                                    {{$errors->first('sort')}}
                                    @endcomponent
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">是否显示</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input checked type="radio" name="ishow" id="inlineRadio1" value="1"> 是
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="ishow" id="inlineRadio2" value="0"> 否
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('menu.index')}}" class="btn btn-default">取消</a>
                        <button type="submit" class="btn btn-primary pull-right">保存</button>
                    </div>

                </form>
            </div>


        </div>
    </div>
@endsection