<template>
    <div>
		<p>{{ message.body }} </p>
        <hr>
    </div>
</template>

<script>
    export default {
        props: ['message'],
    }
</script>
