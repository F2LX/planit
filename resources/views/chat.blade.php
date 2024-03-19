<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Plan It</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset("js/chat.js") }}"></script>
</head>
<body>
    <nav class="d-flex main-nav justify-space-between align-center">
        <div class="title">
            <h2>Plan It!</h2>
        </div>
        <ul class="d-inline text-right d-flex align-center">
            <li>Home</li>
            <li>Products</li>
            <li>About Us</li>
            <li><a href="" class="btn btn-nav d-flex align-center"><span class="material-symbols-outlined">
                account_circle
                </span><span class="ml-2">Login</span></a></li>
        </ul>
    </nav>
    <div class="wrapper d-flex align-center justify-content-center flex-wrap flex-direction-column">
        <div id="messages">
            <!-- Pesan akan ditampilkan di sini -->
            @foreach ($messages as $message)
                @if ($message->senderid == 12)
                    <div class="message-away">
                        <p>Ini message milik sendiri: {{ $message->message }}</p>
                    </div>
                @else
                    <div class="message-away">
                        <p>Ini message milik lawan: {{ $message->message }}</p>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="chat-section">
            <form id="sendMessageForm" class="form-chat">
                <input type="text" name="message" id="messageInput">
                <input type="hidden" name="receiverid" value="15">
                <input type="hidden" name="senderid" value="12">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('sendMessageForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara normal
            
            var formData = new FormData(this);

            fetch('/send-messages', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to send message');
                }
                return response.json(); // Parse respons JSON
            })
            .then(data => {
                // Tambahkan pesan baru ke dalam tampilan
                addMessageToView(data.message);
                // Reset input setelah berhasil mengirim
                document.getElementById('messageInput').value = '';
            })
            .catch(error => {
                console.error('Error sending message:', error.message);
            });
        });

        // Fungsi untuk menambahkan pesan ke dalam tampilan
        function addMessageToView(message) {
            var messagesDiv = document.getElementById('messages');
            var messageDiv = document.createElement('div');
            messageDiv.className = message.senderid == 12 ? 'message-away' : 'message-incoming';
            var messageParagraph = document.createElement('p');
            messageParagraph.textContent = message.message;
            messageDiv.appendChild(messageParagraph);
            messagesDiv.appendChild(messageDiv);
        }
    </script>
</body>
</html>
