@extends('ui.admin')

@section('content')
    <div class="p-5">

        {{-- INI JANGAN DIAPUS DULU -jessss --}}
        {{-- <div class="d-flex align-center header-home">
            <button class=" d-flex align-center back-to">
                <span class="material-symbols-outlined" id="arrow-ikon">
                    arrow_back_ios
                </span>
                <p class="ml-5">Chat</p>
            </button>

            <h3>Hi, <span class="name-color">McDidi</span> !</h3>
            <span class="material-symbols-outlined ml-5" id="zoom-ikon">
                notifications
            </span>   
        </div>

        <hr> --}}

        <div class="d-flex align-baseline justify-content-between">
            <div class="align-center justify-center left-bar-chat">

                <div class="d-flex flex-direction-column align-center justify-center">
                    <img src="{{ Storage::url(auth()->user()->image) }}" alt="Profile" class="profile-chat">
                    <h4 class="name-chat">{{ auth()->user()->name }}</h4>
                    <h6 class="available-status">Available</h6>
                </div>

                <div class="d-flex align-center justify-content-between" id="searchbar-chat">
                    <input type="text" id="message-input" placeholder="Search">
                    <button class="button-search">
                        <span class="material-symbols-outlined" id="search-ikon">
                            search
                        </span>    
                    </button>
                    
                </div>
                <h4 class="lastchat-text">Last Chat</h4>

                <div class="list-chat">
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1560173045-beaf11c65dce?q=80&w=2235&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile" class="profile-chat2">
                            <div class="ml-3">
                                <h4 class="vendor-name-chat ml-3">Taylor Series</h4>
                                <p class="typing-chat ml-3">typing...</p>
                            </div>
                        </div>
                        <p class="jam">19.10</p>
                    </div>
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1513546493312-0066d7de3fd2?q=80&w=2170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile" class="profile-chat2">
                            <div class="ml-3">
                                <h4 class="vendor-name-chat ml-3">Newton</h4>
                                <p class="last-chat ml-3">Yess, of course!</p>
                            </div>
                        </div>
                        <p class="jam">17.00</p>
                    </div>
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1558301211-0d8c8ddee6ec?q=80&w=2136&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile" class="profile-chat2">
                            <div class="ml-3">
                                <h4 class="vendor-name-chat ml-3">Blue Ocean</h4>
                                <p class="last-chat ml-3">Thank You!</p>
                            </div>
                        </div>
                        <p class="jam">16.50</p>
                    </div>
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://plus.unsplash.com/premium_photo-1663839412099-8fe226462e8c?q=80&w=2187&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile" class="profile-chat2">
                            <div class="ml-3">
                                <h4 class="vendor-name-chat ml-3">PT Pelita</h4>
                                <p class="last-chat ml-3">Sorry, we break now..</p>
                            </div>
                        </div>
                        <p class="jam">13.30</p>
                    </div>
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1525268771113-32d9e9021a97?q=80&w=2360&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile" class="profile-chat2">
                            <div class="ml-3">
                                <h4 class="vendor-name-chat ml-3">Happiness You</h4>
                                <p class="last-chat ml-3">Okay, we will wait.</p>
                            </div>
                        </div>
                        <p class="jam">09.58</p>
                    </div>
                </div>
            </div>

        <div class="middle-bar-chat">
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1560173045-beaf11c65dce?q=80&w=2235&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Avatar" class="avatar">
                <div class="info">
                    <h2>Taylor Series</h2>
                    <p>Birthday Vendor</p>
                    <p>Location: Kalibata</p>
                    <p>Email: tayloring@example.com</p>
                </div>
            </div>
            <div id="chat-box">
                <div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>Hello there!</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>Hello</p>
                    </div>
                </div>
                
                <div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>How can I help you?</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>I want to ask you about my birthday party</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>Okayy...</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>Yes, I want my party is full of colou</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>And then?</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>And, can I customize my party?</p>
                    </div>
                </div><div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>Yes, you can...</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>Okay. I will send you the picture later for my concept</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>Alright, I will be waiting for you...</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>But, by the way...</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>Yess?</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>...</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>...</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>...</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-start">
                    <div class="message received">
                        <p>...</p>
                    </div>
                </div>
                <div class="d-flex w-100 flex-end">
                    <div class="message sent">
                        <p>...</p>
                    </div>
                </div>
                <div class="background-input d-flex">
                    <input type="text" id="message-input2" placeholder="Type your message...">
                    <div class="d-flex align-center justify-center">
                        <button id="send-button2">
                            <span class="material-symbols-outlined">
                                add_a_photo
                            </span>
                        </button>
                        <button id="send-button">
                            <span class="material-symbols-outlined">
                                send
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection