<nav style='background-color: #00ffff'>
    <a style='margin-right: 30px;' href="{{ route('agenda.index') }}">Visualizar Todos </a>
    <a href="{{ route('agenda.create') }}">Adicionar Contato</a>
</nav>

<form action="{{ route('agenda.update', $contato['id'])}}" method="post">
@csrf
@method('PUT')
    <fieldset>
        <table>
            <tr>
                <td>Id
                    <input type='integer' id='id' name='id' readonly disabled value="{{$contato['id']}}">
                </td>
                <td> Nome
                    <input type='text' id='nome' name='nome' value="{{$contato['nome']}}">
                </td>
                <td> Celular
                    <input type='text' id='celular' name='celular' value="{{$contato['celular']}}">
                </td>
            </tr>
            <tr>
                <td> Telefone
                    <input type='text' id='telefone' name='telefone' value="{{$contato['telefone']}}">
                </td>
                <td> Data de Nascimento
                    <input type='date' id='dataNascimento' name='dataNascimento' value="{{$contato['dataNascimento']}}"> 
                </td>
            </tr>
            <tr>
                <td><input type='submit' value='Enviar'></td>
            </tr>
        </table>
    </fieldset>
</form>