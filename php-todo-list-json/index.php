<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <div id="app">

    <header>
      <div class="container">
        <nav>
          <h2>Todo</h2>
        </nav>
      </div>
    </header>

    <main>
      <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-6 mx-auto">
              <div class="card">
                <div class="card-header">
                  <input type="text" v-model.trim="newTodo" @keyup.enter="addTodo" class="form-control" placeholder="Scrivi qui">
                </div>
                <div class="card-body">
                  <ul class="list-unstyled" v-if="todos.length > 0">
                    <li v-for="todo in todos">
                      <span :class="{ 'text-decoration-line-through': todo.done }">
                        {{ todo.text }}
                      </span>
                    </li>
                  </ul>
                  <span v-else>Qui non c'è niente</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

  </div>
  <script src="./js/app.js"></script>

</body>

</html>