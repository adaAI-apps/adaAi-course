<template>
    <header class="fixed w-full py-4">
        <div class="container flex items-center justify-between">
            <!-- left header -->
            <div class="flex items-center gap-x-3">
                <div class="w-8">
                    <img src="/images/logo.png" alt="logo" />
                </div>
                <h4 class="text-xl font-bold">adaAI</h4>
            </div>

            <!-- right header -->
             <div>
                <button>
                </button>
                 <button>
                     <RiMenuLine/>
                 </button>
             </div>
        </div>
    </header>
</template>

<script setup>
import {RiMenuLine} from '@remixicon/vue'
</script>
