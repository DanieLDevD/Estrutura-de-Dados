function consultaEndereco(){
    let cep= document.querySelector('#cep').value;

    if (cep.length !== 8) {
        alert ('Cep Incorreto');
        return;
    }

    let url = `https://viacep.com.br/ws/${cep}/json/`;

    fetch(url).then(function(response){
        response.json().then(function(data){
            console.log(data);
            exibirTela(data);
        })
    });

}

function exibirTela(dados) {
    let resultado = document.querySelector('#resultado');
    if (dados.erro) {
        resultado.innerHTML = "CEP invalido (Não encontrado)";
    
    }else{
        resultado.innerHTML =  `<p>Endereço: ${dados.logradouro}</p>
                                <p>Complemento: ${dados.complemento}</p>
                                <p>Bairro: ${dados.bairro}</p>
                                <p>Cidade: ${dados.localidade}</p>
                                <p>Estado: ${dados.uf}</p>`
    }
}