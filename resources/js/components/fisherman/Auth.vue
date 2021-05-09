<template>
<div class="container-fluid main-wrapper">
    <div class="wrapper">
        <div class="logo-wrapper">
            <h1>Negresda</h1>
            <img :src="img_src" alt="Negresda">
        </div>
        <div class="form-wrapper">
            <slot></slot>
        </div>
    </div>
</div>

  
</template>

<script>
export default {
   data() {
       return{
           img_src: '/img/NegresdaLogo.png',
   }
}
       
}
</script>

<style scoped>
@media screen and (max-width: 700px) {
        *{
        margin: 0;
        padding:0;
        font-family: "roboto",sans-serif;
        
    }
    .main-wrapper{
        padding-bottom: 3rem;
        display: flex;
        justify-content: center;
        background-image: linear-gradient(to right, rgba(255 255 255 / 0.3) 50%, rgba(255 255 255 / 0.3) 50%),url('/img/bg.jpg');
        background-size: cover;
    }
    h1{
    padding-top: 50%;
        font-size: 2rem;
    }
    label{
        font-weight: bold;
       margin-top: 1rem;
    }
    button{

    width: 50%;       
    border-radius: 2rem;
    width: 16rem;
    margin-top: 2rem;
    height: 3.5rem;
    font-size: 1.5rem;
    }
    .wrapper{
    display: flex;
    flex-wrap: wrap;
    width: 70%;
    height: 100vh;

    }
     img{
        width: 40%;
    }
    .logo-wrapper{
        text-align: center;
        width:100%;
    }
    .form-wrapper{
    
        width: 100%;
    }
    input[type="text"]{
        width: 100%;
        font-size: 1rem;
        border: none;
        border-bottom:1px solid #000 ;
        background-color: transparent;
        color: #fff;
        margin-right: 1px;
        margin-bottom: 1rem;
     
    }
 
 
    .submitbutton{
        text-align: center;
    }
}

</style>

