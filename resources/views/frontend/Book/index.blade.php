@extends('frontend/templates/default')
<!-- untuk content -->
@section('content')
    <h2>Koleksi Buku</h2>
    <blockquote>
      <p class="flow-text">Koleksi buku yang bisa kamu baca dan pinjam</p>
    </blockquote>
    <div class="row">
       @foreach ($books as $book)
       <div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
            <img src="{{$book->getCover()}}" height="200px">
            </div>
            <div class="card-stacked">
              <div class="card-content">   
            <h6>{{Str::limit($book->title,30)}}</h6>
              <p>{{Str::limit($book->description,100)}}</p>
              </div>
              <div class="card-action">
                <a href="#">Pinjam Buku</a>
              </div>
            </div>
            
          </div>
    </div> 
       @endforeach
    </div>
    <ul class="pagination center">
      <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
      <li class="active"><a href="#!">1</a></li>
      <li class="waves-effect"><a href="#!">2</a></li>
      <li class="waves-effect"><a href="#!">3</a></li>
      <li class="waves-effect"><a href="#!">4</a></li>
      <li class="waves-effect"><a href="#!">5</a></li>
      <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
@endsection