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

        // data() {
        //     return{
        //         message: this.message
        //     }
        // }
    }
</script>
