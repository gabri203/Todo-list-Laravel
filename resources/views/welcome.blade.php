<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Todo-list</title>
    </head>
    <body>
        <div style="display:flex; flex-direction:column; height:80vh; justify-content:center; margin:auto; width:200px; ">
            {{-- Lo si mette sempre nei form laravel quando l'utente manda i dati,in questo gli sto dicendo che tramite la route mandi i dati a questo
            indirizzo tasks.store --}}

        <form action="{{route('tasks.store')}}" method="POST">
            <h2>Todo-List</h2>
            @csrf
        <input type="text" name="task" placeholder="Inserisce il task da fare">
        <button type="submit">Add</button>
        </form>

        <table>
            <tbody>
                @foreach ($lista_tasks as $lts )

                <ul>
                    <li>{{$lts->id}}</li>
                    <li>{{$lts->task}}</li>
                </ul>

                @endforeach
            </tbody>
        </table>
        </div>


    </body>
</html>
