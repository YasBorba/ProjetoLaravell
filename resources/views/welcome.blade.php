<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <title>Laravel</title>
        <style>
            body {
                background: linear-gradient(45deg, #007bff, #17a2b8, #6f42c1);
                background-size: 400% 400%;
                animation: gradientBG 15s ease infinite;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            @keyframes gradientBG {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }
            .card-sereia {
                background-color: rgba(255, 255, 255, 0);
                backdrop-filter: blur(5px);
                align-items: center;
                border: none;
                border-radius: 1rem;
                padding: 3rem;
                color: #ffffff;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            }
            .btn-sereia {
                color: #ffffff;
                width: 400px;
                align-items: center;
                border-color: #ffffff;
                transition: all 0.3s ease;
            }
            .btn-sereia:hover {
                background-color: rgba(255, 255, 255, 0.2);
                border-color: #ffffff;
                color: #ffffff;
            }
        </style>
        
    </head>
    <body>
        <<div class="container text-center">
            <div class="card card-sereia">
                <h1 class="display-4 fw-bold">Bem-vindo(a)! 🐚</h1>
                <p class="lead mb-4">Sua lista de tarefas está aqui.</p>
                <a href="{{ route('tarefas.index') }}" class="btn btn-outline-light btn-lg btn-sereia">
                    Ir para a Lista de Tarefas
                </a>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
</html>
