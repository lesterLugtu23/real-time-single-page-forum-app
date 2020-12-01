<template>
    <div>
        <toolbar></toolbar>
        <router-view></router-view>
        <app-footer></app-footer>
    </div>
</template>

<script>
import Toolbar from './Toolbar'
import Login from './login/Login'
import AppFooter from './AppFooter'

export default {
    components:{Toolbar, Login, AppFooter}
}
</script>

<style>

</style>