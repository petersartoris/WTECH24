<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/admin-page.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        
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
                        {{-- this should be made into component ↓ --}}
                        <tr>
                            <td><img src="{{ asset('images/main/product-desktop.jpg') }}" class="card-img"
                                    alt="-"></td>
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
                            <td><img src="{{ asset('images/main/product-desktop.jpg') }}" class="card-img"
                                    alt="-"></td>
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
                            <td><img src="{{ asset('images/main/product-desktop.jpg') }}" class="card-img"
                                    alt="-"></td>
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
                            <td><img src="{{ asset('images/main/product-desktop.jpg') }}" class="card-img"
                                    alt="-"></td>
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
