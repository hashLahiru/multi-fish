@extends('admin.layout.app')

@section('title', 'Product List')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title" style="padding-bottom: 10px;">
                <h5>Product List</h5>
                <div class="ibox-tools">
                    <a href="{{ route('product.create') }}" class="btn btn-primary mb-2">
                        Add Product
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="productTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Super Category</th>
                                <th>Sri Lanka</th>
                                <th>Indonesia</th>
                                <th>Malaysia</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be populated here dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            fetch("{{ route('product.get') }}")
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.querySelector('#productTable tbody');
                    tableBody.innerHTML = ''; // Clear the table body

                    data.data.forEach(product => {
                        const row = `
                        <tr>
                            <td>${product.id}</td>
                            <td>${product.pro_name}</td>
                            <td>${product.unit_price}</td>
                            <td>${product.category_name}</td>
                            <td>${product.super_category_name}</td>
                            <td>${product.isSriLanka}</td>
                            <td>${product.isIndonesia}</td>
                            <td>${product.isMalaysia}</td>
                            <td>${product.status}</td>
                            <td>
                                <a href="/product/edit/${product.id}" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm delete-product" data-id="${product.id}">Delete</button>
                            </td>
                        </tr>
                    `;
                        tableBody.insertAdjacentHTML('beforeend', row);
                    });

                    // Attach event listeners to the delete buttons
                    const deleteButtons = document.querySelectorAll('.delete-product');
                    deleteButtons.forEach(button => {
                        button.addEventListener('click', function() {
                            const productId = button.getAttribute('data-id');
                            // Ask for confirmation before deleting
                            const confirmation = confirm(
                                'Are you sure you want to delete this product?');
                            if (confirmation) {
                                deleteProduct(productId); // Proceed with deletion
                            }
                        });
                    });
                })
                .catch(error => console.error('Error loading products:', error));
        });

        // Function to send delete request
        function deleteProduct(productId) {
            fetch(`/product/delete/${productId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        id: productId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message); // Show success message
                        window.location.reload(); // Reload the page to reflect changes
                    } else {
                        alert(data.message); // Show error message
                    }
                })
                .catch(error => {
                    console.error('Error deleting product:', error);
                    alert('An error occurred while deleting the product.');
                });
        }
</script>
@endsection