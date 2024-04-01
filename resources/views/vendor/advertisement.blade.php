@extends('ui.vendor')

@section('content')
<div class="p-5">
    <div class="w-100 d-flex flex-direction-column">
        <h2>Post New ads</h2>
        <form action="">

            <div class="d-flex">
                <p>Title:</p>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
    
            <div class="d-flex">
                <p>Description:</p>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
    
            <div class="d-flex align-center">
                <p>Upload Images:</p>
                <input type="file" name="" id="">
            </div>
        </form>
    </div>
</div>

@endsection