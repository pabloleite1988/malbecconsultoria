/* Validando Campos do Formulário */

function validar() {
    var varCliente = formVisitas.cliente.value;
    var varEmail = formVisitas.email.value;


    if (varCliente == "" || (varCliente >= 4) & (varCliente <= 50)) {

        alert('Prencha o nome do Cliente.');
        formVisitas.cliente.focus();
        return false;

    }

    if (varEmail == "" || varEmail.indexOf('@') == -1) {
        alert('Preencha o campo E-mail, lembrando-se do @.');
        formVisitas.email.focus();
        return false;
    }


    // Pegando os dados alimentados no Formulário da página de visitas
    //var nomeCliente = formVisitas.cliente.value;
    //var emailCliente = formVisitas.email.value;

    // Criando uma Classe do tipo Cliente
    Cliente = function (varCliente, varEmail) {

        this.varClienteFunc = varCliente;
        this.varEmailFunc = varEmail;

    }


    // Criando um Objeto do tipo Cliente
    ClienteVisita = new Cliente(varCliente, varEmail);

    //Gerando código JSON
    var cliVisJson = JSON.stringify(ClienteVisita)
    console.log(cliVisJson);


    // Consumo código JSON
    var cliVisJsonConvertido = JSON.parse(cliVisJson);
    console.log(cliVisJsonConvertido);

    ClienteVisitaConvertido = cliVisJsonConvertido;
    
    alert("Obrigado pelo seu interesse, "+ClienteVisitaConvertido.varClienteFunc+"\nAssim que possível entraremos em contato!!!");
}

function calcularTotalPedido() {

    var totalPedido = 0;
    var qtdePlanoCons = parseInt(formConsultoria.planoCons.value);
    var qtdePlanoTrein = parseInt(formConsultoria.planoTrein.value);
    var qtdePlanoVis = parseInt(formConsultoria.planoVis.value);

    totalPedido = (qtdePlanoCons * 599.00);
    totalPedido += (qtdePlanoTrein * 800.00);
    totalPedido += (qtdePlanoVis * 347.99);

    formConsultoria.soma.value = parseFloat(totalPedido.toFixed(2));
}
