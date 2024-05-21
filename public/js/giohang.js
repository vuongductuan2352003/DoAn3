
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