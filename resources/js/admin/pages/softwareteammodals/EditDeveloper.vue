<template>
  <!-- Modal -->
  <div class="edit_custom_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" id="modal_content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel1">Edit Developer</h4>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
            @click.prevent="hideModal"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="form-label" for="name">Developer Name</label>
                <input
                  type="text"
                  v-model="form.name"
                  class="form-control"
                  name="name"
                  id="name"
                />
                <span
                  class="text-danger"
                  v-if="errors['name']"
                  v-text="errors['name'][0]"
                ></span>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="designation">Designation</label>
                <input
                  type="text"
                  v-model="form.designation"
                  class="form-control"
                  name="designation"
                  id="designation"
                />
                <span
                  class="text-danger"
                  v-if="errors['designation']"
                  v-text="errors['designation'][0]"
                ></span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="form-label" for="employee_id">employee Id</label>
                <input
                  type="text"
                  v-model="form.employee_id"
                  class="form-control"
                  name="employee_id"
                  id="employee_id"
                />
                <span
                  class="text-danger"
                  v-if="errors['employee_id']"
                  v-text="errors['employee_id'][0]"
                ></span>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="email">Email</label>
                <input
                  type="email"
                  v-model="form.email"
                  class="form-control"
                  name="email"
                  id="email"
                />
                <span
                  class="text-danger"
                  v-if="errors['email']"
                  v-text="errors['email'][0]"
                ></span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="form-label" for="profile_photo">Profile Photo</label>
                <input
                  type="file"
                  @change="uploadProfilePhoto"
                  class="form-control"
                  name="profile_photo"
                  id="profile_photo"
                />
                <span
                  class="text-danger"
                  v-if="errors['profile_photo']"
                  v-text="errors['profile_photo'][0]"
                ></span>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="phone_number">Phone Number</label>
                <input
                  type="text"
                  v-model="form.phone_number"
                  class="form-control"
                  name="phone_number"
                  id="phone_number"
                />
                <span
                  class="text-danger"
                  v-if="errors['phone_number']"
                  v-text="errors['phone_number'][0]"
                ></span>
              </div>
            </div>
            <button
              type="submit"
              :disabled="isClicked"
              @click.prevent="updateDeveloper"
              class="btn btn-primary"
            >
              {{ isClicked ? "Please Wait..." : "Edit Developer" }}
            </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" @click.prevent="hideModal">
            close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
</template>

<script>
import Swal from "sweetalert2";
import SoftwareTeamApi from "../../api/SoftwareTeamApi.js";
export default {
  props: ["developer_id"],
  emits: ["updateDeveloper"],
  data() {
    return {
      form: {
        id: "",
        name: "",
        designation: "",
        employee_id: "",
        email: "",
        profile_photo: "",
        phone_number: "",
      },
      isClicked: false,
      errors: {},
    };
  },
  computed: {
    hideModal() {
      this.$emit("hideEditDeveloperModal");
    },
  },
  methods: {
    updateDeveloper() {
      this.isClicked = true;
      this.errors = {};
      SoftwareTeamApi.update(this.setFormData(), this.form.id)
        .then(({ data: { success } }) => {
          this.resetForm();
          this.$emit("updateDeveloper");
          Swal.fire("success", success, "success");
        })
        .catch((err) => {
          this.isClicked = false;
          if (err?.response?.status === 422) {
            this.errors = err.response.data.errors;
          } else {
            Swal.fire("Error!", "Some Error Occured Please Try Again!", "error");
          }
        });
    },
    uploadProfilePhoto(e) {
      this.form.profile_photo = e.target.files[0];
    },
    getSingleDeveloper() {
      SoftwareTeamApi.show(this.developer_id)
        .then(({ data: { softwareTeamDetails } }) => {
          this.setItemInForm(softwareTeamDetails);
        })
        .catch((error) => {
          console.log(error);
        });
    },

    //this method for add single item in form for editing
    setItemInForm(data) {
      for (let column in data) {
        if (this.form.hasOwnProperty(column)) {
          this.form[column] = data[column];
        }
      }
    }, //end method

    //wrap form data using FormData class
    setFormData() {
      const formData = new FormData();
      for (let column in this.form) {
        formData.append(column, this.form[column]);
      }
      return formData;
    }, //end method

    //reset form
    resetForm() {
      for (let column in this.form) {
        this.form[column] = "";
      }
    }, //end method
  },
  mounted() {
    this.getSingleDeveloper();
  },
};
</script>

<style scoped>
.edit_custom_modal {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.3);
  z-index: 99;
  height: 100vh;
  overflow-y: scroll;
  width: 100vw;
}
.modal-dialog {
  z-index: 10000000000;
  width: 80%;
  text-align: center;
  position: relative;
  left: 0;
}
#modal_content {
  width: 1000px !important;
  /* width:100% */
}
</style>
