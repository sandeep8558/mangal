<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData" @OnChange="change($event)"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'categories', 'courses'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Subject Manager",
                formName : "SubjectForm",
                model : "Subject",
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
                    { key : 'category_id', val : 'Category ID', type : 'text' },
                    { key : 'course_id', val : 'Course ID', type : 'text' },
                    { key : 'status', val : 'status', type : 'text' },
                    { key : 'subject', val : 'Subject', type : 'text' },

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
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Category',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Course',
                        name : 'course_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Course', value : '' },
                        ],
                        placeholder : 'Please Select Course',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Course',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Status',
                        name : 'status',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [
                            { key : 'Select Status', value : '' },
                            { key : 'Active', value : 'Active' },
                            { key : 'Deprecated', value : 'Deprecated' },
                        ],
                        placeholder : 'Please Select Status',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Status',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Subject',
                        name : 'subject',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Subject',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Subject',
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
                        class : 'col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Description',
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
            if(e.target.name == "category_id"){
                this.getCourses();
            }
        },

        getCourses(){
            window.axios.post('/crud/showall?model=Course&key=course&val=id&wherekey=category_id&whereval=' + this.formData.elements[0].value).then(res => {
                this.formData.elements[1].options = res.data;
            });
        }

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
