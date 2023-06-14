@include('header')
    <body class="antialiased">
        <h1 style="font-size: 3rem">Todos</h1>
        <ul>
            @if (!empty($allTodos))
                @foreach ($allTodos as $todo)
                    <li>
                        id: {{$todo->id}} <br>
                        Jméno úkolu: {{$todo->name}} <br>
                        Je hotový?: {{ (bool)$todo->isComplete ? "Ano" : "Ne" }} <br>
                        <button>
                            @if (!(bool)$todo->isComplete)
                            <a href="/hotovo?id={{$todo->id}}">Hotovo</a>
                            @else
                            <a href="/smazat?id={{$todo->id}}">Smazat</a>
                            @endif
                            
                        <button>
                    </li>
                @endforeach
            @else
                <li>No todos here</li>
            @endif
        </ul>
    </body>
</html>
