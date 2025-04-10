@extends('admin.layouts.admin')

@section('content')

<div class="container mt-4">
    <h2 class="mb-4">Add New Product</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">

            <div class="col-md-6">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="product_code" class="form-label">Product Code</label>
                <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="product_code" name="product_code" value="{{ old('product_code') }}" required>
                @error('product_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" class="form-control @error('tags') is-invalid @enderror" id="tags" name="tags" value="{{ old('tags') }}">
                @error('tags')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="purchase_price" class="form-label">Purchase Price</label>
                <input type="number" class="form-control @error('purchase_price') is-invalid @enderror" id="purchase_price" name="purchase_price" value="{{ old('purchase_price') }}" required>
                @error('purchase_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="regular_price" class="form-label">Regular Price</label>
                <input type="number" class="form-control @error('regular_price') is-invalid @enderror" id="regular_price" name="regular_price" value="{{ old('regular_price') }}" required>
                @error('regular_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="discount_price" class="form-label">Discount Price</label>
                <input type="number" class="form-control @error('discount_price') is-invalid @enderror" id="discount_price" name="discount_price" value="{{ old('discount_price') }}">
                @error('discount_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="discount_type" class="form-label">Discount Type</label>
                <select class="form-select @error('discount_type') is-invalid @enderror" id="discount_type" name="discount_type">
                    <option value="fixed" {{ old('discount_type') == 'fixed' ? 'selected' : '' }}>Fixed</option>
                    <option value="percentage" {{ old('discount_type') == 'percentage' ? 'selected' : '' }}>Percentage</option>
                </select>
                @error('discount_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="stock_qty" class="form-label">Stock Quantity</label>
                <input type="number" class="form-control @error('stock_qty') is-invalid @enderror" id="stock_qty" name="stock_qty" value="{{ old('stock_qty') }}">
                @error('stock_qty')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="product_thumbnail" class="form-label">Product Thumbnail</label>
                <input type="file" class="form-control @error('product_thumbnail') is-invalid @enderror" id="product_thumbnail" name="product_thumbnail">
                @error('product_thumbnail')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="images" class="form-label">Product Images</label>
                <input type="file" class="form-control @error('images.*') is-invalid @enderror" id="images" name="images[]" multiple>
                @error('images.*')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12">
                <label for="short_description" class="form-label">Short Description</label>
                <input type="text" class="form-control @error('short_description') is-invalid @enderror" id="short_description" name="short_description" value="{{ old('short_description') }}" required>
                @error('short_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12">
                <label for="long_description" class="form-label">Long Description</label>
                <textarea class="form-control @error('long_description') is-invalid @enderror" id="long_description" name="long_description" rows="4" required>{{ old('long_description') }}</textarea>
                @error('long_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="sizes" class="form-label">Sizes</label>
                <input
                    type="text"
                    class="form-control @error('sizes') is-invalid @enderror"
                    id="sizes"
                    name="sizes"
                    placeholder="Example: M, L, XL"
                    value="{{ old('sizes') }}"
                >
                @error('sizes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <label for="colors" class="form-label">Colors</label>
                <input
                    type="text"
                    class="form-control @error('colors') is-invalid @enderror"
                    id="colors"
                    name="colors"
                    placeholder="Example: Red, Blue, Green"
                    value="{{ old('colors') }}"
                >
                @error('colors')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-md-4">
                <label for="status1" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" id="status1" name="status" required>
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="tax" class="form-label">Tax</label>
                <input type="number" class="form-control @error('tax') is-invalid @enderror" id="tax" name="tax" value="{{ old('tax') }}">
                @error('tax')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="expiration_date" class="form-label">Expiration Date</label>
                <input type="date" class="form-control @error('expiration_date') is-invalid @enderror" id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}">
                @error('expiration_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary w-100">Save Product</button>
            </div>
        </div>
    </form>
</div>

@endsection