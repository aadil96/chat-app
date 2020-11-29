<template>
        <div>
            <input @keypress.enter="sendMessage" type="text"
            placeholder="Enter text"
            class="w-full border rounded"
            name="chat" autofocus v-model="input" value="">
        <button @click="sendMessage" class="bg-blue-600 text-white px-2 rounded mt-1.5">Send</button>
        </div>
</template>
<script>
    export default {
        data() {
            return {
                input: ''
            }
        },
        methods: {
            sendMessage: function(){
                this.$emit('sent', {
                    message: this.input,
                    author: 'Me'
                })
                this.input = ''
            }
        }
    }
</script>
