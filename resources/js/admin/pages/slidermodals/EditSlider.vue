<template>
  <!-- Modal -->
  <div class="edit_custom_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" id="modal_content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel1">Edit Slider</h4>
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
              <div class="form-group col-md-12">
                <label class="form-label" for="name">Slider Title</label>
                <input
                  type="text"
                  v-model="form.slider_title"
                  class="form-control"
                  name="name"
                  id="name"
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
              @click.prevent="updateSlider"
              class="btn btn-primary"
            >
              {{ isClicked ? "Please Wait..." : "Edit Slide" }}
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
import SliderApi from "../../api/SliderApi.js";

export default {
  props: ["slider_id"],
  emits: ["updateSlide", "hideEditSliderModal"],
  data() {
    return {
      form: {
        id: "",
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
      this.$emit("hideEditSliderModal");
    },
  },
  methods: {
    updateSlider() {
      this.isClicked = true;
      this.errors = {};
      SliderApi.update(this.setFormData(), this.form.id)
        .then(({ data: { success } }) => {
          this.isClicked = false;
          this.$emit("updateSlide");
          this.resetForm();
          Swal.fire("Success!", success, "success");
        })
        .catch((error) => {
          this.isClicked = false;
          if (error?.response?.status === 422) {
            this.errors = error.response.data.errors;
          } else {
            Swal.fire("Error!", "Some Error Occured Please Try Again!", "error");
          }
        });
    },
    uploadSliderImage(e) {
      console.log(e.target.files[0]);
      this.form.slider_img = e.target.files[0];
    },
    getSingleSlider() {
      SliderApi.show(this.slider_id)
        .then(({ data: { sliderDetails } }) => {
          this.setItemInForm(sliderDetails);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    //reset form
    resetForm() {
      for (let column in this.form) {
        this.form[column] = "";
      }
    }, //end method
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
  },
  mounted() {
    this.getSingleSlider();
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
