<nav style='background-color: #00ffff'>
    <a style='margin-right: 30px;' href="{{ route('agenda.index') }}">Visualizar Todos </a>
    <a href="{{ route('agenda.create') }}">Adicionar Contato</a>
</nav>

<fieldset>
    <legend>Incluir</legend>
    <form action="{{ route('agenda.store')}}" method="post">
        <table>
            <tr>
                <td>Id
                    @csrf
                    <input type='integer' id='id' name='id' >
                </td>
                <td> Nome
                    <input type='text' id='nome' name='nome'>
                </td>
                <td> Celular
                    <input type='text' id='celular' name='celular'>
                </td>
            </tr>
            <tr>
                <td> Telefone
                    <input type='text' id='telefone' name='telefone'>
                </td>
                <td> Data de Nascimento
                    <input type='date' id='dataNascimento' name='dataNascimento'>
                </td>
            </tr>
            <tr>
                <td><input type='submit' value='Enviar'></td>
            </tr>
        </table>
    </form>
</fieldset>