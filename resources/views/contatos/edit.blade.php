<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { width: 400px; margin: auto; }
        label { display: block; margin-top: 10px; }
        input { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 8px 12px; background-color: #2196F3; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #1976D2; }
        .error { color: red; margin-top: 5px; }
        a { display: inline-block; margin-bottom: 10px; text-decoration: none; color: #4CAF50; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Editar Contato</h1>

    <div style="width:400px; margin:auto;">
        <a href="{{ route('contatos.index') }}">⬅️ Voltar para a lista</a>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contatos.update', $contato->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nome">Nome*</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $contato->nome) }}" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $contato->email) }}">

            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $contato->telefone) }}">

            <button type="submit">Atualizar Contato</button>
        </form>
    </div>
</body>
</html>
