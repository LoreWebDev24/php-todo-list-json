<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <!-- VUE CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- DEFERED MASTER JS  -->
    <script src="./js/master.js" defer></script>
    <!-- AXIOS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/master.css">
</head>
<body>
    <div id="app">
        <div class="container">
            <h1>TO DO LIST</h1>
        </div>
        <div class="container">
            <input id="newTodo" type="text" placeholder="Add a Task" v-model="newTodo">
            <button @click="newTask" type="submit">Add</button>
        </div>
        <div class="container">
            <h3>Your Tasks:</h3>
            <ol>
                <li v-for="(todo, i) in todos" :key="i">{{ todo.text }} <span>X</span></li>
            </ol>
        </div>
    </div>
</body>
</html>