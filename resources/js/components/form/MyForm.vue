<template>
    <div>
        <form-leena-header v-if="ShowHeader" :HeaderTitle="HeaderTitle" :HeaderBtnText="HeaderBtnText" @OnShowHide="showHideForm($event)"></form-leena-header>
        <form-leena-form v-if="ShowForm" :myForm="myForm"></form-leena-form>
        <form-leena-grid v-if="ShowGrid" :GridData="GridData"></form-leena-grid>
    </div>
</template>

<script>

import FormLeenaGrid from "./src/Grid.vue"
import FormLeenaForm from "./src/Form.vue"
import FormLeenaHeader from "./src/Header.vue"

export default {
    
    components: {
        FormLeenaGrid,
        FormLeenaForm,
        FormLeenaHeader,
    },


    /* Properties */
    props: ['myFormData', 'myForm'],


    /* Data */
    data(){
        return {

            /* Show Hide Elements */
            ShowHeader: true,
            ShowForm: false,
            ShowGrid:true,

            /* Header Configuration */
            HeaderTitle: "Header Title",
            HeaderBtnText: "Add",

            /* Grid Configuration */
            GridData: {
                Model: null,
                Rows:10,
                Buttons: [],
                Grid: [],
                With: [],
                Where: [],
                WhereIn: [],
            },
        };
    },


    /* All methods goes here */
    methods: {
        showHideForm(e){
            this.ShowForm = e;
        }
    },


    /* Lifecycle Hooks */

    created(){

        if('ShowHeader' in this.myFormData){
            this.ShowHeader = this.myFormData.ShowHeader;
        }

        if('ShowForm' in this.myFormData){
            this.ShowForm = this.myFormData.ShowForm;
        }

        if('ShowGrid' in this.myFormData){
            this.ShowGrid = this.myFormData.ShowGrid;
        }

        if('HeaderTitle' in this.myFormData){
            this.HeaderTitle = this.myFormData.HeaderTitle;
        }

        if('HeaderBtnText' in this.myFormData){
            this.HeaderBtnText = this.myFormData.HeaderBtnText;
        }

        /* Grid Data Configuration */

        if('Model' in this.myFormData){
            this.GridData.Model = this.myFormData.Model;
        }

        if('Rows' in this.myFormData){
            this.GridData.Rows = this.myFormData.Rows;
        }

        if('Buttons' in this.myFormData){
            this.GridData.Buttons = this.myFormData.Buttons;
        }

        if('Grid' in this.myFormData){
            this.GridData.Grid = this.myFormData.Grid;
        }

        if('With' in this.myFormData){
            this.GridData.With = this.myFormData.With;
        }

        if('Where' in this.myFormData){
            this.GridData.Where = this.myFormData.Where;
        }

        if('WhereIn' in this.myFormData){
            this.GridData.WhereIn = this.myFormData.WhereIn;
        }

        
        
    },

}
</script>

<style>
</style>