@extends('template.template')

@section('title', 'Catagory')

@section('content')
<div>
    <div class="content-1">
        <h3 class="CTitle">{{$currCatagory->name ?? 'None'}}</h3>
    </div>
    <div class="CatCard card-group">
        @foreach ($booksCat as $books)
            <div class="card" >
                <img class="card-img-top Image" src="{{Storage::url($books->book->image)}}">
                <div class="card-body">
                    <div>
                        <h5 class="card-title">{{$books->book->title}}</h5>
                        <p class="card-text">by<br> {{$books->book->author}}</p>
                    </div>
                    <td><a href="/detail/{{$books->book->id}}" class="btn btn-primary">Detail</a></td>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection

{{-- Bryan Theophilllus -2401953966
Kelas LL01 --}}
