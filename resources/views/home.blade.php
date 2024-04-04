@extends('ui.main')

@section('content')
    
    <div class="w-100 d-flex justify-content-center">

    </div>
    <div class="wrapper-main d-flex align-center justify-content-center flex-direction-column">
        <div class="section-search">
            <h1 class="big-text-plan">PLAN</h1>
            <h2 id="main" class="small-text-event">YOUR EVENT NOW</h2>
            <form class="searchbar d-flex justify-content-center " action="" method="get">
                @csrf
                <input type="text" name="search" id="search" placeholder="Event organizer, birthday party, wedding organizer">
                <button class="btn-search" type="submit"><span class="material-symbols-outlined">
                    search
                    </span></button>
            </form>
        </div>
        
        <div class="section-top-vendor">
            <img class="vendor-top-img" src="{{ asset("img/homecouples.png") }}" alt="">
            <h2 class="text-center text-before-img">Plan Your Event Now!</h2>
            <div class="d-flex w-100 align-center justify-space-between flex-wrap">
                @foreach ($ads as $ad)
                <div class="card">
                    <img src="" alt="">
                    <h3>{{ $ad->title }}</h3>
                    <p>Starts from $500</p>
                </div
                @endforeach
                >
            </div>
        </div>
    </div>
@endsection