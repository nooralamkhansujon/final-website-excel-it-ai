<template>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayclose-headingOne">
            <button
                class="accordion-button collapsed btn-h"
                type="button"
                style="color: black"
                @click.prevent="ToggleItem"
            >
                <span><i class="fas fa-caret-right"></i></span>
                <span style="color: black">{{ title }}</span>
            </button>
        </h2>
        <div
            :id="title"
            class="accordion-collapse"
            aria-labelledby="panelsStayOpen-headingOne"
            data-iconpos="none"
            v-if="accordian"
        >
            <div class="accordion-body">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["title"],
    data() {
        return {
            accordian: false,
        };
    },
    methods: {
        ToggleItem() {
            this.accordian = !this.accordian;
        },
    },
};
</script>

<style scoped></style>
