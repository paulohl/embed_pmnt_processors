<!-- Set up a container element for the button -->
<div id="paypal-button-container"></div>

<!-- Include the PayPal JavaScript SDK. Replace `YOUR_CLIENT_ID` with your client ID.-->
<!-- Note that `enable-funding=venmo` is added as a query parameter -->
<script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID&enable-funding=venmo"></script>

<script>
  // Render the Venmo button into #paypal-button-container
  paypal.Buttons().render('#paypal-button-container')
</script>
