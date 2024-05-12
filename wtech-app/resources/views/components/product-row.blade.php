<tr>
    <td><img src="{{ asset($image) }}" class="card-img" alt="-"></td>
    <td>{{ $name }}</td>
    <td>{{ $price }} €</td>
    <td>{{ $quantity }}</td>
    <td>
        <span class="{{ $availability === 'available' ? 'text-success' : 'text-danger' }}">
            {{ $availability === 'available' ? '✓ Available' : 'Not Available' }}
        </span>
    </td>
    <td class="">
        <button class="button-edit button-white"><i class="fas fa-edit">Edit</i></button>
        <form method="POST" action="{{ route('product.destroy', $id) }}" class="admin-button">
            @csrf
            @method('DELETE')
            <button type="submit" class="button-edit button-red"><i class="fas fa-trash-alt">Remove</i></button>
        </form>
    </td>
    
</tr>