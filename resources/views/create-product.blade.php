<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit product details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <x-navbar title="E-commerce API" />
    <div class="container-fluid p-3 m-0 vh-100 d-flex align-items-center justify-content-center flex-column">
        <h1 class="text-info">Product form</h1>
        <form action="/api/product" method="post" enctype="multipart/form-data" class="d-flex flex-column align-items-center justify-content-center">
            @csrf
            <div class="input-group m-3 d-flex align-items-center justify-content-center">
                <input type="text" class="form-control" placeholder="Enter product name" aria-label="Username" aria-describedby="basic-addon1" name="product_name">

            </div>

            <div class="input-group mb-3 m-3">
                <input type="file" class="form-control" id="inputGroupFile01" name="product_images[]" multiple>
            </div>

            <div class="input-group m-3 d-flex align-items-center justify-content-center">
                <textarea class="form-control" aria-label="With textarea" name="product_description" placeholder="Enter product description"></textarea>
            </div>

            <div class="input-group m-3 d-flex align-items-center justify-content-center">
            <select class="form-select" aria-label="Default select example" name="product_category">
                <option selected>Product category</option>
                <option value="Electronics">Electronics</option>
                <option value="Gadgets">Gadgets</option>
                <option value="Men's clothing">Men's clothing</option>
                <option value="Women's clothing">Women's clothing</option>
            </select>
            </div>

            <div class="input-group m-3 d-flex align-items-center justify-content-center">
                <input type="text" class="form-control" placeholder="Enter product price" aria-label="Username" aria-describedby="basic-addon1" name="product_price">
            </div>

            <div class="input-group m-3 d-flex align-items-center justify-content-center">
                <input type="text" class="form-control" placeholder="Enter product discounted price" aria-label="Username" aria-describedby="basic-addon1" name="product_discount_price">
            </div>

            <div class="input-group m-3 d-flex align-items-center justify-content-center">
                <input type="text" class="form-control" placeholder="Enter product stock" aria-label="Username" aria-describedby="basic-addon1" name="product_stock">
            </div>

            <div class="input-group mb-3 d-flex align-items-center justify-content-center">
                <input id="stock_check" class="form-check-input mx-1" type="checkbox" aria-label="Checkbox for following text input" name="product_in_stock">
                <label for="stock_check">
                    In Stock
                </label>
            </div>
            <div class="input-group m-3 d-flex align-items-center justify-content-center">
                <button class="btn btn-outline-success">
                    Submit
                </button>
            </div>
    </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>