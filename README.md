Create a web form where we could enter a product SKU or product barcode and it would bring up a page with several product parameters from BigCommerce:<br><br>
Product title<br>
Product picture<br>
Product price<br>
Product location<br>
And possible some other standard values available via BigCommerce API<br>
<br><br><br>
On the result page it should also show the current stock of the product accounting for active/unprocessed orders. Those order statuses are: <br>
Awaiting Shipment<br>
Awaiting Payment<br>
Awaiting Pickup<br>
Manual Verification Required<br>
<br><br>
So, at the bottom of the page there should be a table called “Current Stock” and it should look something like this:
<br><br>
Current Stock<br>
Awaiting Shipment - 12<br>
Awaiting Payment - 1<br>
Awaiting Pickup - 1<br>
Manual Verification Required - 4<br>
Available (current BigCommerce Stock) - 55<br>
Current Shelf Stock - THE SUM OF ALL ABOVE<br><br>

The main challenge is to “catch” orders with the highlighted status and determine how many of that product are in those orders.<br>
The code must be regularly committed to a GitHub repository.<br>
The project must be done with the Laravel framework.
