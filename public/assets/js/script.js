(function( $ ) {
var deleteLink = document.querySelector('.deleteLink')

    $(document).ready(function() {
        $(".alert-primary").hide();
        deleteLink.addEventListener('click', function alertDelete() {
            
            if (confirm('êtes-vous sur de vouloir supprimer ceci')) {
                $(".alert-primary").fadeTo(2000, 500).slideUp(500, function(){
                    $(".alert-primary").slideUp(500);
                });
            }
        });
    });

    $(".registrationSuccess").fadeTo(3000, 500).slideUp(500, function(){
        $(".registrationSuccess").slideUp(500);
    });


})( jQuery );