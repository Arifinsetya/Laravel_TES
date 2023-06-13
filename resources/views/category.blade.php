@extends ('Layouts.main')

@section ('container')
   <h1 class="mb-5">Post category : {{ $category }}</h1>

   @foreach ($posts as $post )
      <article>
         <h2> 
         <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
         </h2>
         <p>by.Arifin Setya Nugroho in <a href="/category/{{ $post->category->slug}}" >{{
         $post->Category->name}}</a></p>
         <p> {{ $post->excerpt }} </p>
      </article>
   @endforeach

@endsection

