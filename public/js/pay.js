document.addEventListener('DOMContentLoaded', function() {
    const payButton = document.getElementById('payButton');
    const bankDetails = document.getElementById('bankDetails');
    const gopayDetails = document.getElementById('gopayDetails');
    const mastercardDetails = document.getElementById('mastercardDetails');
  
    const paymentButtons = document.querySelectorAll('.payment-button');
    paymentButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        const selectedMethod = this.getAttribute('data-method');
  
        // Hide all payment details
        bankDetails.style.display = 'none';
        gopayDetails.style.display = 'none';
        mastercardDetails.style.display = 'none';
  
        // Show payment details based on selected method
        if (selectedMethod === 'bank') {
          bankDetails.style.display = 'block';
        } else if (selectedMethod === 'gopay') {
          gopayDetails.style.display = 'block';
        } else if (selectedMethod === 'mastercard') {
          mastercardDetails.style.display = 'block';
        }
      });
    });
  
    payButton.addEventListener('click', function() {
      // Handle payment submission here
      console.log('Payment submitted');
    });
  });
  