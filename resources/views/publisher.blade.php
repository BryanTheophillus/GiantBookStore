@extends('template.template')

@section('title', 'Publisher')

@section('content')
<div>
    <div class="content-1">
        <h3 class="CTitle">Publisher</h3>
    </div>
    <div class="card-group">
        @foreach ($publisher as $pubs)
            <div class="card" >
                <img class="card-img-top cImage" src="{{Storage::url($pubs->image)}}">
                <div class="card-body">
                    <div>
                        <h5 class="card-title">{{$pubs->name}}</h5>
                    </div>
                    <td><a href="/publisher/{{$pubs->id}}" class="btn btn-primary">Detail</a></td>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection
