<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
 <!-- favicon -->
 <link rel="shortcut icon" href="{{ asset('../../../public/favicon.ico') }}" >
 <link rel="icon" type="image/png" href="{{ asset('../../../public/favicon-16x16.png') }}">
 
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50">
        <div>
            <Link href="/">
               <img  class="object-scale-down h-25 w-28 ..." src="../../../public/img/stock_managente-removebg-preview.png" alt="">
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
