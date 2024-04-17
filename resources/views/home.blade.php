@extends('ui.main')

@section('content')
    <div class="utama">
        <div class="wrapper-home">
            <div class="section-search-naomi">
                <h1 class="big-text-plan-naomi">PLAN</h1>
                <h2 id="main" class="small-text-event-naomi">YOUR EVENT NOW</h2>
                <form class="searchbar d-flex justify-content-center " action="" method="get">
                    @csrf
                    <input type="text" name="search" id="search" placeholder="Event organizer, birthday party, wedding organizer">
                    <button class="btn-search" type="submit"><span class="material-symbols-outlined">
                        search
                        </span></button>
                </form>
            </div>
         </div>

        <div class="section-top-vendor-naomi">
           <h2 class="bigtitle">Plan Your Event Now!</h2>
            <div class="classdiv">
                <div class="card-naomi">
                    <img class="image" src="https://t.ly/t8yhZ" alt="">
                    <h3 class="title">Taylor Series Vendor</h3>
                    <p class="price">Start from $500</p>
                    <div class="star">
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
                </div>

                <div class="card-naomi">
                    <img class="image" src="https://t.ly/WaJdC" alt="">
                    <h3 class="title">Regression Event</h3>
                    <p class="price">Start from $750</p>
                    <div class="star">
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
                </div>

                <div class="card-naomi">
                    <img class="image" src="https://t.ly/l2603" alt="">
                    <h3 class="title">For Happiness</h3>
                    <p class="price">Start from $1500</p>
                    <div class="star">
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
                </div>

                <div class="card-naomi">
                    <img class="image" src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2338&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    <h3 class="title">Flower Smile</h3>
                    <p class="price">Start from $600</p>
                    <div class="star">
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
                </div>
                
                <div class="card-naomi">
                    <img class="image" src="https://images.unsplash.com/photo-1524824267900-2fa9cbf7a506?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    <h3 class="title">Aligning 19</h3>
                    <p class="price">Start from $1200</p>
                    <div class="star">
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
                </div>

                <div class="card-naomi">
                    <img class="image" src="https://images.unsplash.com/photo-1560332218-4d266ab9793a?q=80&w=2334&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    <h3 class="title">Sweet, Sugar</h3>
                    <p class="price">Start from $1000</p>
                    <div class="star">
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
                </div>

                <div class="card-naomi">
                    <img class="image" src="https://images.unsplash.com/photo-1523301343968-6a6ebf63c672?q=80&w=2338&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    <h3 class="title">Run Run Away</h3>
                    <p class="price">Start from $870</p>
                    <div class="star">
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
                </div>
              
                <div class="card-naomi">
                    <img class="image" src="https://images.unsplash.com/photo-1562967005-a3c85514d3e9?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    <h3 class="title">Save Memories</h3>
                    <p class="price">Start from $770</p>
                    <div class="star">
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
                </div>
            </div>
        </div>

        <div class="section-new">
            <div class="card-new">
                <h1 class="judul">Testimonial</h1>
                <h2 class="subjudul">From Our Customer</h2>
                <div class="card2">
                    <div class="img-wrapper-home">
                        <img class="image-person" src="https://cdn1-production-images-kly.akamaized.net/bINtHqzUW95VVjtjDCvkh1SQOjo=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2922109/original/010429200_1569423175-Nagita_Slavina_foto_by_Bambang_E_Ros_8.jpg" alt="">
                    </div>
                    <h2 class="text-person">“Plan It mempermudah promosi acara dan koneksi dengan klien. Fitur-fitur intuitif dan analitiknya membantu meningkatkan visibilitas dan efisiensi. Dengan Plan It, bisnis acara saya sukses lebih cepat.”</h2>
                </div>
                <div class="card3">
                    <h3 class="name">Nagita Slavina</h3>
                    <p class="position">Celebrity</p>
                </div>
            </div>

            <div class="card-new">
                <h1 class="judul">Testimonial</h1>
                <h2 class="subjudul">From Our Customer</h2>
                <div class="card2">
                    <div class="img-wrapper-home">
                        <img class="image-person" src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2021/02/08/20210208_140640jpg-20210208013446.jpg" alt="">
                    </div>
                    <h2 class="text-person">“Semua vendor dari tiap kota ada, jadi kalau ada acara di luar kota kita ga perlu cari-cari vendor lagi. Semua ada di Plan It, kita bisa pilih sesuai acara dan event yang kita mau. Keren!”</h2>
                </div>
                <div class="card3">
                    <h3 class="name">Fadil Jaidi</h3>
                    <p class="position">Influencer</p>
                </div>
            </div>

         <div class="card-new">
            <h1 class="judul">Testimonial</h1>
            <h2 class="subjudul">From Our Customer</h2>
                <div class="card2">
                    <div class="img-wrapper-home">
                        <img class="image-person" src="https://shopee.co.id/inspirasi-shopee/wp-content/uploads/2023/08/Raffi-Ahmad-kekayaan-6.jpg" alt="">
                    </div>
                    <h2 class="text-person">“Benar-benar website yang sangat membantu! Gue dan teman-teman bisa have fun bareng, ga perlu ribet hubungi vendor sana-sini, semuanya ada di Plan It! Thank you Plan It!”</h2>
                </div>
                <div class="card3">
                    <h3 class="name">Raffi Ahmad</h3>
                    <p class="position">CEO Of RANS</p>
                </div>
            </div>

        </div>
      </div>
    </div>
@endsection