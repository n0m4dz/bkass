<template>
    <div>
        <h1>{{ intro }}</h1>
        <h4>I am about page</h4>

        <ul>
            <li v-for="lesson in lessons">{{ lesson.name }} - {{ lesson.credit }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                intro: "About page is here",
                lessons: [
                    {
                        name: 'algebra',
                        credit: 3
                    },
                    {
                        name: 'english',
                        credit: 2
                    }
                ]
            }
        }
    }
</script>