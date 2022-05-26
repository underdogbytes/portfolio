<template>
  <div class="about">
    <h1>Hello!</h1>
    <img src="@/assets/icons/popcorn.png" alt="" class="popcorn-image">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper urna felis, at commodo ipsum bibendum vel. Nulla nec congue sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut varius ultricies dui, quis varius quam. Nunc sit amet justo eget orci pretium commodo et vel ipsum. Sed in odio massa. Pellentesque viverra magna eu ornare tristique. Curabitur tincidunt, lacus et posuere cursus, tellus magna condimentum nisl, vitae laoreet augue odio sed odio. Sed ultrices lacus a sollicitudin fringilla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    <p>Proin lobortis, orci et bibendum rhoncus, dolor risus bibendum eros, sed vehicula nisl felis et lacus. Aliquam mauris lectus, sagittis nec sapien in, rhoncus pharetra elit. Phasellus est arcu, imperdiet vitae pellentesque vitae, varius in velit. Suspendisse consequat augue sed dignissim suscipit. Ut ut tincidunt ipsum. Quisque pulvinar felis eu nibh facilisis mollis. Nullam semper, turpis at placerat efficitur, quam risus pulvinar orci, et congue lacus arcu at turpis. Suspendisse quam ipsum, dapibus nec sodales at, varius eu sapien. In tincidunt pretium commodo.</p>
    <p>Suspendisse potenti. Praesent ac tincidunt neque, ac maximus orci. Pellentesque eu felis eros. Aenean porta maximus erat dictum vestibulum. Nulla nibh massa, suscipit aliquet blandit at, interdum ut sem. Vivamus semper nec felis vitae vehicula. Cras lacinia purus sed viverra fringilla. Cras imperdiet vulputate molestie. Curabitur pretium scelerisque urna, eu dignissim mauris vulputate eget. Pellentesque congue dui turpis, ut mollis nisl malesuada et. Nullam sagittis enim ullamcorper luctus ullamcorper. Praesent rhoncus nisi eget commodo elementum. Pellentesque vel feugiat ipsum, in laoreet nibh. Cras et metus velit. Ut accumsan ipsum vulputate ante rhoncus bibendum.</p>
    
    <NewServicePrice />
  </div>
</template>

<script>
import NewServicePrice from '../components/NewServicePrice.vue';

export default {
  components: { NewServicePrice }
}
</script>

<style>
.popcorn-image{
  width: 250px;
  float: left;
  shape-outside: url(../assets/icons/popcorn.png);
  shape-margin: 1rem;
}
</style>
