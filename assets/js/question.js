function helloWorld() {
    console.log('function')
    let form = document.querySelector('form');
    let data = new FormData(form);
    const answerElem = document.querySelector('#answer')
    const questionInput = document.querySelector('#question')

    axios({
        method: 'post',
        url: 'add',
        responseType: 'json',
        data: data,
    })
        .then(function (response) {
            // elm.textContent = response.data[0].cnt;
            if (response.data['code'] == 200) {
                answerElem.setAttribute('style', 'display:block')
                questionInput.value = ''
            } else {
                alert(response.data['message'])
            }
        });
}
