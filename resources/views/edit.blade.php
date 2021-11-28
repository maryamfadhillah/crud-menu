@extends('layout')
@section('title', 'Edit Menu')
@section('content')


<div class="container">
    <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
        <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <!-- Title-->
            <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                <h2 class="h3 py-2 me-2 text-center text-sm-start">Edit Menu</h2>
                <div class="py-2">
                </div>
            </div>
            <form action="{{ route('menu.update', $dataMenu[0]->id ) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3 pb-2">
                    <label class="form-label" for="unp-product-name">Product name</label>
                    <input class="form-control" type="text" id="unp-product-name" name="menu" value="{{ $dataMenu[0]->menu }}">
                </div>
                <div class="mb-3 py-2">
                    <label class="form-label" for="unp-product-description">Menu description</label>
                    <textarea class="form-control" rows="6" id="unp-product-description" name="desc">{{ $dataMenu[0]->desc }}</textarea>
                </div>
                <div class="row">
                    <div class="col-sm mb-3">
                        <label class="form-label" for="unp-extended-price">Price</label>
                        <div class="input-group"><span class="input-group-text">Rp</span>
                            <input class="form-control" type="text" id="unp-extended-price" name="harga" value="{{ $dataMenu[0]->harga }}">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Save</button>
            </form>
        </div>
    </section>
</div>

@endsection