<template>
    <div class="container-fluid p-0">
        <lits-form :formData="formData"></lits-form>
    </div>
</template>

<script>
import LitsForm from '../../form/NewForm.vue'
export default {

    props: ['id', 'slots', 'branches'],

    components: {
        LitsForm,
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Classroom Manager",
                formName : "ClassroomForm",
                model : "Classroom",
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
                    { key : 'display', val : 'Display', type : 'text' },
                    { key : 'classroom_name', val : 'Classroom Name', type : 'text' },
                    { key : 'seating_capacity', val : 'Seating', type : 'text' },
                    { key : 'pc_capacity', val : 'PC', type : 'text' },
                    { key : 'slots', val : 'Slots', type : 'text' },
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
                        class : 'col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Branch',
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
                        class : 'col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3',
                        labelClass : '',
                        hint : 'Please Select Display',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Classroom Name',
                        name : 'classroom_name',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Classroom Name',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Classroom Name',
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
                        label : 'Seating Capacity',
                        name : 'seating_capacity',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter Seating Capacity',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Seating Capacity',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'PC Capacity',
                        name : 'pc_capacity',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : [],
                        placeholder : 'Enter PC Capacity',
                        type : 'text',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter PC Capacity',
                        error : '',
                        isError : false,
                        readonly : false,
                    },
                    {
                        label : 'Slots',
                        name : 'slots',
                        value : '',
                        values : [],
                        ObjectValue : {},
                        options : this.slots,
                        placeholder : 'Enter Slots',
                        type : 'checkbox',
                        validation : 'required | string',
                        class : 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3',
                        labelClass : '',
                        hint : 'Please Enter Slots',
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
