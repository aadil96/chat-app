<template>
    <div class="leading-loose">
        <h1 class="font-weight-bold text-6xl">Chatroom</h1>
        <chat-message v-for="(message, id) in messages" :key="id"
        :message="message"></chat-message>
    </div>
</template>
<script>
    export default {
        props: ['messages']
    }
</script>
