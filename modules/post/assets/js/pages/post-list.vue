<template>
    <div>
        <h3>Post List</h3>

        <div class="row">
            <div class="container">
                <div class="col-sm-10">
                    <br>
                    <form class="form" @submit.prevent="create">
                        <div class="form-group">
                            <input type="text" class="form-control" v-model="form.title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Content" v-model="form.content" cols="30"
                                      rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <ul class="list-group">
            <li v-for="p in posts" class="list-group-item">
                <h4>{{ p.title }}</h4>
                <small>{{ p.content }}</small>
            </li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios'

    var socket = io('http://127.0.0.1:3000');

    export default {
        data() {
            return {
                posts: [],
                form: {
                    title: "demo",
                    content: ""
                }
            }
        },
        mounted() {
            axios.get('/post/get').then((response) => {
                this.posts = response.data;
            }).catch((error) => {
                console.log(error);
            });

            socket.on('new', (socketPost) => {
                this.posts.unshift(socketPost)
            })

        },
        methods: {
            create: function () {
                axios.post('/post/store', this.form)
                    .then((response) => {
//                        this.posts.unshift(response.data.post);
                        socket.emit('new post', response.data.post);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

            }
        }
    }
</script>