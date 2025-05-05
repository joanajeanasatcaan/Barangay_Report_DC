<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Ubojan Incident Report System" />
    <div class="text-gray-900 bg-white">
        <div
            class="relative flex flex-col items-center justify-center min-h-screen selection:bg-black selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header
                    class="grid items-center grid-cols-2 gap-2 py-10 lg:grid-cols-3"
                >
                    <div class="flex lg:col-start-2 lg:justify-center">
                        <div class="text-center">
                            <h1 class="text-4xl font-bold text-black lg:text-5xl">
                                Ubojan
                            </h1>
                            <p class="text-lg font-medium text-gray-700">
                                Incident Report System
                            </p>
                        </div>
                    </div>
                    <nav v-if="canLogin" class="flex justify-end flex-1 -mx-3">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="px-3 py-2 text-black transition rounded-md ring-1 ring-transparent hover:text-gray-700 focus:outline-none focus-visible:ring-black"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="px-3 py-2 text-black transition rounded-md ring-1 ring-transparent hover:text-gray-700 focus:outline-none focus-visible:ring-black"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="px-3 py-2 text-black transition rounded-md ring-1 ring-transparent hover:text-gray-700 focus:outline-none focus-visible:ring-black"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <div class="max-w-3xl mx-auto text-center">
                        <p class="text-lg text-gray-700">
                            A comprehensive system for reporting and managing incidents.
                        </p>
                        <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2">
                            <div class="p-6 border border-gray-200 rounded-lg shadow-sm">
                                <h3 class="mb-3 text-xl font-semibold">Report Incidents</h3>
                                <p class="text-gray-600">Quickly submit incident reports with all necessary details.</p>
                            </div>
                            <div class="p-6 border border-gray-200 rounded-lg shadow-sm">
                                <h3 class="mb-3 text-xl font-semibold">Track Progress</h3>
                                <p class="text-gray-600">Monitor the status of reported incidents in real-time.</p>
                            </div>
                        </div>
                    </div>
                </main>

                <footer
                    class="py-16 text-sm text-center text-gray-600"
                >
                    Ubojan Incident Report System 2025
                </footer>
            </div>
        </div>
    </div>
</template>
