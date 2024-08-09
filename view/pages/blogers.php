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
                <?php
                $task = new Task();
                $blogers = $task->getAllBlogers();                    
                ?>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($blogers as $bloger): ?>
                <?php if($bloger['id'] != $_POST['id']): ?>
                <tr>
                    <th scope="row"><?= $bloger['id'] ?></th>
                    <td><?= $bloger['name'] ?></td>
                    <td>
                        <a href="/blogers&delete?id=<?= $bloger['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endif; ?>
            <?php endforeach ?>

            </tbody>
        </table>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Bloger</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <form action="/blogersAdd" method="post">
                        
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="itemName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="itemName" name="name">
                            </div>
                        </div>
                        
                        <div class="modal-footer" action="/blogers">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
       
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>