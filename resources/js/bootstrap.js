/* import Vue from "vue";
import { VLazyImagePlugin } from "v-lazy-image";

Vue.use(VLazyImagePlugin);
Vue.config.productionTip = false; */
window.Vue = require("vue");
Vue.use(require("vue-resource"));
Vue.component(
  "spots",
  require("./components/Spots.vue").default
);
Vue.component(
  "gallery",
  require("./components/Gallery.vue").default
);
Vue.component("InfiniteLoading", require("vue-infinite-loading"));
const app = new Vue({
  el: "#app",
});
