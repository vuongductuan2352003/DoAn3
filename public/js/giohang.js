
    $(document).ready(function(){
        $('.item-quantity .qty-increase').on('click', function(){
            var inputElement = $(this).siblings('.qty-input');
            var quantity = parseInt(inputElement.val());
            inputElement.val(quantity + 1);
            updateCartItem(inputElement);
        });

        $('.item-quantity .qty-decrease').on('click', function(){
            var inputElement = $(this).siblings('.qty-input');
            var quantity = parseInt(inputElement.val());
            if(quantity > 1) {
                inputElement.val(quantity - 1);
                updateCartItem(inputElement);
            }
        });

        function updateCartItem(inputElement){
            var quantity = inputElement.val();
            var cartItemId = inputElement.closest('.menu-gioHang2').find('input[name="selected_items[]"]').val();
            $.ajax({
                url: "{{ route('cart.update') }}",
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    cartItemId: cartItemId,
                    quantity: quantity
                },
                success: function(response){
                    // Xử lý response nếu cần
                },
                error: function(xhr){
                    // Xử lý lỗi nếu cần
                }
            });
        }
    });

    
    document.getElementById('select-all').onclick = function() {
        var checkboxes = document.querySelectorAll('input[name="selected_items[]"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.tang, .giam').forEach(button => {
            button.addEventListener('click', function() {
                const isIncrement = this.classList.contains('giam');
                const quantityInput = this.closest('.span-sl').querySelector('.soluong');
                const cartItemId = this.closest('.menu-gioHang2').querySelector('input[name="selected_items[]"]').value;
                let newQuantity = parseInt(quantityInput.value);
    
                if (isIncrement) {
                    newQuantity++;
                } else if (newQuantity > 1) {
                    newQuantity--;
                }
    
                quantityInput.value = newQuantity;
                updateCart(cartItemId, newQuantity, this.closest('.menu-gioHang2'));
            });
        });
    });
    
    function updateCart(cartItemId, quantity, cartItemElement) {
        const updateUrl = document.getElementById('cart-update-url').value;
    
        fetch(updateUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                cart_item_id: cartItemId,
                quantity: quantity
            })
        })
        .then(response => response.json())
       
        .catch(error => console.error('Lỗi:', error));
    }
    function reloadPage() {
        location.reload();
    }