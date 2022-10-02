class ClientController {

    constructor() {
        this._nomeEl = document.querySelector("#nome")
        this._enderecoEl = document.querySelector("#endereco");
        this._numeroEl = document.querySelector("#numero");
        this._complementoEl = document.querySelector("#complemento");
        this._bairroEl = document.querySelector("#bairro");
        this._cidadeEl = document.querySelector("#cidade");
        this._estado = document.querySelector("estado");
        this._cepEl = document.querySelector("#cep");
        this._cpfEl = document.querySelector("#cpf");
        this._identidadeEl = document.querySelector("#identidade");
        this._telefoneEl = document.querySelector("#telefone");
        this._celularEl = document.querySelector("#celular");
        this._emailEl = document.querySelector("#email");
        this._siteEl = document.querySelector("#site");
        this._nascimentoEl = document.querySelector("#nascimento");
        this._vendedor = document.querySelector("#vendedor");
    }

    /**
     * Este método conterá tudo o que deve ser inicializado
     * assim que a página for carregada.
     */
    initialize() {
        
    }

    /**
     * Recebe a requisição do formulário
     */
    recebeFormulario() {

    }

    /**
     * Verifica se algum campo está vazio
     */


    /**
     * get e set
     */
    get nome() {
        return this._nomeEl.innerHTML;
    }

    set nome(valor) {
        this._nomeEl.innerHTML = valor;
    }

    get endereco() {
        return this._enderecoEl.innerHTML;
    }

    set endereco(valor) {
        this._enderecoEl.innerHTML = valor
    }

    get numero() {
        return this._numeroEl.innerHTML;
    }

    set numero(valor) {
        return this._numeroEl.innerHTML = valor
    }

    get complemento() {
        return this._complementoEl.innerHTML;
    }

    set complemento(valor) {
        this._complementoEl.innerHTML = valor;
    }

    get bairro() {
        return this._bairroEl.innerHTML;
    }

    set bairro(valor) {
        this._bairroEl.innerHTML = valor;
    }

    get cidade() {
        return this._cidadeEl.innerHTML;
    }

    set cidade(valor) {
        this._cidadeEl.innerHTML = valor;
    }

    get estado() {
        return this._estado.innerHTML;
    }

    set estado(valor) {
        this._estado.innerHTML = valor;
    }

    get cep() {
        return this._cepEl.innerHTML;
    }

    set cep(valor) {
        this._cepEl.innerHTML = valor;
    }

    get cpf() {
        return this._cpfEl.innerHTML;
    }

    set cpf(valor) {
        this._cpfEl.innerHTML = valor;
    }

    get identidade() {
        return this._identidadeEl.innerHTML;
    }

    set identidade(valor) {
        this._identidadeEl.innerHTML;
    }

    get telefone() {
        return this._telefoneEl.innerHTML;
    }

    set telefone(valor) {
        this._telefoneEl.innerHTML = valor;
    }
    
    get celular() {
        return this._celularEl.innerHTML;
    }

    set celular(valor) {
        this._celularEl.innerHTML = valor;
    }

    get email() {
        return this._emailEl.innerHTML;
    }

    set email(valor) {
        this._emailEl.innerHTML = valor;
    }

    get site() {
        return this._siteEl.innerHTML;
    }

    set site(valor) {
        this._siteEl.innerHTML = valor;
    }

    get nascimento() {
        return this._nascimentoEl.innerHTML;
    }

    set nascimento(valor) {
        this._nascimentoEl.innerHTML = valor;
    }

    get vendedor() {
        return this._vendedor.innerHTML;
    }

    set vendedor(valor) {
        this._vendedor.innerHTML = valor;
    }

}