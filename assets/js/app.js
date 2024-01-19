
document.addEventListener("DOMContentLoaded", () => {
   

   
    let elem = document.getElementById('counter')
    // elem.textContent = ' 10'
    

    axios({
        method: 'get',
        url: 'counter',
        responsType: 'json'
    })
    .then((response) => {
        console.log(response)
        elem.textContent = response.data.length
    })
    
})



