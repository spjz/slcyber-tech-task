<template>
    <div>
        <h1>TESTING</h1>
    </div>
</template>

<script>
    export default {
        name: 'ExampleComponent',
        data() {
            return {
                books: this.getBooks(),
            }
        },
        methods: {
            async getBooks() {
                console.log('>> getBooks');
                await axios.get('api/books')
                .then((response) => {
                    console.log('>> response', response);
                })
            }
        }
    }
</script>

<style></style>
