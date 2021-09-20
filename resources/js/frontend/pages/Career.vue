<template>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div
                    class="card-heading"
                    style="background: rgb(6, 39, 59, 0.8)"
                >
                    <h2 class="title text-center pt-2">Apply for job</h2>
                </div>
                <div class="card-body" style="background-color: whitesmoke">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Your Name</div>
                            <div class="value">
                                <input
                                    class="input--style-6"
                                    type="text"
                                    name="full_name"
                                    v-model="form.name"
                                    placeholder="Enter Your Name"
                                />
                                <div
                                    class="text-danger"
                                    v-if="errors['name']?.length > 0"
                                    v-text="errors['name'][0]"
                                ></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Your Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input
                                        class="input--style-6"
                                        type="text"
                                        name="phone"
                                        v-model="form.phone_number"
                                        placeholder="Enter Your Number"
                                    />
                                    <div
                                        class="text-danger"
                                        v-if="
                                            errors['phone_number']?.length > 0
                                        "
                                        v-text="errors['phone_number'][0]"
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input
                                        class="input--style-6"
                                        type="email"
                                        name="email"
                                        v-model="form.email"
                                        placeholder="Enter Your Email"
                                    />
                                    <div
                                        class="text-danger"
                                        v-if="errors['email']?.length > 0"
                                        v-text="errors['email'][0]"
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <input
                                        class="input--style-6"
                                        type="text"
                                        name="subject"
                                        v-model="form.subject"
                                        placeholder="Enter Your Subject"
                                    />
                                    <div
                                        class="text-danger"
                                        v-if="errors['subject']?.length > 0"
                                        v-text="errors['subject'][0]"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Career</div>
                            <div class="value">
                                <div class="input-group">
                                    <input
                                        class="input--style-6"
                                        type="text"
                                        name="career"
                                        v-model="form.career"
                                        placeholder="UI/UX // Laravel // Python // Digital Marketing // Flutter"
                                    />
                                    <div
                                        class="text-danger"
                                        v-if="errors['career']?.length > 0"
                                        v-text="errors['career'][0]"
                                    ></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea
                                        class="textarea--style-6"
                                        name="message"
                                        cols="30"
                                        v-model="form.message"
                                        placeholder="Message sent to the employer"
                                    ></textarea>
                                    <div
                                        class="text-danger"
                                        v-if="errors['message']?.length > 0"
                                        v-text="errors['message'][0]"
                                    ></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload CV</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input
                                        class="input-file"
                                        type="file"
                                        name="file_cv"
                                        id="file"
                                        @change="addPdfFile"
                                    />
                                    <label class="label--file" for="file"
                                        >Choose file</label
                                    >
                                </div>
                                <div class="label--desc">
                                    Upload your CV/Resume or any other relevant
                                    file. Max file size 50 MB
                                </div>
                                <div
                                    class="text-danger"
                                    v-if="errors['cv']?.length > 0"
                                    v-text="errors['cv'][0]"
                                ></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button
                        class="btn btn--radius-2 btn--blue-2 bg-success"
                        @click.prevent="SendApplyForJobRequest"
                        type="button"
                    >
                        {{ isClicked ? "Sending..." : "Send Application" }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";
import ApplyForJobApi from "../api/ApplyForJobApi.js";

export default {
    data() {
        return {
            form: {
                name: "",
                phone_number: "",
                email: "",
                subject: "",
                career: "",
                message: "",
                cv: "",
            },
            errors: {},
            isClicked: false,
        };
    },
    methods: {
        addPdfFile(event) {
            this.form.cv = event.target.files[0];
        },
        SendApplyForJobRequest() {
            this.isClicked = true;
            this.errors = {};
            ApplyForJobApi.sendApplyForJobRequest(this.formData())
                .then(({ data: { success } }) => {
                    this.isClicked = false;
                    this.resetForm();
                    Swal.fire("Success!", success, "success");
                })
                .catch((error) => {
                    this.isClicked = false;
                    if (error?.response?.status === 422) {
                        console.log(error.response.data);
                        this.errors = error?.response?.data.errors;
                    } else {
                        Swal.fire(
                            "Error!",
                            "Some Error occured Please Try Again",
                            "error"
                        );
                    }
                });
        },
        formData() {
            const formData = new FormData();
            for (let column in this.form) {
                formData.append(column, this.form[column]);
            }
            return formData;
        },
        resetForm() {
            for (let column in this.form) {
                this.form[column] = "";
            }
        },
    },
};
</script>

<style scoped>
.page-wrapper {
    background-image: url("../../../assets/images/giphy.gif");
    /* background-position: center !important;
    background-size: cover !important;
    background-repeat: no-repeat !important; */
}

@import "../css/career.css";
</style>
