<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include '../views/nav.view.php'; ?>
    <div class="container">
        <div class="row py-2 justify-content-center h5">
            Edit Category
        </div>
        <div class="row">
            <div class="col-md-6 m-auto mt-5">
                <form action="/categories/update/<?= $category['id']; ?>" method="post">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= htmlspecialchars($category['name']); ?>" required>
                    </div>
                    
                    <button type="submit" class="btn btn-dark btn-sm">Update</button>
                    <a href="/categories" class="btn btn-secondary btn-sm">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>