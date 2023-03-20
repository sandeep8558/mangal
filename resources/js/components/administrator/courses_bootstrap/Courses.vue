<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'categories'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Course Manager",
                formName : "CourseForm",
                model : "Course",
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
                    { key : 'category_id', val : 'Category', type : 'text' },
                    { key : 'course', val : 'Course', type : 'text' },
                    { key : 'certification', val : 'Certification', type : 'text' },
                    { key : 'durationtype', val : 'Duration Type', type : 'text' },
                    { key : 'duration', val : 'Duration', type : 'text' },
                    { key : 'order', val : 'Order', type : 'text' },
                    { key : 'display', val : 'Display', type : 'text' },
                    { key : 'media', val : 'Media', type : 'image' },
                ],
                elements : [

                    {
                        label : 'Category',
                        name : 'category_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.categories,
                        placeholder : 'Please Select Category',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Category',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Display',
                        name : 'display',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Display', value : '' },
                            { key : 'Show', value : 'Show' },
                            { key : 'Hide', value : 'Hide' },
                        ],
                        placeholder : 'Please Select Display',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Display',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Certification',
                        name : 'certification',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Certification', value : '' },
                            { key : 'Own', value : 'Own' },
                            { key : 'Outside', value : 'Outside' },
                        ],
                        placeholder : 'Please Select Certification',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Certification',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Duration Type',
                        name : 'durationtype',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Duration Type', value : '' },
                            { key : 'Hourly', value : 'Hourly' },
                            { key : 'Daily', value : 'Daily' },
                            { key : 'Weekly', value : 'Weekly' },
                            { key : 'Monthly', value : 'Monthly' },
                            { key : 'Quarterly', value : 'Quarterly' },
                            { key : 'Biannualy', value : 'Biannualy' },
                            { key : 'Annualy', value : 'Annualy' },
                        ],
                        placeholder : 'Please Select Duration Type',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Duration Type',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Duration',
                        name : 'duration',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Duration',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Duration',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Order',
                        name : 'order',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Order',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Order',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Course Name',
                        name : 'course',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Course Name',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Course Name',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Description',
                        name : 'description',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Description',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Description',
                        error : '',
                        isError : false,
                        readonly : false,
                    },

                    {
                        label : 'Media',
                        name : 'media',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Select Media',
                        type : 'image',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Media is Required',
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
