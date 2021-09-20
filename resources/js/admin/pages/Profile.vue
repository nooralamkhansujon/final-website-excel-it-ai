<template>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div
                class="
                    page-title-box
                    d-flex
                    align-items-center
                    justify-content-between
                "
            >
                <h4 class="mb-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">Dashboards</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>Excel It Ai</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img
                                src="/assets/images/profile-img.png"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img
                                    :src="authAdmin.avater"
                                    alt=""
                                    class="img-thumbnail rounded-circle"
                                />
                            </div>
                            <h5 class="font-size-15 text-truncate">
                                {{ authAdmin.name }}
                            </h5>
                            <p class="text-muted mb-0 text-truncate">
                                {{ authAdmin?.designation || "Super Admin" }}
                            </p>
                        </div>

                        <div class="col-sm-8">
                            <div class="pt-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Your Profile</h4>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="name">Your Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        v-model="form.name"
                                    />
                                    <span
                                        class="text-danger text-sm"
                                        v-if="errors?.name"
                                        v-text="errors.name[0]"
                                    ></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="designation"
                                        >Your Designation</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="designation"
                                        v-model="form.designation"
                                    />
                                    <span
                                        class="text-danger text-sm"
                                        v-if="errors?.designation"
                                        v-text="errors.designation[0]"
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="form-control-label"
                                        for="email"
                                        >Your Email</label
                                    >
                                    <input
                                        type="text"
                                        v-model="form.email"
                                        class="form-control"
                                        name="email"
                                    />
                                    <span
                                        class="text-danger text-sm"
                                        v-if="errors?.email"
                                        v-text="errors.email[0]"
                                    ></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label
                                        class="form-control-label"
                                        for="password"
                                        >Password</label
                                    >
                                    <input
                                        type="password"
                                        v-model="form.password"
                                        class="form-control"
                                        name="password"
                                    />
                                    <span
                                        class="text-danger text-sm"
                                        v-if="errors?.password"
                                        v-text="errors.password[0]"
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="avater"
                                        >Your Avater</label
                                    >
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="avater"
                                        @change="changeAvater"
                                    />
                                    <span
                                        class="text-danger text-sm"
                                        v-if="errors?.avater"
                                        v-text="errors.avater[0]"
                                    ></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img
                                    src="/assets/images/profile-img.png"
                                    width="200"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone"
                                        >Phone Number</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="form.phone"
                                        name="phone"
                                    />
                                    <span
                                        class="text-danger text-sm"
                                        v-if="errors?.phone"
                                        v-text="errors.phone[0]"
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button
                                    class="
                                        btn btn-outline-lg btn-primary
                                        waves-effect waves-light
                                        btn-lg
                                    "
                                    @click.prevent="updateAdminProfile"
                                >
                                    update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</template>

<script>
import { mapGetters } from "vuex";
import GetAdmin from "../mixins/GetAdmin";
import setProfileForm from "../utilities/setProfileForm";
import AdminApi from "../api/AdminApi";
import Form from "../utilities/Form";
import Swal from "sweetalert2";
export default {
    data() {
        return {
            form: {
                id: "",
                name: "",
                email: "",
                password: "",
                designation: "",
                avater: "",
                phone: "",
            },
            isClicked: false,
            errors: {},
        };
    },
    mixins: [GetAdmin],
    computed: {
        ...mapGetters({
            authAdmin: "GET_ADMIN_USER",
        }),
    },
    methods: {
        changeAvater(e) {
            this.form.avater = e.target.files[0];
            console.log(this.form.avater);
        },
        updateAdminProfile() {
            AdminApi.updateProfile(Form(this.form), this.form.id)
                .then(({ data: { success } }) => {
                    this.GetAdmin();
                    Swal.fire("success", success, "success");
                })
                .catch((error) => {
                    if (error?.response?.status === 422) {
                        this.errors = error.response.data.errors;
                    } else if (error?.response?.status === 500) {
                        Swal.fire(
                            "Error",
                            "Some Error Occured Please Try Again!",
                            "error"
                        );
                    }
                });
        },
    },
    async mounted() {
        await this.GetAdmin();
        // console.log(this.authAdmin)
        setProfileForm(this.form, this.authAdmin);
    },
};
</script>
