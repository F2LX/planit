@extends('ui.vendor')

@section('content')
<div class="p-5">
    <form action="/vendor/ads/add" method="post">
    @csrf
    <div class="w-100 d-flex flex-direction-column">
        <h2>Post New ads</h2>
            <p>Title:</p>
            <div class="post-title">
                <input placeholder="Input title here" type="text" name="title" id="">
            </div>
    
            <p>Description:</p>
            <div class="post-desc">
                <textarea name="description" id="" cols="20" rows="10"></textarea>
            </div>
            {{-- <br> --}}
            

            <p>Upload image:</p>
            <div class="drop-box">
                    <label for="input-file" id="drop-area">
                        <input type="file" name="image" accept="image/*" id="input-file" hidden>
                        <div id="img-view">
                            <img src="{{asset("img/UploadIcon.png")}}" alt="">
                            <p>Drag and drop or click here<br>to upload image</p>
                            <span>Upload any image from desktop</span>
                        </div>
                    </label>
            </div>
    </div>
    <button type="submit">Submit</button>
    </form>
</div>

@endsection