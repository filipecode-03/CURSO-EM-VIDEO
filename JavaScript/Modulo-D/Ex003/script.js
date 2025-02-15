function verificar() {
    var data = new Date()
    var ano = data.getFullYear()
    var fAno = document.getElementById('txtano')
    var res = document.querySelector('div#res')

    if (fAno.value.length == 0 || Number(fAno.value) > ano) {
        window.alert('[ERRO] Verifique os dados e tente novamente!')
    } else {
        var fsex = document.getElementsByName('radsex')
        var idade = ano - Number(fAno.value)
        var genero = ''
        var img = document.createElement('img')
        img.setAttribute('id', 'foto')

        if (fsex[0].checked) {
            genero = 'Homem'
            if (idade >= 0 && idade < 10) {
                // Criança
                img.setAttribute('src', 'image/kid-m.png')
            } else if (idade < 21) {
                // Jovem
                img.setAttribute('src', 'image/jovem-m.png')
            } else if (idade < 50) {
                // Adulto
                img.setAttribute('src', 'image/adulto-m.png')
            } else {
                // Idoso
                img.setAttribute('src', 'image/idoso-m.png')
            }
        } else {
            genero = 'Mulher'
            if (idade >= 0 && idade < 10) {
                // Criança
                img.setAttribute('src', 'image/kid-f.png')
            } else if (idade < 21) {
                // Jovem
                img.setAttribute('src', 'image/jovem-f.png')
            } else if (idade < 50) {
                // Adulto
                img.setAttribute('src', 'image/adulto-f.png')
            } else {
                // Idoso
                img.setAttribute('src', 'image/idoso-f.png')
            }
        }
        res.style.textAling = 'center'
        res.innerHTML = `Detectamos ${genero} com ${idade} anos.`
        res.appendChild(img)
    }
}