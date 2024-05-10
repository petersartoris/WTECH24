<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/admin-page.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <div class="container container-custom border-custom border-radius-custom center-all bg-box">
            <div class="row">
                <div class="col">
                    <!-- Filtering options container -->
                    <div class="filter-container d-flex py-2 align-items-center justify-content-between">
                        <div class="d-flex flex-grow-1 flex-wrap">
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
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter5">
                                <label class="form-check-label" for="filter5">
                                    Option 5
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter5">
                                <label class="form-check-label" for="filter5">
                                    Option 6
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="filter5">
                                <label class="form-check-label" for="filter5">
                                    Option 7
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="button-custom button-white">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container container-custom">
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Availability</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="/images/main/product-desktop.jpg" class="card-img" alt="-"></td>
                            <td>Product Name</td>
                            <td>1000 €</td>
                            <td>69</td>
                            <td>
                                <span class="text-success">✓ Available</span>
                            </td>
                            <td class="">
                                <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
                                <button class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="/images/main/product-desktop.jpg" class="card-img" alt="-"></td>
                            <td>Product Name</td>
                            <td>1000 €</td>
                            <td>69</td>
                            <td>
                                <span class="text-success">✓ Available</span>
                            </td>
                            <td class="">
                                <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
                                <button class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="/images/main/product-desktop.jpg" class="card-img" alt="-"></td>
                            <td>Product Name</td>
                            <td>1000 €</td>
                            <td>69</td>
                            <td>
                                <span class="text-success">✓ Available</span>
                            </td>
                            <td class="">
                                <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
                                <button class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="/images/main/product-desktop.jpg" class="card-img" alt="-"></td>
                            <td>Product Name</td>
                            <td>1000 €</td>
                            <td>69</td>
                            <td>
                                <span class="text-success">✓ Available</span>
                            </td>
                            <td class="">
                                <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
                                <button class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </main>
</x-layout>