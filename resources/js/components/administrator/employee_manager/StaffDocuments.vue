<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Staff Document Manager",
                formName : "StaffDocumentForm",
                model : "StaffDocument",
                action : "CRUD", /* CRUD | EDIT | SEARCH */
                method : "",
                custom_query : [],
                with : [],
                mail : {
                    name : "Sandeep Rathod",
                    to : "sandeep198558@yahoo.com",
                    subject : "Email From Users of Zataks",
                },
                settings : {
                    isTitle : true,
                    isReset : true,
                    isSubmit : true,
                    isDateSearch : false,
                    isExport : true,

                    isForm : true,
                    isSearch : true,
                    isResults : true,
                    isAction : true,
                    isLoadMore : true,
                },
                display : [
                    { key : 'staff_id', val : 'Staff ID', type : 'text' },
                    { key : 'document_title', val : 'Document Title', type : 'text' },
                    { key : 'review', val : 'Review', type : 'text' },
                    { key : 'media', val : 'Document', type : 'image' },

                ],
                elements : [

                    {
                        label : 'Staff ID',
                        name : 'staff_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Staff ID',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Staff ID',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Document Title',
                        name : 'document_title',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Document Title',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Document Title',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Review',
                        name : 'review',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Review',
                        type : 'text',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Review',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Document',
                        name : 'media',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Select Document',
                        type : 'image',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Document is Required',
                        error : '',
                        isError : false,
                        readonly : false,
                    },


                ],
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
        if(this.id == null){
            this.formData.id = 0;
        } else {
            this.formData.id = this.id;
        }
    },

    mounted() {
    },

}
</script>
