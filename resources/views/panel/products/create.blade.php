@extends('layouts.panel')

@section('title', 'Create Product')

@section('content')
<form action="{{ route('panel.products.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" class="form-control @error('quantity') is-invalid @enderror">
            @error('quantity')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
            <label for="category_id" class="form-label">Category</label>
            <select id="category_id" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                <option value="">Select category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6">
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-6 form-check mt-2">
            <input type="checkbox" class="form-check-input" id="is_sale" name="is_sale" {{ old('is_sale') ? 'checked' : '' }}>
            <label class="form-check-label" for="is_sale">Is Sale</label>
        </div>

        <div class="col-6 form-check mt-2">
            <input type="checkbox" class="form-check-input" id="is_top" name="is_top" {{ old('is_top') ? 'checked' : '' }}>
            <label class="form-check-label" for="is_top">Is Top</label>
        </div>
    </div>

    <button class="btn btn-sm btn-primary mt-3">Create</button>
</form>
@endsection