@extends('layouts.app')
@section('content')
    {{-- make dummy data visualiation for dashboard --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="text-primary">Total Dosen</h3>
                            <p class="text-secondary">1000</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-success">Total Mahasiswa</h3>
                            <p class="text-secondary">550000</p>
                        </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </script>
@endsection
