@extends('layouts.app')

@section('title', 'Product Details')
@section('content')

<div class="container">
    <div class="mt-3">
        <h2>
            <b>Product Information : SKU - {{$response['product']['data'][0]['sku']}}</b> 
            <a  class="goBack float-right mt-2 cp"><b>< Back</b></a>
        </h2>
        <hr>
        <div class="row">
            <div class="col-md-4">
                @if (count($response['product_image']['data'])>0)
                <img class="w100pc" src="{{$response['product_image']['data'][0]['url_standard']}}" alt="">
                @endif
            </div>
            <div class="col-md-4">
                <h2>{{$response['product']['data'][0]['name']}}</h2>
                <div class="mt-2">
                    <p>
                        {{$response['product']['data'][0]['sku']}} /
                        {{$response['product']['data'][0]['type']}}
                    </p>
                    <p><?php echo $response['product']['data'][0]['description'];?></p>
                    <p>Price: <b><?php echo $response['product']['data'][0]['calculated_price'];?></b>
                    ( <span class="text-uppercase text-success"><?php echo $response['product']['data'][0]['availability'];?></span> )
                    </p>
                    <p>Condition: <b><?php echo $response['product']['data'][0]['condition'];?></b></p>
                    <p>Total Views: <b><?php echo $response['product']['data'][0]['view_count'];?></b></p>
                    @if ($response['product']['data'][0]['is_free_shipping'])
                    <p>Free Shipping</p>                    
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <h4><b>Current Stock</b></h4>
                <table class="table table-bordered">
                    <tr>
                        <td>Awaiting Shipment</td>
                        <td><b>---</b></td>
                    </tr>
                    <tr>
                        <td>Awaiting Payment</td>
                        <td><b>---</b></td>
                    </tr>
                    <tr>
                        <td>Awaiting Pickup</td>
                        <td><b>---</b></td>
                    </tr>
                    <tr>
                        <td>Manual Verification Required</td>
                        <td><b>---</b></td>
                    </tr>
                    <tr>
                        <td>Available (current BigCommerce Stock)</td>
                        <td><b><?php echo $response['product']['data'][0]['inventory_level'];?></b></td>
                    </tr>
                    <tr>
                        <td>Current Shelf Stock</td>
                        <td><b>--</b></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="mt-2 allimages">
        @if (count($response['product_image']['data'])>1)
        <h2><b>More Images</b></h2>
        @foreach ($response['product_image']['data'] as $key=>$image)
        @if ($key>0)
        <img class="w100pc" src="{{$image['url_standard']}}" alt="">
        @endif
        @endforeach
        @endif
    </div>

</div>
@endsection