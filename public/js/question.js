let instrucoes = document.querySelector('#instrucoes')
let aviso = document.querySelector('#aviso')
var pontos = 0 // pontos para o placar

let placar = 0 // placar

// PERGUNTA
let numQuestao = document.querySelector('#numQuestao')
let pergunta   = document.querySelector('#pergunta')

// ALTERNATIVAS
let a = document.querySelector('#a')
let b = document.querySelector('#b')
let c = document.querySelector('#c')
let d = document.querySelector('#d')

// article com a class questoes
let articleQuestoes = document.querySelector('.questoes')
// ol li com as alternativas
let alternativas = document.querySelector('#alternativas')

const q0 = {
    numQuestao   : 0,
    pergunta     : "Pergunta",
    alternativaA : "Alternativa A",
    alternativaB : "Alternativa B",
    alternativaC : "Alternativa C",
    alternativaD : "Alternativa D",
    correta      : "0",
}

const q1 = {
    numQuestao   : 1,
    pergunta     : "O descarte de plastico e metal devem ser feitos, em lixeiras de cores:",
    alternativaA : "Azul & Verde",
    alternativaB : "Vermelha & Amarela",
    alternativaC : "Verde & Marrom",
    alternativaD : "Branca e Laranja",
    correta      : "Vermelha & Amarela",

}

const q2 = {
    numQuestao   : 2,
    pergunta     : "O projeto responsável por trocar resíduos recicláveis por bônus na conta de luz: ",
    alternativaA : "Ecocelpa",
    alternativaB : "Enel +",
    alternativaC : "Luz e vida",
    alternativaD : "Ecoenel",
    correta      : "Ecoenel",
}

const q3 = {
    numQuestao   : 3,
    pergunta     : "Qual a importância da sustentabilidade?",
    alternativaA : "Conservar o meio ambiente para manter a Terra saudável e que futuras gerações tenham o melhor ambiente para morar",
    alternativaB : "Preservar a natureza para que o homem possa usar para ações industriais futuras",
    alternativaC : "Ajudar a manter as pessoas nas suas casas da cidade",
    alternativaD : "Conservar o meio ambiente para ajudar a evitar única e exclusivamente o efeito estufa",
    correta      : "Conservar o meio ambiente para manter a Terra saudável e que futuras gerações tenham o melhor ambiente para morar",
}

const q4 = {
    numQuestao   : 4,
    pergunta     : "Quais das opções abaixo não é uma forma sustentável de gerar energia elétrica?",
    alternativaA : "Eólica",
    alternativaB : "Petróleo",
    alternativaC : "Nuclear",
    alternativaD : "Carvão mineral",
    correta      : "Petróleo",
}

const q5 = {
    numQuestao   : 5,
    pergunta     : "Quais são os benefícios da sustentabilidade?",
    alternativaA : "Diminuir a obesidade",
    alternativaB : "Evitar que o homem desmate árvores",
    alternativaC : "Evitar vários problemas ambientais que podem acarretar em grandes desastres no futuro",
    alternativaD : "Causar peso na consciência nos praticantes de atos contra o meio ambiente",
    correta      : "Evitar vários problemas ambientais que podem acarretar em grandes desastres no futuro",
}

const q6 = {
    numQuestao   : 6,
    pergunta     : "O que são produtos biodegradáveis?",
    alternativaA : "Objetos feitos com material reciclável",
    alternativaB : "Produtos recicláveis ",
    alternativaC : "Produtos que se decompõe facilmente compostos por elementos orgânicos",
    alternativaD : "Categoria de produtos que são renováveis, ou seja, que não acaba",
    correta      : "Produtos que se decompõe facilmente compostos por elementos orgânicos",
}

const q7 = {
    numQuestao   : 7,
    pergunta     : "Qual das opções abaixo é um exemplo de reciclagem?",
    alternativaA : "Acúmulo de matéria prima",
    alternativaB : "Coleta Seletiva  ",
    alternativaC : "Replantio de árvore recém cortada",
    alternativaD : "Incineração",
    correta      : "Coleta Seletiva ",
}

const q8 = {
    numQuestao   : 8,
    pergunta     : "O que é coleta seletiva?",
    alternativaA : "Processo de separação e coleta de resíduos para reciclagem",
    alternativaB : "Entrega de todo lixo reciclável para catadores de reciclagem",
    alternativaC : "Reaproveitamento de Recicláveis",
    alternativaD : "Coleta de lixos recicláveis",
    correta      : "Processo de separação e coleta de resíduos para reciclagem",
}
// CONSTANTE COM UM ARRAY DE OBJETOS COM TODAS AS QUESTOES
const questoes = [q0, q1, q2, q3, q4, q5, q6, q7, q8]

let numero = document.querySelector('#numero')
let total  = document.querySelector('#total')

numero.textContent = q1.numQuestao

let totalDeQuestoes = (questoes.length)-1
console.log("Total de questões " + totalDeQuestoes)
total.textContent = totalDeQuestoes

// MONTAR A 1a QUESTAO COMPLETA, para iniciar o Quiz
numQuestao.textContent = q1.numQuestao
pergunta.textContent   = q1.pergunta
a.textContent = q1.alternativaA
b.textContent = q1.alternativaB
c.textContent = q1.alternativaC
d.textContent = q1.alternativaD


// CONFIGURAR O VALUE INICIAL DA 1a QUESTAO COMPLETA
a.setAttribute('value', '1A')
b.setAttribute('value', '1B')
c.setAttribute('value', '1C')
d.setAttribute('value', '1D')

// PARA MONTAR AS PROXIMAS QUESTOES
function proximaQuestao(nQuestao) {
    numero.textContent = nQuestao
    numQuestao.textContent = questoes[nQuestao].numQuestao
    pergunta.textContent   = questoes[nQuestao].pergunta
    a.textContent = questoes[nQuestao].alternativaA
    b.textContent = questoes[nQuestao].alternativaB
    c.textContent = questoes[nQuestao].alternativaC
    d.textContent = questoes[nQuestao].alternativaD
    a.setAttribute('value', nQuestao+'A')
    b.setAttribute('value', nQuestao+'B')
    c.setAttribute('value', nQuestao+'C')
    d.setAttribute('value', nQuestao+'D')

}

function bloquearAlternativas() {
    a.classList.add('bloqueado')
    b.classList.add('bloqueado')
    c.classList.add('bloqueado')
    d.classList.add('bloqueado')

}

function desbloquearAlternativas() {
    a.classList.remove('bloqueado')
    b.classList.remove('bloqueado')
    c.classList.remove('bloqueado')
    d.classList.remove('bloqueado')

}

function verificarSeAcertou(nQuestao, resposta) {

    let numeroDaQuestao = nQuestao.value
    console.log("Questão " + numeroDaQuestao)

    let respostaEscolhida = resposta.textContent

    let certa = questoes[numeroDaQuestao].correta

    if(respostaEscolhida == certa) {
        pontos += 10
    } 
    else {
        alert("A reposta correta é: " + certa)
    }

    // atualizar placar
    placar = pontos
    instrucoes.textContent = "Pontos " + placar

    // bloquear a escolha de opcoes
    bloquearAlternativas()

    setTimeout(function() {
        //respostaEsta.textContent = '...'
        proxima = numeroDaQuestao+1

        if(proxima > totalDeQuestoes) {
            console.log('Fim do Jogo!')
            fimDoJogo()
        } else {
            proximaQuestao(proxima)
        }
    }, 250)
    desbloquearAlternativas()
}

function fimDoJogo() {
    instrucoes.textContent = "Fim de Jogo!"
    numQuestao.textContent = ""

    let pont = ''
    pontos == 0 ? pont = 'ponto' : pont = 'pontos'

    pergunta.textContent   = "Você conseguiu " + pontos + " " + pont

    aviso.textContent = "Você conseguiu " + pontos + " " + pont

    a.textContent = ""
    b.textContent = ""
    c.textContent = ""
    d.textContent = ""

    a.setAttribute('value', '0')
    b.setAttribute('value', '0')
    c.setAttribute('value', '0')
    d.setAttribute('value', '0')


    // OCULTAR O ARTICLE DA QUESTAO
    articleQuestoes.style.display = 'none'



    setTimeout(function() {

        if(pontos < 50){
<<<<<<< HEAD
            document.cookie = "cook" + "=" + pontos + ";" + "path" + "=" + "/pontos" + ";"
        window.location.href = "/pontos"
=======
            window.location.href = "/ponto"
>>>>>>> e07651a13fadc6aee22d7e7089fc9df9d450438e


        }
        else if(pontos >= 50 < 90){
            window.location.href = "/TryAgain"

        }
        else if(pontos >= 90){
            window.location.href = "/Win"

        }
        else{
            window.location.href = "/"


        }
    }, 1000)

<<<<<<< HEAD
    function getCookie(pontos) {
        let name = pontos + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }




}
=======
document.cookie = "cook = pontos; path = /salvar;".toString()
>>>>>>> e07651a13fadc6aee22d7e7089fc9df9d450438e
