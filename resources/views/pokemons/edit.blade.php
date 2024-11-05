<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pokemons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-image: url('../images/image.jpg');
    }
    .container {
            background-color: rgba(255, 255, 255, 0.9); /* transparencia no formulario para enxergar melhor o fundo*/
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            box-sizing: border-box;
            max-width: 90%;
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        p {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #555;
        }

        input, select {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
        }
        .input{
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:active {
            background-color: #004494;
        }
</style>
<body>
    
<form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $pokemon->nome }}" placeholder="Nome" required>
    <input type="text" name="tipo" value="{{ $pokemon->tipo }}" placeholder="tipo" required>
    <textarea name="pontos_de_poder" placeholder="pontos_de_poder" required>{{ $pokemon->pontos_de_poder }}</textarea>
    <button type="submit">atualizar pokemon</button>    
</form>
</body>