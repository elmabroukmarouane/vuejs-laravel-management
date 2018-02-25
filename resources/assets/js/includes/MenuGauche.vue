<template>
    <!-- START LEFT SIDEBAR NAV-->
    <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                            </li>
                            <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                            </li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
            <router-link tag="li" to="/" class="bold">
                <a :class="[$route.name == 'Home' ? 'active':'']"><i class="mdi-action-dashboard"></i> Home</a>
            </router-link>
            <router-link tag="li" to="/people-management" class="bold">
                <a :class="[$route.name == 'People Management' ? 'active':'']"><i class="mdi-action-dashboard"></i> People Management</a>
            </router-link>
        </ul>
    </aside>
    <!-- END LEFT SIDEBAR NAV-->
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>

