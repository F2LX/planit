document.querySelector('.form-chat').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form secara normal

    var message = document.getElementById('messageInput').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/send-message');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    // Menambahkan pesan ke dalam tampilan
                    addMessageToView(response.message);
                    // Mengosongkan input pesan
                    document.getElementById('messageInput').value = '';
                } else {
                    // Handle kesalahan jika diperlukan
                    console.error('Failed to send message:', response.error);
                }
            } else {
                // Handle kesalahan jika diperlukan
                console.error('Failed to send message. Status:', xhr.status);
            }
        }
    };
    xhr.onerror = function() {
        // Handle kesalahan koneksi
        console.error('Failed to send message. Connection error.');
    };
    xhr.send('message=' + encodeURIComponent(message));
});

// Fungsi untuk menambahkan pesan ke dalam tampilan
function addMessageToView(message) {
    var messagesDiv = document.getElementById('messages');
    var messageParagraph = document.createElement('p');
    messageParagraph.textContent = 'Message: ' + message.message;
    messagesDiv.appendChild(messageParagraph);
}
