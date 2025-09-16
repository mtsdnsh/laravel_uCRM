<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

defineProps({
    errors: Object
});

const form = reactive({
    title: '',
    content: ''
});

const submitFunction = () => {
    Inertia.post('/inertia', form);
};
</script>

<template>
    <form @submit.prevent="submitFunction">
        <input type="text" name="title" v-model="form.title" placeholder="タイトル"> <br />
        <div v-if="errors.title" style="color: red;">{{ errors.title }}</div>
        <input type="text" name="content" v-model="form.content" placeholder="コンテンツ"> <br />
        <div v-if="errors.content" style="color: red;">{{ errors.content }}</div>
        <button>送信</button>
    </form>
</template>

