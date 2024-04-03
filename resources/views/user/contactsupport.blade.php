@extends('ui.user')

@section('content')
        <div class="profile">
            <img src="https://images.unsplash.com/photo-1493612276216-ee3925520721?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Avatar" class="avatar">
            <div class="info">
                <h2>PlanIt Admin</h2>
                <p>Contact Support</p>
                <p>Location: Indonesia</p>
                <p>Email: PlanIt@example.com</p>
            </div>
        </div>
        <div id="chat-box">
            <div class="d-flex w-100 flex-start">
                <div class="message received">
                    <p>Hello, can I help you?</p>
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
                    <p>I have trouble when I want to pay a vendor:"</p>
                </div>
            </div>
            <div class="d-flex w-100 flex-start">
                <div class="message received">
                    <p>What's the problem?</p>
                </div>
            </div>
            <div class="d-flex w-100 flex-end">
                <div class="message sent">
                    <p>I can't input their account number and they haven't reply my chat until now</p>
                </div>
            </div>
            <div class="d-flex w-100 flex-start">
                <div class="message received">
                    <p>Okay, I will forward your problem now.</p>
                </div>
            </div>
            <div class="d-flex w-100 flex-end">
                <div class="message sent">
                    <p>Thank you so much...</p>
                </div>
            </div><div class="d-flex w-100 flex-start">
                <div class="message received">
                    <p>Your welcome!</p>
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
            <div class="background-input2 d-flex">
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
@endsection