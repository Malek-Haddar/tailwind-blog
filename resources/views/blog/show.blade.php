@extends('welcome')

@section('content')

<div class="card ml-4 mt-4 " style="width:500px ">
    <img src="{{ Voyager::image( $blog->image ) }}" alt="" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">{{ $blog->name }}</h5>
      <span class="text-gray-500">
         - Created {{  $blog->created_at->diffForHumans()    }}
     </span>
      <p class="card-text"> {!! $blog->body !!}</p>

     <a href="/blog" class="btn btn-outline-secondary btn-sm">Go Back To Blogs</a>
      {{--  <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> --}}
</div>

  </div>




















{{-- <div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $blog->name }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
     <span class="text-gray-500">
        - Created on {{ date('jS M Y', strtotime($blog->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {!! $blog->body !!}
    </p>
    <div class="col">
        <img class="rounded mx-auto d-block" style="max-width:40%;" src="{{ Voyager::image( $blog->image ) }}" alt="">
    </div>
</div> --}}

@endsection
