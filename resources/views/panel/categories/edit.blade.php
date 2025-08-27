@extends('layouts.panel')

@section('title', 'Edit category')

@section('content')
<form action="{{ route('panel.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- <h1>{{$errors}}</h1> -->

    <div class="row g-3">
        <div class="col-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name"
                value="{{ old('name', $category->name) }}"
                class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
            <label for="file" class="form-label">Image</label>
            <input type="file" id="file" name="image"
                class="form-control @error('image') is-invalid @enderror">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if($category->image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" class="img-thumbnail" width="100">
            </div>
            @endif
        </div>

        <div class="col-6 form-check mt-2">
            <input type="hidden" name="is_sale" value="0">
            <input type="checkbox" class="form-check-input" id="is_sale" name="is_sale" value="1"
                {{ old('is_sale', $category->is_sale) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_sale">Is Sale</label>
        </div>

        <div class="col-6 form-check mt-2">
            <input type="hidden" name="is_top" value="0">
            <input type="checkbox" class="form-check-input" id="is_top" name="is_top" value="1"
                {{ old('is_top', $category->is_top) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_top">Is Top</label>
        </div>
    </div>

    <button class="btn btn-sm btn-success mt-3">Update</button>
</form>
@endsection