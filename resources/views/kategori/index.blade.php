@extends("layouts.app")

@section('title')
   Daftar Kategori
@endsection

@section("content")
   <ul>
      @foreach($daftar_kategori as $kategori)
         <li>{{$kategori->name}}</li>
         <br>
      @endforeach
   </ul>

   <hr>
   {{$daftar_kategori->links()}}
@endsection