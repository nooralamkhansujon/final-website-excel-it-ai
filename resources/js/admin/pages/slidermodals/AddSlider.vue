<template>
  <!-- Modal -->
  <div class="edit_custom_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
          <button
            type="button"
            class="close"
            aria-label="Close"
            @click.prevent="hideModal"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="form-group col-md-12">
                <label class="form-label" for="slider_title">Slider Title</label>
                <input
                  type="text"
                  v-model="form.slider_title"
                  class="form-control"
                  name="slider_title"
                  id="slider_title"
                />
                <span
                  class="text-danger"
                  v-if="errors['slider_title']"
                  v-text="errors['slider_title'][0]"
                ></span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label class="form-label" for="slider_description"
                  >Slider Description</label
                >
                <textarea
                  type="text"
                  v-model="form.slider_description"
                  class="form-control"
                  name="slider_description"
                  id="slider_description"
                ></textarea>
                <span
                  class="text-danger"
                  v-if="errors['slider_description']"
                  v-text="errors['slider_description'][0]"
                ></span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="form-label" for="slider_img">Slider Image</label>
                <input
                  type="file"
                  @change="uploadSliderImage"
                  class="form-control"
                  name="slider_img"
                  id="slider_img"
                />
                <span
                  class="text-danger"
                  v-if="errors['slider_img']"
                  v-text="errors['slider_img'][0]"
                ></span>
              </div>
            </div>
            <button
              type="submit"
              :disabled="isClicked"
              @click.prevent="addSlider"
              class="btn btn-primary"
            >
              {{ isClicked ? "Please Wait..." : "Add Slide" }}
            </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" @click.prevent="hideModal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
</template>

<script>
import SliderApi from "../../api/SliderApi.js";
import Swal from "sweetalert2";

export default {
  data() {
    return {
      form: {
        slider_title: "",
        slider_description: "",
        slider_img: "",
      },
      isClicked: false,
      errors: {},
    };
  },
  computed: {
    hideModal() {
      this.$emit("hideAddSliderModal");
    },
  },
  methods: {
    addSlider() {
      this.errors = {};
      this.isClicked = {};
      SliderApi.store(this.setFormData())
        .then(({ data: { success } }) => {
          this.isClicked = false;
          this.resetForm();
          Swal.fire("success", success, "success");
          this.$emit("newSliderAdded");
        })
        .catch((error) => {
          this.isClicked = false;
          if (error?.response?.status === 422) {
            this.errors = error.response.data.errors;
          }
          console.log(error);
        });
    },
    uploadSliderImage(e) {
      this.form.slider_img = e.target.files[0];
    },
    setFormData() {
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
  z-index: 1000000;
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
