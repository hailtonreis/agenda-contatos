<!DOCTYPE html>
<html>
<head>
    <title>Novo Contato</title>
</head>
<body>
    <h1 style="text-align:center;">Adicionar Novo Contato</h1>

    <form action="{{ route('contatos.store') }}" method="POST" 
          style="width:60%; margin:auto; display:flex; flex-direction:column; gap:10px;">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <button type="submit" 
                style="background:#28a745; color:white; border:none; padding:8px; border-radius:5px; cursor:pointer;">
            ✅ Salvar
        </button>
    </form>

    <div style="text-align:center; margin-top:15px;">
        <a href="{{ route('contatos.index') }}">⬅ Voltar para a lista</a>
    </div>
</body>
</html>
