<form
    action="{{ $product->exists ? '/api/update/' . $product->id : '/api/product' }}"
    method="POST"
    enctype="multipart/form-data"
    class="d-flex flex-column align-items-center justify-content-center"
>
    @csrf

    @if ($product->exists)
        @method('PUT')
    @endif

    <div class="input-group m-3 d-flex align-items-center justify-content-center">
        <input
            type="text"
            class="form-control"
            placeholder="Enter product name"
            name="product_name"
            value="{{ old('product_name', $product->name ?? '') }}"
        >
    </div>

    <div class="input-group mb-3 m-3">
        <input
            type="file"
            class="form-control"
            id="inputGroupFile01"
            name="product_images[]"
            multiple
        >
    </div>

    <div class="input-group m-3 d-flex align-items-center justify-content-center">
        <textarea
            class="form-control"
            name="product_description"
            placeholder="Enter product description"
        >{{ old('product_description', $product->description ?? '') }}</textarea>
    </div>

    <div class="input-group m-3 d-flex align-items-center justify-content-center">
        <select
            class="form-select"
            name="product_category"
        >
            <option value="">Product category</option>

            <option value="Electronics"
                @selected(old('product_category', $product->category ?? '') === 'Electronics')>
                Electronics
            </option>

            <option value="Gadgets"
                @selected(old('product_category', $product->category ?? '') === 'Gadgets')>
                Gadgets
            </option>

            <option value="Men's clothing"
                @selected(old('product_category', $product->category ?? '') === "Men's clothing")>
                Men's clothing
            </option>

            <option value="Women's clothing"
                @selected(old('product_category', $product->category ?? '') === "Women's clothing")>
                Women's clothing
            </option>
        </select>
    </div>

    <div class="input-group m-3 d-flex align-items-center justify-content-center">
        <input
            type="number"
            step="0.01"
            class="form-control"
            placeholder="Enter product price"
            name="product_price"
            value="{{ old('product_price', $product->price ?? '') }}"
        >
    </div>

    <div class="input-group m-3 d-flex align-items-center justify-content-center">
        <input
            type="number"
            step="0.01"
            class="form-control"
            placeholder="Enter product discounted price"
            name="product_discount_price"
            value="{{ old('product_discount_price', $product->discount_price ?? '') }}"
        >
    </div>

    <div class="input-group m-3 d-flex align-items-center justify-content-center">
        <input
            type="number"
            class="form-control"
            placeholder="Enter product stock"
            name="product_stock"
            value="{{ old('product_stock', $product->stock ?? '') }}"
        >
    </div>

    <div class="input-group mb-3 d-flex align-items-center justify-content-center">
        <input
            type="hidden"
            name="product_in_stock"
            value="0"
        >

        <input
            id="stock_check"
            class="form-check-input mx-1"
            type="checkbox"
            name="product_in_stock"
            value="1"
            @checked(old('product_in_stock', $product->in_stock ?? false))
        >

        <label for="stock_check">
            In Stock
        </label>
    </div>

    <div class="input-group m-3 d-flex align-items-center justify-content-center">
        <button type="submit" class="btn btn-outline-success">
            Submit
        </button>
    </div>
</form>