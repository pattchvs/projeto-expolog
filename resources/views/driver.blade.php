<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Saferoad</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            header{
                display: flex;
                padding: 2rem;

               
            }
            .logo{
                width: 169px;
                height: 87px;
            }
            .brand{
                font-family: "poppins";
                font-size: 40px;
                color: #fafafa;
                font-weight: bold;
                align-items: center;
                display: flex;
            }
            .img-icon{
                max-width: 125px;
                max-height: 125px;
                border-radius: 75px;
            }

            body {
                font-family: 'Nunito', sans-serif;
                background-color: #288c96;
                height: 39rem;
                background-image: url("bg.png");
                background-size: cover;

            }

            #driver_id{
                padding: 15px;
                border-radius: 15px;
            }
            main{
                
                align-items: center;
                justify-content: center;

                width: 100%;
                height: 100%;
                margin: 0 auto;
            }
            #innerform{
                display: flex;
                width: 100%;

                justify-content: space-around;
            
            }
            #innerform input{
                display: block;
                margin-bottom: 10px;
                padding: 20px;
                width: 500px;
                border-radius: 25px;
                border: none;
            }

            #innerform select{
                display: block;
                margin-bottom: 10px;
                padding: 16px;
                width: 540px;
                border-radius: 25px;
                border: none;
                text-align: center;
                font-size: 20px;
            }
            #innerform label{
                color: #fafafa;
                font-weight: bold;
                padding-left: 1rem
            }
            #submit{
                padding: 20px;
                width: 250px;
                margin-top: 20px;
                
            }


            form{
                display: flex;
                flex-direction: column; /* Alinhe os elementos verticalmente */
                align-items: center; /* Centralize os elementos na direção transversal */
                justify-content: center; /* Centralize os elementos na direção principal */

                margin: 2rem; /* Adicione margem para espaçamento */
            }

        </style>
    </head>
    <body>
        <header>
            <img class="logo" src="logo.png" alt="">
            <a class="brand">Saferoad</a>
        </header>
        <form action="/exams" method="POST">
            @csrf
            <div id="innerform">
                <div id="sec-a">
                    
                    <label for="driver_id">SELECIONE O SEU NOME:</label>
                    <select id="driver_id" name="driver_id">
                        @foreach ($drivers as $driver)
                            <option value={{$driver->id}}>{{$driver->name}}</option>
                        @endforeach
                    </select>
                    <label for="weeklyReport">DESCREVA UM POUCO DE COMO VOCÊ ESTÁ SE SENTINDO:</label>
                    <input type="text" id="weeklyReport" name="weeklyReport">
                    <label for="especiality">SELECIONE UMA ESPECIALIDADE QUE POSSA TE AUXILIAR:</label>
                    <select id="especiality" name="especiality">
                            <option value="Psicólogo">Psicólogo</option>
                            <option value="Oftamologista">Oftamologista</option>
                            <option value="Dentista">Dentista</option>
                            <option value="Clinico Geral">Clinico Geral</option>
                            <option value="Outro">Outro</option>
                    </select>
                    <label for="drugs">DESCREVA UM POUCO DE COMO VOCÊ ESTÁ SE SENTINDO:</label>
                    <input type="text" name="drugs" id="drugs">

                </div>
                <div id="sec-b">
                    <label for="lastExam">QUANDO FOI SEU ÚLTIMO EXAME PERIÓDICO?</label>
                    <input type="date" id="lastExam" name="lastExam">
                    <label for="urgency">O QUÃO GRAVE VOCÊ CONSIDERA A SUA SITUAÇÃO?</label>
                    <select id="urgency" name="urgency">
                            <option value=1>Leve</option>
                            <option value=2>Médio</option>
                            <option value=3>Urgente</option>
                    </select>
                    <label for="hasExhaustion">DESCREVA UM POUCO DE COMO VOCÊ ESTÁ SE SENTINDO:</label>
                    <input type="text" name="hasExhaustion" id="hasExhaustion">
    
                </div>

            </div>
            <input type="submit" id="submit" value="Enviar">
        </form>
    </body>
</html>
