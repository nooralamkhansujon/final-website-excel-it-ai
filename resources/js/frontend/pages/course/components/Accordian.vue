<template>
    <transition>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayclose-headingOne">
                <button
                    class="accordion-button btn-h"
                    type="button"
                    @click.prevent="ToggleItem"
                >
                    <span> {{ header }}</span>
                </button>
            </h2>
            <div
                id="cp1"
                class="accordion-collapse"
                data-iconpos="none"
                v-if="accordian"
            >
                <div class="accordion-body">
                    <slot></slot>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    props: ["header"],
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

<style scoped>
.accordion-button:not(.collapsed) {
    background-color: white !important;
}

/* .accordion-button:not(.collapsed),
.accordion-button:not(.collapsed) span {
  color: #ff9138 !important;
} */

.accordion-button:focus {
    z-index: 3;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: none !important;
}

.accordion-item .accordion-button {
    background-color: #5faace !important;
    -webkit-box-shadow: 3px 3px 5px 6px #ccc; /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    -moz-box-shadow: 3px 3px 5px 6px #ccc; /* Firefox 3.5 - 3.6 */
    box-shadow: 3px 3px 5px 6px #ccc; /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
}
.accordion-item .accordion-button span {
    color: white;
    background-color: #5faace;
    font-weight: bolder;
    font-family: "Poppins", sans-serif;
    font-size: 15px;
    margin-left: 20px;
}
</style>
