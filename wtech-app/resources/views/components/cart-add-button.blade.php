<form action="{{ route('cart-add', $product) }}" method="POST" class="form-button-custom">
    @csrf
    <input type="hidden" name="quantity" value="1">
        <button class="button-custom button-red fixed-size my-2">Add to Cart</button>
    </input>
</form>