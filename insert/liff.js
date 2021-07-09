$(document).ready(function () {

    var liffId = "1656174329-NyZyJ3o0";
    initializeLiff(liffId);
})

function initializeLiff(liffId) {
    liff
        .init({
            liffId: liffId
        })
        .then(() => {
          initializeApp();
        })
        .catch((err) => {
            console.log('LIFF Initialization failed ', err);
        });
}

function sendText(text) {

    liff.sendMessages(
        [{
        'type': 'text',
        'text': text
        }]
        
    ).then(function () {
        liff.closeWindow();
    }).catch(function (error) {
        window.alert('Failed to send message ' + error);
    });
}
