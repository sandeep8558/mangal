<template>
<div>
    <my-form :myFormData="myFormData" :myForm="myForm"></my-form>
</div>
</template>

<script>
import MyForm from '../form/MyForm.vue';
export default {
    
    components: {
        MyForm,
    },


    /* Data */
    data(){
        return {
            
            myFormData : {
                /* ShowForm: false, */
                HeaderTitle: "Blog Manager",
                Model: 'Blog',
                Rows: 10,
                Buttons: [
                    { text:'Bank', link:'/administrator/{id}/product/{title}', class:'btn-outline-dark' },
                ],
                Grid: [
                    {key: 'display', text: 'Display', type: 'text'},
                    {key: 'user.name', text: 'User', type: 'text'},
                    {key: 'title', text: 'Title', type: 'text'},
                    {key: 'media', text: 'Media', type: 'image'},
                ],
                With: ['user'],
                Where: [],
                WhereIn: [],
            },

            myForm: [
                {
                    label: 'Display',
                    name: 'display',
                    options : [
                        { value: "Show", text: "Show" },
                        { value: "Hide", text: "Hide" },
                    ],
                    placeholder: '',
                    type: 'select',
                    validation : 'required | string',
                    hint : 'Please Enter Display',
                    isError : false,
                    readonly: false,
                    class : 'col-12',
                    value : '',
                },
                {
                    label: 'Course Category',
                    name: 'category_id',
                    options : [],
                    placeholder: '',
                    type: 'select',
                    validation : 'required | string',
                    hint : 'Please Enter Course Category',
                    isError : false,
                    readonly: false,
                    class : 'col-12',
                    value : '',
                    data: {
                        model: 'CourseCategory',
                        value: 'id',
                        text: 'category',
                        link: null,
                        link_value: null,
                        load: 'course_id',
                    },
                },
                {
                    label: 'Course',
                    name: 'course_id',
                    options : [],
                    placeholder: '',
                    type: 'select',
                    validation : 'required | string',
                    hint : 'Please Enter Course',
                    isError : false,
                    readonly: false,
                    class : 'col-12',
                    value : '',
                    values : [],
                    data: {
                        model: 'Course',
                        value: 'id',
                        text: 'course',
                        link: 'category_id',
                        link_value: null,
                        load: null,
                    },
                },
                {
                    label: 'Title',
                    name: 'title',
                    placeholder: '',
                    type: 'text',
                    validation : 'required | string',
                    hint : 'Please Enter Title',
                    isError : false,
                    readonly: false,
                    class : 'col-12',
                    value : '',
                },
                {
                    label: 'Description',
                    name: 'description',
                    placeholder: '',
                    type: 'textarea',
                    validation : 'required | string',
                    hint : 'Please Enter Description',
                    isError : false,
                    readonly: false,
                    class : 'col-12',
                    value : '',
                },
                {
                    label: 'Media',
                    name: 'media',
                    placeholder: '',
                    type: 'file',
                    validation : 'file | mimes:jpg,png | max:512',
                    hint : 'Please Enter Media',
                    isError : false,
                    readonly: false,
                    class : 'col-12',
                },
            ],
        };
    },


    /* Properties */
    props: {},


    /* All methods goes here */
    methods: {
        change(e){
            //console.log(e);
        }
    },


    /* Lifecycle Hooks */

    created() {
        this.$root.$on("OnChange", (e)=>{
            this.change(e);
        });
    },

}
</script>

<style>
</style>