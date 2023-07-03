<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
    @include('admin.navbar')
    <div style="position: relative; top: 70px; right:-150px;">
        <table bgcolor="grey" border="1px">

            <tr>
                <th style="padding: 30px;">Nome</th>
                <th style="padding: 30px;">Email</th>
                <th style="padding: 30px;">Telefone</th>
                <th style="padding: 30px;">Data</th>
                <th style="padding: 30px;">Horário</th>
                <th style="padding: 30px;">Mensagem</th>
            </tr>
            
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->nome}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->fone}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->mensagem}}</td>
            </tr>
            @endforeach

        </table>
    </div>
    </div>
    @include('admin.adminscript')

</body>

</html>