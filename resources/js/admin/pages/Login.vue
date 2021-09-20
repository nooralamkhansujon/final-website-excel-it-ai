<template>
  <div class="home-btn d-none d-sm-block">
    <a href="#" class="text-dark"><i class="fas fa-home h2"></i></a>
  </div>
  <div class="account-pages my-5 pt-sm-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card overflow-hidden">
            <div class="bg-soft-primary">
              <div class="row">
                <div class="col-7">
                  <div class="text-primary p-4">
                    <h5 class="text-primary">Excel It AI !</h5>
                    <p>Sign in to continue to Skote.</p>
                  </div>
                </div>
                <div class="col-5 align-self-end">
                  <img src="/assets\images\profile-img.png" alt="" class="img-fluid" />
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div>
                <a href="index.html">
                  <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                      <img
                        src="/assets/images/logo.svg"
                        alt=""
                        class="rounded-circle"
                        height="34"
                      />
                    </span>
                  </div>
                </a>
              </div>
              <div class="p-2">
                <form class="form-horizontal" action="index.html">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="form.email"
                      id="email"
                      placeholder="Enter Email"
                    />
                    <span
                      class="text-danger text-sm"
                      v-if="errors?.email"
                      v-text="errors.email[0]"
                    ></span>
                  </div>

                  <div class="form-group">
                    <label for="userpassword">Password</label>
                    <input
                      type="password"
                      v-model="form.password"
                      class="form-control"
                      id="userpassword"
                      placeholder="Enter password"
                    />
                    <span
                      class="text-danger text-sm"
                      v-if="errors?.password"
                      v-text="errors.password[0]"
                    ></span>
                  </div>

                  <!-- <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div> -->

                  <div class="mt-3">
                    <button
                      class="btn btn-primary btn-block waves-effect waves-light"
                      :disabled="isClicked"
                      @click.prevent="loginAdmin"
                      type="submit"
                    >
                      {{ isClicked ? "Log In" : "Please wait" }}
                    </button>
                  </div>
                  <div class="mt-4 text-center">
                    <a href="auth-recoverpw.html" class="text-muted"
                      ><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a
                    >
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AdminLoginApi from "../api/AdminLoginApi";
export default {
  data() {
    return {
      form: {
        email: "",
        password: "",
      },
      errors: {},
      isClicked: false,
    };
  },
  methods: {
    loginAdmin() {
      this.isClicked = true;
      this.errors = {};
      AdminLoginApi.login(this.form)
        .then(({ data: { admin_token } }) => {
          this.isClicked = false;
          console.log(admin_token);
          localStorage.setItem("admin_token", admin_token);
          this.$router.push({ name: "AdminDashboard" });
        })
        .catch((error) => {
          this.isClicked = false;
          if (error?.response?.status === 422) {
            this.errors = error.response.data.errors;
          }
          console.log(error?.response);
        });
    },
  },
};
</script>
