@extends('layouts.app')
@section('content')
<div class="main-blog-area ptb100 fix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="blog-body">
                    <div class="row">

                        <h1> {{ isset($categoryName->name) ? $categoryName->name : 'test' }}</h1>
                        
                        @foreach($posts as $post)
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="single-news single-news-02"> 
                                <div class="news-img animate-eff img-size-fix">
                                    <a href="/post/{{ $post->id }}"><img src="http://{{$_SERVER['HTTP_HOST']}}/{{ $post->img }}" alt=""></a>
                                </div>
                                <div class="news-contant">
                                    <h3 class="uppercase"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
                                    <p>Опубликовал : <a href="/user/{{ isset($post->userid) ? $post->userid : 0 }}">{{ isset($post->name) ? $post->name : 'Autor' }}</a></p>
                                    <div class="news-bottom shadow-box">
                                        <a href="/date/{{ isset($post->updated_at) ? date("Ymd",strtotime($post->updated_at)) : '#' }}"><i class="zmdi zmdi-calendar-note"></i>{{ date("M d, Y",strtotime($post->created_at)) }}</a>
                                        <a class="read-more" href="/post/{{ $post->id }}">Читать подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--                    Постраничная навигация-->
                    <div class="col-md-12">                       
                        {{ $posts->render() }}                     
                    </div>
                </div>
            </div>

            @endsection



