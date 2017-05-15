@extends('layouts.admin') <!-- views/layouts/admin.blade.php -->

@section('content') 
<div class="well well-sm">
    <fieldset>       
        <legend class="text-center">Ваши данные</legend> 
        <div class="row" style="display: grid">
            <div class="form-group" style="margin: 0">
            <label class="col-md-3">Ваш логин:</label>
            <div class="col-md-9">
                <label class="col-md-3 control-label"><big>{{ $userinfo->name }}</big></label>
            </div>
        </div>
            <div class="form-group" style="margin: 0">
            <label class="col-md-3">Ваш email:</label>
            <div class="col-md-9">
                <label class="col-md-3 control-label"><big>{{ $userinfo->email }}</big></label>
            </div>
        </div>  
        </div>
    </fieldset>
</div>

<a href="#poup-user" class="btn"><input type="button" class="btn" value="Редактировать"></a>
<div id="poup-user" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="well well-sm">
            <form action="{{ url('admin/user/update/'.$userinfo->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <legend class="text-center">Редактировать ваши данные</legend>

                    <!-- Name input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Имя:</label>
                        <div class="col-md-9">
                            <input name="name" type="text" required class="form-control" value="{{ $userinfo->name }}" placeholder="Имя">
                        </div>
                    </div>

                    <!-- Description input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Почта:</label>
                        <div class="col-md-9">
                            <input name="email" type="text" required class="form-control" value="{{ $userinfo->email }}" placeholder="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Пароль:</label>
                        <div class="col-md-9">
                            <input name="newpassword" type="password" required class="form-control" value="" placeholder="Введите для смены пароля">
                            <input type="hidden" name="password" value="{{ $userinfo->password }}"/>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $userinfo->id }}">
                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </fieldset>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
@endsection

