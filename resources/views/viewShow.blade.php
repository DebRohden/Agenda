<nav style='background-color: #00ffff'>
    <a style='margin-right: 30px;' href="{{ route('agenda.index') }}">Visualizar Todos </a>
    <a href="{{ route('agenda.create') }}">Adicionar Contato</a>
</nav>

<fieldset>
    <legend>{{ $contato['nome']}}</legend>
    <table>
        <tr>
            <td><strong> Celular </strong>
                {{ $contato['celular']}} 
            </td>
        </tr>
        <tr>
            <td><strong> Telefone </strong> 
                {{ $contato['telefone']}} 
            </td>
        </tr>
        <tr>
            <td><strong> Data de Nascimento </strong> 
                {{ $contato['dataNascimento']}} 
            </td>
        </tr>
    </table>
</fieldset>