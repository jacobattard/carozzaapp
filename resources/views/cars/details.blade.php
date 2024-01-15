@extends('layouts.main')

@section('content')
<main class="py-5">
    <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header card-title">
            <strong>Contact Details</strong>
            </div>           
            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <div class="form-group row">
                    <label for="Model" class="col-md-4 col-form-label">Model</label>
                    <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $car->model}}</p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Year" class="col-md-4 col-form-label">Year</label>
                    <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $car->year}}</p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label">Sales Person Email</label>
                    <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $car->salesperson_email}}</p>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Manufacturer" class="col-md-4 col-form-label">Manufacturer</label>
                    <div class="col-md-9">
                    <p class="form-control-plaintext text-muted">{{ $car->manufacturer->name}}</p>
                    </div>
                </div>
                <hr>
                <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('cars.delete', $car->id) }}"class="btn-delete btn btn-outline-danger" title="Delete">Delete</a>
                        <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        <form id="form-delete" method="post" style="display:none">
                            @method('DELETE')
                            @csrf
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</main>
@endsection