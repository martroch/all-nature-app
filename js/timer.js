for(let x= 0; x < 151; x++) {
    setTimeout(function() {
        document.querySelector('.timer').innerHTML = x;
            }, 
        x * 100)
}
