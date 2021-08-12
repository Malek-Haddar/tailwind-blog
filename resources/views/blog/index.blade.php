@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

  @if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a
            href="/blog/create"
            class="bg-blue-500 hover:bg-blue-300 text-white font-bold py-2 px-8 rounded-full">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">

        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

        {{--     <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span> --}}

            <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {!! $post->description !!}
            </div>
          {{--   <div>
                <img src="{{ Voyager::image( $post->image ) }}" alt="">


            </div> --}}
    {{--     <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->name }}
            </h2>

        {{--     <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {!! $post->body !!}
            </div> --}}

         @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
              <span class="float-right bg-green-300 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full ml-4">
                    <a
                    href="/blog/{{ $post->id }}/edit"

                        class="">
                        Edit
                    </a>
                </span>

              <span class=" float-right bg-yellow-300 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full ml-4">
                    <a
                    href="/blog/{{ $post->id }}"

                        class="">
                        Show
                    </a>
                </span>

                <span class="float-right bg-red-300 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                     <form
                        action="/blog/{{ $post->id }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class=""
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
     </div>
    </div>
@endforeach

@endsection
