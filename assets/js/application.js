(function($) {
	/**
	 * Throw errors, for "unsafe" actions, and bad code
	 */
    "use strict";
    /**
     * Add schema url to all links
     */
    $( "a" ).attr( "itemprop", "url" );
    /**
     * Select generated password on focus
     */
     $( "input#generatedpassphrase" ).on( "click", function() {
         $( "#generatedpassphrase" ).select();
     });
    /**
     * Copy generated password to clipboard
     */
    $( "#copy-generated" ).on( "click", function(e) {
        e.preventDefault();

        if ( $( "#generatedpassphrase" ).val() != "" )
        {
            $( "#generatedpassphrase" ).select();
            document.execCommand( "copy" );
            $( "#copied-to-clipboard" ).fadeIn( 200 ).delay( 1200 ).fadeOut( 500 );
        }
    });
})(jQuery);