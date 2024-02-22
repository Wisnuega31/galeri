@extends('layouts.app')

@section('content')
<div class="container">

    <h3 class="my-3"border-button>Daftar Album </h3>
    <a href="{{route('album.create')}}"class="btn btn-primary my-2">Tambah Album</a>
    
    @if (session('pesan'))
    <script>alert('{{session('pesan')}}')</script>
    @endif
    @foreach ($albums as $item)

    <div class="card" style="width: 18rem; float:left; margin-right:20px ">
    <img src="{{asset('images/ms jaya.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$item->NamaAlbum}}</h5>
      <p class="card-text">{{$item->Deskripsi}}</p>

      <form action="{{route('album.destroy',$item->id)}}" method="POST">
        <a href="#" class="btn btn-primary">Show</a>
        <a href="{{ route('album.edit',$item->id)}}" class="btn btn-success">Edit</a>
        @csrf
        @method('DELETE')
        <button type="sumbit" onlick="return confirm('Yakin Menghapus Data')" class="btn btn-danger">
           Delete
       </button>
      </form>
    </div>
  </div>
  @endforeach

@endsection