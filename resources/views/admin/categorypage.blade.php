@extends('ui.admin')

@section('content')
    <div class="p-5">
        <div class="d-flex align-center header-home">
            <button class="back-to-without-back">
                <p>Category list</p>
            </button>

            <h3>Hi, <span class="name-color">{{ auth()->user()->name }}</span> !</h3>
            <span class="material-symbols-outlined ml-5" id="zoom-ikon">
                notifications
            </span>   
        </div>

        <hr>
    
        <form class="input-cat" action="" method="post"><input  placeholder="Add new category" type="text" name="" id=""></form>
        {{-- siapatau mau pake --}}
        {{-- <a href="#popupSuccess" class="add-order">Add New Order</a> --}}
        <div class="d-flex align-center justify-content-between" id="searchbar-list">
            <input type="text" id="message-input" placeholder="Search Category">
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
                    <th>Event Category</th>
                    <th>Added by</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Party</td>
                    <td>Alif</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Birthday</td>
                    <td>Reinert</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Wedding</td>
                    <td>David</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Party Boys</td>
                    <td>Alif</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Winter Birthday Theme Package</td>
                    <td>Reinert</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Girl's Packet</td>
                    <td>David</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Party Boys</td>
                    <td>Alif</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Winter Birthday Theme Package</td>
                    <td>Reinert</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Girl's Packet</td>
                    <td>David</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Party Boys</td>
                    <td>Alif</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Winter Birthday Theme Package</td>
                    <td>Reinert</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Girl's Packet</td>
                    <td>David</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Party Boys</td>
                    <td>Alif</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Winter Birthday Theme Package</td>
                    <td>Reinert</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Girl's Packet</td>
                    <td>David</td>
                    <td>
                        <div class="d-flex button-action">
                            <a href="#popup" class="view">View</a>
                            <a href="#popupUpdate" class="update">Update</a>
                            <a href="#popupReport" class="report">Report</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="popup" id="popupSuccess">
            <div class="popupSuccess-content">
                <a href="#">
                    <div class="d-flex align-center flex-end">
                        <span class="material-symbols-outlined" id="close-icon">
                            close
                        </span>
                    </div>
                </a>
                <div class="d-flex flex-direction-column justify-content-center align-center">
                    <span class="material-symbols-outlined" id="success-icon">
                        task_alt
                    </span>
                    <h3 class="success-text">Success</h3>
                    <p class="success-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="okay-button">Okay</a>
                </div>
            </div>
        </div>

        <div class="popup" id="popup">
            <div class="popup-content">
                <a href="#">
                    <div class="d-flex align-center flex-end">
                        <span class="material-symbols-outlined" id="close-icon">
                            close
                        </span>
                    </div>
                </a>
                
                <h2>Check Your Event Schedule Here !</h2>
                <hr>
                <h3 class="on-going-tulisan">ON-GOING</h3>

                <div class="d-flex align-center justify-content-between on-going-box w-100">
                    <div class="d-flex clock-tab align-center">
                        <span class="material-symbols-outlined">
                            alarm_on
                        </span> 
                        <h3 class="ml-5 on-going-text">First Online Meeting | 08.00 WIB </h3>
                    </div>    
                    <button class="contact-vendor">Contact Vendor Now</button>
                </div>

                <div class="d-flex w-100">
                    <div class="w-70">
                        <div class="carousel-container">
                            <div class="carousel-item-wrapper">
                                <div class="d-flex carousel-item align-center past">
                                    <div class="d-flex flex-direction-column align-center justify-content-center tanggal-pelaksanaan">
                                        <p class="bold tanggal">10</p>
                                        <p class="bold bulan">JAN</p>
                                    </div>
                                    <div class="second">
                                        <p class="bold schedule-name">Schedule Name:</p>
                                        <p class="notes">Agreement and start scheduling</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="carousel-item-wrapper">
                                <div class="d-flex carousel-item align-center present">
                                    <div class="d-flex flex-direction-column align-center justify-content-center tanggal-pelaksanaan">
                                        <p class="bold tanggal">14</p>
                                        <p class="bold bulan">JANUARY</p>
                                    </div>
                                    <div class="second">
                                        <p class="bold schedule-name">Schedule Name:</p>
                                        <p class="notes">First Online Meeting</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item-wrapper">
                                <div class="d-flex carousel-item align-center future">
                                    <div class="d-flex flex-direction-column align-center justify-content-center tanggal-pelaksanaan">
                                        <p class="bold tanggal">8</p>
                                        <p class="bold bulan">FEB</p>
                                    </div>
                                    <div class="second">
                                        <p class="bold schedule-name">Schedule Name:</p>
                                        <p class="notes">Go to Venue</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item-wrapper">
                                <div class="d-flex carousel-item align-center future">
                                    <div class="d-flex flex-direction-column align-center justify-content-center tanggal-pelaksanaan">
                                        <p class="bold tanggal">20</p>
                                        <p class="bold bulan">MAR</p>
                                    </div>
                                    <div class="second">
                                        <p class="bold schedule-name">Schedule Name:</p>
                                        <p class="notes">Rehearsal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-30">
                        <div class="d-flex flex-direction-column align-center justify-center">
                            <h3 class="home-subjudul">PROGRESS</h3>
                            <div class="progress-circle">
                                <span class="progress"></span>
                                <span class="icon material-symbols-outlined" id="icon">
                                    published_with_changes
                                </span>
                            </div>
                            
                            <h2><span class="percent-progress">25%</span> / 100%</h2>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
        
        <div class="popup" id="popupUpdate">
            <div class="popupUpdate-content">
                <a href="#">
                    <div class="d-flex align-center flex-end">
                        <span class="material-symbols-outlined" id="close-icon">
                            close
                        </span>
                    </div>
                </a>

                <h2>Update Your Event Schedule Here !</h2>
                <hr>

                <div class="profile-desc-popUp">
                    <label for="">Event Name:</label>
                    <br>
                    <input type="text" name="" id="" value="Girl's Packet" disabled>
        
                    <br>
                    <br>
                    
                    <label for="">Schedule Title:</label>
                    <br>
                    <input type="text" name="" id="" value="Offline Meeting" disabled>
        
                    <br>
                    <br>
        
                    <label for="">What you want to update?</label>
                    <br>
                    <textarea name="" id="" disabled>I want to change this schedule from Tuesday to Thursday</textarea>
        
                    <br>
                    <br>

                    <button class="submit">Submit</button>
                </div>
            </div>
        </div>

        <div class="popup" id="popupReport">
            <div class="popupReport-content">
                <a href="#">
                    <div class="d-flex align-center flex-end">
                        <span class="material-symbols-outlined" id="close-icon">
                            close
                        </span>
                    </div>
                </a>

                <h2>Report Your Event Schedule Here !</h2>
                <hr>

                <div class="profile-desc-popUp">
                    <label for="">Event Name:</label>
                    <br>
                    <input type="text" name="" id="" value="A Packet" disabled>
        
                    <br>
                    <br>

                    <label for="">What you want to report?</label>
                    <br>
                    <textarea name="" id="" disabled>Yesterday, the vendor arrived late so I waited a long time</textarea>
        
                    <br>
                    <br>

                    <button class="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection