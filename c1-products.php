
<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">

    <div class="card-body">
        <h2 class="mb-1 text-white">Products</h2>
        <p class="text-muted mb-0">Manage and track all your products</p>
    </div>

</div>

<div class="card shadow-sm mb-4">

    <div class="card-body">
 
        <div class="row g-0 align-items-center mb-3">

            <div class="col">

                <h5 class="mb-0 text-white">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>

                <small class="text-muted">Fill in the details of a product</small>

            </div>

            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>

        </div>
         
        <hr class="border-secondary">
 
        <form action="" method="post" class="needs-validation" novalidate>

            <div class="row g-3">

                <div class="col-md-3">
                    <label for="pid" class="form-label text-white">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" value="" required>
                </div>

                <div class="col-md-3">
                    <label for="name" class="form-label text-white">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" value="" required>
                </div>

                <div class="col-md-3">
                    <label for="price" class="form-label text-white">Price <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" value="" required min="0" step="0.01">
                </div>

                <div class="col-md-3">

                    <label for="brand" class="form-label text-white">Brand <span class="text-danger" aria-hidden="true">*</span></label>
                    
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="Extase Pro">Extase Pro</option>
                        <option value="Felco">Felco</option>
                        <option value="Fiskars">Fiskars</option>
                        <option value="Okatsune">Okatsune</option>
                        <option value="ARS Tools">ARS Tools</option>
                    </select>

                </div>
 
                <div class="col-md-3">

                    <label for="product_material" class="form-label text-white">Blade Material <span class="text-danger" aria-hidden="true">*</span></label>
                    
                    <select name="product_material" id="product_material" class="form-select" required>
                        <option value="">Select Material</option>
                        <option value="SK5 High Carbon Steel">SK5 High Carbon Steel</option>
                        <option value="Stainless Steel">Stainless Steel</option>
                        <option value="Titanium Coated Steel">Titanium Coated Steel</option>
                        <option value="Chrome Plated Steel">Chrome Plated Steel</option>
                    </select>

                </div>
 
                <div class="col-md-3">

                    <label for="product_capacity" class="form-label text-white">Cutting Capacity <span class="text-danger" aria-hidden="true">*</span></label>
                    
                    <select name="product_capacity" id="product_capacity" class="form-select" required>
                        <option value="">Select Capacity</option>
                        <option value="15mm">15mm (0.6 in)</option>
                        <option value="20mm">20mm (0.8 in)</option>
                        <option value="25mm">25mm (1.0 in)</option>
                        <option value="30mm">30mm (1.2 in)</option>
                    </select>

                </div>
                 
                <div class="col-md-3">
                    <label for="quantity" class="form-label text-white">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="0">
                </div>

                <div class="col-md-3">
                    <label for="product_image" class="form-label text-white">Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename" value="">
                </div>

            </div>
             
            <hr class="mt-4 mb-3 border-secondary">
             
            <div>

                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>

                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>

            </div>

        </form>

    </div>

</div>

<div class="card shadow-sm">

    <div class="card-body">
  
        <div class="row align-items-center mb-3">

            <div class="col">

                <h5 class="mb-0 text-white">
                    <i class="bi bi-table text-primary me-2"></i>
                    Product List
                </h5>

                <small class="text-muted">View and manage all products in the inventory</small>

            </div>

            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>

        </div>
 
        <hr class="border-secondary">
 
        <div class="table-responsive">

            <table class="table table-striped table-hover">
                <thead>

                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>P001</td>
                        <td>Bypass Pruning Shears 8"</td>
                        <td>$45.00</td>
                        <td>Extase Pro</td>
                        <td>

                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <button type="button" class="btn btn-sm btn-info text-white">
                                <i class="bi bi-image"></i>
                            </button>

                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>
 
<?php
$content = ob_get_clean();
require_once 'c0-layout.php';
?>
