<template>
  <div>
    <div class="table-responsive">
      <div class="text-center mb-3">
        <button @click="plus()" class="btn btn-primary pl-3 pr-3" type="button">
          +
        </button>
        <button @click="moins()" class="btn btn-danger pl-3 pr-3" type="button">
          -
        </button>
      </div>
      <div v-for="j in prep" :key="j" class="col-12">
        <div class="form-group">
          <label for="name" class="special-label-1">Step-{{ j }}</label>
          <textarea
            :name="'step'+j"
            class="form-control"
            id="message"
            cols="30"
            rows="5"
            placeholder="Message"
          ></textarea>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      prep: 1,
    };
  },
  methods: {
    plus() {
      return this.prep++;
    },
    moins() {
      if (this.prep < 2) {
        this.prep = 1;
        return this.prep;
      }
      return this.prep--;
    },
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
