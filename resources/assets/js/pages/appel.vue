<template>
    <div>
        <h2>Hello {{msg}} - My first Component</h2>
    </div>
</template>

<script>
    export default {
        props: ['msg'],
    }
</script>