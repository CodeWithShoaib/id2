<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Square Payment Form</title>
  <link rel="stylesheet" href="/reference/sdks/web/static/styles/code-preview.css" preload>
  <script src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f4f4f4;
    }

    #payment-form {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 20px;
      text-align: center;
    }

    #card-container {
      margin-top: 20px;
    }

    #card-button {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    #card-button:hover {
      background-color: #0056b3;
    }

    #payment-status-container {
      margin-top: 10px;
      color: #dc3545;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div id="payment-form">
    <h2>Secure Payment</h2>
    <div id="payment-status-container"></div>
    <div id="card-container"></div>
    <button id="card-button" type="button">Pay Now</button>
  </div>
  <form id="payment-form-server" method="POST" action="{{ route('process_payment') }}">
    @csrf
    <input type="hidden" name="payment_token" id="payment-token">
  </form>
  <script type="module">
    const payments = Square.payments('sandbox-sq0idb-k0_9mQTBym--nGsU28UsLg', 'LHQMS2YQVYD19');
    const card = await payments.card();
    await card.attach('#card-container');
  
    const cardButton = document.getElementById('card-button');
    cardButton.addEventListener('click', async () => {
      const statusContainer = document.getElementById('payment-status-container');
      const paymentTokenInput = document.getElementById('payment-token');
  
      try {
        const result = await card.tokenize();
        if (result.status === 'OK') {
          console.log(`Payment token is ${result.token}`);
          paymentTokenInput.value = result.token; // Set the payment token in the form
          document.getElementById('payment-form-server').submit(); // Submit the form to the server for payment processing
        } else {
          let errorMessage = `Tokenization failed with status: ${result.status}`;
          if (result.errors) {
            errorMessage += ` and errors: ${JSON.stringify(result.errors)}`;
          }
          throw new Error(errorMessage);
        }
      } catch (e) {
        console.error(e);
        statusContainer.innerHTML = "Payment Failed";
      }
    });
  </script>
</body>
</html>
