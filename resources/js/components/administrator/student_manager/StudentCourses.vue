<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData" @OnChange="change($event)"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'categories', 'branches'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Student Course Manager",
                formName : "StudentCourseForm",
                model : "StudentCourse",
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
                    { key : 'student_id', val : 'Student ID', type : 'text' },
                    { key : 'category_id', val : 'Category ID', type : 'text' },
                    { key : 'course_id', val : 'Course ID', type : 'text' },
                    { key : 'fees_amount', val : 'Fee Amount', type : 'text' },
                    { key : 'admission_at', val : 'Admission Date', type : 'text' },
                    { key : 'effective_from', val : 'Start Date', type : 'text' },
                ],
                elements : [

                    {
                        label : 'Branch',
                        name : 'branch_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.branches,
                        placeholder : 'Please Select Branch',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Branch',
                        error : '',
                        isError : false,
                        readonly : false,
                    },

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
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Course',
                        error : '',
                        isError : false,
                        readonly : false,
                    },

                    {
                        label : 'Student ID',
                        name : 'student_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Student ID',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Student ID',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Actual Fee Amount',
                        name : 'actual_fees_amount',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Actual Fee Amount',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Actual Fee Amount',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Discount',
                        name : 'discount',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Discount',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Discount',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Fee Amount',
                        name : 'fees_amount',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Fee Amount',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Fee Amount',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Admission Date',
                        name : 'admission_at',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Admission Date',
                        type : 'date',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Admission Date',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Effective From',
                        name : 'effective_from',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Effective From',
                        type : 'date',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Effective From',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Effective Till',
                        name : 'effective_till',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Effective Till',
                        type : 'date',
                        validation : '',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Effective Till',
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
            if(e.target.name == "course_id"){
                this.getAmount();
            }
            if(e.target.name == "discount" || e.target.name == "actual_fees_amount"){
                let bal = this.formData.elements[4].value - this.formData.elements[5].value;
                this.formData.elements[6].value = bal;
            }
        },

        getCourses(){
            window.axios.post('/crud/showall?model=Course&key=course&val=id&wherekey=category_id&whereval=' + this.formData.elements[1].value).then(res => {
                this.formData.elements[2].options = res.data;
            });
        },

        getAmount(){
            window.axios.post('/administrator/student_manager/get_fee', {course_id:this.formData.elements[2].value}).then(res => {
                this.formData.elements[4].value = res.data.fee.fees_amount;
                this.formData.elements[5].value = 0;
                this.formData.elements[6].value = this.formData.elements[4].value - this.formData.elements[5].value;
            });
            
        }
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
