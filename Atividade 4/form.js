function validarFornecedor() {
  var empresa = document.forms["cadastrarFornecedor"]["nomeem"].value;
  var nome = document.forms["cadastrarFornecedor"]["nomeresp"].value;
  var cnpj = document.forms["cadastrarFornecedor"]["cnpj"].value;
  var endereco = document.forms["cadastrarFornecedor"]["endereco"].value;
  var telefone = document.forms["cadastrarFornecedor"]["telefone"].value;
  var email = document.forms["cadastrarFornecedor"]["email"].value;
  var cidade = document.forms["cadastrarFornecedor"]["cidade"].value;

  if (empresa == "") {
    alert("Informe o nome da Empresa.");
  }

  if (nome == "") {
    alert("Informe o nome do Fornecedor.");
  }

  if (cnpj == "") {
    alert("Informe o cnpj do Fornecedor.");
  }

  if (endereco == "") {
    alert("Informe o endereço da Empresa.");
  }

  if (telefone == "") {
    alert("Informe o telefone da Empresa.");
  }

  if (email == "") {
    alert("Informe o e-mail da Empresa.");
  }

  if (cidade == 0) {
    alert("Informe a cidade onde se situa a Empresa.");
  }

}


function validarProduto() {
  var produto = document.forms["cadastrarProduto"]["produto"].value;
  var preco = document.forms["cadastrarProduto"]["preco"].value;
  var categoria = document.forms["cadastrarProduto"]["categoria"].value;
  var codFornecedor = document.forms["cadastrarProduto"]["codFornecedor"].value;

  if (produto == "") {
    alert("Informe o nome da produto.");
  }

  if (preco == "") {
    alert("Informe o preço do produto.");
  }

  if (categoria == "") {
    alert("Informe a categoria do produto.");
  }

  if (codFornecedor == "") {
    alert("Informe o código do fornecedor.");
  }

}


function validarUsuario() {
  var nome = document.forms["cadastarUsuario"]["nome"].value;
  var endereco = document.forms["cadastarUsuario"]["endereco"].value;
  var telefone = document.forms["cadastarUsuario"]["telefone"].value;
  var genero = document.forms["cadastarUsuario"]["genero"].value;
  var cidade = document.forms["cadastarUsuario"]["cidade"].value;
  var usuario = document.forms["cadastarUsuario"]["usuario"].value;
  var email1 = document.forms["cadastarUsuario"]["email1"].value;
  var email2 = document.forms["cadastarUsuario"]["email2"].value;
  var senha = document.forms["cadastarUsuario"]["senha"].value;
  var senha2 = document.forms["cadastarUsuario"]["senha2"].value;


  if (nome == "") {
    alert("Informe o nome do(a) Cliente.");
  }

  if (endereco == "") {
    alert("Informe o endereço do(a) Cliente.");
  }

  if (telefone == "") {
    alert("Informe o telefone do(a) cliente.");
  }

  if (genero == "") {
    alert("Informe o gênero do(a) cliente.");
  }

  if (cidade == 0) {
    alert("Informe a cidade do(a) cliente.");
  }

 if (usuario == "") {
    alert("Informe o usuario do(a) cliente.");
  }

   if (email1 == "") {
    alert("Informe o e-mail do(a) cliente.");
  }

   if (email2 == "") {
    alert("Confirme o e-mail do(a) cliente. Deve ser o mesmo e-mail informado anteriormente!");
  }

   if (senha == "") {
    alert("Informe a senha do(a) cliente.");
  }

   if (senha2 == "") {
    alert("Confirme a senha do(a) cliente. Deve ser a mesma senha informada anteriormente!");
  }

}

function validarVenda() {
  var codigoprod = document.forms["vendaCliente"]["codigoprod"].value;
  var descprod = document.forms["vendaCliente"]["descprod"].value;
  var codigocliente = document.forms["vendaCliente"]["codigocliente"].value;
  var telefone = document.forms["vendaCliente"]["telefone"].value;
  var entrega = document.forms["vendaCliente"]["entrega"].value;
  var cidade = document.forms["vendaCliente"]["cidade"].value;
  var endereco = document.forms["vendaCliente"]["endereco"].value;

  if (codigoprod == "") {
    alert("Informe o código do(a) produto.");
  }

  if (descprod == "Entre com a descrição da venda...") {
    alert("Informe a descrição do(a) produto.");
  }

  if (codigocliente == "") {
    alert("Informe o código do(a) cliente.");
  }

  if (telefone == "") {
    alert("Informe o telefone do(a) cliente.");
  }

  if (entrega == "") {
    alert("Informe situação da entrega do produto.");
  }

  if (cidade == 0) {
    alert("Informe a cidade do(a) cliente.");
  }

    if (endereco == "") {
    alert("Informe o endereco do(a) cliente.");
  }
}

function validalogin(){
  var usuario = document.forms["login"]["usuario"].value;
  var senha = document.forms["login"]["senha"].value;


  if (usuario == "") {
    alert("Informe o usuario de acesso.");
  }

  if (senha == "") {
    alert("Informe a sua senha.");
  }

}