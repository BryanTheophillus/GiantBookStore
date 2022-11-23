@extends('template.template')

@section('title', 'Home')

@section('content')
<div>
    <div class="content-1">
        <h3 class="CTitle">Book List</h3>
    </div>
    <div class="card-group">
        @foreach ($books as $book)
            <div class="card" >
                <img class="card-img-top cImage" src="{{Storage::url($book->image)}}">
                <div class="card-body">
                    <div>
                        <h5 class="card-title">{{$book->title}}</h5>
                        <p class="card-text">by<br> {{$book->author}}</p>
                    </div>
                    <td><a href="/detail/{{$book->id}}" class="btn btn-primary">Detail</a></td>
                </div>
            </div>
        @endforeach

    </div>


</div>
<div class="pb-3 pt-2" id="page">
    {!! $books->links() !!}
</div>
@endsection

{{-- Bryan Theophilllus -2401953966
Kelas LL01 --}}
