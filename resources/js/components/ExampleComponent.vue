<template>
    <div class="w-9/12 mr-auto ml-auto -mt-0 mb-0">
        <div class="text-center">
            <h1 class="text-orange text-5xl p-10">Book Shop</h1>
            <p class="w-9/12 mr-auto ml-auto -mt-0 mb-0">Cupcake ipsum dolor sit amet croissant. I love topping candy canes sweet roll croissant caramels. Soufflé macaroon liquorice chocolate tart I love.</p>
            <div class="text-right my-9">
                <input type="text" placeholder="Search by book title ..." class="rounded-md border-gray-400 border-solid border-[1px] p-2 w-96">
            </div>
            <div class="text-left">
                <table class="w-full text-left border-separate border-none">
                    <thead>
                    <tr class="text-white bg-gray-800">
                        <th class="border-white p-3">Title</th>
                        <th class="border-white p-3">Author</th>
                        <th class="border-white p-3">Rating</th>
                        <th class="border-white p-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="book in books" class="bg-gray-300">
                        <td class="border-white border-t p-3">{{ book.title }}</td>
                        <td class="border-white border-t p-3">{{ book.author }}</td>
                        <td class="border-white border-t p-3">{{ book.rating }}</td>
                        <td class="border-white border-t p-3">
                            <span>Edit</span>
                            <span>Delete</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
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
                    this.books = response.data.data;
                })
            },
        }
    }
</script>

<style>
div table {
  border-spacing: 1px 0;
}


/* div table
  div {
    table {

      thead tr {
      }
      tbody tr {
      }
      tr {
        th, td {
        }
        td {
        }
      }
    }
  } */
</style>
