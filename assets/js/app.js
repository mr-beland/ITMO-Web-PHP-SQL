document.addEventListener("DOMContentLoaded", () => {
    console.log("Hello World!");
    let elm = document.getElementById("counter");
    console.log(elm)

    axios({
        method: 'get',
        url: 'counter',
        responseType: 'json'
    })
        .then(function (response) {
            // todo: вставляем полученные json в span элемент
            elm.textContent = response.data[0].cnt;
              //console.log(response.data.cnt)
        });


});