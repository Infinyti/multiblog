@extends('layouts.app')
@section('content')
 <div class="main-blog-area ptb100 fix">
               <div class="container">
                   <div class="row">
           <div class="col-md-8 col-sm-7 col-xs-12">
                           <div class="blog-body">
                               <div class="row">
                                   @foreach($posts as $post)
				   <div class="col-md-6 col-sm-12 col-xs-12 block-img">
                                        <div class="single-news single-news-02">
                                            <div class="news-img animate-eff img-size-fix" >
                                                <a href="/post/{{ $post->id }}"><img src="{{ $post->img }}" class="img-rounded" alt=""></a>
                                            </div>
                                            <div class="news-contant">
                                                <h3 class="uppercase"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
                                                <p>Опубликовал : <a href="#">{{ isset($post->name) ? $post->name : 'Autor' }}</a> </p>
                                                <div class="news-bottom shadow-box">
                                                    <a href="#"><i class="zmdi zmdi-calendar-note"></i>{{ date("M d, Y",strtotime($post->created_at)) }}</a>
                                                    <a class="read-more" href="/post/{{ $post->id }}">Читать подробнее</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                           </div>
                       </div>

@endsection


