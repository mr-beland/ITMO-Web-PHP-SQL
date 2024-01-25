document.addEventListener('getDOMRead', () => {

    let form = document.querySelector('form')
    let data = new FormData (form)
    
    function addQuestion () {
        console.log(addQuestion)
        axios({
                method: 'get',
                url: 'add-question',
                responseType: 'json',
                data: data,

            })
            .then(res => {
                
            })

    }
    
})