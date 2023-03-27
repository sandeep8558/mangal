<template>
    <div class="container-fluid p-0" v-if="batch_session.id != null">
        <h4 class="mb-3 mt-4">Students & Attendance</h4>
        <ul class="list-group">
            <li class="list-group-item" v-for="item in batch.open_batch.batch_students" :key="item.id">
                {{item.student_data}} <!-- {{item.student_course_id}} {{ batch_session.id }} -->
                <span class="float-right">
                    <div class="input-group">
                        <button class="btn btn-sm" :class="[ (getAttendance(item.student_course_id) == 'Present' ? 'btn-success' : 'btn-outline-success disabled')]" @click="changeAttendance(item.student_course_id, 'Absent')" type="button">Present</button>
                        <button class="btn btn-sm" :class="[ (getAttendance(item.student_course_id) == 'Absent' ? 'btn-danger' : 'btn-outline-danger disabled')]" @click="changeAttendance(item.student_course_id, 'Present')" type="button">Absent</button>
                    </div>
                </span>
            </li>
        </ul>

        <h4 class="mb-3 mt-4">Notes</h4>
        <div class="input-group mb-3">
            <input v-model="batch_session.topic_covered" type="text" name="dt" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" @input="saveNotes()">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2" @click="saveNotes()">Save</button>
        </div>

        <h4 class="mb-3 mt-4">Status for the day</h4>
        <div class="input-group">
            <select v-model="batch_session.status" @change="saveStatus()" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option selected>Choose status for the day</option>
                <option value="Pending">Pending</option>
                <option value="Done">Done</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Postponed">Postponed</option>
                <option value="Weekoff">Weekoff</option>
                <option value="Holiday">Holiday</option>
            </select>
            <button class="btn btn-outline-secondary" type="button" @click="saveStatus()">Save</button>
        </div>

    </div>
</template>

<script>
import { debounce } from 'vue-debounce';

export default {

    props: ['batch', 'today', 'slots'],

    components: {
    },

    data: function (){
        return {
            formData : {
                id : 0,
                title : "Slider Manager",
            },
            batch_session : {
                id: null,
                staff_id: null,
                batch_id: null,
                classroom_id: null,
                slots: null,
                dt: null,
                topic_covered: null,
                description: null,
                status: "Pending",
                session_attendances: [],
            },
        }
    },

    methods : {

        startClass(){
            alert("PTL");
        },

        change(e){
            /* console.log(e.target.value); */
        },

        /* getBusinessPlan(){
            window.axios.get('/auth/crud/showall?model=BusinessPlan&key=plan_name&val=id').then(res => {
                this.formData.elements[1].options = res.data;
            });
        } */

        checkBatchSession(){
            window.axios.post('/mystaff/check_batch_session', this.batch_session).then(res => {
                this.batch_session.id = res.data.id;
                this.batch_session.session_attendances = res.data.session_attendances;
                this.batch_session.topic_covered = res.data.topic_covered;
                this.batch_session.status = res.data.status;
                //console.log(this.batch_session.session_attendances)
            });
        },

        getAttendance(student_course_id){
            let a = null;
            this.batch_session.session_attendances.forEach(att => {
                if(student_course_id == att.student_course_id) {
                    a = att.status;
                }
            });
            return a;
        },

        getAttendanceID(student_course_id){
            let a = null;
            this.batch_session.session_attendances.forEach(att => {
                if(student_course_id == att.student_course_id) {
                    a = att.id;
                }
            });
            return a;
        },

        changeAttendance(student_course_id, status){
            let id = this.getAttendanceID(student_course_id);
            window.axios.post('/mystaff/update_attendance', {id: id, status: status}).then(res=> {
                this.checkBatchSession();
            });
        },

        saveNotes: debounce(function(){
            this.update('BatchSession', 'topic_covered', this.batch_session.topic_covered, this.batch_session.id);
        }, 800),

        saveStatus(){
            this.update('BatchSession', 'status', this.batch_session.status, this.batch_session.id);
        },

        update(model, column, value, id){
            window.axios.post('/mystaff/table_update', {model: model, column:column, value: value, id: id}).then(res => {
                console.log(res);
            });
        },
    },

    created(){
        this.batch_session.dt = this.today;
        this.batch_session.batch_id = this.batch.batch_id;
        this.batch_session.staff_id = this.batch.staff_id;
        this.batch_session.classroom_id = this.batch.open_batch.classroom_id;
        this.batch_session.slots = this.slots;
        this.checkBatchSession();
    },

    mounted() {
    },

}
</script>
