@extends('ui.main')

@section('content')
<div class="w-100 ml-3 overflow-x">

    <div class="wrapper-h50 d-flex mt-1">
        <div class="card-details">
            <img 
           class="width-pic" src="{{ Storage::url($vendor->img1)}}" alt="">
        </div>
        <div class="wrapper-details mr-3">
            <div class="card-details-2">
                <img 
           class="width-pic" src="{{ Storage::url($vendor->img2)}}" alt="">
            </div>
            <div class="card-details-2">
                <img 
           class="width-pic" src="{{ Storage::url($vendor->img3)}}" alt="">
            </div>
        </div>
    </div>
    <h2 class="ml-20 mb-2">{{ $vendor->name }}</h2>
    <div class="starbox mt-0">
        <span class="material-symbols-outlined" id="star-ikon">
            star_rate_half
        </span>
        <span class="material-symbols-outlined" id="star-ikon">
            star_rate_half
        </span>
        <span class="material-symbols-outlined" id="star-ikon">
            star_rate_half
        </span>
        <span class="material-symbols-outlined" id="star-ikon-gray">
            star
        </span>
        <span class="material-symbols-outlined" id="star-ikon-gray">
            star
        </span>
    </div>
    <a class="chatnow-box btn btn-green" href="/user/support">Chat Now!</a>
    <div class="ml-20 mr-20">
        <div class="d-flex  text-justify">
            <p>
                {{ $vendor->description}}</p>
        </div>
        
<hr>    
        <div class="ads-wrapper">
            <img class="ads-thumbnail" src="{{ asset("img/homebg.png") }}" alt="">
        </div>
        <h2>{{ $ads->title }}</h2>
        <p class="d-flex text-justify">{{ $ads->title }}</p>
        <hr>
        <h2 class="mt-10">Other Ads From Vendor Name</h2>
    </div>

    
    <div class="wrapper-details-2 d-flex">
        @foreach ($adsbyvendor as $ad)
        @if ($ad->id != $ads->id)
        <div class="card-details-3">
            <img class="card-thumbnail"src="{{ Storage::url($ad->image) }}" alt="">
            <div class="p-3">
                <h2 class="">{{ $ad->title }}</h2>
                <div class="">
                    <span class="material-symbols-outlined" id="star-ikon">
                        star_rate_half
                    </span>
                    <span class="material-symbols-outlined" id="star-ikon">
                        star_rate_half
                    </span>
                    <span class="material-symbols-outlined" id="star-ikon">
                        star_rate_half
                    </span>
                    <span class="material-symbols-outlined" id="star-ikon-gray">
                        star
                    </span>
                    <span class="material-symbols-outlined" id="star-ikon-gray">
                        star
                    </span>
                </div>
                <p>{{ substr($ad->description, 0, 15) . "..." }}</p>

            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>

@endsection