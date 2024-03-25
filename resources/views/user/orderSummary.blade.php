@extends('ui.user')

@section('content')
    <div class="p-5">
        <div class="d-flex align-center header-home">
            <h2>Hi, <span class="name-color">McDidi</span> !</h2>
            <span class="material-symbols-outlined ml-5" id="zoom-ikon">
                notifications
            </span>            
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Order History</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Summer Package</td>
                <td>$900</td>
                <td>
                    <div class="d-flex button-action">
                        <button class="view">View</button>
                        <button class="ml-3 update">Update</button>
                        <button class="ml-3 report">Report</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Winter Birthday Theme Package</td>
                <td>$450</td>
                <td>
                    <div class="d-flex button-action">
                        <button class="view">View</button>
                        <button class="ml-3 update">Update</button>
                        <button class="ml-3 report">Report</button>
                    </div>
                </td>
            </tr>
        </table>
        <button class="add-order">Add New Order</button>
    </div>
@endsection