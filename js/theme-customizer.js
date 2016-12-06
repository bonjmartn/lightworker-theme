(function( $ ) {

    wp.customize( 'lightworker_logo', function( value ) {
        value.bind( function( to ) {
            $(' .logo img ').attr( 'src', to );
        } );
    });    

    wp.customize( 'lightworker_h1_color', function( value ) {
        value.bind( function( to ) {
            $( 'h1 a' ).css( 'color', to );
            $( 'h1' ).css( 'color', to );
            $( 'h2 a' ).css( 'color', to );
            $( 'h2' ).css( 'color', to );
            $( 'h3 a' ).css( 'color', to );
            $( 'h3' ).css( 'color', to );
            $( 'h4 a' ).css( 'color', to );
            $( 'h4' ).css( 'color', to );
            $( 'h5 a' ).css( 'color', to );
            $( 'h5' ).css( 'color', to );
            $( 'h6 a' ).css( 'color', to );
            $( 'h6' ).css( 'color', to );
        } );
    });

    wp.customize( 'lightworker_h1_font_type', function( value ) {
        value.bind( function( to ) {            
            $( 'h1' ).css( 'font-family', to );  
            $( 'h2' ).css( 'font-family', to );  
            $( 'h3' ).css( 'font-family', to );  
            $( 'h4' ).css( 'font-family', to );
            $( 'h5' ).css( 'font-family', to );
            $( 'h6' ).css( 'font-family', to );
            $( 'h1 a' ).css( 'font-family', to );  
            $( 'h2 a' ).css( 'font-family', to );  
            $( 'h3 a' ).css( 'font-family', to );  
            $( 'h4 a' ).css( 'font-family', to );
            $( 'h5 a' ).css( 'font-family', to );
            $( 'h6 a' ).css( 'font-family', to );
        } );
    }); 

    wp.customize( 'lightworker_p_color', function( value ) {
        value.bind( function( to ) {
            $( 'p' ).css( 'color', to );
            $( 'li' ).css( 'color', to );
        } );
    });

    wp.customize( 'lightworker_p_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'p' ).css( 'font-size', to + 'px' ); 
            $( 'li' ).css( 'font-size', to + 'px' );
            $( 'a' ).css( 'font-size', to + 'px' );  
        } );
    }); 

    wp.customize( 'lightworker_p_font_type', function( value ) {
        value.bind( function( to ) {            
            $( 'p' ).css( 'font-family', to ); 
            $( 'li' ).css( 'font-family', to );
            $( 'a' ).css( 'font-family', to );  
        } );
    });

    wp.customize( 'lightworker_accent_color', function( value ) {
        value.bind( function( to ) {
            $( 'a' ).css( 'color', to );
            $( '.fa' ).css( 'color', to );
            $( '.fa a' ).css( 'color', to );
            $( 'a:hover' ).css( 'color', to );
            $( 'a:focus' ).css( 'color', to );
            $( 'a:active' ).css( 'color', to );
            $( 'button' ).css( 'background-color', to );
            $( 'html input[type="button"]' ).css( 'background-color', to );
            $( 'input[type="reset"]' ).css( 'background-color', to );
            $( 'input[type="submit"]' ).css( 'background-color', to );
            $( '.footer-cta button' ).css( 'background-color', to );
         } );
    });

    wp.customize( 'lightworker_box_color', function( value ) {
        value.bind( function( to ) {
            $( 'footer' ).css( 'background-color', to );
            $( '.page-header' ).css( 'background-color', to );
            $( '.post-header' ).css( 'background-color', to );
            $( '.archives-header' ).css( 'background-color', to );
            $( '.endofpost' ).css( 'background-color', to );
            $( '.sidebar h3' ).css( 'background-color', to );
            $( '.latest-posts' ).css( 'background-color', to );
            $( '.footer-cta' ).css( 'background-color', to );
         } );
    });

})( jQuery );