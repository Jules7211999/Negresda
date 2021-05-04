<template>
   <div class="container-fluid">
      <navbar></navbar>
      <img src="/img/profile-placeholder.jpg" alt="">
      <h4>Name</h4>
      <h2>Jules Leomel P. Salvador</h2>
      <h4>Age</h4>
      <h2>None</h2>
      <h4>Address</h4>
      <h2>None</h2>
      <h4>City</h4>
      <h2>None</h2>
      <h4>Phone Number</h4>
      <h2>None</h2>
      <a href=""><button type="button" class="btn btn-outline-dark">Edit Profile Details</button></a>     
   </div>
</template>
       
<script>
import navbar from './FNavbar.vue'
    export default{
       components:{navbar}
    }
</script>

<style scoped>
h2,h4{
   margin-bottom: 1rem;
}
h2{
   font-weight: bold;
}
div{
   text-align: center;
}
 img{
    width: 40%;
    border-radius: 50%;
    margin-bottom: 3rem;
    margin-top: 4rem;
  
 }
 button{
    margin-top: 2rem;
    width: 50%;
    height: 4rem;
    border-radius: 12rem;
    font-weight: bold;
 }
 h4{
    font-size: 1rem;
 }
 h2{
    font-size: 1.5rem;
 }
</style>
       
   
