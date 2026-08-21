<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <x-navbar title="E-commerce API" />
    <div class="container-fluid p-3 vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>
            Welcome to my API ! 
        </h1>
        <h1 class="text-align-center">
            Here are some <span class="text-danger">endpoints</span>.
        </h1>
        <br>
        <br>
        <h1>GET <a href="/api/product/create" class="text-danger text-decoration-none">/api/product/create</a></h1>
        <br>
        <h1>GET <a href="/api/product/" class="text-danger text-decoration-none">/api/product/</a></h1>
        <br>
        <h1>GET <a href="/api/products/gadgets" class="text-danger text-decoration-none">/api/products/{category}</a></h1>
        <br>
        <h1>GET <a href="/api/product/1" class="text-danger text-decoration-none">/api/product/{id}</a></h1>
        <br>
        <h1>GET <a href="/api/product/1/edit" class="text-danger text-decoration-none">/api/product/{id}/edit</a></h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>