<template>
    <section>
        <featurePhoto></featurePhoto>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <homeShortCuts></homeShortCuts>
                                    <homeRecentActivities></homeRecentActivities>
                                    <homeWhoIsFollowing></homeWhoIsFollowing>
                                </aside>
                            </div>
                            <!-- sidebar -->
                            <div class="col-lg-6"></div>
                            <!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <homeYourPage></homeYourPage>
                                    <homeBanner></homeBanner>
                                    <homeFriendsList></homeFriendsList>
                                </aside>
                            </div>
                            <!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import homeYourPage from "../layouts/home/HomeYourPage";
import homeBanner from "../layouts/home/HomeBanner";
import homeFriendsList from "../layouts/home/HomeFriendsList";
import homeShortCuts from "../layouts/home/HomeShortCut";
import homeRecentActivities from "../layouts/home/HomeRecentActivities";
import homeWhoIsFollowing from "../layouts/home/HomeWhoIsFollowing";
import featurePhoto from "../layouts/inbox/FeaturePhoto";

export default {
    components: {
        homeYourPage,
        homeBanner,
        homeFriendsList,
        homeShortCuts,
        homeRecentActivities,
        homeWhoIsFollowing,
        featurePhoto,
    },
};
</script>

