@extends('layouts.home.index')
@section('content')
@include('home.cart_component')
<script src="{{ asset('/js/jquery-2.2.3.min.js') }}"></script>
<script>
    function cartUpdate(event){
        event.preventDefault();
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).parents('tr').find('input.quatity').val();

        $.ajax({
            type: "GET",
            url: urlUpdateCart,
            data:{id:id,quantity:quantity},
            // dataType: 'json',
            success: function (data) {
                if(data.code===200){
                    $('.cart_wrapper').html(data.showCart);

                }
               else if(data.code===300){
                    alert('Kho không đủ hàng !');
                    $('.cart_wrapper').html(data.showCart);
                }

            },
            error: function () {

            }
        });
        quantity_cart();
    }
    function cartDelete(event){
        event.preventDefault();
        let urlDeleteCart = $('.delete_cart_url').data('url');
        let id = $(this).data('id');


        $.ajax({
            type: "GET",
            url: urlDeleteCart,
            data:{id:id},
            // dataType: 'json',
            success: function (data) {
                if(data.code=200){
                    $('.cart_wrapper').html(data.showCart);
                }
            },
            error: function () {

            }
        });
        quantity_cart();
    }
    $(function () {
        $(document).on('click', '.cart-update',cartUpdate);
        $(document).on('click', '.cart-delete',cartDelete);
        quantity_cart();
    });
</script>
@endsection
