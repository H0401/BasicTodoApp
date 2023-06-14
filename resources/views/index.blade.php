@include('header')

        <div class="main">
            <h1 style="font-size: 3rem">Nový úkol</h1>
            <form action="/" method="post">
                @csrf
                <label for="Todo">Vytvořit nový úkol</label>
                <input type="text" class="todo-input" name="Todo" id="Todo">
                <button type="submit">Uložit</button>
            </form>
        </div>
    </body>
</html>
