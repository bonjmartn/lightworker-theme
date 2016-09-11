(function( $ ) {

    wp.customize( 'lightworker_logo', function( value ) {
        value.bind( function( to ) {
            $(' .logo img ').attr( 'src', to );
        } );
    });    

})( jQuery );