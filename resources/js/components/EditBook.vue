<template>
    <div>
        <div class="w-1/5 text-left mr-auto ml-auto -mt-0 mb-0">
            <form method="POST" :action="`/edit/${book.id}`">
                <input type="hidden" name="_token" :value="csrf">
                <div class="pt-10">
                    <h2 class="text-center text-3xl pb-10">Edit Book</h2>
                    <div class="pb-10">
                        <label class="w-20 inline-block">Title: </label>
                        <input v-model="bookTitle" name="title" type="text" placeholder="Title" class="rounded-md border-gray-400 border-solid border-[1px] p-2 w-96">
                    </div>
                    <div class="pb-10">
                        <label class="w-20 inline-block">Author: </label>
                        <input v-model="bookAuthor" name="author" type="text" placeholder="Author" class="rounded-md border-gray-400 border-solid border-[1px] p-2 w-96">
                    </div>
                    <div class="pb-10">
                        <label class="w-20 inline-block">Rating: </label>
                        <input v-model="bookRating" name="rating" type="text" placeholder="5" class="rounded-md border-gray-400 border-solid border-[1px] p-2 w-96">
                    </div>
                </div>
                <div class="text-center">
                    <button class="text-white bg-orange py-2 px-4 rounded" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { defineProps, ref } from 'vue';

const props = defineProps({
    book: {
        type: Object
    },
    csrf: {
        type: String,
        required: true
    }
});

const bookTitle = ref(props.book.title);
const bookAuthor = ref(props.book.author);
const bookRating = ref(props.book.rating);
</script>
