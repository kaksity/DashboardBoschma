@extends('webapp.layout');

@section('page-content')
<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Number of Lives Impacted</h5>
        <small class="text-muted float-end">Fill in the form`</small>
      </div>
      <div class="card-body">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ route('webapp.website.number-of-impacts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Formal Sector Beneficiaries</label>
                <input type="text" class="form-control" name="formal_sector_beneficiaries" value="{{ $numberOfImpacts?->formal_sector_beneficiaries ?? old('formal_sector_beneficiaries') }}">
                @error('formal_sector_beneficiaries')
                <div class="p-1 text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">BHCPF Beneficiaries</label>
                <input type="text" class="form-control" name="bhcpf_Beneficiaries" value="{{ $numberOfImpacts?->bhcpf_Beneficiaries ?? old('bhcpf_Beneficiaries') }}">
                @error('bhcpf_Beneficiaries')
                <div class="p-1 text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Healthcare Providers</label>
                <input type="text" class="form-control" name="health_care_providers" value="{{ $numberOfImpacts?->health_care_providers ?? old('health_care_providers') }}">
                @error('health_care_providers')
                <div class="p-1 text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Lives Impacted</label>
                <input type="text" class="form-control" name="impacted_lives" value="{{ $numberOfImpacts?->impacted_lives ?? old('impacted_lives') }}">
                @error('impacted_lives')
                <div class="p-1 text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                <span class="tf-icons bx bx-report"></span>&nbsp; Update Number of Impacts
            </button>
        </form>
      </div>
    </div>
  </div>
@endsection
