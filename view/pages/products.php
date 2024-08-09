<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirikchilik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php require 'view/partials/navbar.php' ?>    
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <?php
                    $task = new Task();
                    $products = $task->getAllProduct();                    
                ?>

                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Color</th>
                    <th scope="col">Size</th>
                    <th scope="col">Bloger_Id</th>
                    <th scope="col">Actions</th>
                  </tr>
            </thead>
            <tbody>
            <?php foreach($products as $product): ?>    
              <tr>
                <th scope="row"><?= $product['id'] ?></th>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['color'] ?></td>
                <td><?= $product['size'] ?></td>
                <td><?= $product['bloger_id'] ?></td>
                <td>
                    <a href="/products&delete?id=<?= $product['id']?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>

        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                    <form action="/productsAdd" method="post">

                            <div class="mb-3">
                                <label for="itemName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="itemName" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="itemPrice" class="form-label">Price</label>
                                <input type="text" class="form-control" id="itemPrice" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="itemPrice" class="form-label">Color</label>
                                <input type="text" class="form-control" id="itemPrice" name="color">
                            </div>
                            <div class="mb-3">
                                <label for="itemPrice" class="form-label">Size</label>
                                <input type="text" class="form-control" id="itemPrice" name="size">
                            </div>
                            <div class="mb-3">
                                <label for="itemPrice" class="form-label">Bloger_id</label>
                                <input type="text" class="form-control" id="itemPrice" name="bloger_id">
                            </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>