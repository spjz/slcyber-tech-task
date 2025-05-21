<template>
    <div class="bg-white container text-left mx-auto mt-8 mb-0">

        <div class="h-full flex flex-col justify-center items-end gap-8">
            <form method="GET" action="">
                <input v-model="searchTerm" class="bg-white placeholder:text-grey border-grey border p-2 w-[400px]" name="title" type="text" placeholder="Search by book title ..." />
            </form>

            <table id="bookListing" class="w-full">
                <thead>
                    <tr class="bg-blue text-white">
                        <th>Title</th>
                        <th>Author</th>
                        <th>Rating</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="book, b in books" class="bg-grey color-black">
                        <td>{{ book.title }}</td>
                        <td>{{ book.author }}</td>
                        <td>{{ book.rating }}</td>
                        <td>
                            <a :href="`/edit/${book.id}`" title="Edit">Edit</a>
                            <a :href="`/delete/${book.id}`" title="Delete">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
import { defineProps, ref } from 'vue';

const props = defineProps({
    books: {
        type: Array
    },
    term: {
        type: String,
        default: '',
    }
});

const searchTerm = ref(props.term);

</script>

<style lang="scss" scoped>
table {
    th {
        text-align: left;
    }

    th, td {
        border: 1px solid white;
        padding: 1rem;
    }

    a {
        text-decoration: underline;
        font-weight: bold;
    }
}
</style>
