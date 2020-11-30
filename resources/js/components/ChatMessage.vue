<template>
    <div>
		<p>{{message }} </p>
		<p>{{ author }} </p>
        <hr>
    </div>
</template>

<script>
    export default {
        props: ['message', 'author'],
    }
</script>
