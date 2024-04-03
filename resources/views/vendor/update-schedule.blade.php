@extends('ui.vendor')

@section('content')
    <div class="p-5">
        <form action="/vendor/ads/add" method="post">
            @csrf
            <div class="w-100 d-flex flex-direction-column add-order-form">
                <h2 class="judul-form">Update an Event</h2>
                    <label for="">Event Name</label>
                    <input placeholder="Input event name here" type="text" name="event-name" id="" required>
            
                    <label for="">Update Information</label>
                    <textarea name="description" id="" cols="20" rows="10" placeholder="Input event description here" required></textarea>

                    <label for="">Date</label>
                    <input type="date" name="date" id="">
        
                    <label for="">Time</label>
                    <input type="time" name="time" id="">

            </div>
            <button type="submit" class="btn btn-green mt-50">Submit</button>
        </form>
    </div>
@endsection