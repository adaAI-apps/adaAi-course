<template>
    <footer class="bg-gray-900 text-white py-12">
        <div class="container">
            <div
                class="grid pb-8 lg:pb-16 gap-8 md:grid-cols-2 lg:grid-cols-4 lg:gap-14"
            >
                <div class="flex flex-col gap-y-4">
                    <div class="flex items-center gap-x-2">
                        <img
                            src="/images/logo.png"
                            alt="logo"
                            class="w-8 h-8"
                        />
                        <h4 class="text-2xl font-bold">adaAI</h4>
                    </div>
                    <p class="text-gray-400">
                        adaAI adalah platform yang menyediakan Course dan
                        Article tentang Web Development dan AI.
                    </p>
                </div>

                <div class="flex flex-col gap-y-4">
                    <h4 class="text-lg font-semibold">Tautan</h4>
                    <ul class="flex flex-col gap-y-2">
                        <li>
                            <Link
                                class="text-gray-400 hover:text-white"
                                href="/"
                                >Home</Link
                            >
                        </li>
                        <li>
                            <Link
                                class="text-gray-400 hover:text-white"
                                href="/courses"
                                >Courses</Link
                            >
                        </li>
                        <li>
                            <Link
                                class="text-gray-400 hover:text-white"
                                href="/articles"
                                >Articles</Link
                            >
                        </li>
                        <li>
                            <Link
                                class="text-gray-400 hover:text-white"
                                href="/term-conditions"
                                >Term & Conditions</Link
                            >
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col gap-y-4">
                    <h4 class="text-lg font-semibold">Kontak</h4>
                    <ul class="flex flex-col gap-y-2">
                        <li>
                            <Link class="flex items-center gap-x-2">
                                <RiMailFill class="text-white-400" />
                                <p class="text-gray-400">
                                    yoviarpauzi99@gmail.com
                                </p>
                            </Link>
                        </li>
                        <li>
                            <Link class="flex items-center gap-x-2">
                                <RiPhoneFill class="text-white-400" />
                                <p class="text-gray-400">+62 812-3456-7890</p>
                            </Link>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col gap-y-4">
                    <h4 class="text-lg font-semibold">Ikuti Kami</h4>
                    <ul class="flex gap-x-2">
                        <li>
                            <Link class="flex items-center gap-x-2">
                                <RiInstagramLine class="text-white-400" />
                            </Link>
                        </li>
                        <li>
                            <Link class="flex items-center gap-x-2">
                                <RiFacebookFill class="text-white-400" />
                            </Link>
                        </li>
                        <li>
                            <Link class="flex items-center gap-x-2">
                                <RiTiktokFill class="text-white-400" />
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-6 md:pt-8 border-t border-gray-800">
                <p class="text-gray-400 text-center">
                    © 2025 adaAI. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import {
    RiFacebookFill,
    RiInstagramLine,
    RiMailFill,
    RiPhoneFill,
    RiTiktokFill,
} from "@remixicon/vue";
</script>
