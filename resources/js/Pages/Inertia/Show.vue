<script setup>
import { Inertia } from '@inertiajs/inertia';

    defineProps({
        id: String,
        blog: Object
    });

    const deleteConfirm = (id) => {
        //console.log(id);
        Inertia.delete(`/inertia/${id}`,
            {
                onBefore: () => {
                    alert('削除します。よろしいですか？');
                }
            }
        );
    };
</script>
<template>
    <div>id: {{ id }}</div>
    <div>件名：{{ blog.title }}</div>
    <div>本文：{{ blog.content }}</div>
    <button @click="deleteConfirm(blog.id)">削除</button>
</template>
