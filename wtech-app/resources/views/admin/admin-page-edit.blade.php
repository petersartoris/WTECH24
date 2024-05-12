<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/admin-page-edit.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <div class="container container-custom">


            <div class="row">

                <h2 class="mb-4 white-text">Edit Product Details</h2>

                <div class="col-8">
                    
                    <form method="POST" action="{{ route('product.store') }}">
                        @csrf
                        <div class="row white-text mb-4">
                            <!-- Product Name -->
                            <div class="form-group white-text mb-4">
                                <label class="pb-2" for="product-name">Product Name:</label>
                                <input type="text" class="form-control" id="product-name" name="product-name" placeholder="Enter product name">
                            </div>
                    
                            <!-- Product Description -->
                            <div class="form-group white-text mb-4">
                                <label class="pb-2" for="product-description">Product Description:</label>
                                <textarea class="form-control" id="product-description" name="product-description" rows="8" placeholder="Enter product description"></textarea>
                            </div>
                        </div>
                    
                        <!-- Price, Quantity, and Availability -->
                        <div class="row white-text mb-4">
                            <div class="col-3">
                                <label class="pb-2" for="product-price">Price (Euros €):</label>
                                <input type="number" class="form-control" id="product-price" name="product-price" placeholder="Enter price" step="0.01">
                            </div>
                            <div class="col-3">
                                <label class="pb-2" for="product-quantity">Quantity:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button" id="decrease-quantity">-</button>
                                    </div>
                                    <input type="number" class="form-control" id="product-quantity" name="product-quantity" placeholder="Enter quantity" min="0">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="increase-quantity">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <label class="pb-2" for="availability">Availability:</label>
                                <select class="form-select" id="availability" name="availability">
                                    <option value="in_stock">Available</option>
                                    <option value="out_of_stock">Out of Stock</option>
                                    <option value="pre_order">Currently Unavailable</option>
                                </select>
                            </div>
                    
                            <div class="col-12 pt-5">
                                <button type="submit" class="button-custom button-red" id="save-changes"><i class="fas fa-save"></i> Save</button>
                            </div>
                        </div>
                    </form>                    

                </div>
                <div class="col-2">
                    <div class="filter-container d-flex flex-column py-2">
                        <label class="pb-2 white-text" for="availability">Categories:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="filter1">
                            <label class="form-check-label" for="filter1">
                                Option 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="filter2">
                            <label class="form-check-label" for="filter2">
                                Option 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="filter3">
                            <label class="form-check-label" for="filter3">
                                Option 3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="filter4">
                            <label class="form-check-label" for="filter4">
                                Option 4
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <div class="image-edit-container">
                        <x-image-edit-button image="images/main/product-desktop.jpg" alt="Image 1"/>
                        <x-image-edit-button image="images/main/product-desktop.jpg" alt="Image 1"/>
                        <x-image-edit-button image="images/main/product-desktop.jpg" alt="Image 1"/>
                        <x-image-edit-button image="images/main/product-desktop.jpg" alt="Image 1"/>
                    </div>
                </div>

            </div>

        </div>
    </main>

</x-layout>
