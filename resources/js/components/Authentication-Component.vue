<template>
<div class="main-wrapper">
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

<style>
*{
    margin: 0;
    padding:0;
    font-family: "roboto",sans-serif;
    overflow:hidden;
}
.main-wrapper{
    width: 100%;
    display: flex;
    justify-content: center;
    background-image: linear-gradient(to right, rgba(255 255 255 / 0.3) 50%, rgba(255 255 255 / 0.3) 50%),url('/img/bg.jpg');
    background-size: cover;
}
.wrapper h1{
   padding-top: 50%;
    font-size: 2rem;
}
.wrapper label{
    font-weight: bold;
    margin-right: 5rem;
}
.wrapper{
display: flex;
flex-wrap: wrap;
width: 70%;
height: 100vh;

}
.wrapper img{
    width: 40%;
}
.logo-wrapper{
    text-align: center;
    width:100%;
}
.form-wrapper{
  
    width: 100%;
}
.wrapper input[type="text"]{
    width: 100%;
    font-size: 1rem;
    margin-bottom: 1rem;
    border: none;
    border-bottom:1px solid #000 ;
    background-color: transparent;
    color: #fff;
    margin-right: 1px;
    margin-top: 0.5rem;
}
.wrapper form{
    padding-left: 1rem;
}
.wrapper button {
    width: 12rem;
    font-weight: bold;
    height: 4rem;
    font-size: 1.5rem;
    background-color: transparent;
    border: none;
    border: 1px solid #000;
    border-radius: 12rem;
    margin-top: 2rem;
}
.submitbutton{
    text-align: center;
}


</style>

