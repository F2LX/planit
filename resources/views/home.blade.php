@extends('ui.main')

@section('content')
    <div class="wrapper-main text-center d-flex align-center justify-content-center flex-direction-column">
        <div class="section-search">
            <h2 id="main">Plan Your Event Now!</h2>
            <form class="searchbar d-flex justify-content-center " action="" method="get">
                @csrf
                <input type="text" name="search" id="search" placeholder="Event organizer, birthday party, wedding organizer">
                <button class="btn-search" type="submit">Search Icon Here</button>
            </form>
        </div>
        
        <div class="section-top-vendor">
            <h2 class="text-center">Plan Your Event Now!</h2>
            <div class="d-flex w-100 align-center justify-space-between flex-wrap">
                <div class="card">
                    <img src="" alt="">
                    <h3>Taylor Series Vendor</h3>
                    <p>Starts from $500</p>
                </div>
                <div class="card">
                    <img src="" alt="">
                    <h3>Taylor Series Vendor</h3>
                    <p>Starts from $500</p>
                </div>
                <div class="card">
                    <img src="" alt="">
                    <h3>Taylor Series Vendor</h3>
                    <p>Starts from $500</p>
                </div>
                <div class="card">
                    <img src="" alt="">
                    <h3>Taylor Series Vendor</h3>
                    <p>Starts from $500</p>
                </div>
                <div class="card">
                    <img src="" alt="">
                    <h3>Taylor Series Vendor</h3>
                    <p>Starts from $500</p>
                </div>
                <div class="card">
                    <img src="" alt="">
                    <h3>Taylor Series Vendor</h3>
                    <p>Starts from $500</p>
                </div>
            </div>
        </div>
    </div>
@endsection