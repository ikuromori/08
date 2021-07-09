var params = (new URL(document.location)).searchParams;

$(function () {
    $('form').submit(function () {
        var linename = $('textarea[name="linename"]').val();    
        var lineid = $('textarea[name="lineid"]').val();  
        var msg = `表示\n${linename}\n${lineid}`;
        sendText(msg);
        return false;
    });
});