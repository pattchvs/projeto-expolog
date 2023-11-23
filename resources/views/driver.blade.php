<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Saferoad</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* Adicione seus estilos aqui, se necessário */
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #288c96;
            }

            .hidden {
                visibility: hidden;
            }
            #main{
                display: grid;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="main">
            <h1>Bem vindo, por favor selecione seu nome para iniciar:</h1>
        <form method="POST" action="/newexam" id="examForm">
            @csrf
            <select name="driver_id">
                @foreach ($drivers as $driver)
                    <option value={{$driver->id}}>{{$driver->name}}</option>
                @endforeach
            </select>
        
            <!-- Pergunta 1 -->
            <div id="question1" class="hidden">
                <label for="drunk_driving">Você anda dirigindo alcoolizado?</label>
                <input type="radio" name="drunk_driving" value="sim"> Sim
                <input type="radio" name="drunk_driving" value="nao"> Não
            </div>
        
            <!-- Pergunta 2 -->
            <div id="question2" class="hidden">
                <label for="continue">Deseja continuar?</label>
                <input type="radio" name="continue" value="sim"> Sim
                <input type="radio" name="continue" value="nao"> Não
            </div>
        
            <button type="button" onclick="showNextQuestion()">Continuar</button>
            <button type="submit" id="submitButton" class="hidden">Enviar</button>
        </form>
        </div>
        

        <script>
            function showNextQuestion() {
                var form = document.getElementById("examForm");
                var driverSelect = form.querySelector("select");
                var question1 = form.querySelector("#question1");
                var question2 = form.querySelector("#question2");
                var submitButton = form.querySelector("#submitButton");

                // Esconde o seletor de nome
                driverSelect.classList.add("hidden");

                // Pergunta sobre dirigir alcoolizado
                question1.classList.remove("hidden");

                // Adiciona a resposta ao formulário
                var drunkDrivingAnswer = form.querySelector("input[name='drunk_driving']:checked");
                if (drunkDrivingAnswer) {
                    var input = document.createElement("input");
                    input.type = "hidden";
                    input.name = "drunk_driving";
                    input.value = drunkDrivingAnswer.value;
                    form.appendChild(input);
                }

                // Esconde o botão de continuar
                form.querySelector("button").classList.add("hidden");

                // Quando a pergunta sobre dirigir alcoolizado for respondida
                form.querySelector("input[name='drunk_driving']").onchange = function () {
                    // Esconde a pergunta
                    question1.classList.add("hidden");

                    // Pergunta sobre continuar
                    question2.classList.remove("hidden");
                };

                // Quando a pergunta sobre continuar for respondida
                form.querySelector("input[name='continue']").onchange = function () {
                    // Esconde a pergunta
                    question2.classList.add("hidden");

                    // Exibe o botão de enviar
                    submitButton.classList.remove("hidden");
                };
            }
        </script>
    </body>
</html>
