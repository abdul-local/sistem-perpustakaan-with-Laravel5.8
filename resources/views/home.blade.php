@extends('frontend/templates/default')

@section('content')
<div class="row">
    <h3 class="red-text accent-2"><strong>Buku Yang Sedang di Pinjam</strong></h3>
    @foreach ($books as $buku)
    <div class="col s12 m12">
        <div class="card horizontal hoverable">
            <div class="card-image">
            <img src="{{$buku->getCover()}}" height="200px">
            </div>
            <div class="card-stacked">
              <div class="card-content">   
              <h5 class="red-text accent-2">{{$buku->title}}</h5>
              <blockquote>
                <p>{{$buku->description}}</p>
              </blockquote>
              <p><i class="material-icons">person</i>{{$buku->author->name}}
              </div>
            </div>
            
          </div>
    </div>  
    @endforeach
</div>
@endsection
