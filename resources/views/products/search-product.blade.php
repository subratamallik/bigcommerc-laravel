@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')

<div class="searchproduct">
    <form action="{{url('product/details')}}" method="GET">
        <div class="input-group mb-3 input-group-lg">
            <input type="text" class="form-control rounded-0" name="sku" placeholder="Search by Product SKU">
            <button class="btn btn-primary rounded-0" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
</div>
@endsection