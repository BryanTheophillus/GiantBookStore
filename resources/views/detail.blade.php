@extends('template.template')

@section('title', 'Detail')

@section('content')

<div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="BookDetImg " src="{{Storage::url($detail->image)}}" alt="{{$detail->name}}">
            </div>
            <div class="col-6">
                <div class="Booktitle">
                    <h4>{{$detail->title}}</h4>
                </div>
                <div class="BookDetail">
                    <h5>Author:</h5>
                    <span>{{$detail->author}}</span>
                </div>
                <div class="BookDetail">
                    <h5>Publisher:</h5>
                    <span>{{$detail->publisher->name}}</span>
                </div>

                <div class="BookDetail">
                    <h5>Year:</h5>
                    <span>{{$detail->year}}</span>
                </div>

                <div class="BookDetails">
                    <h5>Synopsis:</h5>
                    <span>{{$detail->synopsis}}</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{-- Bryan Theophilllus -2401953966
Kelas LL01 --}}
