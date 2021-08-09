@extends('welcome')

@section('content')
<div class="mx-1 mb-4 " >
<div class="d-flex justify-content-center align-items-center flex-column py-5 mb-4">
    <h1 class="text-uppercase main_heading"> Recent Blogs</h1>
    <p class="main_heading__para">Welcome to my <span class="text-capitalize bg-dark text-white py-2 px-3"> world of blog</span> </p>
</div>
<div class="container-fluid bg-trasparent d-flex pb-2">
    @foreach ($blogs as $blog)

    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    <div class="col">
        <div class="card h-100 shadow-sm mx-1" style="width:20rem  ">
              <img class="card-img" src="{{ Voyager::image( $blog->image ) }}" alt="img">

              <div class="card-body">
                <h4 class="card-title">{{ $blog->name }}</h4>
                <small class="text-muted cat">
                  <i class="far fa-clock text-info"></i> {{  $blog->created_at->diffForHumans() }}
                </small>
                <p class="card-text">{!! $blog->excerpt() !!}</p>
            </div>

                <div class="ml-3"> <a href="/blog/{{ $blog->id }}" class="btn btn-info">Read More</a>
            </div>
              <div class="card-footer align-item-end text-muted d-flex justify-content-between bg-transparent border-top-0">
                <div class="views"> Created : {{  $blog->updated_at    }}
                </div>

              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

</div>
@endsection



{{--<div class="container d-flex ">
     @foreach ($blogs as $blog)
    <div class="card mx-2 " style="width:300px ">
      <img src="{{ Voyager::image( $blog->image ) }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $blog->name }}</h5>
        <span class="text-gray-500">
           - Created {{  $blog->created_at->diffForHumans()    }}
       </span>
        <p class="card-text">{!! Str::limit($blog->body, 650) !!}</p>

       <a href="/blog/{{ $blog->id }}" class="btn btn-outline-success btn-sm">Read More</a>
 </div>
    </div>
    @endforeach
    </div>
    --}}
{{--     <p class="card-text">{!! Str::limit($blog->body, 650) !!}</p> --}}
