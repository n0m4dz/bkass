<template>
    <div>
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
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                form: {
                    title: "demo",
                    content: ""
                }
            }
        },
        methods: {
            create: function () {
                axios.post('/post/store', this.form)
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

            }
        }
    }
</script>