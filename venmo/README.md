*****************
All content under this folder was retrieved from the [PayPal Developer](https://developer.paypal.com/) website.
*****************

# Pay with Venmo integration
### Add Venmo buttons to your checkout


Last updated: March 16th 2023, @ 2:23:55 pm


**Add the Venmo button to your Checkout integration**.

## Know before you code
- If you are a new merchant, sign up for a PayPal business account.
- Complete Get started to set up your PayPal account, client ID, and sandbox emails for testing.
- Complete a standard Checkout integration.

## Add Venmo button
1. Add the JavaScript SDK code to show the Venmo button on your product and checkout pages.
2. Determine where the SDK should render the Venmo button. Use button options to control the layout of the button.

```javascript
<!-- Set up a container element for the button -->
<div id="paypal-button-container"></div>

<!-- Include the PayPal JavaScript SDK. Replace `YOUR_CLIENT_ID` with your client ID.-->
<!-- Note that `enable-funding=venmo` is added as a query parameter -->
<script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID&enable-funding=venmo"></script>

<script>
  // Render the Venmo button into #paypal-button-container
  paypal.Buttons().render('#paypal-button-container')
</script>
```
## Test and go live
Use your live login information during the checkout flow to complete a Venmo transaction. Then, log into PayPal.com to see the money move out of your account.

When making a test purchase, note that:

- The Venmo app must be installed.
- The business account receiving money can’t also make the purchase.
- The personal account may have restrictions if you create the personal account with the same information as the business account.

To test a purchase:

1. Open your test page with iOS Safari or Android Chrome.
2. Tap the Venmo button and switch to the Venmo app.
3. On the Venmo app, tap Continue or Pay Now to return to your test page.
4. If you have an additional confirmation page on your website, confirm the payment.
5. Log in to your business account and confirm that the money you used to pay moved into that account.

### Troubleshoot your integration
Confirm that there are no browser console warnings or errors. The JavaScript SDK configuration attributes have validation checks for input formatting and values.

If the validation fails, the web browser’s developer console displays warning messages that inform you which property isn't valid. The library reverts to the safe default values if the properties aren't valid.

## Best practices

### Enable Venmo as a funding source
Venmo isn't displayed as a payment option in Checkout integrations by default. Add enable-funding=venmo as a query parameter to your JavaScript SDK _script_ to display Venmo as a payment option. For more information about manually enabling different funding sources, see enable funding.

### Allow for Venmo placement
If you have an existing vertical button stack, an additional Venmo button renders under the stack. Make sure you leave enough room on your page for the Venmo button.

### Display funding source used
If you have a confirmation page or a notification to the user that shows the funding source that was used, use an onClick handler to display Venmo in the confirmation notification.

```javascript
let fundingSource

paypal.Buttons({
  onClick: (data) => {
    // fundingSource = "venmo"
    fundingSource = data.fundingSource

    // Use this value to determine what funding source was used to pay
    // Update your confirmation pages and notifications from "PayPal" to "Venmo"
  },
})
```
