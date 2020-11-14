$( document ).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $( '#link_add' ).submit(function(event) {
        event.preventDefault();
        $('.alert').remove();
        let formData = $( this ).serialize();
        $.post( "/store", formData, function( data ) {
            $( "#result_form" ).html( data['link'] ).attr('href', data['link']);
            $( "#link_text" ).html( 'Your link:' );
        }).fail(function(xhr) {
            $('#validation-errors').html('');
            $.each(xhr.responseJSON.errors, function(key,value) {
                $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
            });
        })
        return false;
    });
});
