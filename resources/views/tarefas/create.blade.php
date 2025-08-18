<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Tarefa</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(45deg, #007bff, #17a2b8, #6f42c1);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .card-sereia {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border: none;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        .form-control-sereia {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }
        .form-control-sereia:focus {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: #ffffff;
            color: #ffffff;
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }
        .form-label-sereia {
            color: #ffffff;
        }
        .btn-sereia {
            color: #ffffff;
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

    <div class="card card-sereia">
        <h1 class="display-5 fw-bold text-center text-white">Criar Nova Tarefa</h1>

        <form action="{{ route('tarefas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="titulo" class="form-label form-label-sereia">Título:</label>
                <input type="text" name="titulo" class="form-control form-control-sereia" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label form-label-sereia">Descrição:</label>
                <textarea name="descricao" rows="4" class="form-control form-control-sereia"></textarea>
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-sereia">Salvar Tarefa</button>
                <a href="{{ route('tarefas.index') }}" class="btn btn-outline-light btn-sereia">Voltar para a lista</a>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>