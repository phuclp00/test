<template>
    <alert
      v-model="showAlert"
      v-on="showAlert=false"
      placement="top-right"
      duration="3000"
      type="success"
      width="400px"
      dismissable
    >
      <span class="icon-ok-circled alert-icon-float-left"></span>
      <strong>Well Done!</strong>
      <p>You successfully read this important alert message.</p>
    </alert>
</template>

<script>
import { alert } from "vue-strap";
Vue.component("alert", alert);
export default {
  component: {
    alert,
  },
  props: [],
  data() {
    return {
      alert: true,
    };
  },

  mounted() {},
};
</script>

<style scoped>
</style>