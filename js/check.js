$('input').on('click', function () {
    if ( $(this).is(':checked') ) {
        $(this).closest('label').addClass("label-checked")
    } else {
        
    }
})

$('#test').on('click', function () {
    if ( $(this).prop('checked', true) ) {
        $(this).closest('label').addClass('label-checked')
    }
})