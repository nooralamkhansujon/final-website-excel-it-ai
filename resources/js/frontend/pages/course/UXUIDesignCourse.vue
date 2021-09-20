<template>
    <section
        class="accordion-section clearfix mt-5 py-5"
        aria-label="Question Accordions"
    >
        <div class="row" style="text-align: center; padding-bottom: 50px">
            <h1>UI/UX Design Course</h1>
            <h5>Home/UI/UX Design Course</h5>
        </div>
    </section>
    <section
        class="accordion-section clearfix py-5"
        aria-label="Question Accordions"
    >
        <h2 class="text-center">UI/UX Design Course comming soon!</h2>
    </section>
</template>
<script>
export default {};
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
