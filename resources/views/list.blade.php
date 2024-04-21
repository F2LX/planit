@extends('ui.main')

@section('content')
    <div class="wrapper">
        <div class="judulWrapper">
            <h1 class="judul">Vendors</h1>
        </div>
        <div class="findWrapper">
            <select class="Category" name="Category" id="">
                <option value="Category"hidden>All Category</option>
                <option value="Hotel">All Category</option>
                <option value="Hotel">Wedding Venue</option>
                <option value="Wedding Venue & Restaurant">Restaurant Venue</option>
                <option value="Wedding Decorator">Decoration</option>
                <option value="Wedding Stylist">Stylist</option>
                <option value="Photographer & Videographer">Photographer & Videographer</option>
                <option value="Live Streaming">Live Streaming</option>
                <option value="Wedding Car Rental">Car Rental</option>
                <option value="Sound System & Equipment">Sound System & Equipment</option>
            </select>
            <select class="City" name="City" id="">
                <option value="City"hidden>All Cities</option>
                <option value="Jakarta">All Cities</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Bogor">Bogor</option>
                <option value="Bali">Bali</option>
                <option value="Medan">Medan</option>
                <option value="Kalimantan">Kalimantan</option>
                <option value="Belanda">Belanda</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Perancis">Perancis</option>
            </select>
            <button class="find">Find Vendor</button>
        </div>

        <div class="judulGambar">
            <h3>Jakarta Wedding Venue</h3>
        </div>
        
        <div class="gambarWrapper">
            {{-- asli card --}}
            <div class="frame">
                <div class="gambar align-center flex-direction-column">
                    <img class="pic-size" src="https://media.istockphoto.com/id/1170495743/id/foto/upacara-pernikahan-malam-dengan-lengkungan-bunga-anggrek-kursi-dan-lampu-bohlam-di-hutan-di.jpg?s=612x612&w=0&k=20&c=OLMcVkD34JREE8axGSXTkjcjHudNMms_Sk-fxGnv22w=" alt="">
                </div>
                
                <div class="keterangan">
                    <h3 class="margin-0">Weddingku</h3>
                    <h5 class="margin-0">Hotel Venue</h5>
                    {{-- bintang --}}
                    <div class="bintang">
                        <span class="material-symbols-outlined">
                            star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                    </div>
                    
                    {{-- atribute --}}
                    <div class="atribute">
                        {{-- love --}}
                        <div class="favorite">
                            <span class="material-symbols-outlined">
                                favorite
                            </span>
                        <div class="love-count">
                            <h6 class="love-count">16</h6>
                        </div>  
                        </div>
                        
                        {{-- galery --}}
                        <div class="galery">
                            <span class="material-symbols-outlined">
                                photo_library
                                </span>
                        <div class="galery-count">
                            <h6 class="galery-count">23</h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- paste --}}
            <div class="frame">
                <div class="gambar align-center flex-direction-column">
                    <img class="pic-size" src="https://media.istockphoto.com/id/591427454/id/foto/mengangkat-kacamata-dengan-sampanye-di-meja-pernikahan.jpg?s=612x612&w=0&k=20&c=rlKWpRrDgL36y6io7DumKfoTP7R4nRKW-nOIYTXUS-4=" alt="">
                    <p class="hargaTerbaik">Best Price</p>
                </div>
                
                <div class="keterangan">
                    <h3 class="margin-0">Bersama_Selamanya.id</h3>
                    <h5 class="margin-0">Restaurant Venue</h5>
                    {{-- bintang --}}
                    <div class="bintang">
                        <span class="material-symbols-outlined">
                            star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                    </div>
                    
                    {{-- atribute --}}
                    <div class="atribute">
                        {{-- love --}}
                        <div class="favorite">
                            <span class="material-symbols-outlined">
                                favorite
                            </span>
                        <div class="love-count">
                            <h6 class="love-count">14</h6>
                        </div>  
                        </div>
                        
                        {{-- galery --}}
                        <div class="galery">
                            <span class="material-symbols-outlined">
                                photo_library
                                </span>
                        <div class="galery-count">
                            <h6 class="galery-count">20</h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- paste --}}
            <div class="frame">
                <div class="gambar align-center flex-direction-column">
                    <img class="pic-size" src="https://media.istockphoto.com/id/1463458517/photo/birthday-party-for-1-year-old-girl-on-a-background-photo-wall-arch-decorated-pink-balloons.webp?b=1&s=170667a&w=0&k=20&c=yq5WBKJ_CNXxKQ1eu7qQuR_JIZ0my0HPoiiFu3mPDzI=" alt="">
                    <p class="hargaTerbaik">Best Price</p>
                </div>
                
                <div class="keterangan">
                    <h3 class="margin-0">Mydream.com</h3>
                    <h5 class="margin-0">Decoration</h5>
                    {{-- bintang --}}
                    <div class="bintang">
                        <span class="material-symbols-outlined">
                            star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                    </div>
                    
                    {{-- atribute --}}
                    <div class="atribute">
                        {{-- love --}}
                        <div class="favorite">
                            <span class="material-symbols-outlined">
                                favorite
                            </span>
                        <div class="love-count">
                            <h6 class="love-count">18</h6>
                        </div>  
                        </div>
                        
                        {{-- galery --}}
                        <div class="galery">
                            <span class="material-symbols-outlined">
                                photo_library
                                </span>
                        <div class="galery-count">
                            <h6 class="galery-count">28</h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- paste --}}
     <div class="frame">
        <div class="gambar align-center flex-direction-column">
            <img class="pic-size" src="https://media.istockphoto.com/id/1133873119/id/foto/pengaturan-tabel-untuk-acara.jpg?s=612x612&w=0&k=20&c=3OHhi6g9l287s5D9yRI19dOhR23FF7xIgfL3g3JOY_k=" alt="">
        </div>
        
        <div class="keterangan">
            <h3 class="margin-0">Cerita Kita</h3>
            <h5 class="margin-0">Hotel Venue</h5>
            {{-- bintang --}}
            <div class="bintang">
                <span class="material-symbols-outlined">
                    star
                    </span>
                 <span class="material-symbols-outlined">
                     star
                    </span>
                 <span class="material-symbols-outlined">
                     star
                    </span>
                 <span class="material-symbols-outlined">
                     star
                    </span>
                 <span class="material-symbols-outlined">
                     star
                    </span>
            </div>
            
            {{-- atribute --}}
            <div class="atribute">
                {{-- love --}}
                <div class="favorite">
                    <span class="material-symbols-outlined">
                        favorite
                    </span>
                <div class="love-count">
                    <h6 class="love-count">35</h6>
                </div>  
                </div>
                
                {{-- galery --}}
                <div class="galery">
                    <span class="material-symbols-outlined">
                        photo_library
                        </span>
                <div class="galery-count">
                    <h6 class="galery-count">30</h6>
                </div>
                </div>
            </div>
        </div>
    </div>

            {{-- paste --}}
            <div class="frame">
                <div class="gambar align-center flex-direction-column">
                    <img class="pic-size" src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8c3R5bGlzdHxlbnwwfHwwfHx8MA%3D%3D" alt="">
                    <p class="hargaTerbaik">Most Popular</p>
                </div>
                
                <div class="keterangan">
                    <h3 class="margin-0">Cerita Kita Organizer</h3>
                    <h5 class="margin-0">Stylist</h5>
                    {{-- bintang --}}
                    <div class="bintang">
                        <span class="material-symbols-outlined">
                            star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                         <span class="material-symbols-outlined">
                             star
                            </span>
                    </div>
                    
                    {{-- atribute --}}
                    <div class="atribute">
                        {{-- love --}}
                        <div class="favorite">
                            <span class="material-symbols-outlined">
                                favorite
                            </span>
                        <div class="love-count">
                            <h6 class="love-count">9</h6>
                        </div>  
                        </div>
                        
                        {{-- galery --}}
                        <div class="galery">
                            <span class="material-symbols-outlined">
                                photo_library
                                </span>
                        <div class="galery-count">
                            <h6 class="galery-count">13</h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- paste --}}
        <div class="frame">
            <div class="gambar align-center flex-direction-column">
                <img class="pic-size" src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8c3R5bGlzdHxlbnwwfHwwfHx8MA%3D%3D" alt="">
                <p class="hargaTerbaik">Most Popular</p>
            </div>
            
            <div class="keterangan">
                <h3 class="margin-0">Cerita Kita Organizer</h3>
                <h5 class="margin-0">Stylist</h5>
                {{-- bintang --}}
                <div class="bintang">
                    <span class="material-symbols-outlined">
                        star
                        </span>
                     <span class="material-symbols-outlined">
                         star
                        </span>
                     <span class="material-symbols-outlined">
                         star
                        </span>
                     <span class="material-symbols-outlined">
                         star
                        </span>
                     <span class="material-symbols-outlined">
                         star
                        </span>
                </div>
                
                {{-- atribute --}}
                <div class="atribute">
                    {{-- love --}}
                    <div class="favorite">
                        <span class="material-symbols-outlined">
                            favorite
                        </span>
                    <div class="love-count">
                        <h6 class="love-count">9</h6>
                    </div>  
                    </div>
                    
                    {{-- galery --}}
                    <div class="galery">
                        <span class="material-symbols-outlined">
                            photo_library
                            </span>
                    <div class="galery-count">
                        <h6 class="galery-count">13</h6>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </div>
</div>
    
@endsection