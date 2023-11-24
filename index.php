<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- VUE CDN -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- DEFERED MASTER JS  -->
    <script src="./js/master.js" defer></script>
    <!-- AXIOS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <div class="container">
            <h1>TO DO LIST</h1>
        </div>
        <div class="container">
            <form action="">
                <input type="text" placeholder="Add a Task" v-model="newTodo">
                <button type="submit">Add</button>
            </form>
        </div>
        <div class="container">
            <h3>Your Tasks:</h3>
            <ol>
                <li v-for="(todo, i) in todos" :key="i">{{ todo }}</li>
                <li>test00</li>
                <li>test</li>
            </ol>
        </div>
    </div>
</body>
</html>