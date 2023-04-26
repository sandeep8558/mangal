<template>
    <div class="container-fluid p-3 border-bottom">
        <div class="row">
            <div class="col">
                <h2 class="p-0 m-0">{{ title }}</h2>
            </div>
            <div class="col-auto">
                <button @click="showHideForm()" class="btn" :class="[(showForm ? 'btn-outline-danger' : 'btn-outline-dark')]">{{ showForm ? 'Close' : btnText }}</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
    components: {},


    /* Data */
    data(){
        return {
            title: null,
            btnText: null,
            showForm: false,
        }
    },


    /* Properties */
    props: {
        HeaderTitle: String,
        HeaderBtnText: String,
    },


    /* All methods goes here */
    methods: {

        showHideForm(){
            this.showForm = !this.showForm;
            this.$emit('OnShowHide', this.showForm);
        },

    },


    /* Lifecycle Hooks */

    created() {
        this.title = this.HeaderTitle;
        this.btnText = this.HeaderBtnText;
    },

}
</script>

<style>
</style>