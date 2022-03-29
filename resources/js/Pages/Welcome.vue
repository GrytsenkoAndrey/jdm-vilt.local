<template>
    <div>Welcome</div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            //
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean
        }
    })
</script>
