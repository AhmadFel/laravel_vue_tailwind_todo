<template>
<div>
    <h3>
        projects
     </h3>     
<ul>
    <li v-for="project in projects" :key="project.id">
        {{ project.title }}
    </li>
</ul>
</div>
</template>
<script>
export default{
        data(){
            return{
                projects: []
            }

        },
        beforCreate(){
            axios.get('/api/project'),then((response)=>{
                this.projects=response.data;
            })
        }
}
</script>
