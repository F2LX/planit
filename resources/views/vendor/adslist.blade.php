@extends('ui.vendor')

@section('content')
    <div class="p-5">
        <div class="d-flex align-center justify-content-between" id="searchbar-list">
            <input type="text" id="message-input" placeholder="Search">
            <button class="button-search">
                <span class="material-symbols-outlined" id="search-ikon">
                    search
                </span>    
            </button>
            
        </div>

        <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Ads Title</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                @if ($ads)
                @foreach ($ads as $ad)
                <tr>
                    <td>{{ $ad->id }}</td>
                    <td>{{ $ad->title }}</td>
                    <td>Rp{{ $ad->price }}</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </table>
            @if (!$ads)
            <p class="text-center">No ads available</p>
            @endif
           
        </div>
        <a href="/vendor/create-ads" class="add-order">Add New Ads</a>
        {{-- <tr>
            <td>14</td>
            <td>Girl's Packet</td>
            <td>$600</td>
            <td>
                <div class="d-flex button-action">
                    <a href="#popup" class="view">View</a>
                    <a href="#popupUpdate" class="update">Update</a>
                    <a href="#popupReport" class="report">Report</a>
                </div>
            </td>
        </tr> --}}
    </div>
@endsection