<template>
    <div>

    </div>
</template>

<script>
    export default {
        name: "App",
        
        mounted() {
            this.getBasicInfo();
        },
        methods: {
            getBasicInfo() {
                axios.get('/api/home')
                    .then(response => {
                        console.log(response.data);
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
        },
    }
</script>