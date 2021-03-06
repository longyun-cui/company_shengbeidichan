@extends('admin.layout.layout')

@section('title')
    @if($operate == 'create') 添加楼盘 @else 编辑楼盘 @endif
@endsection

@section('header')
    @if($operate == 'create') 添加楼盘 @else 编辑楼盘 @endif
@endsection

@section('description')
    @if($operate == 'create') 添加楼盘 @else 编辑楼盘 @endif
@endsection

@section('breadcrumb')
    <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{url('/admin/item/list')}}"><i class="fa "></i> 内容列表</a></li>
    <li><a href="#"><i class="fa "></i> Here</a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info form-container">

            <div class="box-header with-border" style="margin:16px 0;">
                <h3 class="box-title">@if($operate == 'create') 添加楼盘 @else 编辑楼盘 @endif</h3>
                <div class="box-tools pull-right">
                </div>
            </div>

            <form action="" method="post" class="form-horizontal form-bordered" id="form-edit-item">
            <div class="box-body">

                {{csrf_field()}}
                <input type="hidden" name="operate" value="{{$operate or ''}}" readonly>
                <input type="hidden" name="encode_id" value="{{$encode_id or encode(0)}}" readonly>
                <input type="hidden" name="category" value="11" readonly>


                {{--标题--}}
                <div class="form-group">
                    <label class="control-label col-md-2">标题</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="title" placeholder="请输入标题" value="{{$data->title or ''}}">
                    </div>
                </div>
                {{--标题--}}
                <div class="form-group">
                    <label class="control-label col-md-2">副标题</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="subtitle" placeholder="请输入副标题" value="{{$data->subtitle or ''}}">
                    </div>
                </div>
                {{--说明--}}
                <div class="form-group">
                    <label class="control-label col-md-2">描述</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="description" placeholder="描述" value="{{$data->description or ''}}">
                        {{--<textarea class="form-control" name="description" rows="3" cols="100%">{{$data->descr、iption or ''}}</textarea>--}}
                    </div>
                </div>
                {{--均价--}}
                <div class="form-group">
                    <label class="control-label col-md-2">均价</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[average]" placeholder="均价" value="{{$data->custom->average or ''}}">
                    </div>
                </div>
                {{--总价--}}
                <div class="form-group">
                    <label class="control-label col-md-2">总价</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[total]" placeholder="总价" value="{{$data->custom->total or ''}}">
                    </div>
                </div>
                {{--位置--}}
                <div class="form-group">
                    <label class="control-label col-md-2">位置</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[position]" placeholder="位置" value="{{$data->custom->position or ''}}">
                    </div>
                </div>
                {{--区域--}}
                <div class="form-group">
                    <label class="control-label col-md-2">区域</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[district]" placeholder="区域 | jiaxing | jiaxingxiuzhou | jiashan | pinghu | ... " value="{{$data->custom->district or ''}}">
                    </div>
                </div>
                {{--开盘时间--}}
                <div class="form-group">
                    <label class="control-label col-md-2">开盘时间</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[start_time]" placeholder="开盘时间" value="{{$data->custom->start_time or ''}}">
                    </div>
                </div>
                {{--入住时间--}}
                <div class="form-group">
                    <label class="control-label col-md-2">交房时间</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[live_time]" placeholder="交房时间" value="{{$data->custom->live_time or ''}}">
                    </div>
                </div>
                {{--开发商--}}
                <div class="form-group">
                    <label class="control-label col-md-2">开发商</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[developer]" placeholder="开发商" value="{{$data->custom->developer or ''}}">
                    </div>
                </div>
                {{--产权--}}
                <div class="form-group">
                    <label class="control-label col-md-2">产权</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[property_rights]" placeholder="产权" value="{{$data->custom->property_rights or ''}}">
                    </div>
                </div>
                {{--户数--}}
                <div class="form-group">
                    <label class="control-label col-md-2">户数</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[households]" placeholder="户数" value="{{$data->custom->households or ''}}">
                    </div>
                </div>
                {{--建筑面积--}}
                <div class="form-group">
                    <label class="control-label col-md-2">建筑面积</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[acreage]" placeholder="建筑面积（单位 m2）" value="{{$data->custom->acreage or ''}}">
                    </div>
                </div>
                {{--容积率--}}
                <div class="form-group">
                    <label class="control-label col-md-2">容积率</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[capacity_rate]" placeholder="容积率" value="{{$data->custom->capacity_rate or ''}}">
                    </div>
                </div>
                {{--绿化率--}}
                <div class="form-group">
                    <label class="control-label col-md-2">绿化率</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[greening_rate]" placeholder="绿化率" value="{{$data->custom->greening_rate or ''}}">
                    </div>
                </div>
                {{--装修状态--}}
                <div class="form-group">
                    <label class="control-label col-md-2">装修状态</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[decoration]" placeholder="装修状态" value="{{$data->custom->decoration or ''}}">
                    </div>
                </div>
                {{--户型--}}
                <div class="form-group">
                    <label class="control-label col-md-2">户型</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[type]" placeholder="户型" value="{{$data->custom->type or ''}}">
                    </div>
                </div>
                {{--物业类型--}}
                <div class="form-group">
                    <label class="control-label col-md-2">物业类型</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[manager_type]" placeholder="物业类型" value="{{$data->custom->manager_type or ''}}">
                    </div>
                </div>
                {{--物业公司--}}
                <div class="form-group">
                    <label class="control-label col-md-2">物业公司</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[manager_company]" placeholder="物业公司" value="{{$data->custom->property_company or ''}}">
                    </div>
                </div>
                {{--物业费用--}}
                <div class="form-group">
                    <label class="control-label col-md-2">物业费用</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[manager_cost]" placeholder="物业费用（单价 /m2/月）" value="{{$data->custom->manager_cost or ''}}">
                    </div>
                </div>
                {{--楼盘详情--}}
                <div class="form-group">
                    <label class="control-label col-md-2">楼盘详情</label>
                    <div class="col-md-8 ">
                        {{--<input type="text" class="form-control" name="custom[description]" placeholder="" value="{{$data->custom->manager_cost or ''}}">--}}
                        <textarea class="form-control" name="custom[description]" rows="3" cols="100%">{{$data->custom->description or ''}}</textarea>
                    </div>
                </div>

                {{--最新动态--}}
                <div class="form-group">
                    <label class="control-label col-md-2">最新动态</label>
                    <div class="col-md-8 ">
                        {{--<input type="text" class="form-control" name="custom[description]" placeholder="" value="{{$data->custom->manager_cost or ''}}">--}}
                        <textarea class="form-control" name="custom[recent_news]" rows="3" cols="100%">{{$data->custom->recent_news or ''}}</textarea>
                    </div>
                </div>

                {{--链接地址--}}
                <div class="form-group _none">
                    <label class="control-label col-md-2">链接地址</label>
                    <div class="col-md-8 ">
                        <div><input type="text" class="form-control" name="link_url" placeholder="链接地址" value="{{$data->link_url or ''}}"></div>
                    </div>
                </div>

                {{--选择目录--}}
                <div class="form-group _none">
                    <label class="control-label col-md-2">选择目录</label>
                    <div class="col-md-8 ">
                        <select class="form-control" onchange="select_menu()">
                            <option data-id="0">未分类</option>
                            {{--@if(!empty($data->menu_id))--}}
                                {{--@foreach($menus as $v)--}}
                                    {{--<option data-id="{{$v->id}}" @if($data->menu_id == $v->id) selected="selected" @endif>{{$v->title}}</option>--}}
                                {{--@endforeach--}}
                            {{--@else--}}
                                {{--@foreach($menus as $v)--}}
                                    {{--<option data-id="{{$v->id}}">{{$v->title}}</option>--}}
                                {{--@endforeach--}}
                            {{--@endif--}}
                        </select>
                        <input type="hidden" value="{{$data->menu_id or 0}}" name="menu_id" id="menu-selected">
                    </div>
                </div>

                {{--添加目录--}}
                <div class="form-group _none">
                    <label class="control-label col-md-2">添加目录</label>
                    <div class="col-md-8 ">
                        <select name="menus[]" id="menus" multiple="multiple" style="width:100%;">
                            {{--<option value="{{$data->people_id or 0}}">{{$data->people->name or '请选择作者'}}</option>--}}
                        </select>
                    </div>
                </div>

                {{--内容--}}
                <div class="form-group">
                    <label class="control-label col-md-2">图文详情</label>
                    <div class="col-md-8 ">
                        <div>
                            @include('UEditor::head')
                            <!-- 加载编辑器的容器 -->
                            <script id="container" name="content" type="text/plain">{!! $data->content or '' !!}</script>
                            <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var ue = UE.getEditor('container');
                                ue.ready(function() {
                                    ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
                                });
                            </script>
                        </div>
                    </div>
                </div>

                {{--户型图--}}
                <div class="form-group">
                    <label class="control-label col-md-2">户型图</label>
                    <div class="col-md-8 fileinput-group">
                        @if(!empty($data->custom2))
                            @foreach($data->custom2 as $img)
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$img->img)}}" alt="" />
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        @endif
                    </div>

                    <div class="col-md-8 col-md-offset-2 ">
                        <input id="house-type-images" type="file" class="file-" name="house_type_images[]" multiple >
                    </div>
                </div>

                {{--样板图--}}
                <div class="form-group">
                    <label class="control-label col-md-2">样板图</label>
                    <div class="col-md-8 fileinput-group">
                        @if(!empty($data->custom3))
                            @foreach($data->custom3 as $img)
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$img->img)}}" alt="" />
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        @endif
                    </div>

                    <div class="col-md-8 col-md-offset-2 ">
                        <input id="house-template-images" type="file" class="file-" name="house_template_images[]" multiple >
                    </div>
                </div>

                {{--cover 封面图片--}}
                <div class="form-group">
                    <label class="control-label col-md-2">封面图片</label>
                    <div class="col-md-8 fileinput-group">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                @if(!empty($data->cover_pic))
                                    <img src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$data->cover_pic)}}" alt="" />
                                @endif
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail">
                            </div>
                            <div class="btn-tool-group">
                                <span class="btn-file">
                                    <button class="btn btn-sm btn-primary fileinput-new">选择图片</button>
                                    <button class="btn btn-sm btn-warning fileinput-exists">更改</button>
                                    <input type="file" name="cover" />
                                </span>
                                <span class="">
                                    <button class="btn btn-sm btn-danger fileinput-exists" data-dismiss="fileinput">移除</button>
                                </span>
                            </div>
                        </div>
                        <div id="titleImageError" style="color: #a94442"></div>

                    </div>
                </div>

                {{--启用--}}
                @if($operate == 'create')
                    <div class="form-group form-type">
                        <label class="control-label col-md-2">启用</label>
                        <div class="col-md-8">
                            <div class="btn-group">

                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="active" value="0" checked="checked"> 暂不启用
                                        </label>
                                    </div>
                                </button>
                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="active" value="1"> 启用
                                        </label>
                                    </div>
                                </button>

                            </div>
                        </div>
                    </div>
                @endif

            </div>
            </form>

            <div class="box-footer">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="button" class="btn btn-success" id="edit-item-submit"><i class="fa fa-check"></i> 提交</button>
                        <button type="button" onclick="history.go(-1);" class="btn btn-default">返回</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
@endsection


@section('style')
    <link href="https://cdn.bootcss.com/select2/4.0.5/css/select2.min.css" rel="stylesheet">
@endsection


@section('js')
<script src="https://cdn.bootcss.com/select2/4.0.5/js/select2.min.js"></script>
<script>
    $(function() {

        $("#house-type-images").fileinput({
            allowedFileExtensions : [ 'jpg', 'jpeg', 'png', 'gif' ],
            showUpload: false
        });

        $("#house-template-images").fileinput({
            allowedFileExtensions : [ 'jpg', 'jpeg', 'png', 'gif' ],
            showUpload: false
        });

        // 添加or编辑
        $("#edit-item-submit").on('click', function() {
            var options = {
                url: "{{url('/admin/item/edit')}}",
                type: "post",
                dataType: "json",
                // target: "#div2",
                success: function (data) {
                    if(!data.success) layer.msg(data.msg);
                    else
                    {
                        layer.msg(data.msg);
                        location.href = "{{url('/admin/item/list?category=house')}}";
                    }
                }
            };
            $("#form-edit-item").ajaxSubmit(options);
        });

        $('#menus').select2({
            ajax: {
                url: "{{url('/admin/item/select2_menus')}}",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        keyword: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, params) {

                    params.page = params.page || 1;
//                    console.log(data);
                    return {
                        results: data,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
            minimumInputLength: 0,
            theme: 'classic'
        });

    });
</script>
<script type="text/javascript">


</script>
@endsection
