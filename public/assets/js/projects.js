$(document).ready(function(){
    $('#date_begin, #date_end').pickadate({
        format: 'yyyy-mm-dd',
        closeOnSelect: true,
        closeOnClear: true,
    });
});