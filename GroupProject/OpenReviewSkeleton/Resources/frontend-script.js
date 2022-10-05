$( function() {
    $( "#company_name" ).autocomplete({
        source: 'backend-script.php'
    });
});