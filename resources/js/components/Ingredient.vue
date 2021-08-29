<template>
  <div>
    <div class="text-center mb-3">
      <button @click="plus()" class="btn btn-primary pl-3 pr-3" type="button">
        +
      </button>
      <button @click="moins()" class="btn btn-danger pl-3 pr-3" type="button">
        -
      </button>
    </div>
    <div v-for="i in initial" :key="i" class="row recette">
      <div class="receipe col-lg-5 col-md-5 col-xs-12">
        <div class="form-group">
          <label for="name" class="special-label-1 form-row-inner"
            >Ingredient {{ i }}</label
          >
          <input :name="'ingredient' + i " type="text" class="form-control" id="name" placeholder="" />
        </div>
      </div>
      <div class="receipe col-lg-3 col-md-3 col-xs-12">
        <div class="form-group">
          <label for="name" class="special-label-1 form-row-inner"
            >quantite {{ i }}</label
          >
          <input :name="'quantite' + i " type="text" class="form-control" id="name" placeholder="" />
        </div>
      </div>
      <div class="receipe col-lg-4 col-md-4 col-xs-12">
        <div class="form-group">
          <label for="'unite'" class="special-label-1 form-row-inner"
            >unite {{ i }}</label
          >
          <select :name="'unite' + i" id="unite" class="form-control">
            <option value="litre">litre</option>
            <option value="gramme">gramme</option>
            <option value="piece">piece</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      initial: 1,
    };
  },
  methods: {
    plus() {
      return this.initial++
    },
    moins() {
          if (this.initial < 2 ) {
                this.initial = 1
                return this.initial
          }
      return this.initial--
    },
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
