<nav style='background-color: #00ffff'>
    <a style='margin-right: 30px;' href="{{ route('agenda.index') }}">Visualizar Todos </a>
    <a href="{{ route('agenda.create') }}">Adicionar Contato</a>
</nav>

@foreach($aContatos as $aContato)
    <fieldset>
        <legend>{{ $aContato['nome']}}</legend>
        <table>
            <tr>
                <td colspan='3' ><strong> Celular </strong>
                    {{ $aContato['celular']}} 
                </td>
            </tr>
            <tr>
                <td colspan='3' ><strong> Telefone </strong> 
                    {{ $aContato['telefone']}} 
                </td>
            </tr>
            <tr>
                <td>
                    <form method="GET" action="{{ route('agenda.edit', $aContato['id'])}}">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form method="POST" action="{{ route('agenda.destroy', $aContato['id'])}}">
                        @csrf
                        @method('DELETE') 
                        <input type="submit" value="Excluir">
                    </form>
                </td>
                <td>
                    <form method="GET" action="{{ route('agenda.show', $aContato['id'])}}">
                        <input type="submit" value="Visulizar">
                    </form>
                </td>
            </tr>
        </table>
    </fieldset>
@endforeach
<form method="GET" action="{{ route('agenda.create')}}">
    <input style="margin-left: 2px; margin-top: 2px;" type="submit" value="Incluir">
</form>

