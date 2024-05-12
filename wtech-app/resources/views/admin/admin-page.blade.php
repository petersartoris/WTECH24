<x-layout>
    <x-slot name="styles">
        <link href="{{ asset('css/admin-page.css') }}" rel="stylesheet">
    </x-slot>

    <main>
        <div class="container container-custom">  
            <div class="row">
                
                <button type="button" class="button-custom button-white">
                    <a href="{{ route('admin-edit') }}" class="add-item-button">+ Add Item</a>
                </button>
                
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
                        @foreach ($products as $product)
                            @php
                                $image = $product->images->where('order', 0)->first();
                            @endphp
                            <x-product-row
                                id="{{ $product->id }}" 
                                image="{{ asset($image->path ?? 'images/main/250x250.png') }}"
                                name="{{ $product->name }}"
                                price="{{ $product->price }}"
                                quantity="{{ $product->quantity }}"
                                availability="{{ $product->availability }}"
                            />
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</x-layout>
