cliques = 0 
function Mudarestado()
{
   cliques = cliques + 1
    if(cliques == 1)
    {   
        teto.classList.remove("descer")
        teto.classList.add("subir")
    }
    if(cliques == 2)
    {   
        teto.classList.remove("subir")
        teto.classList.add("descer")
        cliques = 0
    }
}

cliques2 = 0 
function Mudarestado2()
{
   cliques2 = cliques2 + 1
    if(cliques2 == 1)
    {   
        flecha.classList.remove("gira2")
        flecha.classList.add("gira1")
    }
    if(cliques2 == 2)
    {   
        cliques2 = 0
        flecha.classList.remove("gira1")
        flecha.classList.add("gira2")
    }
}
  topico = "Script/Storm"; 

  client = new Paho.MQTT.Client("broker.hivemq.com", Number(8000), "");

  client.onConnectionLost = ConexaoPerdida;
  client.onMessageArrived = MensagemRecebida;

  client.connect({onSuccess:Conectar});

  function Conectar() {
    
    client.subscribe(topico); 
    
  }
  
  function ConexaoPerdida(responseObject) {
    if (responseObject.errorCode !== 0) {
      resposta.innerHTML += "Desconectado";
    }
  }

 
  function MensagemRecebida(message) {  
      resposta.innerHTML += "<br><br>" + message.payloadString;
      resposta.scrollTop = resposta.scrollHeight;
  }

  function Enviar()
  {
    texto = mensagem.value;
    message = new Paho.MQTT.Message(texto);
    message.destinationName = topico;
    if (texto != "")
    {
        client.send(message);
        mensagem.value = ""
    }
  }
function searchKeyPress(e)
{
    e = e || window.event;
    if (e.keyCode == 13)
    {
        document.getElementById('botao').click();
        return false;
    }
    return true;
    
}