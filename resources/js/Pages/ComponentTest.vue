<script setup>
import GuestLayout from '@/Layouts/Guest.vue';
import Label from '@/Components/Label.vue';
import Input from '@/Components/Input.vue';

const emitTest = event => console.log(event);
</script>

<template>
    <GuestLayout>
        <Label value="件名">タイトル</Label>
        <Input
            modelValue="初期値"
            @update:modelValue="emitTest"
        ></Input>
        <br />
        <br />
    </GuestLayout>
</template>
