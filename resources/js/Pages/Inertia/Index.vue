<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
defineProps({
    blogs: Array
});

const newTitle = ref('');
const newContent = ref('');
</script>

<template>
    <div v-if="$page.props.flash.message" style="color: blue;">{{ $page.props.flash.message }}</div>
    <ul>
        <li v-for="blog in blogs" :key="blog.id">
            <h2><Link :href="route('inertia.show', { id: blog.id })">件名：{{ blog.title }}</Link></h2>
            <p>本文：{{ blog.content }}</p>
        </li>
    </ul>
</template>
