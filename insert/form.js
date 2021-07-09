var params = (new URL(document.location)).searchParams;

$(function () {
    $('form').submit(function () {
        
        var name = $('textarea[name="name"]').val();
        var password = $('textarea[name="password"]').val();
        var linename = $('textarea[name="linename"]').val();    
        var lineid = $('textarea[name="lineid"]').val();         
        var msg = `登録する\n${name}\n${password}\n${linename}\n${lineid}`;
        sendText(msg);
        return false;
    });
});


