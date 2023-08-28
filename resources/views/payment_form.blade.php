<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{ route('payment.process') }}" method="POST">
    @csrf
    <div id="card-container"></div>
    <button type="submit">Pay Now</button>
</form>

<script src="https://js.squareupsandbox.com/v2/paymentform"></script>
<script>
    var paymentForm = new SqPaymentForm({
        applicationId: "{{ config('app.square_application_id') }}",
        inputClass: 'sq-input',
        autoBuild: false,
        // Add other configuration options and styling here as needed
    });

    paymentForm.build();
</script>
    
</body>
</html>