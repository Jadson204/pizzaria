<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title></title>
</head>
<body>
    
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

    <div style="position: relative; top: 60px; right: -60px">
        <table bgcolor="gray">
            <tr>
                <th style="padding: 30px;">Nome</th>
                <th style="padding: 30px;">Email</th>
                <th style="padding: 30px;">Ação</th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if($data->tipoUsuario == "0")
                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                @else
                <td><a>N. permitido</a></td>

                @endif

            </tr>

            @endforeach
        </table>
    </div>

    </div>

    @include('admin.adminscript')

</body>

</html>

</body>
</html>