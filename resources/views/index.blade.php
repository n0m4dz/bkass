<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Index page</h1>
<div id="app">
    <div class="page">
        <nav>
            <router-link to="home">Home</router-link>
            <router-link to="about">About</router-link>
        </nav>
        <main>
            <router-view></router-view>
        </main>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <input type="text" v-model="msg"> <br>
    <h3>@{{msg}}</h3>
    <hr>

    <button @click="inc()">inc</button>
    <button @click="dec()">dec</button>
    <br>
    <h3>@{{number}}</h3>

    <hr>
    <a :href=link>Go to link</a>

    <hr>
    <app-el msg="Me"></app-el>
    <calendar></calendar>
</div>
<script src="/js/spa.js"></script>
</body>
</html>