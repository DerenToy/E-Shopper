<div class="card border-danger">   
            <div class="card-body">
                <form action="updateProduct.php?product_id=<?=$row['product_id'] ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category" class="col-form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Category" required>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="gender" class="col-form-label">Gender</label>
                            <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-center"><i class="fa fa-check-circle"></i>Update</button>
                </form>
            </div>
</div>
