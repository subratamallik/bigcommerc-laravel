Create a web form where we could enter a product SKU or product barcode and it would bring up a page with several product parameters from BigCommerce:
Product title
Product picture
Product price
Product location
And possible some other standard values available via BigCommerce API

On the result page it should also show the current stock of the product accounting for active/unprocessed orders. Those order statuses are: 
Awaiting Shipment
Awaiting Payment
Awaiting Pickup
Manual Verification Required

So, at the bottom of the page there should be a table called “Current Stock” and it should look something like this:

Current Stock
<p>Awaiting Shipment - 12<p>
Awaiting Payment - 1
Awaiting Pickup - 1
Manual Verification Required - 4
Available (current BigCommerce Stock) - 55
Current Shelf Stock - THE SUM OF ALL ABOVE



The main challenge is to “catch” orders with the highlighted status and determine how many of that product are in those orders.

The code must be regularly committed to a GitHub repository.

The project must be done with the Laravel framework.
