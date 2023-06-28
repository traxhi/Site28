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