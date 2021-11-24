<template>
  <card
    class="flex flex-col items-center justify-center"
    style="background-color: #393862; height: auto !important;
    min-height: 150px;"
  >
    <div class="px-3 py-6">
      <h1 class="text-center text-3xl text-white font-light">{{card.name}}</h1>
      <vue-funnel-graph
        :height="100"
        :width="800"
        :labels="card.labels"
        :values="card.funnelData"
        :sub-labels="card.subLables"
        :animated="true"
        :display-percentage="true"
      ></vue-funnel-graph>
    </div>
  </card>
</template>

<script>
import { VueFunnelGraph } from "vue-funnel-graph-js";

export default {
  props: [
    "card",

    // The following props are only available on resource detail cards...
    // 'resource',
    // 'resourceId',
    // 'resourceName',
  ],
  components: { VueFunnelGraph },
  mounted() {
    //
  },
};
</script>
