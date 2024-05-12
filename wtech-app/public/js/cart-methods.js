let deliveryButtons = document.querySelectorAll('.delivery-button');
let paymentButtons = document.querySelectorAll('.payment-button');
let totalPriceElement = document.querySelector('.total-price');

// Base Price
let basePrice = parseFloat(totalPriceElement.textContent.replace('Total Price: ', '').replace(' €', ''));

// Hidden input fields
let deliveryMethodInput = document.getElementById('deliveryMethod');
let paymentMethodInput = document.getElementById('paymentMethod');

// Update total price
function updateTotalPrice(deliveryPrice, paymentPrice) {
    let newTotalPrice = basePrice + deliveryPrice + paymentPrice;
    totalPriceElement.textContent = 'Total Price: ' + newTotalPrice.toFixed(2) + ' €';
}

// Add click event listener to each delivery button
deliveryButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        // Remove the 'selected' class
        deliveryButtons.forEach((btn) => {
            btn.classList.remove('selected');
        });

        // Add the 'selected' class
        event.currentTarget.classList.add('selected');

        // Get the delivery price
        let deliveryPrice = event.currentTarget.dataset.price === 'Free' ? 0 : parseFloat(event.currentTarget.dataset.price);

        // Get the payment price
        let paymentPrice = 0;
        paymentButtons.forEach((btn) => {
            if (btn.classList.contains('selected')) {
                paymentPrice = btn.dataset.price === 'Free' ? 0 : parseFloat(btn.dataset.price);
            }
        });

        // Update total price
        updateTotalPrice(deliveryPrice, paymentPrice);

        // Set the value of the hidden input field
        deliveryMethodInput.value = event.currentTarget.querySelector('h4').textContent;
    });
});

// Add click event listener to each payment button
paymentButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        // Remove the 'selected' class
        paymentButtons.forEach((btn) => {
            btn.classList.remove('selected');
        });

        // Add the 'selected' class
        event.currentTarget.classList.add('selected');

        // Get the payment price
        let paymentPrice = event.currentTarget.dataset.price === 'Free' ? 0 : parseFloat(event.currentTarget.dataset.price);

        // Get the delivery price
        let deliveryPrice = 0;
        deliveryButtons.forEach((btn) => {
            if (btn.classList.contains('selected')) {
                deliveryPrice = btn.dataset.price === 'Free' ? 0 : parseFloat(btn.dataset.price);
            }
        });

        // Update the total price
        updateTotalPrice(deliveryPrice, paymentPrice);

        // Set the value of the hidden input field
        paymentMethodInput.value = event.currentTarget.querySelector('h4').textContent;
    });
});
