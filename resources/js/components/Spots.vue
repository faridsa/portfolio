<template>
<main class="pt-8 pb-4">
    <section class="container mx-auto gallery grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
        <figure class="p-6 relative mx-auto mb-4" v-for="item in list" :key="item.id">
            <a v-bind:href="'/images/spots/'+item.image" data-caption="{{ item.issue }}' | ' item.name ' | '{{ item.legend }}">
                <img class="w-full" v-bind:src="'/images/spots/'+item.image" alt="' item.legend '">
            </a>
        </figure>
        <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading>
    </section>
</main>
</template>

<script>
export default {
    data() {
        return {
            list: [],
            page: 1,
        };
    },
    methods: {
        infiniteHandler($state) {
            this.$http.get('/fadispots?page=' + this.page)
                .then(response => {
                    return response.json();

                }).then(data => {
                    $.each(data.data, (key, value) => {
                        this.list.push(value);
                    });
                    $state.loaded();
                });

            this.page = this.page + 1;
        },
    },
    methods: {
    infiniteHandler($state) {
      axios.get('/fadispots?page=' + this.page)
      .then(({ data }) => {
        if (data.next_page_url.length) {
          this.page += 1;
          this.list.push(...data.data);
          $state.loaded();
        } else {
          $state.complete();
        }
      });
    },
  },
}
</script>
