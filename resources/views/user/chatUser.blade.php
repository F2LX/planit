@extends('ui.user')

@section('content')
    <div class="p-5">
        <div class="d-flex align-baseline justify-content-between">
            <div class="align-center justify-center left-bar-chat">
                <div class="d-flex align-center">
                    <span class="material-symbols-outlined" id="arrow-ikon">
                        arrow_back_ios
                    </span>
                    <p class="ml-5">Chat</p>
                </div>

                <div class="d-flex flex-direction-column align-center justify-center">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" alt="Profile" class="profile-chat">
                    <h4 class="name-chat">Didi Mulyano</h4>
                    <h6 class="available-status">Available</h6>
                </div>

                <div class="d-flex align-center justify-content-between" id="searchbar-chat">
                    <h4 class="search-text">Search</h4>
                    <span class="material-symbols-outlined">
                        search
                    </span>
                </div>
                <h4 class="lastchat-text">Last Chat</h4>

                <div class="list-chat">
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" alt="Profile" class="profile-chat2">
                            <div>
                                <h4 class="vendor-name-chat ml-3">Taylor Series</h4>
                                <p class="typing-chat ml-3">typing...</p>
                            </div>
                        </div>
                        <p class="jam">19.10</p>
                    </div>
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" alt="Profile" class="profile-chat2">
                            <div>
                                <h4 class="vendor-name-chat ml-3">Newton</h4>
                                <p class="typing-chat ml-3">Yess, of course!</p>
                            </div>
                        </div>
                        <p class="jam">19.10</p>
                    </div>
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" alt="Profile" class="profile-chat2">
                            <div>
                                <h4 class="vendor-name-chat ml-3">Newton</h4>
                                <p class="typing-chat ml-3">Yess, of course!</p>
                            </div>
                        </div>
                        <p class="jam">19.10</p>
                    </div>
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" alt="Profile" class="profile-chat2">
                            <div>
                                <h4 class="vendor-name-chat ml-3">Newton</h4>
                                <p class="typing-chat ml-3">Yess, of course!</p>
                            </div>
                        </div>
                        <p class="jam">19.10</p>
                    </div>
                    <div class="d-flex align-center justify-content-between chat">
                        <div class="d-flex align-center justify-content-lg-start">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=1200&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" alt="Profile" class="profile-chat2">
                            <div>
                                <h4 class="vendor-name-chat ml-3">Newton</h4>
                                <p class="typing-chat ml-3">Yess, of course!</p>
                            </div>
                        </div>
                        <p class="jam">19.10</p>
                    </div>
                </div>
            </div>

        <div class="middle-bar-chat">
            <div class="profile">
                <img src="avatar.jpg" alt="Avatar" class="avatar">
                <div class="info">
                    <h2>Taylor Series</h2>
                    <p>Birthday Vendor</p>
                    <p>Location: New York</p>
                    <p>Email: tayloring@example.com</p>
                </div>
            </div>
            <div id="chat-box">
                <div class="background-input d-flex">
                    <input type="text" id="message-input" placeholder="Type your message...">
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