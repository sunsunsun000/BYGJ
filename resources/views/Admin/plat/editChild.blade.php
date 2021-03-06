@extends('Admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            编辑{{$payChannel->mainGamePlat->main_game_plat_name}}子类
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <form method="POST" action="{{ route('plats.updateChild',['id'=>$payChannel->game_plat_id]) }}" class="form-horizontal" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="pay_channel_type_id" class="col-sm-2 text-right">父级类型:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="main_game_plat_id">
                                    @foreach($channelType as $v)
                                        <option value="{{$v->main_game_plat_id}}"  @if($payChannel->main_game_plat_id == $v->main_game_plat_id) selected @endif>{{$v->main_game_plat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- English Game Name Field -->
                        <div class="form-group">
                            <label for="game_plat_name" class="col-sm-2 text-right">平台名称:</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="game_plat_name" type="text" id="game_plat_name" value="{{ old('game_plat_name')?:$payChannel->game_plat_name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="english_game_plat_name" class="col-sm-2 text-right">英语名称:</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="english_game_plat_name" type="text" id="english_game_plat_name" value="{{ old('english_game_plat_name')?:$payChannel->english_game_plat_name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="page_site" class="col-sm-2 text-right">大厅代码:</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="page_site" type="text" id="page_site" value="{{ old('page_site')?:$payChannel->page_site }}">
                            </div>
                        </div>

                        <!-- English Game Name Field -->
                        <div class="form-group">
                            <label class="col-sm-2 text-right">平台状态:</label>
                            <div class="col-sm-6">
                                <input class="minimal" name="status" type="radio" value="1" @if($payChannel->status == 1) checked @endif> 正常&emsp;
                                <input class="minimal" name="status" type="radio" value="0" @if($payChannel->status == 0) checked @endif> 关闭
                            </div>
                        </div>
                        <div class="form-group">
                        	<div class="col-sm-1"></div>
                        	<div class="col-sm-8">
	                            <input class="btn btn-primary" type="submit" value="保存">&emsp;&emsp;
                                <a href="{{route('plats.index')}}" class="btn btn-default">取消</a>
                        	</div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

