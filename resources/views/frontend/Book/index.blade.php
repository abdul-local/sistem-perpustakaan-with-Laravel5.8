@extends('frontend/templates/default')
<!-- untuk content -->
@section('content')
    <h2>Koleksi Buku</h2>
    <blockquote>
      <p class="flow-text">Koleksi buku yang bisa kamu baca dan pinjam</p>
    </blockquote>
    <div class="row">
       @foreach ($books as $buku)
      @include('frontend/templates/components/card-book',['buku'=>$buku])
       @endforeach
    </div>
    <!-- pagination -->
    {{$books->links('vendor/pagination/materialize') }}
   
@endsection