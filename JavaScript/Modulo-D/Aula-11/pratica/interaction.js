function verificar() {
    var texto = document.querySelector('input#texto').value
    var res = document.querySelector('div#res')

    if (texto.toLowerCase() === 'brasil') {
        res.innerHTML = '<p>Você é Brasileiro</p>'
    } else {
        res.innerHTML = '<p>Você é Estrangeiro!</p>'
    }
}