<template>
    <div class="leading-loose">
        <h1 class="font-weight-bold text-6xl">Chatroom</h1>
        <chat-message v-for="(text, id) in messages" :key="id"
        :message="text.message" :author="text.author"></chat-message>
    </div>
</template>
<script>
    export default {
        props: ['messages']
        // data(){
        //     return {
        //         messages: [
        //             {
        //                 message: "Hey How are you",
        //                 user: 'Robot',
        //             },
        //             {
        //                 message: "Am all good",
        //                 user: "Me"
        //             }
        //         ]
        //     }
        // },
        // mounted(){
        //     console.log('hi')
        // },
        // methods: {
        //     message: () => {

        //     }
        // }
    }
</script>
