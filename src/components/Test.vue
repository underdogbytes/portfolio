<template>
    <div>
        <div>Checked names: {{ checkedNames }}</div>

        <input type="checkbox" id="jack" value="Jack" v-model.lazy="checkedNames">
        <label for="jack">Jack</label>

        <input type="checkbox" id="john" value="John" v-model.lazy="checkedNames">
        <label for="john">John</label>

        <input type="checkbox" id="mike" value="Mike" v-model.lazy="checkedNames">
        <label for="mike">Mike</label>
    </div>
</template>
<script>
export default {
  data(){
    return {
        checkedNames: []
    }
  }
}
</script>