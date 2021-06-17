<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function searchProduct(Request $Request)
    {
        $response = [];
        return view('products/search-product', ['response' => $response]);
    }

    public function productDetails(Request $Request)
    {
        $formData = $Request->input();

        // product imfo
        $endpoint = env('BIGC_API_ENDPOINT') . '/v3/catalog/products?sku=' . $formData['sku'];
        $product = HttpController::getRequest($endpoint);

        // product images
        $endpoint = env('BIGC_API_ENDPOINT') . '/v3/catalog/products/' . $product['data'][0]['id'] . '/images';
        $product_image = HttpController::getRequest($endpoint);
        $response = [
            'product' => $product,
            'product_image' => $product_image
        ];
        return view('products/product-details', ['response' => $response]);
    }
}
