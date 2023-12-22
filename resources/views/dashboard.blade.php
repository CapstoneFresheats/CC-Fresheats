<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12 bg-green-300">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}

    <div class="container-fluid mt-3">
        <div class="row flex items-center justify-center">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Products</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">
                                {{ $ingredientscount }}
                            </h2>
                            <p class="text-white mb-0">Nov - Des 2023</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Transaction</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">
                                {{ $transactioncount }}
                            </h2>
                            <p class="text-white mb-0">Nov - Des 2023</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">New Users</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">
                                {{ $count }}
                            </h2>
                            <p class="text-white mb-0">Nov - Des 2023</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Customer Satisfaction</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">
                                {{ $rate }}/5
                            </h2>
                            <p class="text-white mb-0">Nov - Des 2023</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    .card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
    }

    .card-body {
        padding: 20px;
    }

    .gradient-1 {
        background: linear-gradient(45deg, #01a9ac, #1c2228);
    }

    .gradient-2 {
        background: linear-gradient(45deg, #fa4251, #4e54c8);
    }

    .gradient-3 {
        background: linear-gradient(45deg, #fdc830, #f37335);
    }

    .gradient-4 {
        background: linear-gradient(45deg, #15a2b8, #00556e);
    }

    .card-title {
        font-size: 18px;
        font-weight: 600;
    }

    .text-white {
        color: #fff !important;
    }

    .d-inline-block {
        display: inline-block;
    }

    .float-right {
        float: right;
    }

    .display-5 {
        font-size: 2.5rem;
        vertical-align: middle;
        opacity: 0.5;
    }

    .opacity-5 {
        opacity: 0.5;
    }

    /* Jika menggunakan font-awesome */
    .fa {
        font-size: 24px;
        vertical-align: middle;
        margin-left: 5px;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>