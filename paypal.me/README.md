Sample HTML button code 
=======================

Add to Cart: Sample HTML button code
-------------------------------------------

### Product options without prices
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/cart_options_without_prices.png "The Add to Cart button with drop-down options menu:")

### Product options with prices
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/cart_options_with_prices.png "The Add to Cart button with drop-down options menu:")

### Text box product options
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/cart_options_with_prices.png "The Add to Cart button with options text box:")


Open shopping cart in the merchant window
------------------------------------------
![alt text](https://www.paypalobjects.com/webstatic/en_US/developer/docs/pps/demo_add-to-cart-cart-in-pop-up.gif "When a buyer clicks the Add to Cart button, the PayPal shopping cart opens in a separate browser window.")

You can use the *target* attribute in the form element to open the PayPal shopping cart in the same browser window that displays your website.

![alt text](https://www.paypalobjects.com/webstatic/en_US/developer/docs/pps/demo_add-to-cart-cart-in-same-window.gif "You can use the target attribute in the form element to open the PayPal shopping cart in the same browser window that displays your website.")

Values for target attribute that open the PayPal shopping cart: | | | |-|-| | Target expression | Where cart opens | | *target="paypal"* | Separate browser window or browser tab from the merchant website. | | *target="_self"* | Same browser window or browser tab as the merchant website. |

Continue shopping on the current merchant web page
--------------------------------------------------
When a buyer clicks the Add to Cart button, the PayPal shopping cart page opens. The buyer can see the items in the cart and begin check out or click the Continue Shopping button to return to your website and add more items to the cart.

![alt text](https://www.paypalobjects.com/webstatic/en_US/developer/docs/pps/demo_add-to-cart-continue-shopping-button.gif "When a buyer clicks the Add to Cart button, the PayPal shopping cart page opens. The buyer can see the items in the cart and begin check out or click the Continue Shopping button to return to your website and add more items to the cart.")

If your website has many product pages, browsers may have difficulty returning buyers to the same product pages that they leave when they click your Add to Cart buttons. Returning buyers to a different page, such as the home page of your website, degrades the shopping experience for buyers who want to add more items to their carts before checking out.

Use the *shopping_url* variable to specify which page PayPal returns buyers to when they click the Continue Shopping button. You can set the value of the *shopping_url* variable if you know the URL for the web page where the button appears. In the code below, the merchant wants to ensure that buyers who click an Add to Cart button for a birthday card return to the product page for birthday cards when they want to continue shopping.

View Cart button
----------------
View Cart buttons contain no payment information, so you do not need to take precautions on securing them.
The value for the *business* variable must match a confirmed email address on file with your PayPal account, and it must match the value that you used for the *business* variables on your Add to Cart buttons.

![alt text](https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif "The View cart button:")

### View Cart: Continue shopping on the current merchant web page
By default, when a buyer clicks a View Cart button, the PayPal shopping cart opens in a separate browser window. You can simplify the shopping experience by opening the PayPal shopping cart in the same browser window.
This sample HTML code illustrates how to open the PayPal shopping cart in the same browser window.
![alt text](https://www.paypalobjects.com/webstatic/en_US/developer/docs/pps/demo_add-to-cart-continue-shopping-button.gif "When buyers click View Cart buttons, the PayPal shopping cart page opens. Buyers can see the items in their carts, and they can begin checking out. In addition, buyers can click the Continue Shopping button to return to your website and add more items to their carts.")


Buy Now: Sample HTML button code
================================

Buy Now with product options
----------------------------
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/img-docs-product-dropdown.svg "This code sample configures a basic Buy Now button with an option menu.")

Buy Now button with product options with prices
-----------------------------------------------
Product options with prices specify the prices in two places:
- The drop-down menu displays the prices for each option. Buyers see the prices they pay for each option.
- A list of hidden HTML variables repeats the prices for each option. PayPal uses these prices to charge buyers for the options they choose.
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/img-docs-product-options-prices.svg "This code sample configures a basic Buy Now button with a drop-down menu of product options. Each option has its own price.")

Buy Now button with product options as a text box
-------------------------------------------------
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/img-docs-product-options.svg "This code sample configures a basic Buy Now button with a text box for entering product options.")

Buy Now button that prompts for quantities
------------------------------------------
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/img-docs-item-quantities.svg "This sample code configures a basic Buy Now button that prompts buyers to specify item quantities. Use this option carefully because buyers might request more items than you have in your inventory.")


Donate: Sample HTML button code
=============================

Basic Donate button
----------------------
![alt text](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif "The sample code above produces the following result:")


Subscribe: Sample HTML button code
==================================

Product options
---------------
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/subscribe_options_without_prices.png "This sample HTML code illustrates a basic Subscribe button with a drop-down menu of product options.")

Product options as text boxes
-----------------------------
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/subscribe_options_text_box.png "This sample code illustrates a basic Subscribe button with a text box for entering product options.")

Unsubscribe button
------------------
![alt text](https://www.paypalobjects.com/ppdevdocs/v2noapi/img/docs/buttons/subscribe_options_without_prices.png "This code implements an Unsubscribe button that lets subscribers cancel their current, active subscriptions.")
