@extends('layouts.panel')

@section('title', 'Create category')

@section('content')
<form action="{{ route('panel.categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
        <div class="col-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
            <label for="file" class="form-label">Image</label>
            <input type="file" id="file" name="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-4 form-check mt-2">
            <input type="hidden" name="is_top" value="0">
            <input type="checkbox" class="form-check-input" id="is_top" name="is_top" value="1" {{ old('is_top') ? 'checked' : '' }}>
            <label class="form-check-label" for="is_top">Is Top</label>
        </div>

        <div class="col-4 form-check mt-2">
            <input type="hidden" name="is_sale" value="0">
            <input type="checkbox" class="form-check-input" id="is_sale" name="is_sale" value="1" {{ old('is_sale') ? 'checked' : '' }}>
            <label class="form-check-label" for="is_sale">Is Sale</label>
        </div>

        <div class="col-4 form-check mt-2">
            <input type="hidden" name="top_category" value="0">
            <input type="checkbox" class="form-check-input" id="top_category" name="top_category" value="1" {{ old('top_category') ? 'checked' : '' }}>
            <label class="form-check-label" for="top_category">Top Category</label>
        </div>


        <button class="btn btn-sm btn-primary mt-3">Create</button>
</form>
@endsection