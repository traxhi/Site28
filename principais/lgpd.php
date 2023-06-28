<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #f1f1f1;
            padding: 10px;
        }

        .texto {
            text-align: justify;
            width: 90%;
            height: 80vh;
            margin-top: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }

        .texto p {
            margin-bottom: 10px;
        }

        .titulo {
            font-weight: bold;
            text-decoration: underline;
            font-size: 40px;
        }
    </style>
</head>

<body>
    <div class="menu">
        <?php include("menu.html"); ?>
    </div>
    <div class="texto">

        <div class="titulo">
            <p>Política de Uso e Privacidade</p>
        </div>
        <p>Na qualidade de prestador de serviços da Script Strom, valorizamos a privacidade e a proteção dos dados
            pessoais dos nossos usuários. Comprometemo-nos a cumprir com as disposições da Lei Geral de Proteção de
            Dados (LGPD), a fim de garantir a transparência e a segurança das informações coletadas e processadas em
            nosso site. Esta Política de Privacidade tem o objetivo de fornecer a você, nosso usuário, as informações
            necessárias sobre como coletamos, utilizamos, armazenamos e protegemos seus dados pessoais.</p>

        <p>Coleta de Dados Pessoais</p>
        <p>Quando você utiliza nosso site para alugar livros, podemos coletar informações pessoais relevantes, tais como
            seu nome, endereço de e-mail, número de telefone e endereço de entrega. Esses dados são necessários para a
            prestação do serviço de aluguel de livros e serão utilizados estritamente para esse propósito. Além disso,
            podemos coletar informações de navegação e uso do site, de forma a aprimorar a experiência do usuário e
            personalizar nossos serviços.</p>

        <p>Uso e Finalidade dos Dados Pessoais</p>
        <p>Os dados pessoais coletados serão utilizados para processar suas solicitações de aluguel, fornecer os
            serviços contratados, enviar notificações sobre o status dos pedidos, responder a perguntas e fornecer
            suporte ao cliente. Além disso, podemos utilizar essas informações para enviar comunicações de marketing
            direcionadas, desde que tenhamos seu consentimento prévio. Em nenhum momento, compartilharemos seus dados
            pessoais com terceiros sem o seu consentimento expresso, exceto nos casos em que a lei assim o exija ou
            permita.</p>

        <p>Armazenamento e Segurança dos Dados Pessoais</p>
        <p>Comprometemo-nos a armazenar seus dados pessoais de forma segura e adotar medidas técnicas e organizacionais
            adequadas para protegê-los contra acesso não autorizado, perda, uso indevido ou divulgação. Mantemos
            salvaguardas físicas, eletrônicas e processuais para garantir a segurança das informações coletadas. No
            entanto, é importante ressaltar que nenhuma transmissão de dados pela internet é completamente segura, e não
            podemos garantir a segurança absoluta das informações durante a transmissão.</p>

        <p>Direitos dos Titulares dos Dados</p>
        <p>De acordo com a LGPD, você possui direitos sobre seus dados pessoais, incluindo o direito de acesso,
            retificação, exclusão, oposição ao processamento e portabilidade. Caso queira exercer algum desses direitos,
            entre em contato conosco através dos canais disponibilizados no final desta política. Faremos todos os
            esforços razoáveis para atender às suas solicitações de forma oportuna e de acordo com a lei aplicável.</p>

        <p>Alterações na Política de Privacidade</p>
        <p>Reservamo-nos o direito de atualizar esta Política de Privacidade periodicamente, a fim de refletir mudanças
            nas práticas de coleta e processamento de dados ou alterações na legislação vigente. Recomendamos que você
            revise esta política regularmente para estar ciente de quaisquer atualizações.</p>

        <p>Ao utilizar nosso site de aluguel de livros online, você concorda com os termos e condições estabelecidos
            nesta Política de Privacidade e nos concede o consentimento para coletar, processar e utilizar seus dados
            pessoais de acordo com a lei e os fins aqui descritos.</p>

        <p>Caso tenha alguma dúvida ou preocupação sobre nossa Política de Privacidade ou o tratamento de seus dados
            pessoais, entre em contato conosco através dos seguintes canais de comunicação:</p>

        <p>E-mail: scripstorm@gmail.com</p>

        <p>Agradecemos por confiar em nosso serviço de aluguel de livros online. Estamos comprometidos em proteger sua
            privacidade e oferecer uma experiência segura e satisfatória em nosso site.</p>
        <br><br>
    </div>
</body>
<script src="../java/animateto.js"></script>

</html>