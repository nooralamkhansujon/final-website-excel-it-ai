<template>
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box d-flex align-items-center justify-content-between">
        <h4 class="mb-0 font-size-18">View Sliders</h4>

        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <router-link :to="{ name: 'AdminDashboard' }">Dashboards</router-link>
            </li>
            <li class="breadcrumb-item active">View Sliders</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- end page title -->

  <div class="row">
    <div class="col-12 my-2">
      <div class="header d-flex justify-content-end">
        <button class="btn btn-success btn-lg" @click.prevent="showAddModal = true">
          Add Slider
        </button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <!-- showPaginationOption and search option  -->
          <div class="d-flex justify-content-between my-3 mx-3">
            <div class="d-flex justify-content-center">
              <span style="font-size: 20px" class="mx-1">Show</span>
              <select
                v-model.trim="currentEntries"
                @change="paginateEntries()"
                class="form-control px:width-15"
              >
                <option v-for="sh in showEntries" :key="sh" :value="sh">
                  {{ sh }}
                </option>
              </select>
              <span class="ml-1" style="font-size: 20px">entries</span>
            </div>
            <div class="end:flex">
              <input
                type="search"
                class="input px:width-25"
                placeholder="Search"
                v-model="searchInput"
                @keyup="searchEvent"
              />
            </div>
          </div>
          <!-- end of showpaginationoption and search option  -->
          <div class="table-responsive">
            <table class="table table-hover table-centered mb-0 table-nowrap">
              <thead class="thead-light">
                <tr>
                  <th v-for="column in columns" :key="column.name">
                    {{ column.text }}
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="slide in filteredEntries" :key="slide.id">
                  <td>{{ slide.id }}</td>
                  <td>
                    <img
                      :src="slide.slider_img"
                      alt="product-img"
                      title="product-img"
                      class="avatar-md"
                    />
                  </td>
                  <td>{{ slide.slider_title }}</td>
                  <td>
                    {{ slide.slider_description.substr(0, 60) }}
                  </td>
                  <td>
                    <a
                      href="javascript:void(0);"
                      @click.prevent="deleteSlider(slide.id)"
                      class="action-icon text-danger"
                    >
                      <vue-feather type="trash-2" class="text-danger"></vue-feather
                    ></a>
                    <a
                      href="#"
                      @click.prevent="editSlider(slide.id)"
                      class="action-icon text-primary"
                    >
                      <vue-feather type="edit"></vue-feather>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="between:flex my-3 mx-3">
            <div style="font-size: 20px; font-weight: bold" class="text-secondary">
              Show {{ showInfo.from }} to {{ showInfo.to }} of {{ showInfo.of }} entries
            </div>
            <div class="end:flex">
              <ul class="pagination:nav">
                <li :class="['nav-item', { disabled: currentPage == 1 }]">
                  <a
                    href="#"
                    class="nav-link"
                    @click.prevent="(currentPage = 1), paginateEntries()"
                  >
                    First
                  </a>
                </li>
                <li :class="['nav-item', { disabled: currentPage == 1 }]">
                  <a
                    href="#"
                    class="nav-link"
                    @click.prevent="
                      currentPage < 1 ? (currentPage = 1) : (currentPage -= 1),
                        paginateEntries()
                    "
                  >
                    Prev
                  </a>
                </li>
                <li
                  class="nav-item"
                  v-for="pagi in showPagination"
                  :key="pagi"
                  :class="{
                    ellipsis: pagi === '...',
                    active: pagi === currentPage,
                  }"
                >
                  <a href="#" @click.prevent="paginateEvent(pagi)" class="nav-link">{{
                    pagi
                  }}</a>
                </li>
                <li :class="['nav-item', { disabled: currentPage == allPages }]">
                  <a
                    href="#"
                    class="nav-link"
                    @click.prevent="
                      currentPage > allPages
                        ? (currentPage = allPages)
                        : (currentPage += 1),
                        paginateEntries()
                    "
                  >
                    Next
                  </a>
                </li>
                <li :class="['nav-item', { disabled: currentPage == allPages }]">
                  <a
                    href="#"
                    class="nav-link"
                    @click.prevent="(currentPage = allPages), paginateEntries()"
                  >
                    Last
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <add-slider
    @newSliderAdded="getAllSliders(), (showAddModal = false)"
    @hideAddSliderModal="showAddModal = false"
    v-if="showAddModal"
  ></add-slider>
  <edit-slider
    @updateSlide="getAllSliders(), (showEditModal = false)"
    @hideEditSliderModal="showEditModal = false"
    v-if="showEditModal"
    :slider_id="slider_id"
  ></edit-slider>
</template>

<script>
import { $array } from "alga-js";
import SliderApi from "../api/SliderApi.js";
import AddSlider from "./slidermodals/AddSlider.vue";
import EditSlider from "./slidermodals/EditSlider.vue";
import Swal from "sweetalert2";
export default {
  components: { AddSlider, EditSlider },
  data() {
    return {
      columns: [
        { name: "id", text: "Slider Id" },
        { name: "slider_img", text: "Slider Image" },
        { name: "slider_title", text: "Slider Title" },
        { name: "slider_description", text: "Slider Description" },
        { name: "action", text: "Action" },
      ],
      sliderList: [],
      filteredEntries: [],
      showEntries: [5, 10, 15, 25, 50, 100, 200],
      currentEntries: 10,
      currentPage: 1,
      allPages: 1,
      searchEntries: [],
      searchInput: "",
      showAddModal: false,
      showEditModal: false,
      slider_id: 0,
    };
  },
  computed: {
    showPagination() {
      return $array.pagination(this.allPages, this.currentPage, 2);
    },
    showInfo() {
      return $array.pageInfo(this.getCurrentList, this.currentPage, this.currentEntries);
    },
    //=> { from: 11, to: 12, of: 12 }
    getColumns() {
      return this.columns.map((column) => {
        return column.name;
      });
    },
    getCurrentList() {
      return this.searchEntries.length == 0 && this.searchInput.length == 0
        ? this.sliderList
        : this.searchEntries;
    },
  },
  methods: {
    getAllSliders() {
      SliderApi.lists()
        .then(({ data: { sliderList } }) => {
          this.sliderList = sliderList;
          this.paginateData(this.sliderList);
        })
        .catch((error) => {
          console.log(error);
        });
    }, //end method
    //update current page according to select page
    paginateEvent(page) {
      this.currentPage = page;
      this.paginateEntries();
    },
    searchEvent() {
      this.currentPage = 1;
      this.paginateEntries();
    },

    ///paginate entries for paginate data
    paginateEntries() {
      //check if searchInput is given
      if (this.searchInput.length >= 1) {
        // this.searchEntries = $array.search(this.searchInput)(this.leaveList);
        this.searchEntries = $array.searchBy(this.searchInput)(
          this.sliderList,
          this.getColumns
        );
        this.paginateData(this.searchEntries);
      }
      //else get value from original Leaves list and then paginate
      else {
        this.paginateData(this.sliderList);
      }
    }, //end method

    //paginate data.......
    paginateData(data) {
      //paginates entries from total list
      this.filteredEntries = $array.paginate(data, this.currentPage, this.currentEntries);
      //get pages according current entries
      this.allPages = $array.pages(data, this.currentEntries);
    }, //end method

    //delete slider method for deleting method
    deleteSlider(slider_id) {
      if (!confirm("Are you Sure You want to delete this ?")) {
        return;
      }
      SliderApi.delete(slider_id)
        .then(({ data: { success } }) => {
          Swal.fire("success", success, "success");
          this.getAllSliders();
        })
        .catch((error) => {
          if (error?.response?.status === 500) {
            Swal.fire("Error", error.response.data.error, "error");
          } else {
            Swal.fire("Error!", "Some Error Occured Please Try Again!");
          }
        });
    }, //end method

    //show edit modal and set slider id for editing
    editSlider(slider_id) {
      console.log(slider_id);
      this.slider_id = slider_id;
      this.showEditModal = true;
    }, //end method
  },
  mounted() {
    this.getAllSliders();
  },
};
</script>
