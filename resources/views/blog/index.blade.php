@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if($posts->count()==0)
                    <div class="alert alert-warning" >
                        <p>Nothing Found</p>
                    </div>
                @else
                    @foreach ($posts as $post)
                        <article class="post-item">
                            <div class="post-item-image">
                                <a href="{{ route('blog.show',$post->id) }}" >
                                    <img src="/img/{{$post->image}}" alt="{{$post->title}}">
                                </a>
                            </div>
                            <div class="post-item-body">
                                <div class="padding-10">
                                    <h2><a href="{{ route('blog.show',$post->id) }}" >{{ $post->title }}</a></h2>
                                    <p>{{$post->excerpt}}</p>
                                </div>

                                <div class="post-meta padding-10 clearfix">
                                    <div class="pull-left">
                                        <ul class="post-meta-group">
                                            <li><i class="fa fa-user"></i><a href="#"> {{ $post->author->name }}</a></li>
                                            <li><i class="fa fa-clock-o"></i><time> {{$post->date}}</time></li>
                                            <li><i class="fa fa-folder"></i><a href=" {{ route('blog',$post->category->slug) }} "> {{$post->category->slug}}</a></li>
                                            <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('blog.show',$post->id)}}">Continue Reading &raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif
                <nav>
                    {{-- {{ $posts->links('pagination::bootstrap-4') }} --}}
                    {{ $posts->links() }}
                </nav>
            </div>

            @include('layouts.sidebar')

        </div>
    </div>
@endsection
