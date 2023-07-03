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
        <div style="position: relative; top: 60px; right:-15px;">
            <form action="{{url('/uploadmenu')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Título</label>
                    <input style="color: blue;" type="text" name="titulo" id="titulo" placeholder="Título" required>
                </div>

                <div>
                    <label>Preço</label>
                    <input style="color: blue;" type="text" name="preco" id="preco" placeholder="Preço" required>
                </div>

                <div>
                    <label>Imagem</label>
                    <input type="file" name="imagem" id="imagem" placeholder="Imagem" required>
                </div>

                <div>
                    <label>Descrição</label>
                    <input style="color: blue;" type="text" name="descricao" id="descricao" placeholder="Descrição" required>
                </div>

                <div>
                    <input style="color: white" type="submit" value="Salvar">
                </div>

            </form>

        </div>
    </div>

    @include('admin.adminscript')

</body>

</html>