<template>
  <li class="nav-item nav-icon" >
    <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
      <i class="ri-notification-2-line"></i>
      <span class="bg-primary dots"></span>
    </a>
    <div class="iq-sub-dropdown">
      <div class="iq-card shadow-none m-0">
        <div class="iq-card-body p-0">
          <div class="bg-primary p-3">
            <h5 class="mb-0 text-white">
              All Notifications
              <small class="badge badge-light float-right pt-1"
                ><span>10</span></small
              >
            </h5>
          </div>
          <a :href="notification.url" class="iq-sub-card" v-for="notification in notifications">
            <div class="media align-items-center">
              <div class="">
                <img
                  class="avatar-40 rounded"
                  :src="'../images/user/01.jpg'"
                  alt=""
                />
              </div>
              <div class="media-body ml-3">
                <h6 id="notification" class="mb-0">{{notification.description}}</h6>
                <small class="float-right font-size-12"
                  ><timeago :datetime="notification.time" :auto-update=60></timeago
                ></small>
                <p class="mb-0">95 MB</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </li>
</template>

<script>
import VueTimeago from "vue-timeago";


Vue.use(VueTimeago, {
  name: "Timeago", // Component name, `Timeago` by default
  locale: "en", // Default locale
  // We use `date-fns` under the hood
  // So you can use all locales from it
  locales: {
    ja: require("date-fns/locale/ja"),
  },
});
export default {
  props:[],
  data() {
    return {
      notifications: [],
    };
  },
  mounted() {
    Echo.channel('user-registed')
    .listen('UserRegisted',(user) =>{
      this.notifications.unshift({
        description:'User Name :' + user.user_name+'has been created !',
        url :'/admin/dashboard',
        time: new Date()
      })
    })    
  },
};
</script>

<style>
</style>