@extends('layouts.panel')

@section('title', 'Categories')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('panel.home') }}" style="text-decoration: none;" class="text-secondary fw-bolder">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Categories</li>
    </ol>
</nav>

<div class="d-flex justify-content-between align-items-center mb-2">
    <div>
        <form action="{{ url()->current() }}">
            <select name="per_page" id="per_page">
                <option value="">Select per page</option>
                <option value="10" @selected(request('per_page')==10)>10</option>
                <option value="25" @selected(request('per_page')==25)>25</option>
                <option value="50" @selected(request('per_page')==50)>50</option>
                <option value="75" @selected(request('per_page')==75)>75</option>
                <option value="100" @selected(request('per_page')==100)>100</option>
            </select>
        </form>
    </div>
    <a href="{{ route('panel.categories.create') }}" class="btn btn-sm btn-primary">
        <i class="bi-plus"></i> Create
    </a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Is Top</th>
            <th scope="col">Is Sale</th>
            <th scope="col">Top Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <th>{{ $category->id }}</th>
            <th>{{ $category->name }}</th>
            <th>{{ $category->image }}</th>
            <th>
                @if($category->is_top)
                <i class="h3 bi-check text-success"></i>
                @else
                <i class="h3 bi-x text-danger"></i>
                @endif
            </th>
            <th>
                @if($category->is_sale)
                <i class="h3 bi-check text-success"></i>
                @else
                <i class="h3 bi-x text-danger"></i>
                @endif
            </th>
            <th>
                @if($category->top_category)
                <i class="h3 bi-check text-success"></i>
                @else
                <i class="h3 bi-x text-danger"></i>
                @endif
            </th>
            <th class="text-end">
                <div class="d-flex justify-content-end">
                    <div class="me-2">
                        <a class="btn btn-primary btn-sm" href="{{ route('panel.categories.edit', $category) }}">
                            Edit
                        </a>
                    </div>
                    <div>
                        <form action="{{ route('panel.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-3">
    {{ $categories->links() }}
</div>
@endsection

@push('js')
<script>
    $("#per_page").on('change', function() {
        $(this).closest('form').submit();
    });
</script>
@endpush