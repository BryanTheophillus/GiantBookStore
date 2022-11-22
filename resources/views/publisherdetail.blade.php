@extends('template.template')

@section('title', 'Publisher Detail')

@section('content')
<div>
    <div class="content-1">
        <h3 class="CTitle">{{$currPublisher->name}}</h3>
        <h5 class="PDetail">Address - {{$currPublisher->address}}</h5>
        <h5 class="PDetail">Phone- {{$currPublisher->phone}}</h5>
        <h5 class="PDetail">Email - {{$currPublisher->email}}</h5>
    </div>

    <div class="PubCard card-group">
        @foreach ($PublisherBook as $Pubbook)
            <div class="card" >
                <img class="card-img-top cImage" src="{{Storage::url($Pubbook->image)}}">
                <div class="card-body">
                    <div>
                        <h5 class="card-title">{{$Pubbook->title}}</h5>
                        <p class="card-text">by<br> {{$Pubbook->author}}</p>
                    </div>
                    <td><a href="/detail/{{$Pubbook->id}}" class="btn btn-primary">Detail</a></td>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
