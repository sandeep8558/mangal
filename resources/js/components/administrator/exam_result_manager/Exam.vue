<template>
    <div class="container-fluid p-0">
        Hello World
    </div>
</template>

<script>
export default {

    props: ['id'],

    components: {
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Slider Manager",
                formName : "SliderForm",
                model : "Warehouse",
                action : "CRUD",
                method : "",
                custom_query : [],
                with : [],
            },
        }
    },

    methods : {

        change(e){
            /* console.log(e.target.value); */
        },

        /* getBusinessPlan(){
            window.axios.get('/auth/crud/showall?model=BusinessPlan&key=plan_name&val=id').then(res => {
                this.formData.elements[1].options = res.data;
            });
        } */
    },

    created(){
    },

    mounted() {
    },

}
</script>
