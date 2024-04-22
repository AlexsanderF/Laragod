<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tabela de Usuários</title>
</head>
<body class="bg-gray-200">

<nav class="bg-gray-400">
    <div class="container mx-auto flex items-center justify-between p-4">
        <a href="/">TreinaWeb</a>

        <ul class="font-medium flex">
            <li class="px-4"><a href="/clients/create">Cadastro de Clientes</a></li>
        </ul>
    </div>
</nav>
<div class="container mx-auto">
    <h1 class="text-4x1 font-bold text-center my-4">
        Lista de Clientes
    </h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Endereço
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Descrição
                </th>
                <th scope="col" class="px-6 py-3">
                    Criado em:
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        {{$client->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$client->address}}
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{$client->description}}
                    </td>
                    <td class="px-6 py-4">
                        {{$client->created_at}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>


