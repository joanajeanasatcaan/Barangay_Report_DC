<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div
        class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0"
    >
        <div>
            <Link href="/">
                <div class="text-center">
                            <h1 class="text-4xl font-bold text-black lg:text-5xl">
                                Ubojan
                            </h1>
                            <p class="text-lg font-medium text-gray-700">
                                Incident Report System
                            </p>
                </div>
            </Link>
        </div>

        <div
            class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
