@extends('layout')
@section('title', 'Index Menu')
@section('content')

<div class="container">
    <div class="bg-light shadow-lg rounded-3 overflow-hidden">
        <div class="row">

            <!-- Content-->
            <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
                <div class="pt-2 px-4 ps-lg-0 pe-xl-5">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" id="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <!-- Title-->
                    <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
                        <h2 class="h3 py-2 me-2 text-center text-sm-start">Daftar Menu</h2>
                    </div>

                    @foreach ($dataMenu as $menu)
                    <!-- Product-->
                    <div class="d-block d-sm-flex align-items-center py-4 border-bottom">
                        <div class="text-center text-sm-start">
                            <h3 class="h6 product-title mb-2">
                                <strong>{{ $menu->menu }}</strong>
                            </h3>
                            <h6><small>{{ $menu->desc }}</small></h6>
                            <div class="d-inline-block text-accent">Rp {{ $menu->harga }}</div>

                            <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                                <a class="btn bg-faded-info btn-icon me-2" type="button" data-bs-toggle="tooltip"
                                    title="Edit" href="{{ route('menu.edit', $menu->id) }}">
                                    <i class="ci-edit text-info"></i>
                                </a>

                                <!-- Modal markup -->
                                <button class="btn bg-faded-danger btn-icon" type="button" data-bs-toggle="modal"
                                    data-bs-target="#modalDelete">
                                    <i class="ci-trash text-danger"></i>
                                </button>

                                @push('modals')
                                <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Menu</h4>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="fs-sm">Apakah anda yakin akan menghapus menu?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit"
                                                        data-bs-toggle="tooltip" title="Delete"
                                                        href="">Hapus
                                                    </button>
                                                </form>
                                                <button class="btn btn-secondary btn-sm" type="button"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endpush

                            </div>

                        </div>
                    </div>
                    @endforeach
                    <!-- tambah menu-->
                    <div class="my-7">
                        <a href="{{ route('menu.create') }}" class="btn btn-primary">Tambah Menu</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection