let fundingSource

paypal.Buttons({
  onClick: (data) => {
    // fundingSource = "venmo"
    fundingSource = data.fundingSource

    // Use this value to determine what funding source was used to pay
    // Update your confirmation pages and notifications from "PayPal" to "Venmo"
  },
})
