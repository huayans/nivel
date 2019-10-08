<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Nivelamento</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
      

            <div class="content">
                <div class="title m-b-md">
                    Terceira Questão   
                    
                </div>
                
                
                
                <form method="get" action="{{route('terc')}}" >

                                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Escolha o turno</label>
                        </div>
                        <select class="custom-select" name="turno" id="inputGroupSelect01">
                            <option name="turno1" value="1">Diurno</option>
                            <option name="turno2" value="2">Noturno</option>
                           
                        </select>
                        
                        <select class="custom-select" name="semana" id="inputGroupSelect01">
                            <option name="dias" value="6">Dias semanais + sabados</option>
                            <option name="dom" value="7">Domingos</option>
                           
                        </select>
                        </div>
                
                Digite suas horas trabalhadas:<br>
                    <input type="number" name="hrs_trab" id="jj"><br>
                Seu total de hoje é:<br>
                    <input type="text" name="custo_p"><br><br>

                    <input type="submit"><br><br>
                </form><br>
                <div>
                    <button type="button" onclick="window.location.href = '/'" class="btn btn-primary btn-lg btn-block" >Feito por Huayan Santiago :D
                        <a href=""> 
                        </a> 
                    </button>
                </div>
                

           
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
