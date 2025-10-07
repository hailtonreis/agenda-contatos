<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Contatos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { text-align: center; }
        a.button { 
            display: inline-block; 
            padding: 5px 10px; 
            margin-bottom: 15px; 
            background-color: #4CAF50; 
            color: white; 
            text-decoration: none; 
            border-radius: 4px;
        }
        table { 
            width: 80%; 
            margin: auto; 
            border-collapse: collapse; 
        }
        th, td { 
            border: 1px solid #333; 
            padding: 8px; 
            text-align: left; 
        }
        th { background-color: #f2f2f2; }
        form { display: inline; }
        button { 
            padding: 3px 6px; 
            background-color: #f44336; 
            color: white; 
            border: none; 
            border-radius: 3px; 
            cursor: pointer; 
        }
        button:hover { background-color: #d32f2f; }
        a.edit-button { 
            padding: 3px 6px; 
            background-color: #2196F3; 
            color: white; 
            border-radius: 3px; 
            text-decoration: none;
        }
        a.edit-button:hover { background-color: #1976D2; }
    </style>
</head>
<body>
    <h1>Agenda de Contatos</h1>

    @if(session('success'))
    <div id="success-message" 
         style="background-color: #d4edda; 
                color: #155724; 
                padding: 12px; 
                border-radius: 6px; 
                margin: 15px auto; 
                width: 80%; 
                text-align: center; 
                font-weight: bold; 
                box-shadow: 0 2px 6px rgba(0,0,0,0.2);">
        {{ session('success') }}
    </div>

    <script>
        // Faz a mensagem sumir suavemente após 5 segundos
        setTimeout(() => {
            let msg = document.getElementById('success-message');
            if (msg) {
                msg.style.transition = "opacity 0.8s ease";
                msg.style.opacity = "0";
                setTimeout(() => msg.remove(), 800); // remove do DOM depois da animação
            }
        }, 5000);
    </script>
@endif

    <div style="text-align:center;">
        <a href="{{ route('contatos.create') }}" class="button">➕ Novo Contato</a>
    </div>

    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        @forelse($contatos as $contato)
        <tr>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->email }}</td>
            <td>{{ $contato->telefone }}</td>
            <td>
                <a href="{{ route('contatos.edit', $contato->id) }}" class="edit-button">✏️ Editar</a>
              <form action="{{ route('contatos.destroy', $contato->id) }}" method="POST" 
                      onsubmit="return confirm('Tem certeza que deseja excluir este contato?');"
                      style="margin:0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            style="background:#dc3545; 
                                   color:white; 
                                   border:none; 
                                   padding:6px 10px; 
                                   border-radius:5px; 
                                   cursor:pointer;">
                        ❌ Excluir
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align:center;">Nenhum contato encontrado</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
