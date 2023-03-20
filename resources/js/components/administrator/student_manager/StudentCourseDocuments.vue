<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData" @OnChange="change($event)"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'documents'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "StudentCourseDocument Manager",
                formName : "StudentCourseDocumentForm",
                model : "StudentCourseDocument",
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
                    { key : 'student_course_id', val : 'Student Course ID', type : 'text' },
                    { key : 'all_document_id', val : 'Document ID', type : 'text' },
                    { key : 'media', val : 'Document', type : 'image' },
                ],
                elements : [
                    {
                        label : 'Student Course ID',
                        name : 'student_course_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Student Course ID',
                        type : 'text',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Student Course ID',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Document ID',
                        name : 'all_document_id',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.documents,
                        placeholder : 'Please Select Document ID',
                        type : 'select',
                        validation : 'required',
                        class : 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3',
                        labelClass : '',
                        hint : 'Please Select Document ID',
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
            if(e.target.name == "category_id"){
                this.getCourses();
            }
            if(e.target.name == "course_id"){
                this.getAmount();
            }
            if(e.target.name == "discount" || e.target.name == "actual_fees_amount"){
                let bal = this.formData.elements[3].value - this.formData.elements[4].value;
                this.formData.elements[5].value = bal;
            }
        },

        getCourses(){
            window.axios.post('/crud/showall?model=Course&key=course&val=id&wherekey=category_id&whereval=' + this.formData.elements[0].value).then(res => {
                this.formData.elements[1].options = res.data;
            });
        },

        getAmount(){
            window.axios.post('/administrator/student_manager/get_fee', {course_id:this.formData.elements[1].value}).then(res => {
                this.formData.elements[3].value = res.data.fee.fees_amount;
                this.formData.elements[4].value = 0;
                this.formData.elements[5].value = this.formData.elements[3].value - this.formData.elements[4].value;
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
