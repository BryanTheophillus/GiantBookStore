@extends('template.template')

@section('title', 'Contact')

@section('content')
<div>
    <div class="content-1">
        <h3 class="CTitle">Contact</h3>
    </div>
    <div class="Contact">
        <div class="row">
            <div class="col-6">
                <img class="maps" src="{{ URL::to('/storage/image/maps.jpeg') }}">
            </div>
            <div class="col-6" id="det">
                <h3>Store Address:</h3>
                <p>Jalan Pembangunan Baru Raya,</p>
                <p>Kompleks Pertokoan Emerald Blok III/12</p>
                <p>Bintaro, Tangerang Selatan</p>
                <p>Indonesia</p>

                <h3>Open Daily:</h3>
                <p>08.00 - 20.00</p>

                <h3>Contact:</h3>
                <p>Phone : 021-08899776655</p>
                <p>Email : giantbooksupplier@giantbooksupplier.com</p>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Bryan Theophilllus -2401953966
Kelas LL01 --}}
